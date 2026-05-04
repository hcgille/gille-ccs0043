<!DOCTYPE html>
<html>
<head>
<title>Formative Assessment 2 Menu</title>
<link rel="stylesheet" href="styleFA2menu.css">
</head>
<body>

<?php
$buttons = [
["label" => "View PSA 2.1", "link" => "http://localhost/gille-ccs0043/Gille_FA2Menu/Gille_Technical2A/"],
["label" => "View PSA 2.2", "link" => "http://localhost/gille-ccs0043/Gille_FA2Menu/Gille_Technical2B/"],
["label" => "View PSA 2.3", "link" => "http://localhost/gille-ccs0043/Gille_FA2Menu/Gille_Technical2C/"]
];
?>

<div class="container">

<h1>My PSA 2 Outputs</h1>
<p>Select below:</p>

<div class="menu">
<?php foreach ($buttons as $btn) { ?>
<a href="<?php echo $btn['link']; ?>" class="btn">
<?php echo $btn['label']; ?>
</a>
<?php } ?>
</div>

</div>

</body>
</html>