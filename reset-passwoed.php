<?php
include("db/connect.php");

$newPassword = "admin123";
$hash = password_hash($newPassword, PASSWORD_DEFAULT);

$conn->query("UPDATE admin SET password='$hash' WHERE username='admin'");

echo "Password reset to 'admin123'. You can now log in.";
?>
