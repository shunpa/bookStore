<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Book List</h1>
	<ul class="menu">
		<li><a href="index.php">Manage Books</a></li>
		<li><a href="type-list.php">Manage Book Type</a></li>
	</ul>	
	<?php
		include("config.php");
		$result = mysqli_query($conn, "SELECT books.*, booktypes.booktype_name FROM books LEFT JOIN booktypes ON books.booktype_id = booktypes.booktype_id");
	?>
	<ul class="books">
	<?php while($row = mysqli_fetch_assoc($result)): ?>
	<li>
		<img src="photos/<?php echo $row['photo'] ?>" alt="" align="right" height="140">
		<b><?php echo $row['book_name'] ?></b>
		<i>by <?php echo $row['writer_name'] ?></i>
		<small>(in <?php echo $row['booktype_name'] ?>)</small>
		<span>: <?php echo $row['price'] ?></span>
		[<a href="book-del.php?book_id=<?php echo $row['book_id'] ?>" class="del">del</a>]
		[<a href="book-edit.php?book_id=<?php echo $row['book_id'] ?>">edit</a>]
	</li>
	<?php endwhile; ?>
	</ul>
	<a href="book-new.php" class="new">New Book</a>
</body>
</html>