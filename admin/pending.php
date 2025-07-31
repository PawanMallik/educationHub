<?php
include("header.php");
include("../db/connect.php");

// Fetch pending + approved + rejected students
$result = $conn->query("SELECT * FROM students ORDER BY created_at DESC");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Manage Submissions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<div class="container mt-4">
    <h3 class="text-warning mb-4">Manage Student Submissions</h3>
    <table class="table table-bordered table-striped">
        <thead class="table-warning">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Qualification</th>
                <th>Year</th>
                <th>Marks</th>
                <th>College</th>
                <th>Course</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td><?php echo $row['qualification']; ?></td>
                <td><?php echo $row['year']; ?></td>
                <td><?php echo $row['marks']; ?></td>
                <td><?php echo $row['college']; ?></td>
                <td><?php echo $row['course']; ?></td>
                <td>
                    <select class="form-select status-dropdown" data-id="<?php echo $row['id']; ?>">
                        <option value="pending" <?php if($row['status']=='pending') echo 'selected'; ?>>Pending</option>
                        <option value="approved" <?php if($row['status']=='approved') echo 'selected'; ?>>Approved</option>
                        <option value="rejected" <?php if($row['status']=='rejected') echo 'selected'; ?>>Rejected</option>
                    </select>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script>
$(document).ready(function(){
    $('.status-dropdown').change(function(){
        var studentId = $(this).data('id');
        var newStatus = $(this).val();
        $.post('update_status.php', {id: studentId, status: newStatus}, function(response){
            alert(response); // Show confirmation
        });
    });
});
</script>
</body>
</html>
