<?php
session_start();

$error = "";

$validColors = ["red", "orange", "yellow", "green", "blue", "indigo", "violet"];

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    for($i = 1; $i <= 5; $i++)
    {
        $color = strtolower(trim($_POST["color".$i]));

        if(!in_array($color, $validColors))
        {
            $error .= "Favorite Color $i must be one of the ROYGBIV colors only.<br>";
        }
    }

    if($error == "")
    {
        for($i = 1; $i <= 5; $i++)
        {
            $_SESSION["color".$i] = ucfirst(strtolower(trim($_POST["color".$i])));
        }

        header("Location: ResultColors.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Favorite Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Favorite Colors</h1>
    <p class="subtitle">Type 5 colors from ROYGBIV: Red, Orange, Yellow, Green, Blue, Indigo, Violet.</p>

    <form method="post">

        <div class="form-row">
            <label>Favorite Color 1:</label>
            <input type="text" name="color1" required>
        </div>

        <div class="form-row">
            <label>Favorite Color 2:</label>
            <input type="text" name="color2" required>
        </div>

        <div class="form-row">
            <label>Favorite Color 3:</label>
            <input type="text" name="color3" required>
        </div>

        <div class="form-row">
            <label>Favorite Color 4:</label>
            <input type="text" name="color4" required>
        </div>

        <div class="form-row">
            <label>Favorite Color 5:</label>
            <input type="text" name="color5" required>
        </div>

        <input type="submit" value="Send Colors" class="btn">

    </form>

    <?php
    if($error != "")
    {
        echo "<div class='error'>$error</div>";
    }
    ?>

</div>

</body>
</html>