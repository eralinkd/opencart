<?php
/**
 * Simple migration script to create default categories for drone parts
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
	
	echo "Creating default categories for drone parts...\n";
	
	// Default language ID (usually 1 for English)
	$language_id = 1;
	
	// Categories to create
	$categories = [
		[
			'name' => 'Controllers',
			'description' => 'Flight controllers for drones',
			'seo_keyword' => 'controllers',
			'sort_order' => 1
		],
		[
			'name' => 'Batteries',
			'description' => 'Batteries for drones',
			'seo_keyword' => 'batteries',
			'sort_order' => 2
		]
	];
	
	$created_ids = [];
	
	foreach ($categories as $cat_data) {
		// Check if category already exists
		$check_query = $db->prepare("
			SELECT c.category_id 
			FROM `" . DB_PREFIX . "category` c
			INNER JOIN `" . DB_PREFIX . "category_description` cd ON c.category_id = cd.category_id
			WHERE cd.name = ? AND cd.language_id = ?
		");
		$check_query->bind_param("si", $cat_data['name'], $language_id);
		$check_query->execute();
		$result = $check_query->get_result();
		
		if ($result->num_rows > 0) {
			$row = $result->fetch_assoc();
			echo "Category '{$cat_data['name']}' already exists (ID: {$row['category_id']})\n";
			continue;
		}
		
		// Insert category
		$insert_category = $db->prepare("
			INSERT INTO `" . DB_PREFIX . "category` 
			SET `image` = '', `parent_id` = 0, `sort_order` = ?, `status` = 1
		");
		$insert_category->bind_param("i", $cat_data['sort_order']);
		$insert_category->execute();
		$category_id = $db->insert_id;
		
		// Insert category description
		$insert_desc = $db->prepare("
			INSERT INTO `" . DB_PREFIX . "category_description` 
			SET `category_id` = ?, `language_id` = ?, `name` = ?, `description` = ?, 
				`meta_title` = ?, `meta_description` = ?, `meta_keyword` = ''
		");
		$meta_title = $cat_data['name'];
		$meta_description = $cat_data['description'];
		$insert_desc->bind_param("iissss", 
			$category_id, 
			$language_id, 
			$cat_data['name'], 
			$cat_data['description'],
			$meta_title,
			$meta_description
		);
		$insert_desc->execute();
		
		// Insert category path (closure table pattern)
		$insert_path = $db->prepare("
			INSERT INTO `" . DB_PREFIX . "category_path` 
			SET `category_id` = ?, `path_id` = ?, `level` = 0
		");
		$insert_path->bind_param("ii", $category_id, $category_id);
		$insert_path->execute();
		
		// Insert category to store
		$insert_store = $db->prepare("
			INSERT INTO `" . DB_PREFIX . "category_to_store` 
			SET `category_id` = ?, `store_id` = 0
		");
		$insert_store->bind_param("i", $category_id);
		$insert_store->execute();
		
		// Insert SEO URL
		$insert_seo = $db->prepare("
			INSERT INTO `" . DB_PREFIX . "seo_url` 
			SET `store_id` = 0, `language_id` = ?, `key` = 'path', `value` = ?, `keyword` = ?, `sort_order` = 0
		");
		$path_value = (string)$category_id;
		$insert_seo->bind_param("iss", $language_id, $path_value, $cat_data['seo_keyword']);
		$insert_seo->execute();
		
		$created_ids[] = $category_id;
		echo "Created category '{$cat_data['name']}' (ID: {$category_id})\n";
	}
	
	if (!empty($created_ids)) {
		echo "\nSuccessfully created " . count($created_ids) . " categories!\n";
	} else {
		echo "\nAll categories already exist.\n";
	}
	
	$db->close();
	echo "Done!\n";
	
} catch (Exception $e) {
	echo "Error: " . $e->getMessage() . "\n";
	exit(1);
}

