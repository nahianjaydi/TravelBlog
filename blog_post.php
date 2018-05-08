<?php include_once "config/init.php"; ?>

<?php
$post = new Blogpost();

$template = new Template('templates/blog_post.php');

if(isset($_GET["id"]) && !empty($_GET["id"])){
  $post_id = $_GET["id"];

  $template->post = $post->getPost($post_id);
  $template->images = $post->getPostImages($post_id);
  $template->blogPosts = $post->getAllPosts();

  $template->title = "Travel blogs";

  echo $template;
}
else{
  header("Location: index.php");
}

?>