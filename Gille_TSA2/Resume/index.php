<?php
require("data.php");
include("header.php");
?>

<div class="resume-box">

    <div class="top-section">
        <div class="photo-box">
            <img src="<?php echo $image; ?>" alt="Profile Picture">
        </div>

        <div class="info-box">
            <h2><?php echo $name; ?></h2>
            <p><?php echo $course; ?></p>
            <p>Student Resume</p>
        </div>
    </div>

    <div class="menu-link">
        <a href="career.php">• Career Objective</a>
    </div>

    <div class="menu-link">
        <a href="personal.php">• Personal Information Page</a>
    </div>

    <div class="menu-link">
        <a href="education.php">• Educational Attainment Page</a>
    </div>

    <div class="menu-link">
        <a href="skills.php">• Skills Page</a>
    </div>

    <div class="menu-link">
        <a href="affiliation.php">• Affiliation Page</a>
    </div>

    <div class="menu-link">
        <a href="work.php">• Work Experience Page</a>
    </div>

</div>

<?php include("footer.php"); ?>