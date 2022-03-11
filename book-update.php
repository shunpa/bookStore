<?php

	include("config.php");

	$book_id = $_POST['book_id'];
	$book_name = $_POST['book_name'];
	$writer_name = $_POST['writer_name'];
	$price = $_POST['price'];
	$booktype_id = $_POST['booktype_id'];

	$photo = $_FILES['photo']['name'];
	$tmp = $_FILES['photo']['tmp_name'];

	if($photo) {
		move_uploaded_file($tmp, "photos/$photo");
		$sql = "UPDATE books SET book_name='$book_name', writer_name='$writer_name', price='$price', booktype_id='$booktype_id', photo='$photo' WHERE book_id = $book_id";
	} else {
		$sql = "UPDATE books SET book_name='$book_name', writer_name='$writer_name', price='$price', booktype_id='$booktype_id' WHERE book_id = $book_id";
	}
	
	mysqli_query($conn, $sql);

	header("location: index.php");

?>