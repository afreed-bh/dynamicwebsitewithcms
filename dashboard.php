<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['usr_email']) && isset($_SESSION['role']) && isset($_SESSION['status'])){
?>
<!DOCTYPE html>
<html lang="en">
<?php include 'components/head.php';?>
<?php include 'components/navbar_dashboard.php';?>
<body>
<!--------------------
User or client dashboard here
--------------------->
<section class="main" id="page_search">
</section>
</body>
</html>
<?php }else{
  header("Location: login.php");
  exit();
}
?>