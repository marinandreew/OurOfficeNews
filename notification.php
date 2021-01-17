<?php
include "database/db.php";
include "login/functions.php";
$userKey = $_COOKIE["user_key"];
$userinfo = getUserByKey($userKey);
$userinfo2 = $userinfo["username"];
$connection = $db->query("SELECT * FROM `message` ORDER BY id DESC");
while($row = $connection->fetch_assoc()){
    if($userinfo2 == $row["user_id"])
    {
        echo $row['title'];
        echo $row['description'];
    }
}
?>