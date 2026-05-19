<!DOCTYPE html>
<html>
<head>
    <title>Volume of Shapes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php

// USER DEFINED FUNCTIONS

function cubeVolume($s) {
    return pow($s, 3);
}

function rectangularPrismVolume($l, $w, $h) {
    return $l * $w * $h;
}

function cylinderVolume($r, $h) {
    return pi() * pow($r, 2) * $h;
}

function coneVolume($r, $h) {
    return (1/3) * pi() * pow($r, 2) * $h;
}

function sphereVolume($r) {
    return (4/3) * pi() * pow($r, 3);
}

?>

<div class="container">

    <div class="title-box">
        Volume of Shapes
    </div>

    <div class="grid header">
        <div>Shape</div>
        <div>Values</div>
        <div>Formula</div>
        <div>Answer</div>
    </div>

    <!-- CUBE -->
    <div class="grid row">
        <div>Cube</div>
        <div>s = 5</div>
        <div>V = s³</div>
        <div><?php echo cubeVolume(5); ?></div>
    </div>

    <!-- RECTANGULAR PRISM -->
    <div class="grid row">
        <div>Rectangular Prism</div>
        <div>l = 4, w = 3, h = 2</div>
        <div>V = l × w × h</div>
        <div><?php echo rectangularPrismVolume(4,3,2); ?></div>
    </div>

    <!-- CYLINDER -->
    <div class="grid row">
        <div>Cylinder</div>
        <div>r = 3, h = 7</div>
        <div>V = πr²h</div>
        <div><?php echo round(cylinderVolume(3,7), 2); ?></div>
    </div>

    <!-- CONE -->
    <div class="grid row">
        <div>Cone</div>
        <div>r = 3, h = 6</div>
        <div>V = ⅓πr²h</div>
        <div><?php echo round(coneVolume(3,6), 2); ?></div>
    </div>

    <!-- SPHERE -->
    <div class="grid row">
        <div>Sphere</div>
        <div>r = 4</div>
        <div>V = ⁴⁄₃πr³</div>
        <div><?php echo round(sphereVolume(4), 2); ?></div>
    </div>

</div>

</body>
</html>