<?php
session_start();

function require_login(string $role = ''): void {
    if (empty($_SESSION['user'])) {
        header('Location: ../login.php');
        exit;
    }
    if ($role && ($_SESSION['user']['role'] ?? '') !== $role) {
        http_response_code(403);
        exit('Access denied');
    }
}
