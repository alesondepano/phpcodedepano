<?php
$conn = new mysqli("localhost", "root", "", "Dog_Information");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM dogs WHERE id=$id");
    header("Location: DogView.php");
    exit();
}

$result = $conn->query("SELECT * FROM dogs");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>

    
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
            border: none;
        }

        .btn-custom:hover {
            background-color: #007bff;
        }

        .btn-edit {
            background-color: #007bff;
            color: white;
            border: none;
        }

        .btn-edit:hover {
            background-color: #4facfe;
        }

        .btn-delete {
            background-color: #e53935;
            color: white;
            border: none;
        }

        .btn-delete:hover {
            background-color: #c62828;
        }

        .btn {
            border-radius: 8px;
            transition: 0.3s ease;
        }
    </style>
</head>

<body>

<div class="container mt-5">

    <div class="card shadow p-4">

        <h3 class="text-center mb-4">Dog Records</h3>

        <table class="table table-bordered table-hover">
            <thead class="table-primary text-center">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Breed</th>
                    <th>Age</th>
                    <th>Address</th>
                    <th>Color</th>
                    <th>Height</th>
                    <th>Weight</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody class="text-center">
                <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['breed']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['color']; ?></td>
                    <td><?php echo $row['height']; ?></td>
                    <td><?php echo $row['weight']; ?></td>

                    <td>

                    
                        <a href="DogEdit.php?id=<?php echo $row['id']; ?>" 
                        class="btn btn-edit btn-sm me-1">
                        Edit
                        </a>

                    
                        <a href="DogView.php?delete=<?php echo $row['id']; ?>" 
                        onclick="return confirm('Are you sure you want to delete this record?')"
                        class="btn btn-delete btn-sm">
                        Delete
                        </a>

                    </td>

                </tr>
                <?php } ?>
            </tbody>

        </table>

                <a href="DogRegister.php" class="btn btn-custom mb-3">
            Back to Register
        </a>

    </div>

</div>

</body>
</html>