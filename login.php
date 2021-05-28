<!DOCTYPE html>
<html lang="en">
 <?php include 'components/head.php';?>
 <?php include 'components/navbar.php';?>

  <body>
  <?php include 'components/go_top.php';?>
  <section class="main" id="page_search">
     <!-- Full Page Intro -->
 <div class="view" style="background-image: url('assets/img/local_img/bg/hero-bg.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-blue-light d-flex justify-content-center align-items-center">
      <!-- Content -->
      <div class="container">
      <div class="container">
      <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
        <!-- Material form subscription -->
<div class="card  z-depth-4">

  <h5 class="card-header  black-text text-center py-4">
      <img  src="assets/img/local_img/Cuatrodev.png" width="150" height="50" alt="">
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5">
  <?php if (isset($_GET['required_msg'])) { ?>
  <div class="alert alert-warning text-center" role="alert">
  <?php echo $_GET['required_msg']; ?>
</div>
<?php } ?>
<?php if (isset($_GET['error'])) { ?>
  <div class="alert alert-danger text-center" role="alert">
  <?php echo $_GET['error']; ?>
</div>
<?php } ?>
      <!-- Form -->
      <form class="text-center" style="color: #757575;" action="backend/route/loginController.php" method="post">

          <h2>Sign In</h2>
          <p style="color: #5a5ceb;"> Sign in with your email and password</p>

          <!-- E-mai -->
          <div class="md-form ">
              <input type="email" id="user_email" name="user_email" class="form-control">
              <label for="user_email">E-mail</label>
          </div>
          <!-- Password -->
      <div class="md-form">
        <input type="password" id="user_password" name="user_password" class="form-control">
        <label for="user_password">Password</label>
      </div>
          <!-- Sign in button -->
          <button class="btn-floating btn btn-outline-info btn-sm rounded-pill btn-block z-depth-0 my-4 waves-effect" type="submit" waves-effect>Sign in</button>

      </form>
      <!-- Form -->
       <!-- Forgot password -->
       <div class="d-flex justify-content-center">
         <a href="" class="text-center">Forgot password?</a>
      </div>
       <!--Create -->
       <div class="d-flex justify-content-center">
       <a href="#" class="purple-text" type="button" data-toggle="modal" data-target="#modalRegisterForm">No Account? Create a new one</a>
      </div>
      </div>
  </div>
  </div>
      </div>
    </div>
</div>
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">Sign up</button>
      </div>
    </div>
  </div>
  <!-- Full Page Intro -->
  </div>
  </div>
    <?php include 'components/footer.php';?>
    </section>
    <!-- jQuery -->
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  </body>
</html>
