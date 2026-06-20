<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    setcookie("firstname", $_POST["firstname"], time() + 120);
    setcookie("middlename", $_POST["middlename"], time() + 120);
    setcookie("lastname", $_POST["lastname"], time() + 120);

    setcookie("start_time", time(), time() + 120);

    header("Location: cookie.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cookie</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background:#000;
    color:#ffd700;
}

.card {
    background:#111;
    border:2px solid #ffd700;
    border-radius:20px;
    padding:40px;
}

h2 {
    text-align:center;
    color:#fff;
    font-size:2.5rem;
}

.form-control {
    background:#000;
    color:#fff;
    border:2px solid #ffd700;
    padding:15px;
}

.btn-gold {
    background:#ffd700;
    color:#000;
    font-weight:bold;
}

.output {
    margin-top:20px;
    font-size:20px;
    color:#fff;
}
</style>
</head>

<body>

<div class="container py-5">
<div class="card">

<h2>Personal Information</h2>

<form method="POST">
<input type="text" name="firstname" class="form-control mb-2" placeholder="First Name" required>
<input type="text" name="middlename" class="form-control mb-2" placeholder="Middle Name" required>
<input type="text" name="lastname" class="form-control mb-3" placeholder="Last Name" required>

<button class="btn btn-gold w-100">Submit</button>
</form>

<?php if (isset($_COOKIE["start_time"])): ?>

<div class="output">
<div id="first"></div>
<div id="middle"></div>
<div id="last"></div>
</div>

<script>
let startTime = <?= $_COOKIE["start_time"] ?>;
let firstName = "<?= $_COOKIE["firstname"] ?>";
let middleName = "<?= $_COOKIE["middlename"] ?>";
let lastName = "<?= $_COOKIE["lastname"] ?>";

function updateTimer() {
    let now = Math.floor(Date.now() / 1000);
    let elapsed = now - startTime;

    // FIRST NAME
    if (elapsed < 10) {
        let remaining = 10 - elapsed;
        document.getElementById("first").innerHTML =
            "<strong>First Name:</strong> " + firstName + " (" + remaining + "s left)";
    } else {
        document.getElementById("first").innerHTML =
            "<strong>First Name:</strong> disappeared";
    }

    // MIDDLE NAME
    if (elapsed < 20) {
        let remaining = 20 - elapsed;
        document.getElementById("middle").innerHTML =
            "<strong>Middle Name:</strong> " + middleName + " (" + remaining + "s left)";
    } else {
        document.getElementById("middle").innerHTML =
            "<strong>Middle Name:</strong> disappeared";
    }

    // LAST NAME
    if (elapsed < 30) {
        let remaining = 30 - elapsed;
        document.getElementById("last").innerHTML =
            "<strong>Last Name:</strong> " + lastName + " (" + remaining + "s left)";
    } else {
        document.getElementById("last").innerHTML =
            "<strong>Last Name:</strong> disappeared";
    }
}


setInterval(updateTimer, 1000);
updateTimer();
</script>

<?php endif; ?>

</div>
</div>

</body>
</html>