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
        <!--Grid row-->
        <div class="row pt-lg-5 mt-lg-5">
          <!--Grid column-->
          <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft"
            data-wow-delay="0.3s">
            <h1 class="display-4 font-weight-bold animated fadeInLeft" id="intro_tag">Build Your CRM/CMS application, software, E-commerce Website  With</h1>
            <hr class="hr- teal accent-3 animated fadeInRight"style="height:5px">
            <a href="https://www.facebook.com/Cuatrodev/" target="_blank" ><img src="assets/img/local_img/logo.png" class="animated fadeInUp delay-1s" id="hero_logo" weight="50 px" height="250 px" alt="CuatroDEV"></a>
            <h4 class="mb-3" ><a href="https://www.facebook.com/Cuatrodev/"  target="_blank" class="text-white animated fadeIn delay-2s"">Web development, IT solution, Graphic design</a></h4>
            <a href="index.php#who_are_we"class="btn btn-purple text-white rounded-pill waves-effect animated fadeInDown delay-3s">Learn more <i class="fas fa-angle-down"></i></a>
          </div>
          <!--Grid column-->
          <!--Grid column-->
          <div class="col-md-6 col-xl-5 mb-4" id="send_mail">
            <!--Form-->
            <div class="card wow fadeInRight" data-wow-delay="0.3s">
              <div class="card-body z-depth-2">
                <!--Header-->
                <div class="text-center">
                  <h3 class="purple-text">
                    <strong>Make an Appointment</strong>
                  </h3>
                  <hr>
                </div>
                <!--Body-->
                <form action="backend/postcontroller.php" method="post">
                <div class="md-form">
                  <i class="fas fa-user prefix grey-text"></i>
                  <input type="text" id="viewer_name" name="viewer_name" class="form-control">
                  <label for="viewer_name">Your name</label>
                </div>
                <div class="md-form">
                  <i class="fas fa-envelope prefix grey-text"></i>
                  <input type="text" id="viewer_email" name="viewer_email" class="form-control">
                  <label for="viewer_email">Your email</label>
                </div>
                <div class="md-form">
                <label for="catagory"><i class="fas fa-ellipsis-v"></i> Catagory</label>
                <br>
                <hr>
                <select class="custom-select custom-select-sm" id="catagory"name="catagory">
                <option value="Website development">Website development</option>
                <option value="Web Application">Web Application</option>
               <option value="Graphic Design">Graphic Design</option>
               <option value="Others">Others</option>
              </select>
              </div>
                <!--Textarea with icon prefix-->
                <div class="md-form">
                  <i class="fas fa-pencil-alt prefix grey-text"></i>
                  <textarea type="text" id="viewer_msg" name="viewer_msg" class="md-textarea form-control" rows="3"></textarea>
                  <label for="viewer_msg">Your message</label>
                </div>
                <div class="text-center mt-3">
                  <button type="submit" name="send_confirmation" class="btn btn-indigo btn-sm rounded-pill">Confirmed</button>
                  <button type="reset" class="btn btn-red btn-sm rounded-pill">Reset</button>
                </div>
              </div>
            </div>
            <!--/.Form-->
                </form> 
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </div>
      <!-- Content -->
    </div>
    <!-- Mask & flexbox options-->
  </div>
  <!-- Full Page Intro -->
  
  <div class="container my-5 p-5 z-depth-1">
<!---Our vision----->

  <!--Section: Content-->
  <section class="dark-grey-text" id="who_are_we">

    <!-- Section heading -->
    <h2 class="text-center font-weight-bold mb-4 pb-2">Who are We?</h2>
    <!-- Section description -->
    <p class="text-center lead grey-text mx-auto mb-5">We are CuatroDEV.</p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-5">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-2 col-md-3 col-2">
            <i class="fas fa-bullhorn blue-text fa-2x"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-10 col-md-9 col-10">
            <h4 class="font-weight-bold">Marketing</h4>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="btn btn-primary btn-sm">Learn more</a>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 mb-md-0 mb-5">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-2 col-md-3 col-2">
            <i class="fas fa-cogs pink-text fa-2x"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-10 col-md-9 col-10">
            <h4 class="font-weight-bold">Customization</h4>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="btn btn-pink btn-sm">Learn more</a>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-2 col-md-3 col-2">
            <i class="fas fa-tachometer-alt purple-text fa-2x"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-10 col-md-9 col-10">
            <h4 class="font-weight-bold">Support</h4>
            <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
            <a class="btn btn-purple btn-sm">Learn more</a>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    </section>
  <!--Section: Content-->


</div>
    </div>
    </div>
    <div class="container my-5">
  <!--Section: Content-->
  <section class="p-5 z-depth-1">
    
    <h3 class="text-center font-weight-bold mb-5">Counter</h3>

    <div class="row d-flex justify-content-center">

      <div class="col-md-6 col-lg-3 mb-4 text-center">
        <h4 class="h1 font-weight-normal mb-3">
          <i class="fas fa-file-alt indigo-text"></i>
          <span class="d-inline-block count-up" data-from="0" data-to="100" data-time="2000">100</span>
        </h4>
        <p class="font-weight-normal text-muted">Unique Page</p>
      </div>

      <div class="col-md-6 col-lg-3 mb-4 text-center">
        <h4 class="h1 font-weight-normal mb-3">
          <i class="fas fa-layer-group indigo-text"></i>
          <span class="d-inline-block count1" data-from="0" data-to="250" data-time="2000">250</span>
        </h4>
        <p class="font-weight-normal text-muted">Block Variety</p>
      </div>

      <div class="col-md-6 col-lg-3 mb-4 text-center">
        <h4 class="h1 font-weight-normal mb-3">
          <i class="fas fa-pencil-ruler indigo-text"></i>
          <span class="d-inline-block count2" data-from="0" data-to="330" data-time="2000">330</span>
        </h4>
        <p class="font-weight-normal text-muted">Reusable Component</p>
      </div>
      
      <div class="col-md-6 col-lg-3 mb-4 text-center">
        <h4 class="h1 font-weight-normal mb-3">
          <i class="fab fa-react indigo-text"></i>
          <span class="d-inline-block count3" data-from="0" data-to="430" data-time="2000">430</span>
        </h4>
        <p class="font-weight-normal text-muted">Crafted Element</p>
      </div>

    </div>
    <!----------- Alert modal -------------->
<?php if (isset($_GET['success_alert'])) { ?>
<div class="modal fade bottom" id="alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-frame and then add class .modal-bottom (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-frame modal-bottom" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">
        <p class="pt-3 pr-2 text-success"><?php echo $_GET['success_alert']; ?>
          </p>

          <button type="button" class="btn btn-secondary btn-sm rounded-pill" data-dismiss="modal">Okey</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<?php if (isset($_GET['failed_alert'])) { ?>
<div class="modal fade bottom" id="alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">

  <!-- Add class .modal-frame and then add class .modal-bottom (or other classes from list above) to set a position to the modal -->
  <div class="modal-dialog modal-frame modal-bottom" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row d-flex justify-content-center align-items-center">
        <p class="pt-3 pr-2 text-danger"><?php echo $_GET['failed_alert']; ?>
          </p>

          <button type="button" class="btn btn-secondary btn-sm rounded-pill" data-dismiss="modal">Okey</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<!------------------>
  </section>
  <!--Section: Content-->

</div>
    <?php include 'components/footer.php';?>
    </section>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript">
    $(window).on('load', function() {
        $('#alert').modal('show');
    });
</script>
  </body>
</html>
