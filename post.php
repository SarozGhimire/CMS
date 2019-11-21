<?php  include "includes/db.php";  ?>

<?php  include "includes/header.php";  ?>


<?php  include "includes/navigation.php";  ?>


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

          <?php
          if (isset($_GET['p_id'])) {
        
          $the_post_id = $_GET['p_id'];

          $view_query = "UPDATE posts SET post_views_count = post_views_count + 1 WHERE post_id = $the_post_id ";
          $send_query = mysqli_query($connection, $view_query);

            if (!$send_query) {
                die("query failed" );
            }  


          $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
          $select_all_posts_query = mysqli_query($connection,$query);
          while($row = mysqli_fetch_assoc($select_all_posts_query)) {
            $post_title = $row['post_title'];
            $post_author = $row['post_user'];
            $post_date = $row['post_date'];
            $post_image = $row['post_image'];
            $post_content = $row['post_content'];

            ?>



            <!-- <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1> -->

            <!-- First Blog Post -->
            <h2>
                <a href="#"><?php echo $post_title ?></a>
            </h2>
            <p class="lead">
                by <a href="author_posts.php"><?php echo $post_author ?></a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
            <hr>
            <a href="post.php?p_id=">
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
            </a>
            <hr>
            <p><?php echo $post_content ?></p>

            <hr>
<?php } 


} else {
    header("Location: index.php");  
}
 ?>

        <?php 

        if (isset($_POST['create_comment'])) {
            $the_post_id =  $_GET['p_id'];
            $comment_author = $_POST['comment_author'];
            $comment_email = $_POST['comment_email'];
            $comment_content = $_POST['comment_content'];


            if (!empty($comment_author)  && !empty($comment_email) && !empty($comment_content) ) {


                $query = "INSERT INTO comments (comment_post_id, comment_author, comment_email, comment_content, comment_status,comment_date)";

                $query .= "VALUES ($the_post_id ,'{$comment_author}', '{$comment_email}', '{$comment_content}', 'unapprove',now())";

                $create_comment_query = mysqli_query($connection,$query);

                if (!$create_comment_query) {
                    die('QUERY FAILED' .mysqli_error($connection));
                }

                // $query = "UPDATE posts SET post_comment_count = post_comment_count + 1 ";
                // $query .= "WHERE post_id = $the_post_id ";
                // $update_comment_count = mysqli_query($connection,$query);

            }else{

                echo "<script>alert('Fields cannot be empty')</script>";  
            }

        }

        ?>

        `        <!-- Comments Form -->
        <div class="well">
            <h4>Leave a Comment:</h4>
            <form action="" method="post" role="form">

                <div class="form-group">
                    <label for="comment_author">Author</label>
                    <input type="text" name="comment_author" class="form-control">
                </div>

                <div class="form-group">
                    <label for="comment_email">Email</label>
                    <input type="email" name="comment_email" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="comment_content">Your Comment</label>
                    <textarea name="comment_content" class="form-control" rows="3"></textarea>
                </div>

                <button name="create_comment" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <hr>


        <?php 
        $query = "SELECT * FROM comments WHERE comment_post_id = {$the_post_id} ";
        $query .= "AND comment_status = 'approved' ";
        $query .= "ORDER BY comment_id DESC ";
        $select_comment_query = mysqli_query($connection, $query);
        if(!$select_comment_query){
            die('QUERY FAILED' . mysqli_error($connection));

        }
        while ($row = mysqli_fetch_assoc($select_comment_query)){
            $comment_date = $row['comment_date'];
            $comment_content = $row['comment_content'];
            $comment_author = $row['comment_author'];
            
            ?>

            <div class="media">

                <a class="pull-left" href="#">
                    <img class="media-object" src="http://placehold.it/64*64" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><?php echo $comment_author; ?>
                    <small><?php echo $comment_date; ?></small>
                </h4>
                <?php echo $comment_content; ?>
            </div>
        </div>

    <?php } ?>




</div>


<?php  include "includes/sidebar.php";  ?>


</div>
<!-- /.row -->

<hr>

<ul class="pager">

</ul>


<?php  include "includes/footer.php";  ?>

