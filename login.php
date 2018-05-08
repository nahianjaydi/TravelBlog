<?php include_once "config/init.php"; ?>

<?php
$user = new User();
$validate = new Validator();

$errors = array();
$success = array();

if(isset($_POST["login"])){;

  $fields = array("email", "password");
  $email = $_POST["email"];
  $password = $_POST["password"];

  $required_errors = $validate->isRequired($fields);
  $email_validation = $validate->emailValidator($email);

  if($required_errors){
    foreach($required_errors as $error){
      $errors[] = $error;
    }
  }
  else{
    if($email_validation == false){
      $errors[] = "<strong>Email</strong> is not valid";
    }
  }



  if(empty($errors)){
    $newUser = $user->emailExist($email);
    if($newUser){
      if(password_verify($password, $newUser->password)){
        $_SESSION["is_looged_in"] = true;
        $_SESSION["userId"] = $newUser->id;
        $_SESSION["name"] = $newUser->name;
        $_SESSION["email"] = $newUser->email;
        redirect("dashboard.php");
      }
      else{
        $errors[] = "<strong>Password</strong> doesn't not match";
      }
    }
    else{
      $errors[] = "<strong>Email</strong> doesn't not exist";
    }
  }
  else{
    $errors;
  }
  
}

$template = new Template('templates/login.php');

$template->errorMsg = $errors;

$template->title = "Travel blogs";

echo $template;
?>