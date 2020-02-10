<?php
	if($_POST){
		$f = fopen("..\data\authors_list.txt", "a+");
		$authors_arr = array($_POST['name'], $_POST['country'], $_POST['year_of_birth'], $_POST['genre']);
		$authors_str = implode(";", $authors_arr).';';
		fwrite($f, "\n".$authors_str);
		fclose($f);
	}
?>