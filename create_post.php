<?php include_once "config/init.php"; ?>

<?php
$db = new Database();
$post = new Blogpost();
$validate = new Validator();

$errors = array();
$success = array();
$images_name = array();

if(isset($_POST["submit"])){

  $fields = array("title", "city", "story");

  $required_errors = $validate->isRequired($fields);
  $upload_errors = $validate->uploadImage($_FILES["upload_pic"]);
  if($required_errors){
    foreach($required_errors as $error){
      $errors[] = $error;
    }
  }
  if($upload_errors){
    foreach($upload_errors as $error){
      $errors[] = $error;
    }
  }

  if(empty($errors)){
    for($i=0; $i < count($_FILES["upload_pic"]["name"]); $i++){
      $name = $_FILES["upload_pic"]["name"][$i];
      $tmp_name = $_FILES["upload_pic"]["tmp_name"][$i];
      $size = $_FILES["upload_pic"]["size"][$i];
      $type = $_FILES["upload_pic"]["type"][$i];
      $upload_err = $_FILES['upload_pic']['error'][$i];
      $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

      $dir = "images/travel_pic/";
      $newName = uniqid()."_".time().".".$ext;

      move_uploaded_file($tmp_name,$dir.$newName);
      if($upload_err > 0){
        $errors[] = "Error uploading $name, please try again!";
      }
      else{
        $images_name[] = $newName;
      }
    }

    $data = array();
    $data["title"] = $_POST["title"];
    $data["city"] = $_POST["city"];
    $data["story"] = $_POST["story"];
    $data["author_id"] = $_SESSION["userId"];
    $data["author"] = $_SESSION["name"];

    if($post->createPost($data)){
      $upload_count = 0;
      $value = array();
      $post_id = $db->lastInsertId();
      echo $post_id;
      foreach ($images_name as $image_name){
        $value["post_id"] = $post_id;
        $value["dir_name"] = $image_name;
        if($post->addImages($value)){
          $upload_count ++;
        }
      }
      if(count($images_name) == $upload_count){
        redirect("dashboard.php", "Your story has been published", "success"); 
      }
      else{
        $post->deletePost($post_id);
        redirect("dashboard.php", "Something went wrong", "error");
      }
    }
    else{
      redirect("dashboard.php", "Something went wrong", "error");
    }

  }else{
    $errors;
  } 
}


$template = new Template('templates/create_post.php');

$template->errorMsg = $errors;
$template->successMsg = $success;

echo $template;
?>