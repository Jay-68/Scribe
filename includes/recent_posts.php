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
     <div class="post-entry-horzontal">
                  <a href="blog-single.php?post=<?=$post_id;?>">
                    <div class="image" style="background-image: url(admin/images/<?=$post_image;?>);"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"> <?=$post_author;?></span>&bullet;
                        <span class="mr-2"><?=$date;?> </span> &bullet;
                      </div>
                      <h2><?=$post_title;?></h2>
                    </span>
                  </a>
                </div>

  <?php }

?>
