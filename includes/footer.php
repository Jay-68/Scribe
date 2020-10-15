<footer class="site-footer">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-4">
          <h3>About me</h3>
          <p class="mb-4">
            <img src="images/swahili.png" alt="Image placeholder" class="img-fluid">
          </p>

          <p> Mimi ni mtaalamu wa mafunzo, mawasiliano na mpenda Kiswahili. Niliianza blogu hii kwanza kabisa kwa vile nilitaka kuitimiza ndoto yangu ya uandishi. <a href="about.php">Soma zaidi</a></p>
        </div>
        <div class="col-md-6 ml-auto">
          <div class="row">
            <div class="col-md-7">
              <h3>Latest Post</h3>
              <div class="post-entry-sidebar">
              <?php 
                        $query = "SELECT * FROM posts ORDER BY post_id DESC LIMIT 5";
                        $result = mysqli_query($connection,$query);

                        while($row=mysqli_fetch_assoc($result)){
                              $post_id = $row["post_id"];
                              $post_title = $row["post_title"];
                              $post_author = $row["post_author"];
                              $post_category = $row["post_category"];
                              $post_category_id = $row["post_category_id"];
                              $post_content = $row["post_content"];
                              $post_tags = $row["post_tags"];
                              $post_status = $row["post_status"];
                              $post_image = $row["post_image"];
                              $date = $row["post_date"];
                              $post_views = $row["post_views"];
                              $post_comment_count = $row["post_comment_count"];

                          ?>
                                    <ul>
                                      <li>
                                        <a href="blog-single.php?post=<?=$post_id;?>">
                                          <img src="admin/images/<?php echo $post_image; ?>" alt="Image placeholder" class="mr-4">
                                          <div class="text">
                                            <h4><?php echo $post_title; ?></h4>
                                            <div class="post-meta">
                                              <span class="mr-2"><?php echo $date; ?> </span>
                                            </div>
                                          </div>
                                        </a>
                                      </li>
                                    </ul>
                                  
                      <?php }

                      ?>
              </div>
            </div>
            <div class="col-md-1"></div>

            <div class="col-md-4">

              <div class="mb-5">
                    <h3>Quick Links</h3>
                    <ul class="list-unstyled">
                      <li><a href="about.php">About me</a></li>
                      <li><a href="categories.php">Categories</a></li>
                    </ul>
                  </div>

              <div class="mb-5">
                <h3>Social</h3>
                <ul class="list-unstyled footer-social">
                  <li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
                  <li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
                  <li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
                  <!-- <li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li> -->
                  <!-- <li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li> -->
                  <!-- <li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="small">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
            <script>
              document.write(new Date().getFullYear());
            </script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END footer -->