<?php

include "admin/includes/db.php";

function show_cat()
{
    global $connection;

    $query = "SELECT * FROM categories ORDER BY cat_id DESC LIMIT 5";
    $result = mysqli_query($connection, $query);
    $span = mysqli_num_rows($result);

    while ($row = mysqli_fetch_array($result)) {
        $cat_id = $row["cat_id"];
        $cat_title = $row["cat_title"];
        $sql = mysqli_query($connection, "SELECT * FROM posts WHERE post_category_id=$cat_id");
        $span = mysqli_num_rows($sql);

        echo "<li> <a href='category.php?cat_id=$cat_id' class='text-info'>{$cat_title}<span>($span)</span></a></li>";
    }
}

?>