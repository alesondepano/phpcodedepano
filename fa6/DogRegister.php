<?php
$conn = new mysqli("localhost", "root", "", "Dog_Information");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['save'])) {

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "INSERT INTO dogs (name, breed, age, address, color, height, weight)
            VALUES ('$name','$breed','$age','$address','$color','$height','$weight')";

    if ($conn->query($sql)) {
        echo "<script>
                alert('Dog saved successfully!');
                window.location='DogView.php';
              </script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Information</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #4facfe, #ffffff);
            height: 100vh;
        }

        .card {
            border-radius: 15px;
        }

        .btn-custom {
            background-color: #4facfe;
            color: white;
        }

        .btn-custom:hover {
            background-color: #007bff;
        }
    </style>
</head>

<body>

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card p-4 shadow" style="width: 400px;">
        <h3 class="text-center mb-3">Dog Information</h3>

        <form method="POST">

            <div class="mb-2">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="Name" required>
            </div>

            <div class="mb-2">
                <label class="form-label">Breed</label>
                <select name="breed" class="form-control" required>
                    <option value="">Select Breed</option>
                    <option>Chow Chow</option>
                    <option>Golden Retriever</option>
                    <option>Bulldog</option>
                    <option>Poodle</option>
                    <option>Labrador</option>
                    <option>Beagle</option>
                    <option>Boxer</option>
                    <option>Shih Tzu</option>
                    <option>Chihuahua</option>
                    <option>Husky</option>
                </select>
            </div>

            <div class="mb-2">
                <label class="form-label">Age</label>
                <input type="text" name="age" class="form-control" placeholder="Age" required>
            </div>

            <div class="mb-2">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address" required>
            </div>

            <div class="mb-2">
                <label class="form-label">Color</label>
                <input type="text" name="color" class="form-control" placeholder="Color" required>
            </div>

            <div class="mb-2">
                <label class="form-label">Height</label>
                <input type="text" name="height" class="form-control" placeholder="Height" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Weight</label>
                <input type="text" name="weight" class="form-control" placeholder="Weight" required>
            </div>

            
            <button type="submit" name="save" class="btn btn-custom w-100">
                 Save
            </button>

          
            <a href="DogView.php" class="btn btn-primary w-100 mt-2">
                 View Records
            </a>

        </form>

        <p class="text-center mt-3 text-muted" style="font-size:12px;">
            © alesondepano
        </p>
    </div>

</div>

</body>
</html>