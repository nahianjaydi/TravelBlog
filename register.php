<?php include_once "config/init.php"; ?>

<?php
$user = new User();
$validate = new Validator();

$errors = array();
$success = array();

if(isset($_POST["register"])){;

  $fields = array("name", "email", "password", "confirm_password");
  $name = $_POST["name"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];

  $required_errors = $validate->isRequired($fields);
  $email_validation = $validate->emailValidator($email);
  $password_match = $validate->checkPassword($password, $confirm_password);

  if($required_errors){
    foreach($required_errors as $error){
      $errors[] = $error;
    }
  }
  else{
    if($email_validation == false){
      $errors[] = "<strong>Email</strong> is not valid";
    }
  
    elseif($password_match == false){
      $errors[] = "<strong>Password</strong> and confirm password field doesn't match";
    }

    elseif($user->emailExist($email)){
      $errors[] = "This <strong>email</strong> is already in use";
    }
  }

  if(empty($errors)){

    $data = array();
    $data["name"] = $name;
    $data["email"] = $email;
    $data["password"] = password_hash($password, PASSWORD_DEFAULT);

    if($user->createUser($data)){
      redirect("index.php", "Registration successful", "success");
    }
    else{
      redirect("index.php", "Something went wrong", "error");
    }
  }
  else{
    $errors;
  }
  
}

$template = new Template('templates/register.php');

$template->errorMsg = $errors;
$template->successMsg = $success;


$template->title = "Travel blogs";

echo $template;
?>