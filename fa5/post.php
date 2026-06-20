<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Submitted Info</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: #000;
    color: #ffd700;
}

.card {
    background: #111;
    border: 2px solid #ffd700;
    border-radius: 20px;
    padding: 40px;
    box-shadow: 0 0 25px rgba(255,215,0,0.3);
}

h2 {
    font-size: 2.5rem;
    color: #fff;
    text-align: center;
}

/* TABLE */
.table {
    font-size: 18px;
}

.table td {
    color: #fff;
    padding: 15px;
}

/* BUTTON */
.btn-gold {
    background: linear-gradient(145deg, #ffd700, #e6c200);
    color: #000;
    font-weight: bold;
    font-size: 20px;
    padding: 15px;
    border-radius: 50px;
}

.btn-gold:hover {
    background: #fff176;
}
</style>
</head>

<body>

<div class="container py-5">
<div class="card">

<h2>Submitted Information</h2>

<?php if(!empty($_POST)): ?>

<table class="table table-dark table-bordered mt-4">
<tr><td>First Name</td><td><?= htmlspecialchars($_POST['firstname']) ?></td></tr>
<tr><td>Middle Name</td><td><?= htmlspecialchars($_POST['middlename']) ?></td></tr>
<tr><td>Last Name</td><td><?= htmlspecialchars($_POST['lastname']) ?></td></tr>
<tr><td>Date of Birth</td><td><?= htmlspecialchars($_POST['dob']) ?></td></tr>
<tr><td>Address</td><td><?= htmlspecialchars($_POST['address']) ?></td></tr>
<tr><td>Email</td><td><?= htmlspecialchars($_POST['email']) ?></td></tr>
<tr><td>Phone</td><td><?= htmlspecialchars($_POST['phone']) ?></td></tr>
<tr><td>Gender</td><td><?= htmlspecialchars($_POST['gender']) ?></td></tr>
</table>

<?php endif; ?>


<a href="get.php" class="btn btn-gold w-100 mt-4">Back to Form</a>

</div>
</div>

</body>
</html>