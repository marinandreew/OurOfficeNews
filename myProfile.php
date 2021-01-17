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
        <link href="../css/responsive2.css" type="text/css" rel="stylesheet"/>
        <title>OON - My Profile</title>
  </head>
<body>
<h1 name='Welcome'>Добре дошъл <?=$userinfo["username"];?>! </h1>
<h1>Име: <?=$userinfo["firstName"];?></h1>
<h1>Презиме: <?=$userinfo["middleName"];?></h1>
<h1>Фамилия: <?=$userinfo["lastName"];?></h1>
<h1>Позиция: <?=$userinfo["position"];?></h1>
<h1>Телефонен номер: <?=$userinfo["phoneNumber"];?></h1>
<h1>Е-mail: <?=$userinfo["email"];?></h1>
<h1>Отдел: <?=$userinfo["department"];?></h1>
</body>