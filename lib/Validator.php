<?php 

class Validator{

  public $errorMsg = array();

  public function isRequired($fields){
    foreach($fields as $field){
      if(empty($_POST["".$field.""])){
        $error = strtoupper(str_replace("_"," ",$field));
        $errorMsg[] = "<strong>$error</strong> field is required!<br>"; 
      }
    }
    if(empty($errorMsg)){
      return false;
    }
    else{
      return $errorMsg;
    }
  }

  public function uploadImage($fields){
    for($i=0; $i < count($fields["name"]); $i++){
      $name = $fields["name"][$i];
      $tmp_name = $fields["tmp_name"][$i];
      $size = $fields["size"][$i];
      $type = $fields["type"][$i];
      $upload_err = $fields['error'][$i];
      $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
  
      $maxSize = 2097152;
      $allowed = array("jpeg", "jpg", "png");
  

      if($upload_err > 0){
        if($upload_err == 4) {
          $errorMsg[] = "No image selected!!";
        }
        else{
          $errorMsg[] = "Error uploading $name, check allowed image size and type.";
        }    
      }
      elseif($size > $maxSize){
        $errorMsg[] = "Image size should be less then 2mb";
      }
      elseif(!in_array($ext, $allowed)){
        $errorMsg[] = "Image type should be 'jpeg', 'jpg' or 'png'";
      }
    }
    if(empty($errorMsg)){
      return false;
    }
    else{
      return $errorMsg;
    }
  }

  public function emailValidator($email){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      return true;
    }
    else{
      return false;
    }
  }

  public function checkPassword($password, $cPassword){
    if($password == $cPassword){
      return true;
    }
    else{
      return false;
    }
  }

}

?>