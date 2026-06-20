<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Personal Info Form</title>

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
    font-weight: bold;
    color: #fff;
    text-align: center;
}

/* INPUT */
.form-control {
    background: #000;
    color: #fff;
    border: 2px solid #ffd700;
    padding: 18px;
    font-size: 18px;
    border-radius: 10px;
}

.form-control::placeholder {
    color: #ddd;
}

/* GENDER */
.gender-box {
    margin-top: 15px;
    padding: 15px;
    border: 2px solid #ffd700;
    border-radius: 12px;
}

.gender-box label {
    font-size: 18px;
    margin-right: 20px;
    color: #fff;
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
    transform: scale(1.05);
}
</style>
</head>

<body>

<div class="container py-5">
<div class="card">

<h2>Personal Information Form</h2>

<form action="post.php" method="POST">

<input type="text" name="firstname" class="form-control mb-3" placeholder="First Name" required>
<input type="text" name="middlename" class="form-control mb-3" placeholder="Middle Name">
<input type="text" name="lastname" class="form-control mb-3" placeholder="Last Name" required>

<input type="date" name="dob" class="form-control mb-3" required>
<input type="text" name="address" class="form-control mb-3" placeholder="Address" required>

<input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
<input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number" required>

<div class="gender-box">
    <strong class="d-block mb-2 text-light">Gender:</strong>

    <input type="radio" name="gender" value="Male" required> 
    <label>Male</label>

    <input type="radio" name="gender" value="Female" class="ms-3"> 
    <label>Female</label>

    <input type="radio" name="gender" value="Other" class="ms-3"> 
    <label>Other</label>
</div>

<button class="btn btn-gold w-100 mt-4">Submit</button>

</form>

</div>
</div>

</body>
</html>
``