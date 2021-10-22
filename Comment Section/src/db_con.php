<?php
	$servername = "localhost";
	$username = "root";
	$pwd = "";
	$db = "comment_section";

	$conn = mysqli_connect($servername,$username,$pwd,$db);

	if(!$conn){
		exit;
	}

?>