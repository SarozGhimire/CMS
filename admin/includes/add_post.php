<?php


if (isset($_POST['create_post'])) {
	$title = $_POST['title']; 
	$post_author = $_POST['post_author']; 
	$post_category_id = $_POST['post_category_id']; 
	$post_status = $_POST['post_status']; 

	$post_image = $_FILES['image']['name']; 
	$post_image_temp = $_FILES['image']['tmp_name'];

	$post_tags = $_POST['post_tags']; 
	$post_content = $_POST['post_content'];
	$post_date = date('d-m-y');
	$post_comment_count = 4; 





	move_uploaded_file($post_image_temp, "../images/$post_image");


	$query = "INSERT INTO posts (post_category_id, post_title, post_author, post_date, post_image, post_content, post_tags, post_comment_count, post_status) ";

	$query .=
	"VALUES({$post_category_id},'{$title}','{$post_author}',now(),'{$post_image}','{$post_content}','{$post_tags}','{$post_status}') "; 

	$create_post_query = mysqli_query($connection, $query);

	confirmQuery($create_post_query);


}





?>

