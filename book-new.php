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

	<h1>New Book</h1>
	<ul class="menu">
		<li><a href="index.php">Manage Books</a></li>
		<li><a href="type-list.php">Manage Book Type</a></li>
	</ul>
	<form action="book-add.php" method="post" enctype="multipart/form-data">

		<label for="book_name">Book Name</label>
		<input type="text" name="book_name" id="book_name">
		<label for="writer_name">Author</label>
		<input type="text" name="writer_name" id="writer_name">
		<label for="price">Price</label>
		<input type="text" name="price" id="price">
		<label for="booktype">Book Type</label>
		<select name="booktype_id" id="booktype_id">
			<option value="0">-- Choose --</option>
				<?php
					include("config.php");
					$result = mysqli_query($conn, "SELECT booktype_id, booktype_name FROM booktypes");
					while($row = mysqli_fetch_assoc($result)):
				?>
				<option value="<?php echo $row['booktype_id'] ?>">
					<?php echo $row['booktype_name'] ?>
				</option>
				<?php endwhile; ?>
		</select>
		<label for="photo">Photo</label>
		<input type="file" name="photo" id="photo">
		<br><br>
		<input type="submit" value="Add Book">
		<a href="index.php" class="back">Back</a>
	</form>

</body>
</html>