<?php 

  $query = "SELECT * FROM posts ORDER BY post_id DESC";
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
    <div class="col-md-6">
      <a href="blog-single.php?post=<?=$post_id;?>" class="blog-entry element-animate" data-animate-effect="fadeIn">
            <img src="admin/images/<?php echo $post_image; ?>" alt="Image placeholder">
                <div class="blog-content-body">
                    <div class="post-meta">
                      <span class="author mr-1"><?php echo $post_author; ?></span>&bullet;
                      <span class="mr-1"><?php echo $date; ?> </span>
                      <span class="mr-1">
                     
                      </span>
                    </div>
                    <h2><?php echo $post_title; ?></h2>
                </div>        
      </a>                           
    </div>

  <?php }

?>


