<?php
require_once("db_connect.php");

$message = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = $_POST["name"];
    $breed = $_POST["breed"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $color = $_POST["color"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];

    $sql = "INSERT INTO dog_information 
            (d_name, d_breed, d_age, d_address, d_color, d_height, d_weight)
            VALUES 
            ('$name', '$breed', '$age', '$address', '$color', '$height', '$weight')";

    if(mysqli_query($conn, $sql))
    {
        $message = "Dog information saved successfully.";
    }
    else
    {
        $message = "Error: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-container">

    <h2>Dog Information</h2>

    <form method="post">

        <label>Name</label>
        <input type="text" name="name" required>

        <label>Breed</label>
        <input type="text" name="breed" required>

        <label>Age</label>
        <input type="text" name="age" required>

        <label>Address</label>
        <input type="text" name="address" required>

        <label>Color</label>
        <input type="text" name="color" required>

        <label>Height</label>
        <input type="text" name="height" required>

        <label>Weight</label>
        <input type="text" name="weight" required>

        <input type="submit" value="save" class="btn">

    </form>

    <p class="message"><?php echo $message; ?></p>

    <a href="DogView.php">View Dog Records</a>

</div>

</body>
</html>