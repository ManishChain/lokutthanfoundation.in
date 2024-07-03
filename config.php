<?php
// config.php

// Uncomment below local environment Database credentials

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "lokutthan";



// Uncomment below on LIVE WEBSITE Database credentials

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'lokutthan');

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

