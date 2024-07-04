<?php
// config.php

// Uncomment below local environment Database credentials

//define('DB_SERVER', 'localhost');
//define('DB_USERNAME', 'root');
//define('DB_PASSWORD', '');
//define('DB_NAME', 'lokutthan');
 

if (!defined('DB_SERVER')) {
  define('DB_SERVER', 'localhost');
}
if (!defined('DB_USERNAME')) {
  define('DB_USERNAME', 'root');
}
if (!defined('DB_PASSWORD')) {
  define('DB_PASSWORD', '');
}
if (!defined('DB_NAME')) {
  define('DB_NAME', 'lokutthan');
}



// Uncomment below on LIVE WEBSITE Database credentials

//define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'lokutnlf_unameot');
// define('DB_PASSWORD', '~t_%mb0EQz^J');
 //define('DB_NAME', 'lokutnlf_db');

 



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

