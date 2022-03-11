<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		form label {
			display: block;
			margin-top: 8px;
		}
	</style>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Edit Book Type</h1>
	<ul class="menu">
		<li><a href="index.php">Manage Books</a></li>
		<li><a href="type-list.php">Manage Book Type</a></li>
	</ul>	
	<?php
		include("config.php");
		$booktype_id = $_GET['booktype_id'];
		$result = mysqli_query($conn, "SELECT * FROM booktypes WHERE booktype_id = $booktype_id");
		$row = mysqli_fetch_assoc($result);
	?>
	<form action="type-update.php" method="post">
		<input type="hidden" name="booktype_id" value="<?php echo $row['booktype_id'] ?>">
		<label for="booktype_name">Book Type Name</label>
		<input type="text" name="booktype_name" id="booktype_name" value="<?php echo $row['booktype_name'] ?>">
		<br><br>
		<input type="submit" value="Update Book Type">
	</form>
</body>
</html>