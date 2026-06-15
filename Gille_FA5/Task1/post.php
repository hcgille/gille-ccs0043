<?php

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];

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

    if(!preg_match("/^\d{4}-\d{2}-\d{2}$/", $dob))
    {
        $error .= "Date of Birth must follow the format YYYY-MM-DD.<br>";
    }
    else
    {
        $dateParts = explode("-", $dob);

        if(!checkdate($dateParts[1], $dateParts[2], $dateParts[0]))
        {
            $error .= "Invalid Date of Birth.<br>";
        }
    }

    if(!preg_match("/^[A-Za-z0-9 ,.-]+$/", $address))
    {
        $error .= "Address contains invalid characters.<br>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Personal Information - POST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <h2>Personal Information Using $_POST</h2>

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

        <div class="form-row">
            <label>Date of Birth (YYYY-MM-DD):</label>
            <input type="text" name="dob" placeholder="YYYY-MM-DD" required>
        </div>

        <div class="form-row">
            <label>Address:</label>
            <input type="text" name="address" required>
        </div>

        <input type="submit" value="Submit" class="btn">

    </form>

    <?php

    if($error != "")
    {
        echo "<div class='error'>$error</div>";
    }
    elseif($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo "<div class='result'>";
        echo "<h3>Submitted Information</h3>";
        echo "<p>First Name: $firstname</p>";
        echo "<p>Middle Name: $middlename</p>";
        echo "<p>Last Name: $lastname</p>";
        echo "<p>Date of Birth: $dob</p>";
        echo "<p>Address: $address</p>";
        echo "</div>";
    }

    ?>

</div>

</body>
</html>
