<?php

return [
    'database' => [
        'name' => 'cars',
        'username' => 'root',
        'password' => '',
        'connection' => 'mysql:host=127.0.0.1:3306',
        'options' => [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    ]
];
