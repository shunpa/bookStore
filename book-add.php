<?php
	include("config.php");

	$book_name = $_POST['book_name'];
	$writer_name = $_POST['writer_name'];
	$price = $_POST['price'];
	$booktype_id = $_POST['booktype_id'];
	
	$photo = $_FILES['photo']['name'];
	$tmp = $_FILES['photo']['tmp_name'];

	if($photo) {
		move_uploaded_file($tmp, "photos/$photo");
	}

	$sql = "INSERT INTO books (
	book_name, writer_name, price, booktype_id,
	photo) VALUES ('$book_name', '$writer_name', '$price','$booktype_id', '$photo')";

	mysqli_query($conn, $sql);
	
	header("location: index.php");
?>