<?php include("../db/connect.php"); ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Query</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-center text-warning">Send Your Query</h2>
        <form action="submit.php" method="POST" class="mt-4">
            <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <textarea name="message" class="form-control mb-3" placeholder="Your Query" required></textarea>
            <button class="btn btn-warning w-100" type="submit">Submit Query</button>
        </form>
    </div>
</body>
</html>
