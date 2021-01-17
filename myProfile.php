<?php
include "header.php";

if($_COOKIE['user_key'] == '')
{
    header("Location: login/login.php");
}
?>
<!DOCTYPE html>
<html lang="bg">
  <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <title>OON - My Profile</title>
  </head>
<body>
<h1 name='Welcome'>Добре дошъл <?=$userinfo["username"];?>! </h1>
<p>Име: <?=$userinfo["firstName"];?></p>
<p>Презиме: <?=$userinfo["middleName"];?></p>
<p>Фамилия: <?=$userinfo["lastName"];?></p>
<p>Позиция: <?=$userinfo["position"];?></p>
<p>Телефонен номер: <?=$userinfo["phoneNumber"];?></p>
<p>Е-mail: <?=$userinfo["email"];?></p>
<p>Отдел: <?=$userinfo["department"];?></p>
</body>