<?php
$conn = new mysqli("localhost", "root", "", "Dog_Information");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];


$result = $conn->query("SELECT * FROM dogs WHERE id=$id");
$row = $result->fetch_assoc();


if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $breed = $_POST['breed'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $color = $_POST['color'];
    $height = $_POST['height'];
    $weight = $_POST['weight'];

    $sql = "UPDATE dogs SET
        name='$name',
        breed='$breed',
        age='$age',
        address='$address',
        color='$color',
        height='$height',
        weight='$weight'
        WHERE id=$id";

    if ($conn->query($sql)) {
        header("Location: DogView.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Dog</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #4facfe, #ffffff);
        }

        .btn-update {
    background-color: #4facfe;
    color: white;
    border: none;
}

.btn-update:hover {
    background-color: #007bff;
}
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card p-4 shadow" style="width:400px; margin:auto;">
        <h3 class="text-center mb-3">Edit Dog</h3>

        <form method="POST">

            <input type="text" name="name" value="<?php echo $row['name']; ?>" class="form-control mb-2" required>
            <select name="breed" class="form-control mb-2" required>

            <option value="">Select Breed</option>

            <option <?php if($row['breed']=="Labrador Retriever") echo "selected"; ?>>Labrador Retriever</option>
            <option <?php if($row['breed']=="Golden Retriever") echo "selected"; ?>>Golden Retriever</option>
            <option <?php if($row['breed']=="German Shepherd") echo "selected"; ?>>German Shepherd</option>
            <option <?php if($row['breed']=="Bulldog") echo "selected"; ?>>Bulldog</option>
            <option <?php if($row['breed']=="Poodle") echo "selected"; ?>>Poodle</option>
            <option <?php if($row['breed']=="Beagle") echo "selected"; ?>>Beagle</option>
            <option <?php if($row['breed']=="Rottweiler") echo "selected"; ?>>Rottweiler</option>
            <option <?php if($row['breed']=="Chow Chow") echo "selected"; ?>>Chow Chow</option>
            <option <?php if($row['breed']=="Shih Tzu") echo "selected"; ?>>Shih Tzu</option>
            <option <?php if($row['breed']=="Chihuahua") echo "selected"; ?>>Chihuahua</option>
            <option <?php if($row['breed']=="Husky") echo "selected"; ?>>Husky</option>

        </select>
            <input type="text" name="age" value="<?php echo $row['age']; ?>" class="form-control mb-2" required>
            <input type="text" name="address" value="<?php echo $row['address']; ?>" class="form-control mb-2" required>
            <input type="text" name="color" value="<?php echo $row['color']; ?>" class="form-control mb-2" required>
            <input type="text" name="height" value="<?php echo $row['height']; ?>" class="form-control mb-2" required>
            <input type="text" name="weight" value="<?php echo $row['weight']; ?>" class="form-control mb-3" required>

           <button name="update" class="btn btn-update w-100">Update Dog</button>
           
            <a href="DogView.php" class="btn btn-secondary w-100 mt-2">
                 Back
            </a>


        </form>
    </div>

</div>

</body>
</html>