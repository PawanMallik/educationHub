<?php
include("header.php");
include("../db/connect.php");

// Fetch rejected (deleted) student submissions
$result = $conn->query("SELECT * FROM students WHERE status='rejected'");
?>
<div class="container mt-4">
    <h3 class="text-warning">Rejected / Deleted Submissions</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-warning">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Qualification</th>
                <th>Year</th>
                <th>Marks</th>
                <th>Preferred College</th>
                <th>Preferred Course</th>
                <th>Notes</th>
                <th>Deleted On</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['phone']) ?></td>
            <td><?= htmlspecialchars($row['qualification']) ?></td>
            <td><?= htmlspecialchars($row['year']) ?></td>
            <td><?= htmlspecialchars($row['marks']) ?></td>
            <td><?= htmlspecialchars($row['college']) ?></td>
            <td><?= htmlspecialchars($row['course']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['notes'])) ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
