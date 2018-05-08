<?php include_once "config/init.php"; ?>

<?php
$posts = new Blogpost();

$template = new Template('templates/frontpage.php');



$template->title = "Travel blogs";
$template->blogPosts = $posts->getAllPosts();

echo $template;
?>