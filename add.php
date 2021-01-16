<?php

$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'office';
$charset = 'utf8';

$connection = new mysqli($server, $username, $password, $dbname);

 $title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
 $description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
 $news_type = filter_var(trim($_POST['news_type']), FILTER_SANITIZE_STRING);
 $user_id = '0';
 $connection->query("INSERT INTO `news` (`user_id`, `title`, `description`, `news_type`) VALUES ('$user_id' , '$title', '$description','$news_type')");
		if ($connection->error) {
			printf("Errormessage: %s\n", $connection->error);
		}	 

		header("Location: pictures.php");

?>

