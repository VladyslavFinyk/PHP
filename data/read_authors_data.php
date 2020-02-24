<?php
	$template_name = "/^author-(.*).txt$/";
	$path_to_data = __DIR__;
	$values_of_path = scandir($path_to_data);
	$path_to_data = $path_to_data . '/';

	$directories_names = array();

	foreach ($values_of_path as $v) {
		$v = $path_to_data . $v;
		if($v != $path_to_data . '.' && $v != $path_to_data . ".." && is_dir($v))
			array_push($directories_names, $v);
	}
	foreach ($directories_names as $directory) {
		$files_names = scandir($directory);
		$book_shop[$directory] = array();
		$idx = 0;
		foreach ($files_names as $file_name) {
			if(preg_match($template_name, $file_name)){
				$f = fopen($directory.'/'.$file_name, "r");
				$authors_str = fgets($f);
				$authors_arr = explode(';', $authors_str);
				$authors['name'] = $authors_arr[0];
				$authors['country'] = $authors_arr[1];
				$authors['year_of_birth'] = $authors_arr[2];
				$authors['genre'] = $authors_arr[3]; // rewrite this in books
				$authors['file_name'] = $file_name;
				array_push($book_shop[$directory], $authors);
				$idx++;
				fclose($f);
			}
		}
	}
	return $book_shop;
?>