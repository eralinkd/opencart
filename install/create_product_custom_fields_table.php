<?php
/**
 * Migration script to create product_custom_field table for dynamic product fields
 * Uses direct database connection
 */

// Load config
require_once(__DIR__ . '/../config.php');

// Connect to database
try {
	$db = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
	
	if ($db->connect_error) {
		throw new Exception("Connection failed: " . $db->connect_error);
	}
	
	$db->set_charset("utf8mb4");
	
	echo "Creating product_custom_field table...\n";
	
	// Check if table already exists
	$check_query = $db->query("
		SELECT COUNT(*) as count
		FROM information_schema.TABLES 
		WHERE TABLE_SCHEMA = '" . $db->real_escape_string(DB_DATABASE) . "' 
		AND TABLE_NAME = '" . DB_PREFIX . "product_custom_field" . "'
	");
	
	$exists = false;
	if ($check_query && $row = $check_query->fetch_assoc()) {
		$exists = (int)$row['count'] > 0;
	}
	
	if ($exists) {
		echo "Table '" . DB_PREFIX . "product_custom_field' already exists. Skipping creation.\n";
	} else {
		// Create table
		$create_table = "
		CREATE TABLE `" . DB_PREFIX . "product_custom_field` (
			`product_custom_field_id` int(11) NOT NULL AUTO_INCREMENT,
			`product_id` int(11) NOT NULL,
			`field_key` varchar(255) NOT NULL,
			`field_value` varchar(255) NOT NULL,
			`sort_order` int(3) NOT NULL DEFAULT '0',
			PRIMARY KEY (`product_custom_field_id`),
			KEY `product_id` (`product_id`),
			KEY `field_key` (`field_key`),
			CONSTRAINT `fk_product_custom_field_product` FOREIGN KEY (`product_id`) REFERENCES `" . DB_PREFIX . "product` (`product_id`) ON DELETE CASCADE
		) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
		";
		
		if ($db->query($create_table)) {
			echo "Successfully created table '" . DB_PREFIX . "product_custom_field'!\n";
		} else {
			throw new Exception("Error creating table: " . $db->error);
		}
	}
	
	$db->close();
	echo "Done!\n";
	
} catch (Exception $e) {
	echo "Error: " . $e->getMessage() . "\n";
	exit(1);
}

