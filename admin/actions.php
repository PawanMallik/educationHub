<?php
include("../db/connect.php");

if (isset($_GET['action']) && isset($_GET['id'])) {
    $id = $_GET['id'];
    $action = $_GET['action'];

    if ($action === 'approve') {
        $conn->query("UPDATE students SET status='approved' WHERE id=$id");
    } elseif ($action === 'reject') {
        $conn->query("UPDATE students SET status='rejected' WHERE id=$id");
    }
}
header("Location: pending.php");
exit;
?>
