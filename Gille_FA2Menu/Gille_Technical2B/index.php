<!DOCTYPE html>
<html>
<head>
<title>Grade Ranking Program</title>
<link rel="stylesheet" href="style2B.css">
</head>
<body>

<div class="form-box">
<h2>Grade Ranking Program</h2>

<form method="post">
<input type="text" name="fullname" placeholder="Enter your full name" required>
<input type="number" name="grade" placeholder="Enter your grade" min="0" max="100" required>
<button type="submit">Show Result</button>
</form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = $_POST["fullname"];
$grade = $_POST["grade"];
$rank = "";
$image = "";

if ($grade >= 93 && $grade <= 100) {
$rank = "A";
$image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSM8M0QHVbkElOo8MK7A0IPPQ1cpvYjVbyaQg&s=10";
} elseif ($grade >= 90 && $grade <= 92) {
$rank = "A-";
$image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSIhHHCgjGZCdhFdN9omRyzlG0VQ1nowD7eTA&s=10";
} elseif ($grade >= 87 && $grade <= 89) {
$rank = "B+";
$image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG0FgsJ0Yb3ETTLV6qsr8d4YFLymtSOFp95Q&s=10";
} elseif ($grade >= 83 && $grade <= 86) {
$rank = "B";
$image = "https://images.vexels.com/media/users/3/134789/isolated/preview/aa4c5ca0e2a83abbf167e49c8a50e834-happy-smile-emoji-emoticon-icon.png";
} elseif ($grade >= 80 && $grade <= 82) {
$rank = "B-";
$image = "https://images.emojiterra.com/google/android-11/512px/1f642.png";
} elseif ($grade >= 77 && $grade <= 79) {
$rank = "C+";
$image = "https://em-content.zobj.net/source/facebook/355/neutral-face_1f610.png";
} elseif ($grade >= 73 && $grade <= 76) {
$rank = "C";
$image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6Is9RrnTJEx2WyhtMf6nd4fS6rstXv4WyIQ&s=10";
} elseif ($grade >= 70 && $grade <= 72) {
$rank = "C-";
$image = "https://images.emojiterra.com/google/noto-emoji/unicode-17.0/color/1024px/1f979.png";
} elseif ($grade >= 67 && $grade <= 69) {
$rank = "D+";
$image = "https://s3.amazonaws.com/pix.iemoji.com/images/emoji/apple/ios-18/256/0767.png";
} elseif ($grade >= 63 && $grade <= 66) {
$rank = "D";
$image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfImf1XPoY7sHxLH98hSMM_dIqWNtUWtSF8A&s=10";
} elseif ($grade >= 60 && $grade <= 62) {
$rank = "D-";
$image = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6jZUap6yqXrk5vxju4CemHTw377-83e9BgA&s=10";
} else {
$rank = "F";
$image = "https://content.presentermedia.com/files/clipart/00028000/28697/angry_emoji_face_800_wht.jpg";
}
?>

<div class="output-card">

<div class="left-section">
<div class="name-box">
Name: <?php echo htmlspecialchars($name); ?>
</div>

<div class="grade-row">
<div class="info-box">
<p>Rank</p>
<h3><?php echo $rank; ?></h3>
</div>

<div class="info-box">
<p>Grade</p>
<h3><?php echo $grade; ?></h3>
</div>
</div>
</div>

<div class="picture-box">
<img src="<?php echo $image; ?>" alt="Grade Emoji">
</div>

</div>

<?php
}
?>

</body>
</html>