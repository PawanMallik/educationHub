<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Smart Education Hub - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand text-dark" href="dashboard.php">Smart Education Hub - Admin</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link text-dark" href="dashboard.php">Dashboard</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="pending.php">Pending</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="approved.php">Approved</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="queries.php">Queries</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="deleted.php">Deleted</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="change_password.php">Change Password</a></li>
        <li class="nav-item"><a class="nav-link text-dark" href="logout.php">Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
