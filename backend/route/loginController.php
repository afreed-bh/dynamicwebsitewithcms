<?php
session_start();
require '../../backend/connection.php';
if(isset($_POST['user_email']) && isset($_POST['user_password'])){
  function validate_data_from_user($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
  }
  $user_email= validate_data_from_user($_POST['user_email']);
  $user_password = validate_data_from_user($_POST['user_password']);
  if(empty($user_email)){
    header("Location: ../../login.php?required_msg=Email is Required");
    exit();
  }elseif(empty($user_password)){
    header("Location: ../../login.php?required_msg=Password is Required");
    exit();
  }else{
    $encrypt_submitted_password=md5($user_password);
    $user_sql="SELECT * FROM users WHERE usr_email = '$user_email' AND password = '$encrypt_submitted_password'";
    $moderator_sql="SELECT * FROM moderator WHERE usr_email = '$user_email' AND password = '$encrypt_submitted_password'";
    $output_login_query_usr = mysqli_query($connection,$user_sql);
    $output_login_query_moderator = mysqli_query($connection,$moderator_sql);
    if(mysqli_num_rows($output_login_query_usr)===1){
      $row_data= mysqli_fetch_assoc($output_login_query_usr);
      if($row_data['usr_email'] === $user_email && $row_data['password'] === $encrypt_submitted_password ){
        $_SESSION['id']=$row_data['id'];
        $_SESSION['name']=$row_data['name'];
        $_SESSION['usr_email']=$row_data['usr_email'];
        $_SESSION['role']=$row_data['role'];
        $_SESSION['status']=$row_data['status'];
        if($row_data['status'] === 'Inactive'){
          hearder("Location: ../../dashboard.php?account_msg= Sorry your Account is not Varified Please verifiy your account by going to setting and tap on <p style ='color:blue'>Request for Varification</p>");
          exit();
        }elseif($row_data['status'] === 'Deactive'){
          header("Location: ../../login.php?account_msg= Your account has been <p style='color:red'> deactivated</p>. Please contact with the admin");
          exit();
        }else{
          header("Location: ../../dashboard.php");
          exit();
        }
      }
    }
  }if(mysqli_num_rows($output_login_query_moderator)===1){
  $row_data= mysqli_fetch_assoc($output_login_query_moderator);
      if($row_data['	usr_email'] === $user_email && $row_data['password'] === $encrypt_submitted_password ){
        $_SESSION['id']=$row_data['id'];
        $_SESSION['name']=$row_data['name'];
        $_SESSION['usr_email']=$row_data['usr_email'];
        $_SESSION['role']=$row_data['role'];
        $_SESSION['status']=$row_data['status'];
        if($row_data['status'] === 'Deactive'){
          header("Location: ../../login.php?account_msg= Your account has been <p style='color:red'> deactivated</p>. Please contact with the admin");
        }else{
          header("Location: ../../dashboard.php");
          exit();
        }
      }
    }
 }else{
  header("Location: ../../login.php?error=Incorect User name or password");
  exit();
}else{
  header("Location: ../../login.php");
  exit();
}
?>