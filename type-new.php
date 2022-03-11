<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		form label{
			display: block;
			margin-top: 8px;
		}
	</style>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>New Book Type Name</h1>
	<ul class="menu">
		<li><a href="index.php">Manage Books</a></li>
		<li><a href="type-list.php">Manage Book Type</a></li>
	</ul>
	<form action="type-add.php" method="post">
		<label for="booktype_name">Book Type Name</label>
		<input type="text" name="booktype_name" id="booktype_name">
		
		<br><br>
		<input type="submit" value="Add Book Type">
	</form>
</body>
</html>