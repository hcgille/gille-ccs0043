<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Multiplication Table</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="page">
<h1>Multiplication Table</h1>

<div class="table-container">
<table>
<?php
for ($row = 0; $row <= 10; $row++) {
echo "<tr>";

for ($col = 0; $col <= 10; $col++) {
$product = $row * $col;

if (($row + $col) % 2 == 0) {
echo "<td class='navy'>$product</td>";
} else {
echo "<td class='white'>$product</td>";
}
}

echo "</tr>";
}
?>
</table>
</div>
</div>

</body>
</html>