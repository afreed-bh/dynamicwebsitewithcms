<!--Navbar-->
<div class="fixed-top">
<nav class="navbar navbar-expand-lg navbar-light scrolling-navbar z-depth-1">
  <!-- Navbar brand -->
  <a class="navbar-brand" href="dashboard.php"><img src="assets/img/local_img/Cuatrodev.png" class="animated slideInLeft" weight="80px" height="40px" alt="CuatroDEV"></a>
  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">
    <!-- Links -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-success hoverable rounded-pill"  href="dashboard.php">Welcome <?php echo $_SESSION['name'];?></h1>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link  hoverable rounded-pill" href="index.php#who_are_we">Who are we?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  hoverable rounded-pill" href="#">What we provide?</a>
      </li>
    </ul>
    <!-- Links -->
    <!-- Search form -->
    <form class="form-inline">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2 " type="text" id="search" placeholder="Search" aria-label="Search">
      </div>
    </form>
    <ul class="navbar-nav nav-flex-icons">
                        <li class="nav-item">
                            <a class="nav-link">
                            <a href="backend/route/logoutController.php" class="btn-floating btn peach-gradient btn-sm rounded-pill" role="button">Logout</a>
                            </a>
                        </li>
                       
                    </ul>
  </div>
  <!-- Collapsible content -->
</nav>
<!--/.Navbar-->
</div>
<!--/.Navbar-->
<script>
  $(document).ready(function(){
    $("#search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#page_search div").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>