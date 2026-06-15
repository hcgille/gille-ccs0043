<!DOCTYPE html>
<html>
<head>
<title>Array Activity</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php

$students = [
[
"name" => "Aaron Cruz",
"image" => "https://static.vecteezy.com/system/resources/thumbnails/005/346/410/small/close-up-portrait-of-smiling-handsome-young-caucasian-man-face-looking-at-camera-on-isolated-light-gray-studio-background-photo.jpg",
"age" => 20,
"birthday" => "January 15, 2005",
"contact" => "09171234567"
],
[
"name" => "Bianca Santos",
"image" => "https://t4.ftcdn.net/jpg/05/54/82/31/360_F_554823107_L5FenFADo2xcvsqHvdSFtudacSdrgI2e.jpg",
"age" => 19,
"birthday" => "March 22, 2006",
"contact" => "09181234567"
],
[
"name" => "Charles Lim",
"image" => "https://www.shutterstock.com/image-photo/portrait-handsome-young-asian-man-600nw-2471780801.jpg",
"age" => 20,
"birthday" => "July 10, 2005",
"contact" => "09191234567"
],
[
"name" => "Diana Reyes",
"image" => "https://static.vecteezy.com/system/resources/thumbnails/053/630/837/small/portrait-of-a-young-business-woman-standing-with-arms-crossed-on-white-background-free-photo.jpeg",
"age" => 18,
"birthday" => "February 8, 2007",
"contact" => "09201234567"
],
[
"name" => "Ethan Flores",
"image" => "https://t3.ftcdn.net/jpg/06/49/73/24/360_F_649732420_uDbZcCgIJvgRPgwVtFRAcQqEKJl3Gweu.jpg",
"age" => 21,
"birthday" => "September 30, 2004",
"contact" => "09211234567"
],
[
"name" => "Faith Garcia",
"image" => "https://t4.ftcdn.net/jpg/02/80/12/89/360_F_280128921_oMhxLj9zQDFeyaJF2vfKfeDo4eMvODN3.jpg",
"age" => 20,
"birthday" => "May 14, 2005",
"contact" => "09221234567"
],
[
"name" => "Gabriel Tan",
"image" => "https://t4.ftcdn.net/jpg/03/43/33/89/360_F_343338946_JF4izSZaeeoV3b9Nwh7rAemCJ4M8SyEb.jpg",
"age" => 19,
"birthday" => "August 2, 2006",
"contact" => "09231234567"
],
[
"name" => "Hannah Lee",
"image" => "https://cdn.create.vista.com/api/media/small/250363326/stock-photo-smiling-attractive-woman-white-sweater-looking-camera-isolated-pink",
"age" => 18,
"birthday" => "December 11, 2007",
"contact" => "09241234567"
],
[
"name" => "Ivan Torres",
"image" => "https://img.freepik.com/free-photo/closeup-smiling-determined-young-asian-man_1262-4843.jpg?semt=ais_hybrid&w=740&q=80",
"age" => 22,
"birthday" => "October 25, 2003",
"contact" => "09251234567"
],
[
"name" => "Julia Mendoza",
"image" => "https://t3.ftcdn.net/jpg/03/36/94/42/360_F_336944276_tpWzmwFi6JfZln5VlfBC1BZu5jgDOAl8.jpg",
"age" => 20,
"birthday" => "June 18, 2005",
"contact" => "09261234567"
]
];

// SORT ARRAY ALPHABETICALLY
usort($students, function($a, $b) {
return strcmp($a['name'], $b['name']);
});

?>

<div class="container">

<h1>Student Information Table</h1>

<table>

<tr>
<th>No.</th>
<th>Name</th>
<th>Image</th>
<th>Age</th>
<th>Birthday</th>
<th>Contact Number</th>
</tr>

<?php
$no = 1;

foreach($students as $student) {
?>

<tr>
<td><?php echo $no++; ?></td>

<td><?php echo $student['name']; ?></td>

<td>
<img src="<?php echo $student['image']; ?>" alt="Student Image">
</td>

<td><?php echo $student['age']; ?></td>

<td><?php echo $student['birthday']; ?></td>

<td><?php echo $student['contact']; ?></td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>