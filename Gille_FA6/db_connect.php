<?php

$conn = mysqli_connect("localhost", "root", "", "dog_database");

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>