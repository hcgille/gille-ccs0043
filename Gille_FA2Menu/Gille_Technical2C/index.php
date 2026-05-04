<!DOCTYPE html>
<html>
<head>
<title>Two-Digit Combinations</title>
<link rel="stylesheet" href="style2C.css">
</head>
<body>

<div class="container">

<h2>Two-Digit Decimal Combinations</h2>

<div class="output">
<?php
for ($i = 0; $i <= 99; $i++) {
echo str_pad($i, 2, "0", STR_PAD_LEFT);

if ($i < 99) {
echo ", ";
}
}
?>
</div>

</div>

</body>
</html>