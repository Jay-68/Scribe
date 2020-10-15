<?php include "includes/header.php";?>
<?php include "includes/navigation.php";?>

<div class="wrap">
      <!-- END header -->

    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <?php
            if(isset($_GET["post"])){
              $p_id = $_GET["post"];
              $query = "SELECT * FROM posts WHERE post_id = $p_id";
              $result = mysqli_query($connection, $query);
            }else{
              header("Location: index.php");
            }
          ?>

          <?php
            while($row = mysqli_fetch_assoc($result)){
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

                <div class="col-md-12 col-lg-8 main-content">
                            <img src="admin/images/<?=$post_image;?>" alt="Image" class="img-fluid mb-5">
                            <div class="post-meta">
                                        <span class="author mr-2"><?=$post_author;?></span>&bullet;
                                        <span class="mr-2"><?=$date;?> </span> &bullet;
                                        <span class="ml-2"><span class="fa fa-comments"></span> 
                                        <?php
                                          (isset($_GET['post'])) ? $post_id = $_GET['post'] : $post_id = 0;
                                          $query = mysqli_query($connection, "SELECT * FROM comments WHERE status='Approved' AND post_id = $post_id");
                                          $num_comments = mysqli_num_rows($query);
                                          echo $num_comments . " comment(s)";
                                        ?>
                                      </span>
                                      </div>
                            <h1 class="mb-4"><?=$post_title;?></h1>
                            <a class="category mb-5" href="#"><?=$post_category;?></a>
                          
                            <div class="post-content-body">
                              <p>
                                <?=$post_content;?>
                              </p>
                            </div>
                            
                            <div class="pt-5">
                              <p>Categories:  <a href="#"><?=$post_category;?>, </a><a href="#"><?=$post_tags;?></a></p>
                            </div>

             <?php }

          ?>

            <div class="pt-5">
              <h3>
                <?php
                  (isset($_GET['post'])) ? $post_id = $_GET['post'] : $post_id = 0;
                  $query = mysqli_query($connection, "SELECT * FROM comments WHERE status='Approved' AND post_id = $post_id");
                  $num_comments = mysqli_num_rows($query);
                  echo $num_comments . " comment(s)";
                ?>
              </h3>
              <hr width="40%" class="ml-0 mb-5">
              <ul class="comment-list">
                <li class="comment">
                    <div class="comment-body">
                        <?php 
                      
                          if(isset($_GET['post'])){
                            $id=$_GET['post'];
                            $comment_obj->getApprovedComments($id); 
                          }
                        ?>
                    </div>
                </li>
              </ul>
              <!-- END comment-list -->

              <?php
                if(isset($_GET["post"])){
                  $id = $_GET["post"];
                  if(isset($_POST["comment"])){
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $body = $_POST['body'];
                    $comment_obj->addComments($id,$name,$email,$body);
                  }
                }
              
              ?>
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form action="blog-single.php?post=<?php echo $post_id; ?>" class="p-5 bg-light" method="POST">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" name="name" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="body" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="comment" value="Post Comment" class="btn btn-primary">
                  </div>

                </form>
              </div>
            </div>

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <?php include "includes/sidebar.php"; ?>
            <!-- END sidebar-box -->  
            <?php include "includes/popular_posts.php"; ?>
            <!-- END sidebar-box -->

           <?php include "includes/categories.php"; ?>
            <!-- END sidebar-box -->

           <?php include "includes/tags.php"; ?>
          <!-- END sidebar -->

        </div>
      </div>
    </section>

    <!-- <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-3 ">Related Post</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_2.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Lifestyle</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_3.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Travel</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_4.jpg'); ">
              <div class="text">
                <div class="post-meta">
                  <span class="category">Food</span>
                  <span class="mr-2">March 15, 2018 </span> &bullet;
                  <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                </div>
                <h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
              </div>
            </a>
          </div>
        </div>
      </div>


    </section> -->
    <!-- END section -->
  
    <?php include "includes/footer.php";?>
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