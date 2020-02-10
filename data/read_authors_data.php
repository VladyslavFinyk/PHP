<?php
	$authors = array();

	$f = fopen("data\authors_list.txt", "r");

	$i = 0;

	while (!feof($f)) {
		$authors_str = fgets($f);
		$authors_arr = explode(';', $authors_str);
		$authors[$i]['name'] = $authors_arr[0];
		$authors[$i]['country'] = $authors_arr[1];
		$authors[$i]['year_of_birth'] = $authors_arr[2];
		$authors[$i]['genre'] = $authors_arr[3]; // rewrite this in books
		$i++;
	}

	fclose($f);
?>