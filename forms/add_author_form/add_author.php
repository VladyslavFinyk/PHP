<?php
	if($_POST){
		$f = fopen("../../data/author-".$_POST['name'].".txt", "w");
		$authors_arr = array($_POST['name'], $_POST['country'], $_POST['year_of_birth'], $_POST['genre']);
		$authors_str = implode(";", $authors_arr).';';
		fwrite($f, $authors_str);
		fclose($f);
	}
?>