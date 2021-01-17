<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The art of painting</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
<body>
<div class="navbar">
            <div class="container">
            <div class="logo_div">
                <img src="images/logo.png" alt="The art of painting logo" class="logo">
            </div>
            <div class="navbar_links">
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="paintings.php">Add paint</a></li>
                    <li><a href="pictures.php">Our pictures</picture></picture></a></li>
                    <li><a href="about.php">About us</a></li>
                    <?php
                    if($loggedIn) {
                    ?>
                        <li><a href="myProfile.php">My profile</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    <?php
                    } 
                    else {
                    ?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    <?php
                    }
                    ?>
                </ul>                               
            </div>                            
        </div>
    </div>
</body>
</html>