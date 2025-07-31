<?php
include("header.php");
include("../db/connect.php");
$result = $conn->query("SELECT * FROM students WHERE status='pending' ORDER BY created_at DESC");
?>
<div class="container mt-4">
    <h3 class="text-warning">Pending Submissions</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-warning">
            <tr>
                <th>Name</th><th>Email</th><th>Phone</th><th>Address</th>
                <th>Qualification</th><th>Year</th><th>Marks</th>
                <th>Preferred College</th><th>Course</th><th>Other Course</th>
                <th>Notes</th><th>Submitted On</th><th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['phone']) ?></td>
            <td><?= htmlspecialchars($row['address']) ?></td>
            <td><?= htmlspecialchars($row['qualification']) ?></td>
            <td><?= htmlspecialchars($row['year']) ?></td>
            <td><?= htmlspecialchars($row['marks']) ?></td>
            <td><?= htmlspecialchars($row['college']) ?></td>
            <td><?= htmlspecialchars($row['course']) ?></td>
            <td><?= htmlspecialchars($row['other_course']) ?></td>
            <td><?= nl2br(htmlspecialchars($row['notes'])) ?></td>
            <td><?= $row['created_at'] ?></td>
            <td>
                <select class="form-select status-dropdown" data-id="<?= $row['id'] ?>">
                    <option value="pending" selected>Pending</option>
                    <option value="approved">Approve</option>
                    <option value="rejected">Reject</option>
                </select>
            </td>
        </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$('.status-dropdown').change(function() {
    var studentId = $(this).data('id');
    var newStatus = $(this).val();
    $.post('update_status.php', { id: studentId, status: newStatus }, function(response) {
        alert(response);
        location.reload(); // Refresh table
    });
});
</script>
