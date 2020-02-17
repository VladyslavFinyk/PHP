<?php
	require(__DIR__ . '/data/read_authors_data.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Authors</title>
	<link rel="stylesheet" type="text/css" href="style_main.css">
</head>
<body>
	<header>
	</header>
	<section>
		<span class="entrance-txt">На даній сторінці ви можете знайти цікавих авторів, з якими ми рекомендуємо вам ознайомитись.
			<br>
		Приємного перегляду)
		</span>
		<p><a href="forms/add_author_form/add_author_page.php">Додати нового автора</a></p>	
		<table class="main-table">
			<thead class="table-main-value">
				<tr>
					<th>Письменник</th>
					<th>Країна</th>
					<th>Рік Народження</th>
					<th>Жанри</th>
					
				</tr>
			</thead>
			<tbody>
				<?php for ($i=0; $i < count($authors); $i++): ?>
					<?php
						$row_class = '';
						if(mb_convert_case($authors[$i]['genre'], MB_CASE_LOWER, "UTF-8") == 'наукова'){
							$row_class = 'scientific-literature';
						}
						if(mb_convert_case($authors[$i]['genre'], MB_CASE_LOWER, "UTF-8") == 'художня'){
							$row_class = 'fiction';
						}
					?>
					<tr class = '<?php echo $row_class;?>'>
						<td><?php echo ($authors[$i]['name']); ?></td>
						<td><?php echo $authors[$i]['country']; ?></td>
						<td><?php echo $authors[$i]['year_of_birth']; ?></td>
						<td><?php echo $authors[$i]['genre'];?> література</td>
						<td><a href="forms/edit_author_form/edit_author_page.php?file=<?php echo $authors[$i]['file_name']?>">Редагувати</a></td>
					</tr>
				<?php endfor; ?>
			</tbody>
		</table>
	</section>
</body>
</html>