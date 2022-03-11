<?php
	include("config.php");

	$book_id = $_GET['book_id'];
	$sql = "DELETE FROM books WHERE book_id = $book_id";
	
	mysqli_query($conn, $sql);
	header("location: index.php");
?>