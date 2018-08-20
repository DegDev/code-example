<?php

$router->get('', 'PagesController@home');
$router->get('retrive', 'PagesController@retrive');
$router->get('404', 'PagesController@notFound404');

$router->post('add-phone', 'UsersController@store');
$router->post('retrive-phone', 'UsersController@retrive');
