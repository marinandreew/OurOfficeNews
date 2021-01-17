<?php
#главна страница, тук проверява дали си в профил, 
#ако да праща към мейнстраница - main.php
#ако не праща към логин - login/login.php
?>

<?php
include "database/db.php";

if($_COOKIE['user_key'] == '')
{
    header("Location: login/login.php");
}
else
{
    header("Location: main.php");
}
?>

