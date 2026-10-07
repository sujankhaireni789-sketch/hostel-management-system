<?php
$pageTitle = $pageTitle ?? 'Northstar Hostel';
$isModulePage = strpos($_SERVER['SCRIPT_NAME'] ?? '', '/admin/') !== false || strpos($_SERVER['SCRIPT_NAME'] ?? '', '/student/') !== false;
$rootPrefix = $isModulePage ? '..' : '.';
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= htmlspecialchars($pageTitle) ?> | Northstar Hostel</title>
  <link rel="stylesheet" href="/assets/css/app.css">
</head>
<body>
<header class="site-header"><a class="brand" href="<?= $rootPrefix ?>/index.html"><b>N</b><span>northstar<small>boys hostel</small></span></a><a class="logout" href="<?= $rootPrefix ?>/logout.php">Log out</a></header>
<main class="page-shell">
