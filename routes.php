<?php

$router = new Router();

//Also add all routes in /shortUrl/user/config.php -> $yourls_reserved_URL (Bottom of page)
$router->define([
    '' => 'app/Controllers/homeCtr.php',
    'home' => 'app/Controllers/homeCtr.php',
    'contact' => 'app/Controllers/contactCtr.php',
    'impressum' => 'app/Controllers/impressumCtr.php',
    '404' => 'public/404.php',
    '418' => 'public/418.php',
  ]);

?>
