<?php

	include('config.php');
	
	$booktype_id = $_GET['booktype_id'];
	$sql = "DELETE FROM booktypes WHERE booktype_id = $booktype_id";
	
	mysqli_query($conn, $sql);

	header('location: type-list.php');
	
?>