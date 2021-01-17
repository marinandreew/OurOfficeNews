<?php
    include "database/db.php";
    $title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
    $description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
    $user_id = filter_var(trim($_POST['news_type']), FILTER_SANITIZE_STRING);
    $db->query("INSERT INTO `message` (`title`, `description`, `user_id`) VALUES ('$title', '$description','$user_id')");")
?>