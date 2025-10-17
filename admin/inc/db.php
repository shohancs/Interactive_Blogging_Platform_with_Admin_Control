<?php  
	$db = mysqli_connect("localhost", "root", "", "news_blog_portal");

	if ($db) {
		// echo "Database Connection Successfully";
	}
	else {
		die("mysqli Error!" . mysqli_error($db));
	}
?>