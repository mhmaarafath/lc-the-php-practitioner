<?php

return [
    'database' => [
        'name' => 'lc_the_php_practitioner',
        'username' => 'root',
        'password' => 'password',
        'type' => 'mysql',
        'host' => '127.0.0.1',
        'options' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]
    ]
];