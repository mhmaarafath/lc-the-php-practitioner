<?php

$router->get('', 'PagesController@home');
$router->get('contact', 'PagesController@contact');
$router->get('about', 'PagesController@about');
$router->post('name', 'PagesController@store');