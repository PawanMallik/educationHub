<?php
include("header.php");
include("../db/connect.php");

$msg = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current = $_POST['current'];
    $new = $_POST['new'];

    $stmt = $conn->prepare("SELECT password FROM admin WHERE username=?");
    $stmt->bind_param("s", $_SESSION['admin']);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    if (password_verify($current, $row['password'])) {
        $newHash = password_hash($new, PASSWORD_DEFAULT);
        $update = $conn->prepare("UPDATE admin SET password=? WHERE username=?");
        $update->bind_param("ss", $newHash, $_SESSION['admin']);
        $update->execute();
        $msg = "Password updated successfully!";
    } else {
        $msg = "Incorrect current password.";
    }
}
?>
<div class="container mt-4">
    <h3 class="text-warning">Change Password</h3>
    <?php if ($msg) echo "<div class='alert alert-info'>$msg</div>"; ?>
    <form method="POST">
        <input type="password" name="current" class="form-control mb-3" placeholder="Current Password" required>
        <input type="password" name="new" class="form-control mb-3" placeholder="New Password" required>
        <button class="btn btn-warning" type="submit">Update</button>
    </form>
</div>
