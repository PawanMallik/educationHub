<?php
include("header.php");
include("../db/connect.php");

// Fetch all queries (newest first)
$result = $conn->query("SELECT * FROM queries ORDER BY created_at DESC");
?>
<div class="container mt-4">
    <h3 class="text-warning">Student Queries</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-warning">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Submitted On</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['message'])) ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
