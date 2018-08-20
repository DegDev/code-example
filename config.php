<?php

return [
    'database' => [
        'name' => '',
        'username' => '',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]       
    ],
     'salt' => 'f#@V)Hu^%Hf#@V)Hu^%fds', // You can replace salt (for email encryption) to any other value.
];
