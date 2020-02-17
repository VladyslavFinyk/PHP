<?php
	$template_name = "/^author-(.*).txt$/";
	$path_to_data = __DIR__;
	$files_names = scandir($path_to_data);

	$authors = array();

	$idx = 0;
	foreach ($files_names as $file_name) {
		if(preg_match($template_name, $file_name)){
			$f = fopen($path_to_data."/".$file_name, "r");
			$authors_str = fgets($f);
			$authors_arr = explode(';', $authors_str);
			$authors[$idx]['name'] = $authors_arr[0];
			$authors[$idx]['country'] = $authors_arr[1];
			$authors[$idx]['year_of_birth'] = $authors_arr[2];
			$authors[$idx]['genre'] = $authors_arr[3]; // rewrite this in books
			$authors[$idx]['file_name'] = $file_name;
			$idx++;
			fclose($f);
		}
	}
	return $authors;
?>