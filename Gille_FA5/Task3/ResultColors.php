<?php
session_start();

$colorStyles = [
    "Red" => "red",
    "Orange" => "orange",
    "Yellow" => "#d6b400",
    "Green" => "green",
    "Blue" => "blue",
    "Indigo" => "indigo",
    "Violet" => "#912891"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result Colors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="result-container">

    <h1>My Favorite Colors</h1>

    <?php
    for($i = 1; $i <= 5; $i++)
    {
        if(isset($_SESSION["color".$i]))
        {
            $color = $_SESSION["color".$i];

            echo "<div class='color-card'>";
            echo "<span>My Favorite Color $i:</span>";
            echo "<strong style='color: ".$colorStyles[$color].";'>".$color."</strong>";
            echo "</div>";
        }
    }
    ?>

    <a href="FavoriteColor.php" class="back-btn">Back</a>

</div>

</body>
</html>