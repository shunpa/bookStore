<?php
	include("config.php");

	$booktype_id = $_POST['booktype_id'];
	$booktype_name = $_POST['booktype_name'];
	
	$sql = "UPDATE booktypes SET booktype_name='$booktype_name' WHERE booktype_id = $booktype_id";
	mysqli_query($conn, $sql);

	header("location: type-list.php");
?>