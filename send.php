<?php
    include "database/db.php";
    $title = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $description = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);
    $user_id = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
    #$row = $db->query("SELECT * FROM users WHERE username= '$user_id'");
    #user_id 
    $db->query("INSERT INTO `message` (`title`, `description`, `user_id`) VALUES ('$title', '$description','$user_id')");
?>