<!DOCTYPE html>
<html>
  <head>
        <title>Our Office News</title>
        <link rel="stylesheet" href="css/header.css"/>
  </head>
  <body>
    <div class="navbar">
        <div class="container">
        <div class="logo_div">
            <img src="images/logo.png" alt="The art of painting logo" class="logo">
        </div>
        <div class="navbar_links">
            <?php 
            include "database/db.php";
            include "login/functions.php";
            $userKey = $_COOKIE["user_key"];
            $userinfo = getUserByKey($userKey);
            
            if($userinfo["id"] == 10){ ?>
                <ul class="menu">
                    <li><a href="main.php">Начало</a></li>
                    <li><a href="search.php">Търсене</a></li>
                    <li><a href="create_news.php">Новини/работа</picture></picture></a></li>
                    <li><a href="contact.php">Съобщение</a></li>
                    <li><a href="notification.php">Известия</a></li>
                    <li><a href="login/logout.php">Излизане</a></li>
                    <li><a href="register.php">Регистр</a></li>
                    </ul>
                <?php } else{ ?>
                <ul class="menu">
                    <li><a href="main.php">Начало</a></li>
                    <li><a href="search.php">Търсене</a></li>
                    <li><a href="contact.php">Новини/работа</a></li>
                    <li><a href="notification.php">Известия</a></li>
                    <li><a href="about.php">Контакти</a></li>
                    <li><a href="login/logout.php">Излизане</a></li>
                    <li><a href="myProfile.php">Моят профил</picture></picture></a></li>
                    </ul>
                <?php } ?>             
            </div>
        </div>
    </div>

</body>
</html>
