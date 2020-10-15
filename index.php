<?php include "includes/header.php";?>
<?php include "includes/navigation.php";?>

<div class="wrap">
  <section class="site-section pt-5 pb-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <!-- <div class="jumbotron">
            <h2 class="text-center">Welcome to Swahili Coach</h2>
          </div> -->
        </div>
      </div>

    </div>


  </section>
  <!-- END section -->

  <section class="site-section py-sm">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2 class="mb-4">Latest Posts</h2>
        </div>
      </div>
      <div class="row blog-entries">
        <div class="col-md-12 col-lg-8 main-content">
          <div class="row">
            <!-- posts -->
            <?php include "includes/posts.php";?>
          </div>

        </div>

        <!-- END main-content -->

        <div class="col-md-12 col-lg-4 sidebar">

          <!-- sidebar-box -->

          <?php include "includes/sidebar.php";?>

          <!-- popular posts -->
          
          <?php include "includes/popular_posts.php";?>
          

          <!-- END sidebar-box -->

          <!-- categories -->
          <?php include "includes/categories.php";?>

          <!-- END sidebar-box -->

          <!-- tags -->
          <?php include "includes/tags.php";?>

          <!-- END sidebar -->
        </div>
      </div>
  </section>

  <!-- Footer -->
  <?php include "includes/footer.php"; ?>

</div>

<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery-migrate-3.0.0.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>


<script src="js/main.js"></script>
</body>

</html>