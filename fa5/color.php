<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Favorite Colors</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background:#000;
    color:#ffd700;
}

.card {
    background:#111;
    border:2px solid #ffd700;
    border-radius:15px;
    padding:30px;
}

h2 {
    text-align:center;
    color:#fff;
}

.form-control {
    background:#fff;
    color:#000;
    border:2px solid #ffd700;
    padding:12px;
    font-size:18px;
}

.btn-gold {
    background:linear-gradient(145deg,#ffd700,#e6c200);
    color:#000;
    font-weight:bold;
}
</style>
</head>

<body>

<div class="container py-5">
<div class="card">

<h2>Enter Your Favorite Colors</h2>

<form action="result.php" method="POST">

<input type="text" name="color1" class="form-control mb-3" placeholder="Favorite Color 1" required>
<input type="text" name="color2" class="form-control mb-3" placeholder="Favorite Color 2" required>
<input type="text" name="color3" class="form-control mb-3" placeholder="Favorite Color 3" required>
<input type="text" name="color4" class="form-control mb-3" placeholder="Favorite Color 4" required>
<input type="text" name="color5" class="form-control mb-4" placeholder="Favorite Color 5" required>

<button class="btn btn-gold w-100">Send Colors</button>

</form>

</div>
</div>

</body>
</html>
