<?php 
include("header.php");
include("../db/connect.php");

// Fetch counts for dashboard cards
$pending = $conn->query("SELECT COUNT(*) AS c FROM students WHERE status='pending'")->fetch_assoc()['c'];
$approved = $conn->query("SELECT COUNT(*) AS c FROM students WHERE status='approved'")->fetch_assoc()['c'];
$rejected = $conn->query("SELECT COUNT(*) AS c FROM students WHERE status='rejected'")->fetch_assoc()['c'];
$queries = $conn->query("SELECT COUNT(*) AS c FROM queries")->fetch_assoc()['c'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-warning mb-4">Welcome, <?php echo $_SESSION['admin']; ?>!</h2>

    <div class="row g-4">
        <!-- Pending -->
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-warning">Pending</h5>
                    <p class="display-5"><?php echo $pending; ?></p>
                    <a href="pending.php" class="btn btn-warning btn-sm">View</a>
                </div>
            </div>
        </div>

        <!-- Approved -->
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-success">Approved</h5>
                    <p class="display-5"><?php echo $approved; ?></p>
                    <a href="approved.php" class="btn btn-success btn-sm">View</a>
                </div>
            </div>
        </div>

        <!-- Rejected -->
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-danger">Rejected</h5>
                    <p class="display-5"><?php echo $rejected; ?></p>
                    <a href="deleted.php" class="btn btn-danger btn-sm">View</a>
                </div>
            </div>
        </div>

        <!-- Queries -->
        <div class="col-md-3">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title text-primary">Queries</h5>
                    <p class="display-5"><?php echo $queries; ?></p>
                    <a href="queries.php" class="btn btn-primary btn-sm">View</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
