<?php
// Update these values for your hosting database.
const DB_HOST = 'localhost';
const DB_NAME = 'northstar_hostel';
const DB_USER = 'root';
const DB_PASS = '';

function db(): PDO {
    static $connection;
    if (!$connection) {
        $connection = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',
            DB_USER,
            DB_PASS,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]
        );
    }
    return $connection;
}
