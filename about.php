<?php include "includes/header.php";?>
<?php include "includes/navigation.php";?>
    

    <section class="site-section pt-5">
      <div class="container">
        
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-4">Naitwa Linda M.</h2>
                <p class="mb-5"><img src="admin/images/darasa.jpg" alt="Image placeholder" class="img-fluid"></p>
                <p>Mimi ni mtaalamu wa mafunzo, mawasiliano na mpenda Kiswahili. Niliianza blogu hii kwanza kabisa kwa vile nilitaka kuitimiza ndoto yangu ya uandishi.</p>
                <p> Ndoto hii ilianza tangu shule ya msingi ambapo nilikuwa na waalimu shupavu waliotuhadithia hadithi kadhaa za kusisimua mno kwa lugha ya Kiswahili. Ni tokea hapo ambapo nilikifurahikia na kukithamini sana lugha hii na niliazimia kutaka kuwa kama waalimu wangu. Aidha, katika kupiga hatua hii ninataka kufutilia mbali dhana ya kuwa lugha hii ni ngumu na isiyoeleweka kwa urahisi.</p>
                <p>Ni matumaini yangu kuwa wanafunzi watapata uzoefu wa kusoma na kufanya mazoezi ya uandishi angalau nakala moja kila juma. Pili, wanafunzi watastarehe kwa lugha hii. Aidha, katika upande wa mapambo ya insha, mwandishi ametumia mbinu ya mpishi jikoni ambaye hutumia viungo kadha wa kadha katika kipimo cha kadiri na mitindo mbalimbali ya upishi ili akiandae chakula kitamu. Viungo hivyo ni kwa mfano semi, methali, jazanda na kadhalika. Viungo hivi vimetumika kuelimisha, kuchekesha, kukataza, kufananisha, kutofautisha na kuonya msomaji.
                Nyote mwakaribishwa katika blogu hii kuitalii lugha yetu tukufu. Nitafurahikia sana ukiweza kutoa maoni yako kwenye sehemu ya maoni.</p>
                <p>Kiswahili kiendelee mbele!</p>
              </div>
            </div>

            <div class="row mb-5 mt-5">
              <div class="col-md-12 mb-5">
                <h2>My Latest Posts</h2>
                <hr width="40%" class="ml-0">
              </div>
              <div class="col-md-12">

               <?php include "includes/recent_posts.php"; ?>
                <!-- END post -->

              </div>
            </div>

            <!-- Pagination -->
            <?php include "includes/pagination.php";?>

            

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
             <!-- sidebar-box -->

          <?php include "includes/sidebar.php";?>
            <!-- END sidebar-box -->  
            <?php include "includes/popular_posts.php";?>
            <!-- END sidebar-box -->

            <!-- categories -->
          <?php include "includes/categories.php";?>
            <!-- END sidebar-box -->

            <!-- tags -->
          <?php include "includes/tags.php";?>
          </div>
          <!-- END sidebar -->

        </div>
      </div>
    </section>
  
    <!-- Footer -->
  <?php include "includes/footer.php"; ?>
      <!-- END footer -->

    </div>
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

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