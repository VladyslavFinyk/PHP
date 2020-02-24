<?php
	require("add_author.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Редагування</title>
	<link rel="stylesheet" type="text/css" href="add_author_style.css">
</head>
<body>
	<a href="../../main_page.php"> На головну </a>
	<br>	<br>
	<div class="inform">Додання автора до загального списку</div>
	<form name="edit-authors" method="post">

		<div class="row">
			<label for="name" class="coll padding-lable">Ім'я :</label>
			<input type="text" name="name" class="coll brdr-r-5 input" value="<?php echo $authors[0]['name']; ?>">
		</div>
		<div class="row">
			<label for="country" class="coll padding-lable">Країна :</label>
			<input type="text" name="country" class="coll brdr-r-5 input" value="<?php echo $authors['country']; ?>">
		</div>
		<div class="row">
			<label for="year_of_birth" class="coll padding-lable">Рік народження :</label>
			<input type="number" name="year_of_birth" class="coll brdr-r-5 input" value="<?php echo $authors['year_of_birth']; ?>">
		</div>
		<div class="row">
			<label for="genre" class="coll padding-lable">Жанр :</label>
			<input type="text" name="genre" class="coll brdr-r-5 input" value="<?php echo $authors['genre']; ?>">
		</div>
		<div class="row"><input type="submit" name="confirm" value="Застосувати зміни"></div>
</body>
</html>