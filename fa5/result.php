<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["colors"] = [
        $_POST["color1"],
        $_POST["color2"],
        $_POST["color3"],
        $_POST["color4"],
        $_POST["color5"]
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Favorite Colors</title>

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

.result {
    font-size:22px;
    margin-top:20px;
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

<h2>My Favorite Colors</h2>

<div class="result">

<?php
if (isset($_SESSION["colors"])) {
    foreach ($_SESSION["colors"] as $index => $color) {
        $num = $index + 1;
        $safeColor = htmlspecialchars($color);

        echo "<div style='color:$safeColor; font-weight:bold;'>
                My Favorite Color $num: $safeColor
              </div>";
    }
} else {
    echo "No colors submitted.";
}
?>

</div>

<a href="color.php"  class="btn btn-gold w-100">Back</a>

</div>
</div>

</body>
</html>