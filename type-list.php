<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>Category List</h1>
	<ul class="menu">
		<li><a href="index.php">Manage Books</a></li>
		<li><a href="type-list.php">Manage Book Type</a></li>
	</ul>	
	<?php
		include("config.php");
		$result = mysqli_query($conn, "SELECT * FROM booktypes");
	?>
	<ul value="<?php echo $row['booktype_id'] ?>" name="booktype_id">
		<?php while($row = mysqli_fetch_assoc($result)): ?>
			<li>
				[ <a href="type-del.php?booktype_id=<?php echo $row['booktype_id'] ?>" class="del">del</a> ]
				[ <a href="type-edit.php?booktype_id=<?php echo $row['booktype_id'] ?>">edit</a> ]
				<?php echo $row['booktype_name'] ?>
				
			</li>
		<?php endwhile; ?>
	</ul>

	<!-- <table>
		<thead>
		<tr>
			<th>Book Type Name</th>
		</tr>
		</thead>
		<tbody>
			<tr>
				<?php
					include("config.php");
					$result = mysqli_query($conn, "SELECT * FROM booktypes");

					while($row = mysqli_fetch_assoc($result)): 
				
				?>
				<td value="<?php echo $row['booktype_id'] ?>" name="booktype_id">
              				<?php echo $row['booktype_name'] ?>       
              	</td>
			</tr>
		<?php endwhile; ?>
		</tbody>
	</table> -->

	<a href="type-new.php" class="new">New Category</a>
</body>
</html>