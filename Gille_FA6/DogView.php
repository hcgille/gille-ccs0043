<?php
include("db_connect.php");

$sql = "SELECT * FROM dog_information";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dog Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="view-container">

    <h2>Dog Records</h2>

    <?php

    $dogNumber = 1;

    while($row = mysqli_fetch_assoc($result))
    {
        echo "<div class='dog-card'>";
        echo "<h3>Dog ".$dogNumber."</h3>";
        echo "<p>Name: ".$row['d_name']."</p>";
        echo "<p>Breed: ".$row['d_breed']."</p>";
        echo "<p>Age: ".$row['d_age']."</p>";
        echo "<p>Address: ".$row['d_address']."</p>";
        echo "<p>Color: ".$row['d_color']."</p>";
        echo "<p>Height: ".$row['d_height']."</p>";
        echo "<p>Weight: ".$row['d_weight']."</p>";
        echo "</div>";

        $dogNumber++;
    }

    ?>

    <a href="DogRegister.php">Back to Register</a>

</div>

</body>
</html>