<!DOCTYPE html>
<html>
<head>
<title>Resume</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
$name = "Harrold Jan C. Gille";
$email = "harroldcgille@gmail.com";
$phone = "+63 995 420 6969";
$address = "Cainta, Rizal";

$school = "FEU Institute of Technology";
$degree = "BSIT-CST";
$schoolYear = "2022 - Present";
?>

<h1><?php echo $name; ?></h1>

<div class="contact">
<?php echo $email; ?> | <?php echo $phone; ?><br>
<?php echo $address; ?>
</div>

<div class="section">
<div class="section-title">EDUCATION</div>
<div class="item">
<b><?php echo $school; ?></b>
<span class="right"><?php echo $schoolYear; ?></span><br>
<?php echo $degree; ?>
</div>
</div>

<div class="section">
<div class="section-title">ACHIEVEMENTS</div>

<div class="item">
<ul>
<li>Karaoke Rental System Project (C++)</li>
<li>Banking System Application (Python)</li>
<li>Pre-order Canteen System (Java)</li>
</ul>
</div>
</div>

<div class="section">
<div class="section-title">TECHNICAL SKILLS</div>
<ul>
<li>Networking Fundamentals</li>
<li>OS Proficiency</li>
<li>Scripting and Programming</li>
</ul>
</div>

</body>
</html>