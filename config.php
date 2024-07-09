<?php
// config.php




// Uncomment below on LOCAL WEBSITE Database credentials

if (!defined('DB_SERVER')) define('DB_SERVER', 'localhost');
if (!defined('DB_USERNAME')) define('DB_USERNAME', 'root');
 if (!defined('DB_PASSWORD')) define('DB_PASSWORD', '');
 if (!defined('DB_NAME')) define('DB_NAME', 'lokutthan');

// Uncomment below on LIVE WEBSITE Database credentials

// if (!defined('DB_SERVER')) define('DB_SERVER', 'localhost');
// if (!defined('DB_USERNAME')) define('DB_USERNAME', 'lokutnlf_uname');
// if (!defined('DB_PASSWORD')) define('DB_PASSWORD', '~t_%mb0EQz^J');
// if (!defined('DB_NAME')) define('DB_NAME', 'lokutnlf_db');



return [
    'host' => 'smtp.mailhostbox.com',
    'username' => 'priyanshi@manacleindia.com',
    'password' => 'LrEV#Gw3',
    'smtp_secure' => 'tls',
    'port' => 587,
    'from_email' => 'priyanshi@manacleindia.com',
    'from_name' => 'manacle'
];


?>

