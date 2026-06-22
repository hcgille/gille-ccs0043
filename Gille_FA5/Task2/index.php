<?php

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = $_POST["firstname"];
    $middlename = $_POST["middlename"];
    $lastname = $_POST["lastname"];

    if(!preg_match("/^[A-Za-z ]+$/", $firstname))
    {
        $error .= "First Name should contain letters and spaces only.<br>";
    }

    if(!preg_match("/^[A-Za-z ]+$/", $middlename))
    {
        $error .= "Middle Name should contain letters and spaces only.<br>";
    }

    if(!preg_match("/^[A-Za-z ]+$/", $lastname))
    {
        $error .= "Last Name should contain letters and spaces only.<br>";
    }

    if($error == "")
    {
        setcookie("submitted", "yes", time() + 30);
        setcookie("firstname", $firstname, time() + 10);
        setcookie("middlename", $middlename, time() + 20);
        setcookie("lastname", $lastname, time() + 30);

        header("Location: index.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies Activity</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h1>Cookies Activity</h1>

    <form method="post">

        <div class="form-row">
            <label>First Name:</label>
            <input type="text" name="firstname" required>
        </div>

        <div class="form-row">
            <label>Middle Name:</label>
            <input type="text" name="middlename" required>
        </div>

        <div class="form-row">
            <label>Last Name:</label>
            <input type="text" name="lastname" required>
        </div>

        <input type="submit" value="Submit" class="btn">

    </form>

    <?php

    if($error != "")
    {
        echo "<div class='error'>$error</div>";
    }

    if(isset($_COOKIE["submitted"]))
    {
        echo "<div class='result'>";
        echo "<h2>Cookie Status</h2>";

        if(isset($_COOKIE["firstname"]))
        {
            echo "<p>First Name Cookie: ".$_COOKIE["firstname"]."</p>";
        }

        if(isset($_COOKIE["middlename"]))
        {
            echo "<p>Middle Name Cookie: ".$_COOKIE["middlename"]."</p>";
        }

        if(isset($_COOKIE["lastname"]))
        {
            echo "<p>Last Name Cookie: ".$_COOKIE["lastname"]."</p>";
        }

        echo "</div>";
    }

    ?>

</div>

</body>
</html>
