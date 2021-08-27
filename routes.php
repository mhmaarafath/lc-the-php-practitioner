<?php

$router->get('', 'controllers/index.php');
$router->get('contact', 'controllers/contact.php');
$router->get('about', 'controllers/about.php');
$router->post('name', 'controllers/name.php');