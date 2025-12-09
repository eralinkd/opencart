<?php
/**
 * Script to add test custom fields to products
 * Adds: brand: RadioMaster, type: Test, capacity: 3999mAh
 *
 * Usage: php install/add_test_custom_fields.php
 */

require_once __DIR__ . '/../config.php';

// Connect to database
try {
	$db = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
	
	if ($db->connect_error) {
		throw new Exception("Connection failed: " . $db->connect_error);
	}
	
	$db->set_charset("utf8mb4");
	
	echo "Adding test custom fields to products...\n";
	
	// Check if table exists
	$check_table = $db->query("
		SELECT COUNT(*) as count
		FROM information_schema.TABLES 
		WHERE TABLE_SCHEMA = '" . $db->real_escape_string(DB_DATABASE) . "' 
		AND TABLE_NAME = '" . DB_PREFIX . "product_custom_field" . "'
	");
	
	if ($check_table && $row = $check_table->fetch_assoc()) {
		if ((int)$row['count'] == 0) {
			echo "Table '" . DB_PREFIX . "product_custom_field' does not exist. Please run create_product_custom_fields_table.php first.\n";
			$db->close();
			exit(1);
		}
	}
	
	// Get all products
	$products_query = $db->query("
		SELECT product_id 
		FROM `" . DB_PREFIX . "product` 
		WHERE status = 1
		ORDER BY product_id ASC
	");
	
	if (!$products_query || $products_query->num_rows == 0) {
		echo "No products found. Please create products first.\n";
		$db->close();
		exit(1);
	}
	
	// Test custom fields to add
	$test_fields = [
		['field_key' => 'brand', 'field_value' => 'RadioMaster', 'sort_order' => 0],
		['field_key' => 'type', 'field_value' => 'Test', 'sort_order' => 1],
		['field_key' => 'capacity', 'field_value' => '3999mAh', 'sort_order' => 2]
	];
	
	$insert_field = $db->prepare("
		INSERT INTO `" . DB_PREFIX . "product_custom_field`
		(`product_id`, `field_key`, `field_value`, `sort_order`)
		VALUES (?, ?, ?, ?)
		ON DUPLICATE KEY UPDATE 
			`field_value` = VALUES(`field_value`),
			`sort_order` = VALUES(`sort_order`)
	");
	
	// Add unique index check (if not exists, we'll handle duplicates)
	$added_count = 0;
	$product_count = 0;
	
	while ($product = $products_query->fetch_assoc()) {
		$product_id = (int)$product['product_id'];
		$product_count++;
		
		// Check if fields already exist for this product
		$existing_check = $db->prepare("
			SELECT COUNT(*) as count
			FROM `" . DB_PREFIX . "product_custom_field`
			WHERE product_id = ? AND field_key = ?
		");
		
		foreach ($test_fields as $field) {
			$existing_check->bind_param('is', $product_id, $field['field_key']);
			$existing_check->execute();
			$result = $existing_check->get_result();
			$exists = $result->fetch_assoc()['count'] > 0;
			
			if (!$exists) {
				$insert_field->bind_param(
					'issi',
					$product_id,
					$field['field_key'],
					$field['field_value'],
					$field['sort_order']
				);
				
				if ($insert_field->execute()) {
					$added_count++;
					echo "Added field '{$field['field_key']}: {$field['field_value']}' to product #{$product_id}\n";
				} else {
					echo "Error adding field '{$field['field_key']}' to product #{$product_id}: " . $insert_field->error . "\n";
				}
			} else {
				// Update existing field
				$update_field = $db->prepare("
					UPDATE `" . DB_PREFIX . "product_custom_field`
					SET `field_value` = ?, `sort_order` = ?
					WHERE `product_id` = ? AND `field_key` = ?
				");
				$update_field->bind_param(
					'siis',
					$field['field_value'],
					$field['sort_order'],
					$product_id,
					$field['field_key']
				);
				if ($update_field->execute()) {
					echo "Updated field '{$field['field_key']}: {$field['field_value']}' for product #{$product_id}\n";
				}
				$update_field->close();
			}
		}
		
		$existing_check->close();
	}
	
	$insert_field->close();
	
	echo "\nProcessed {$product_count} products.\n";
	echo "Added/updated {$added_count} custom fields.\n";
	
	$db->close();
	echo "Done!\n";
	
} catch (Exception $e) {
	echo "Error: " . $e->getMessage() . "\n";
	exit(1);
}

