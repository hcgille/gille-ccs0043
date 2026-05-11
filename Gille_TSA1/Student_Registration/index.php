<?php
$submitted = $_SERVER["REQUEST_METHOD"] == "POST";

if ($submitted) {
$firstName = trim($_POST["firstName"]);
$middleName = trim($_POST["middleName"]);
$lastName = trim($_POST["lastName"]);
$gender = $_POST["gender"] ?? "";
$birthday = $_POST["birthday"];
$age = $_POST["age"];
$address = trim($_POST["address"]);
$email = trim($_POST["email"]);
$phone = trim($_POST["phone"]);
$studentNumber = trim($_POST["studentNumber"]);
$course = trim($_POST["course"]);
$yearLevel = $_POST["yearLevel"];
$previousSchool = trim($_POST["previousSchool"]);
$strand = trim($_POST["strand"]);
$emergencyName = trim($_POST["emergencyName"]);
$emergencyContact = trim($_POST["emergencyContact"]);
$hobbies = $_POST["hobbies"] ?? [];
$agree = isset($_POST["agree"]) ? "Yes" : "No";

$fullName = ucwords(strtolower($firstName . " " . $middleName . " " . $lastName));
$addressFormatted = ucwords(strtolower($address));
$emailFormatted = strtolower($email);
$courseFormatted = strtoupper($course);
$previousSchoolFormatted = ucwords(strtolower($previousSchool));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Registration Form</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h1>Student Registration Form</h1>
<p class="subtitle">Please fill out the required information below.</p>

<form method="POST" action="">
<h2>Personal Information</h2>

<div class="form-row">
<div>
<label>First Name</label>
<input type="text" name="firstName" required>
</div>

<div>
<label>Middle Name</label>
<input type="text" name="middleName">
</div>

<div>
<label>Last Name</label>
<input type="text" name="lastName" required>
</div>
</div>

<div class="form-row">
<div>
<label>Gender</label>
<select name="gender" required>
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
<option>Prefer not to say</option>
</select>
</div>

<div>
<label>Birthday</label>
<input type="date" name="birthday" required>
</div>

<div>
<label>Age</label>
<input type="number" name="age" min="1" required>
</div>
</div>

<label>Complete Address</label>
<textarea name="address" rows="3" required></textarea>

<h2>Contact Information</h2>

<div class="form-row">
<div>
<label>Email Address</label>
<input type="email" name="email" required>
</div>

<div>
<label>Contact Number</label>
<input type="text" name="phone" required>
</div>
</div>

<h2>Educational Background</h2>

<div class="form-row">
<div>
<label>Student Number</label>
<input type="text" name="studentNumber" required>
</div>

<div>
<label>Course / Program</label>
<input type="text" name="course" required>
</div>

<div>
<label>Year Level</label>
<select name="yearLevel" required>
<option value="">Select Year</option>
<option>1st Year</option>
<option>2nd Year</option>
<option>3rd Year</option>
<option>4th Year</option>
</select>
</div>
</div>

<div class="form-row">
<div>
<label>Previous School</label>
<input type="text" name="previousSchool" required>
</div>

<div>
<label>Senior High Strand</label>
<input type="text" name="strand" placeholder="Example: STEM, ABM, HUMSS">
</div>
</div>

<h2>Emergency Contact</h2>

<div class="form-row">
<div>
<label>Contact Person</label>
<input type="text" name="emergencyName" required>
</div>

<div>
<label>Emergency Contact Number</label>
<input type="text" name="emergencyContact" required>
</div>
</div>

<h2>Interests</h2>

<div class="checkbox-group">
<label><input type="checkbox" name="hobbies[]" value="Reading"> Reading</label>
<label><input type="checkbox" name="hobbies[]" value="Writing"> Writing</label>
<label><input type="checkbox" name="hobbies[]" value="Sports"> Sports</label>
<label><input type="checkbox" name="hobbies[]" value="Music"> Music</label>
<label><input type="checkbox" name="hobbies[]" value="Technology"> Technology</label>
</div>

<div class="agreement">
<label>
<input type="checkbox" name="agree" required>
I confirm that the information provided is true and correct.
</label>
</div>

<div class="buttons">
<button type="submit">Submit Registration</button>
<button type="reset" class="reset">Clear Form</button>
</div>
</form>

<?php if ($submitted): ?>
<div class="output">
<h2>Registration Summary</h2>

<p><strong>Full Name:</strong> <?php echo $fullName; ?></p>
<p><strong>Gender:</strong> <?php echo $gender; ?></p>
<p><strong>Birthday:</strong> <?php echo $birthday; ?></p>
<p><strong>Age:</strong> <?php echo number_format($age); ?></p>
<p><strong>Address:</strong> <?php echo $addressFormatted; ?></p>
<p><strong>Email:</strong> <?php echo $emailFormatted; ?></p>
<p><strong>Contact Number:</strong> <?php echo $phone; ?></p>

<hr>

<p><strong>Student Number:</strong> <?php echo strtoupper($studentNumber); ?></p>
<p><strong>Course / Program:</strong> <?php echo $courseFormatted; ?></p>
<p><strong>Year Level:</strong> <?php echo $yearLevel; ?></p>
<p><strong>Previous School:</strong> <?php echo $previousSchoolFormatted; ?></p>
<p><strong>Senior High Strand:</strong> <?php echo strtoupper($strand); ?></p>

<hr>

<p><strong>Emergency Contact Person:</strong> <?php echo ucwords(strtolower($emergencyName)); ?></p>
<p><strong>Emergency Contact Number:</strong> <?php echo $emergencyContact; ?></p>

<p><strong>Interests:</strong>
<?php
if (!empty($hobbies)) {
echo implode(", ", $hobbies);
} else {
echo "None selected";
}
?>
</p>

<p><strong>Agreement Confirmed:</strong> <?php echo $agree; ?></p>
</div>
<?php endif; ?>
</div>

</body>
</html>