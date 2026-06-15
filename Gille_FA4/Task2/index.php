<!DOCTYPE html>
<html>
<head>
    <title>String Functions in PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$names = [
    "chrisa",
    "john doe",
    "maria clara",
    "andrew santos",
    "patrick lee",
    "angelica cruz",
    "daniel reyes",
    "samantha joy",
    "francis tan",
    "beatrice lim",
    "charles yu",
    "jessica anne",
    "victoria dela cruz",
    "hannah grace",
    "albert flores",
    "catherine mae",
    "ivan torres",
    "louie garcia",
    "gabriela paz",
    "adrian cole"
];

?>

<div class="container">

    <div class="title-box">
        List of Names
    </div>

    <div class="grid-table header">

        <div>Name</div>
        <div>Number of characters</div>
        <div>Uppercase first character</div>
        <div>Replace vowels with @</div>
        <div>Check position of character "a"</div>
        <div>Reverse name</div>

    </div>

    <?php foreach($names as $name) {

        $length = strlen($name);

        $uppercase = ucfirst($name);

        $replaceVowels = str_ireplace(
            ['a','e','i','o','u'],
            '@',
            $name
        );

        $position = stripos($name, 'a');

        if($position === false){
            $position = "Not Found";
        }

        $reverse = strrev($name);

    ?>

    <div class="grid-table row">

        <div><?php echo $name; ?></div>

        <div><?php echo $length; ?></div>

        <div><?php echo $uppercase; ?></div>

        <div><?php echo $replaceVowels; ?></div>

        <div><?php echo $position; ?></div>

        <div><?php echo $reverse; ?></div>

    </div>

    <?php } ?>

</div>

</body>
</html>