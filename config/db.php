<?php

return [
    'host' => 'localhost',
    'dbname' => 'practica',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8', // utf8m4
    'options' => [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ],
];