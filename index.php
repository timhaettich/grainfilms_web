<?php

require 'core/init.php';

require 'routes.php';

$uri = $_GET['uri'] ?? '';

require $router->parse($uri);

?>
