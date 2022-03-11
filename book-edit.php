<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

	<?php
		include("config.php");
		
		$book_id = $_GET['book_id'];
		$result = mysqli_query($conn, "SELECT * FROM books WHERE book_id = $book_id");
		$row = mysqli_fetch_assoc($result);
	?>

	<h1>Edit Book</h1>
	<ul class="menu">
		<li><a href="index.php">Manage Books</a></li>
		<li><a href="type-list.php">Manage Book Type</a></li>
	</ul>
	<form action="book-update.php" method="post" enctype="multipart/form-data">

		<input type="hidden" name="book_id" value="<?php echo $row['book_id'] ?>">
		<label for="book_name">Book Name</label>
		<input type="text" name="book_name" id="book_name" value="<?php echo $row['book_name'] ?>">
		<label for="writer_name">Author</label>
		<input type="text" name="writer_name" id="writer_name" value="<?php echo $row['writer_name'] ?>">
		<label for="price">Price</label>
		<input type="text" name="price" id="price" value="<?php echo $row['price'] ?>">
		<label for="booktype">Book Type</label>
		<select name="booktype_id" id="booktype_id">
			<option value="0">-- Choose --</option>
			<?php
				$booktypes = mysqli_query($conn, "SELECT booktype_id, booktype_name FROM booktypes");
				while($cat = mysqli_fetch_assoc($booktypes)):
			?>
			<option value="<?php echo $cat['booktype_id'] ?>"
				<?php if($cat['booktype_id'] == $row['booktype_id']) echo "selected" ?> >
				<?php echo $cat['booktype_name'] ?>
			</option>
			<?php endwhile; ?>
		</select>
		<br><br>
		<img src="photos/<?php echo $row['photo'] ?>" alt="" height="150">
		<label for="photo">Change Photo</label>
		<input type="file" name="photo" id="photo">
		<br><br>
		<input type="submit" value="Update Book">
		<a href="index.php">Back</a>

</body>
</html>