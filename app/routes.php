<?php

$router->get('', 'UsersController@index');
$router->get('contact', 'PagesController@contact');
$router->get('about', 'PagesController@about');
$router->get('users', 'UsersController@index');
$router->post('users', 'UsersController@store');