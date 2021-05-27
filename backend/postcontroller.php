<?php require'connection.php';
if(isset($_POST['send_confirmation'])){
  $viewer_name=$_POST['viewer_name'];
  $viewer_email=$_POST['viewer_email'];
  $catagory=$_POST['catagory'];
  $msg=$_POST['viewer_msg'];
  $sql="INSERT INTO appointment_from_website(viewer_name, viewer_email, catagory,msg) VALUE ('$viewer_name','$viewer_email','$catagory','$msg')";
  if($connection ->query($sql)===TRUE){
    header("Location: ../index.php?success_alert=We received your mail. We will respond soon",true,  302);
    exit;
  }else{
    header("Location: ../index.php?failed_alert=We could not receive your mail. Please try again later",true,  302);
  }
}