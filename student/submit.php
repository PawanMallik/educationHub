<?php
include("../db/connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $location = $_POST['location'];
    $budget = $_POST['budget'];

    $sql = "INSERT INTO students (name, email, course, location, budget, status) 
            VALUES ('$name', '$email', '$course', '$location', '$budget', 'pending')";

    if ($conn->query($sql)) {
        echo "Thank you! Your submission is under review.";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
