<?php
include("../db/connect.php");

$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $qualification = $_POST['qualification'];
    $year = $_POST['year'];
    $marks = $_POST['marks'];
    $college = $_POST['college'];
    $course = $_POST['course'];
    $notes = $_POST['notes'];

    $stmt = $conn->prepare("INSERT INTO students (name,email,phone,qualification,year,marks,college,course,notes,status) VALUES (?,?,?,?,?,?,?,?,?,'pending')");
    $stmt->bind_param("sssssssss", $name, $email, $phone, $qualification, $year, $marks, $college, $course, $notes);
    if ($stmt->execute()) {
        $message = "Your enquiry has been submitted successfully! We will contact you soon.";
    } else {
        $message = "There was an error submitting your enquiry. Please try again.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Find Your Best College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #fdf7f2;
            font-family: Arial, sans-serif;
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #ff9800;
            margin-bottom: 20px;
            font-weight: bold;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
        }
        .btn-submit {
            background-color: #ff9800;
            color: #fff;
            font-weight: bold;
            width: 100%;
            margin-top: 20px;
        }
        .btn-submit:hover {
            background-color: #fb8c00;
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Find Your Best College</h2>
    <?php if ($message): ?>
        <div class="alert alert-info"><?php echo $message; ?></div>
    <?php endif; ?>
    <form method="POST">
        <label>Full Name:</label>
        <input type="text" name="name" class="form-control" required>

        <label>Email:</label>
        <input type="email" name="email" class="form-control" required>

        <label>Phone:</label>
        <input type="text" name="phone" class="form-control" required>

        <label>Previous Qualification:</label>
        <select name="qualification" class="form-control" required>
            <option value="">Select Qualification</option>
            <option value="12th">12th</option>
            <option value="Diploma">Diploma</option>
            <option value="Graduate">Graduate</option>
        </select>

        <label>Year of Passing:</label>
        <input type="text" name="year" class="form-control" placeholder="e.g. 2024" required>

        <label>Marks (Percentage or Grade):</label>
        <input type="text" name="marks" class="form-control" placeholder="e.g. 85% or A+" required>

        <label>Preferred College:</label>
        <select name="college" class="form-control" required>
            <option value="">Select College</option>
            <option value="College A">College A</option>
            <option value="College B">College B</option>
            <option value="College C">College C</option>
        </select>

        <label>Preferred Course:</label>
        <select name="course" class="form-control" required>
            <option value="">Select Course</option>
            <option value="B.Tech">B.Tech</option>
            <option value="BCA">BCA</option>
            <option value="MBA">MBA</option>
        </select>

        <label>Additional Notes (Optional):</label>
        <textarea name="notes" class="form-control" rows="3" placeholder="Any specific preferences or queries..."></textarea>

        <button type="submit" class="btn btn-submit">Submit Enquiry</button>
    </form>
</div>
</body>
</html>
