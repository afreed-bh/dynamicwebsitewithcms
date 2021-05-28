<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['name']) && isset($_SESSION['usr_email']) && isset($_SESSION['role']) && isset($_SESSION['status'])){
?>
<!--------------------
User or client dashboard here
--------------------->
<?php include 'components/head.php';?>
<h1> Hi <?php echo $_SESSION['name'];?></h1>
<?php
else{
  header("Location: login.php");
  exit();
}
?>