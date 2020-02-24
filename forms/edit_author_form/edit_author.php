<?php
	$file_name = $_GET['file'];
	$path = __DIR__ . ("/../../data/".$file_name);

	if($_POST){
		$f = fopen($path, "w");
		$author_arr = array($_POST['name'], $_POST['country'], $_POST['year_of_birth'], $_POST['genre']);
		$author_str = implode(";", $author_arr).';';
		fwrite($f, $author_str);
		fclose($f);
		header("Refresh:0");
	}
	
	$f = fopen($path, 'r');
	$author_str = fgets($f);
	$author_arr = explode(';', $author_str);
	$author = array();
	$author['name'] = $author_arr[0];
	$author['country'] = $author_arr[1];
	$author['year_of_birth'] = $author_arr[2];
	$author['genre'] = $author_arr[3];
	fclose($f);
?>