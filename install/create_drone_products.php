<?php
/**
 * Seed script to create showcase drone products
 *
 * Usage: php install/create_drone_products.php
 */

require_once __DIR__ . '/../config.php';

// Database connection
$db = new mysqli(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);

if ($db->connect_error) {
	throw new RuntimeException('Connection failed: ' . $db->connect_error);
}

$db->set_charset('utf8mb4');

$language_id = 1; // English
$store_id = 0;

// Helper to fetch category ids
$categoryNames = ['Controllers', 'Batteries'];
$categoryMap = [];

$stmt = $db->prepare("
	SELECT cd.category_id, cd.name
	FROM `" . DB_PREFIX . "category_description` cd
	WHERE cd.language_id = ? AND cd.name IN (?, ?)
");
$stmt->bind_param('iss', $language_id, $categoryNames[0], $categoryNames[1]);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
	$categoryMap[$row['name']] = (int)$row['category_id'];
}

$stmt->close();

foreach ($categoryNames as $name) {
	if (!isset($categoryMap[$name])) {
		$db->close();
		throw new RuntimeException("Category '{$name}' not found. Please run create_drone_categories.php first.");
	}
}

$controllerCategoryId = $categoryMap['Controllers'];
$batteryCategoryId = $categoryMap['Batteries'];

$products = [
	[
		'name' => 'SkyFix Apex F7 Flight Controller',
		'slug' => 'skyfix-apex-f7-flight-controller',
		'category_id' => $controllerCategoryId,
		'model' => 'SF-APEX-F7',
		'price' => 139.99,
		'quantity' => 18,
		'image' => 'catalog/products/controller-default.png',
		'description' => 'Premium 32-bit F7 MCU, integrated barometer, dual gyro filtering and high-noise immunity make Apex the ideal brain for cinematic rigs.',
		'meta' => 'SkyFix Apex F7 Flight Controller'
	],
	[
		'name' => 'SkyFix Micro F411 HD',
		'slug' => 'skyfix-micro-f411-hd-controller',
		'category_id' => $controllerCategoryId,
		'model' => 'SF-MICRO-F411',
		'price' => 79.50,
		'quantity' => 32,
		'image' => 'catalog/products/controller-default.png',
		'description' => 'Ultra-compact controller with plug-and-play HD video support, perfect for 3” builds and lightweight long-range quads.',
		'meta' => 'SkyFix Micro F411 HD Controller'
	],
	[
		'name' => 'SkyFix Velocity H7 Race',
		'slug' => 'skyfix-velocity-h7-race-controller',
		'category_id' => $controllerCategoryId,
		'model' => 'SF-H7-VELOCITY',
		'price' => 159.00,
		'quantity' => 12,
		'image' => 'catalog/products/controller-default.png',
		'description' => 'Flagship H7 platform with 8 motor outputs, dual 4-in-1 ESC headers and real-time blackbox streaming for pro pilots.',
		'meta' => 'SkyFix Velocity H7 Race Flight Controller'
	],
	[
		'name' => 'SkyFix F405 Vision Stack',
		'slug' => 'skyfix-f405-vision-stack',
		'category_id' => $controllerCategoryId,
		'model' => 'SF-F405-VISION',
		'price' => 119.90,
		'quantity' => 20,
		'image' => 'catalog/products/controller-default.png',
		'description' => 'All-in-one stack with 45A BLHeli32 ESC, soft-mounted F405 MCU and native DJI / HDZero support.',
		'meta' => 'SkyFix F405 Vision Stack Controller'
	],
	[
		'name' => 'SkyFix Atlas F4 Mini',
		'slug' => 'skyfix-atlas-f4-mini-controller',
		'category_id' => $controllerCategoryId,
		'model' => 'SF-ATLAS-F4',
		'price' => 64.95,
		'quantity' => 40,
		'image' => 'catalog/products/controller-default.png',
		'description' => 'Reliable F4 mini board with 20x20 mounting, 6 UARTs and adaptive gyro sync for freestyle drones.',
		'meta' => 'SkyFix Atlas F4 Mini Controller'
	],
	[
		'name' => 'SkyFix Surge 6S 5200mAh 120C',
		'slug' => 'skyfix-surge-6s-5200mah-120c',
		'category_id' => $batteryCategoryId,
		'model' => 'SF-SURGE-6S5200',
		'price' => 129.99,
		'quantity' => 22,
		'image' => 'catalog/products/battery-default.png',
		'description' => 'High-discharge LiPo delivering 120C burst current for heavy lifters and long-range filming drones.',
		'meta' => 'SkyFix Surge 6S 5200mAh 120C Battery'
	],
	[
		'name' => 'SkyFix Pulse 6S 4000mAh 90C',
		'slug' => 'skyfix-pulse-6s-4000mah-90c',
		'category_id' => $batteryCategoryId,
		'model' => 'SF-PULSE-6S4000',
		'price' => 94.50,
		'quantity' => 28,
		'image' => 'catalog/products/battery-default.png',
		'description' => 'Balanced weight-to-capacity pack with smart cell matching and rugged silicone leads.',
		'meta' => 'SkyFix Pulse 6S 4000mAh 90C Battery'
	],
	[
		'name' => 'SkyFix Glide 4S 2200mAh 75C',
		'slug' => 'skyfix-glide-4s-2200mah-75c',
		'category_id' => $batteryCategoryId,
		'model' => 'SF-GLIDE-4S2200',
		'price' => 39.95,
		'quantity' => 42,
		'image' => 'catalog/products/battery-default.png',
		'description' => 'Everyday freestyle pack with low internal resistance and dependable 75C discharge.',
		'meta' => 'SkyFix Glide 4S 2200mAh 75C Battery'
	],
	[
		'name' => 'SkyFix Horizon 6S 3000mAh 80C',
		'slug' => 'skyfix-horizon-6s-3000mah-80c',
		'category_id' => $batteryCategoryId,
		'model' => 'SF-HORIZON-6S3000',
		'price' => 69.90,
		'quantity' => 30,
		'image' => 'catalog/products/battery-default.png',
		'description' => 'Lightweight long-range battery offering consistent voltage and integrated balance lead protector.',
		'meta' => 'SkyFix Horizon 6S 3000mAh 80C Battery'
	],
	[
		'name' => 'SkyFix Explorer 4S 1500mAh 95C',
		'slug' => 'skyfix-explorer-4s-1500mah-95c',
		'category_id' => $batteryCategoryId,
		'model' => 'SF-EXPLORER-4S1500',
		'price' => 36.50,
		'quantity' => 50,
		'image' => 'catalog/products/battery-default.png',
		'description' => 'Compact pack for 5” quads with punchy throttle response and reinforced casing.',
		'meta' => 'SkyFix Explorer 4S 1500mAh 95C Battery'
	],
];

$productInsert = $db->prepare("
	INSERT INTO `" . DB_PREFIX . "product`
	SET `model` = ?, `quantity` = ?, `stock_status_id` = 0, `image` = ?, `price` = ?, 
	    `minimum` = 1, `subtract` = 1, `status` = 1, `shipping` = 1, 
	    `date_available` = CURDATE(), `date_added` = NOW(), `date_modified` = NOW()
");

$descriptionInsert = $db->prepare("
	INSERT INTO `" . DB_PREFIX . "product_description`
	(`product_id`, `language_id`, `name`, `description`, `tag`, `meta_title`, `meta_description`, `meta_keyword`)
	VALUES (?, ?, ?, ?, '', ?, ?, '')
");

$storeInsert = $db->prepare("
	INSERT INTO `" . DB_PREFIX . "product_to_store`
	SET `product_id` = ?, `store_id` = ?
");

$categoryInsert = $db->prepare("
	INSERT INTO `" . DB_PREFIX . "product_to_category`
	SET `product_id` = ?, `category_id` = ?
");

$seoInsert = $db->prepare("
	INSERT INTO `" . DB_PREFIX . "seo_url`
	(`store_id`, `language_id`, `key`, `value`, `keyword`)
	VALUES (0, ?, 'product_id', ?, ?)
	ON DUPLICATE KEY UPDATE `keyword` = VALUES(`keyword`)
");

$created = 0;

foreach ($products as $product) {
	$productInsert->bind_param(
		'sisd',
		$product['model'],
		$product['quantity'],
		$product['image'],
		$product['price']
	);
	$productInsert->execute();

	$product_id = $db->insert_id;

	$descriptionInsert->bind_param(
		'iissss',
		$product_id,
		$language_id,
		$product['name'],
		$product['description'],
		$product['meta'],
		$product['meta']
	);
	$descriptionInsert->execute();

	$storeInsert->bind_param('ii', $product_id, $store_id);
	$storeInsert->execute();

	$categoryInsert->bind_param('ii', $product_id, $product['category_id']);
	$categoryInsert->execute();

	$value = (string)$product_id;
	$seoInsert->bind_param('iss', $language_id, $value, $product['slug']);
	$seoInsert->execute();

	$created++;
	echo "Created product #{$product_id} - {$product['name']}\n";
}

$productInsert->close();
$descriptionInsert->close();
$storeInsert->close();
$categoryInsert->close();
$seoInsert->close();
$db->close();

echo "\nSuccessfully seeded {$created} products!\n";
