<?php
session_start();
require '../backend/connection.php';
if(isset($_POST[user_email]) && isset($_POST[user_password])){
  function validate_data_from_user($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }
  $user_email= validate_data_from_user($_POST['user_email']);
  $user_password = validate_data_from_user($_POST['user_password']);
  if(empty($user_email)){
    header("Location: ../login.php?required_msg=Email is Required");
    exit();
  }elseif(empty($user_password)){
    header("Location: ../login.php?required_msg=Password is Required");
    exit();
  }else{
    $encrypt_submitted_password=md5($user_password);
    $sql="SELECT * FROM users WHERE usr_email = '$user_email' AND password = '$encrypt_submitted_password'";
    $output_login_query = mysqli_query($connection,$sql);
    if(mysqli_num_rows($output_login_query)===1){
      $row_data= mysqli_fetch_assoc($output_login_query);
    }
  }
}
?>