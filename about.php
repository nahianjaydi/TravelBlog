<?php include_once "config/init.php"; ?>

<?php
// $job = new Job;

$template = new Template('templates/about.php');

$template->title = "Travel blogs";

echo $template;
?>