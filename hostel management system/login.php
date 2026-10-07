<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Replace this demo login with a database lookup before production.
    $_SESSION['user'] = ['name' => trim($_POST['name'] ?: 'Arun Kumar'), 'role' => $_POST['role'] ?? 'admin'];
    header('Location: ' . ($_SESSION['user']['role'] === 'student' ? 'student/dashboard.php' : 'admin/dashboard.php'));
    exit;
}
?><!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Login | Northstar Hostel</title><link rel="stylesheet" href="/assets/css/app.css"></head><body><main class="page-shell" style="max-width:430px"><h1>Welcome back</h1><p style="color:var(--muted)">Sign in to manage Northstar Hostel records.</p><form method="post" class="module-grid" style="display:grid;margin-top:25px"><label>Name<input name="name" required value="Arun Kumar" style="width:100%;padding:12px;margin-top:6px;border:1px solid var(--line);border-radius:6px"></label><label>Account<select name="role" style="width:100%;padding:12px;margin-top:6px;border:1px solid var(--line);border-radius:6px"><option value="admin">Warden / Admin</option><option value="student">Student</option></select></label><button class="module" style="background:var(--green);color:#fff;border:0;font-weight:bold">Sign in</button></form></main></body></html>
