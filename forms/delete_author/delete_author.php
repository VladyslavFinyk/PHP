<?php 
	unlink(__DIR__ . "/../../data/" .$_GET["file"]);
	header("Location: ../../main_page.php");
?>