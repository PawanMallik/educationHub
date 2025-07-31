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
    $address = $_POST['address'];
    $other_course = $_POST['other_course'];
    $notes = $_POST['notes'];

    $stmt = $conn->prepare("INSERT INTO students (name,email,phone,qualification,year,marks,college,course,address,other_course,notes,status) VALUES (?,?,?,?,?,?,?,?,?,?,?,'pending')");
    $stmt->bind_param("sssssssssss", $name, $email, $phone, $qualification, $year, $marks, $college, $course, $address, $other_course, $notes);
    if ($stmt->execute()) {
        $message = "Your enquiry has been submitted successfully!";
    } else {
        $message = "Error submitting enquiry. Please try again.";
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
        }
        .form-container {
            max-width: 600px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            color: #ff9800;
            margin-bottom: 20px;
        }
        label {
            font-weight: 500;
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

        <label>Address:</label>
        <input type="text" name="address" class="form-control" required>

        <label>Previous Qualification:</label>
        <select name="qualification" class="form-control" required>
            <option value="">Select Qualification</option>
            <option value="12th">12th</option>
            <option value="Diploma">Diploma</option>
            <option value="Graduate">Graduate</option>
        </select>

        <label>Year of Passing:</label>
        <input type="text" name="year" class="form-control" required>

        <label>Marks (Percentage or Grade):</label>
        <input type="text" name="marks" class="form-control" required>

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

        
        <label>Prefer Other Course (if any):</label>
<input type="text" name="other_course" class="form-control" placeholder="Optional">

        <label>Additional Notes:</label>
        <textarea name="notes" class="form-control" rows="3" placeholder="Optional"></textarea>

        <button type="submit" class="btn btn-submit">Submit Enquiry</button>
    </form>
</div>
</body>
</html>
