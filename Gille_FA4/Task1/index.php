<?php
require("stories.php");
include("header.php");
?>

<div class="story-grid">
    <?php foreach ($stories as $story) { ?>
        <a href="<?php echo $story['file']; ?>" class="story-card">
            <img src="<?php echo $story['image']; ?>" alt="<?php echo $story['title']; ?>">
            <span><?php echo $story['title']; ?></span>
        </a>
    <?php } ?>
</div>

<?php include("footer.php"); ?>