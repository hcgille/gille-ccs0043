<!DOCTYPE html>
<html>
<head>
<title>Array Operations</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

// ARRAY OF 10 NUMBERS
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// ADDITION
$sum = array_sum($numbers);

// SUBTRACTION
$subtraction = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
$subtraction -= $numbers[$i];
}

// MULTIPLICATION
$product = 1;

foreach ($numbers as $num) {
$product *= $num;
}

// DIVISION
$division = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
$division /= $numbers[$i];
}

?>

<div class="container">

<h1>Array Operations</h1>

<table>

<tr>
<th colspan="2">
Array List:
<?php echo implode(", ", $numbers); ?>
</th>
</tr>

<tr>
<td>Addition</td>
<td><?php echo $sum; ?></td>
</tr>

<tr>
<td>Subtraction</td>
<td><?php echo $subtraction; ?></td>
</tr>

<tr>
<td>Multiplication</td>
<td><?php echo $product; ?></td>
</tr>

<tr>
<td>Division</td>
<td><?php echo $division; ?></td>
</tr>

</table>

</div>

</body>
</html>