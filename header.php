<!DOCTYPE html>
<html>
  <head>
        <title>Our Office News</title>
        <link rel="stylesheet" href="css/style.css"/>
  </head>
  <body>
    <div class="navbar">
        <div class="container">
        <div class="logo_div">
            <img src="images/logo.png" alt="The art of painting logo" class="logo">
        </div>
        <div class="navbar_links">
            <?php 
            include "login/functions.php";
            $userKey = $_COOKIE["user_key"];
            $userinfo = getUserByKey($userKey);
            
            if($userinfo["id"] == 10){ ?>
            <ul class="menu">
                <li><a href="main.php">Home</a></li>
                <li><a href="adminpanel/search.php">Red users</a></li>
                <li><a href="adminpanel/create_news.php">Add news and work</picture></picture></a></li>
                <li><a href="contact.php">send message</a></li>
                <li><a href="adminpanel/notification.php">notification</a></li>
                <li><a href="login/logout.php">Log out</a></li>
                <li><a href="login/myProfile.php">My profile</a></li>
                </ul>    
            <?php } else{ ?>
            <ul class="menu">
                <li><a href="main.php">Home</a></li>
                <li><a href="adminpanel/search.php">search user</a></li>
                <li><a href="contact.php">send message</a></li>
                <li><a href="adminpanel/notification.php">notification</a></li>
                <li><a href="about.php">Contact</a></li>
                <li><a href="login/logout.php">Log out</a></li>
                <li><a href="login/myProfile.php">My profile</picture></picture></a></li>
                </ul>   
            <?php } ?>                       
            </div>
        </div>
    </div>
    <div class="container1">
        <img src="images/green.jpg" alt="Cinque Terre" width="1000" height="300">
    </div>
</body>
</html>
