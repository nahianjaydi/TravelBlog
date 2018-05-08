<?php include_once "config/init.php"; ?>

<?php
$posts = new Blogpost();
$validate = new Validator();
$user = new User();
$errors = array();

$userId = $_SESSION["userId"];
$userName = $_SESSION["name"];
$userEmail = $_SESSION["email"];

if (isset($_POST["del_id"])) {
  $del_id = $_POST["del_id"];
  $images = $posts->getPostImages($del_id);
  $delete_count = 0;
  foreach($images as $image){
    $path = "images/travel_pic/$image->dir_name";
    if(unlink($path)){
      $delete_count ++;
    }
  }
  if(count($images)==$delete_count){
    if ($posts->deletePost($del_id)) {
      redirect("dashboard.php", "Post Deleted", "success");
    }else {
      redirect("dashboard.php", "Error! Post Not Deleted", "error");
    }
  }
}

if(isset($_POST["update_pass"])){
  $fields = array("password", "confirm_password");
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];

  $required_errors = $validate->isRequired($fields);
  $password_match = $validate->checkPassword($password, $confirm_password);

  if($required_errors){
    foreach($required_errors as $error){
      $errors[] = $error;
    }
  }
  else{
    if($password_match == false){
      $errors[] = "<strong>Password</strong> and confirm password field doesn't match";
    }
    else{
      $new_password = password_hash($password, PASSWORD_DEFAULT);
      if($user->updatePassword($userId, $new_password)){
        if($user->logout()){
          redirect("index.php", "Password updated", "success");
        }
      }
      else{
        redirect("dashboard.php", "Error! Password not updated", "error");
      }
    }
  }
}

$template = new Template('templates/dashboard.php');

$template->title = "Travel blogs";
$template->postByUser = $posts->getAllPostsByUser($userId);
$template->userId = $userId;
$template->userName = $userName;
$template->userEmail = $userEmail;

echo $template;
?>