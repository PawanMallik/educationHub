<?php
include("../db/connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $sql = "INSERT INTO queries (name, email, message) VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql)) {
        echo "<h3>Thank you! Your query has been submitted.</h3>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
