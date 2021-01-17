<?php
include "header.php";
$userKey = $_COOKIE["user_key"];
$userinfo = getUserByKey($userKey);
$userinfo2 = $userinfo["username"];
$connection = $db->query("SELECT * FROM `message` ORDER BY id DESC");
while($row = $connection->fetch_assoc()){
    if($userinfo2 == $row["user_id"])
    { ?>
        ----------------------------------------------------------------------------
        <div class="cell" data-title="Име">Име: <?php echo($row['title']);?></div>
        <div class="cell-di" data-title="Описание">Описание: <?php echo($row['description']);?></div>
        <?php
    }
}
?>