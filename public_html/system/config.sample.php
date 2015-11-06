<?php
/**
	AbanteCart, Ideal OpenSource Ecommerce Solution
	http://www.AbanteCart.com
	Copyright © 2011-'.date('Y').' Belavier Commerce LLC

	Released under the Open Software License (OSL 3.0)
*/
// Admin Section Configuration. You can change this value to any name. Will use ?s=name to access the admin
define('ADMIN_PATH', 'spsadmin');

// Database Configuration
define('DB_DRIVER', 'amysqli');
define('DB_HOSTNAME', '');
define('DB_USERNAME', '');
define('DB_PASSWORD', '');
define('DB_DATABASE', '');
define('DB_PREFIX', 'abc_');
// Unique AbanteCart store ID
define('UNIQUE_ID', 'eab91e6df61a4864c8d1345f27743197');
// Salt key for oneway encryption of passwords. NOTE: Change of SALT key will cause a loss of all existing users' and customers' passwords!
define('SALT', '6G4L');
// Encryption key for protecting sensitive information. NOTE: Change of this key will cause a loss of all existing encrypted information!
define('ENCRYPTION_KEY', 'bUE7yK');
