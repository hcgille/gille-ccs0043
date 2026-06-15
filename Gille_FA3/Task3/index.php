<!DOCTYPE html>
<html>
<head>
<title>User Defined Function</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

// USER DEFINED FUNCTION
function computeValues($param1, $param2, $param3) {

$addition = $param1 + $param2 + $param3;
$subtraction = $param1 - $param2 - $param3;
$multiplication = $param1 * $param2 * $param3;
$division = $param1 / $param2 / $param3;

return [
"addition" => $addition,
"subtraction" => $subtraction,
"multiplication" => $multiplication,
"division" => $division
];
}

// PARAMETERS
$num1 = 25;
$num2 = 13;
$num3 = 6;

// CALL FUNCTION
$result = computeValues($num1, $num2, $num3);

?>

<div class="container">

<h1>User Defined Function</h1>

<table>

<tr>
<th colspan="2">
My Parameter Values:
<?php echo "$num1, $num2, $num3"; ?>
</th>
</tr>

<tr>
<td>Addition</td>
<td><?php echo $result['addition']; ?></td>
</tr>

<tr>
<td>Subtraction</td>
<td><?php echo $result['subtraction']; ?></td>
</tr>

<tr>
<td>Multiplication</td>
<td><?php echo $result['multiplication']; ?></td>
</tr>

<tr>
<td>Division</td>
<td><?php echo $result['division']; ?></td>
</tr>

</table>

</div>

</body>
</html>