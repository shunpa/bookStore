<?php
	
	include("config.php");

	$booktype_name = $_POST['booktype_name'];
	$sql = "INSERT INTO booktypes (booktype_name) VALUES ('$booktype_name')";

	mysqli_query($conn, $sql);

	header("location: type-list.php");

?>