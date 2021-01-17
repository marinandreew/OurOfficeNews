<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link href="css/responsive.css" type="text/css" rel="stylesheet"/>
        <title>Our Office News</title>
  </head>
  <body>
    <div class="loginbox">
    <form method="POST" action="searchbd.php">
            <div class="search">
                <p>Search</p>
                <input type="text" name="search" maxlength="50" class="input-title" required>
                <p>Choose:</p>
                <div name="choose-div" class="choose-div">
                    <select id="choose" name="choose" class="select">
                        <option value="1" data-marker="1">>Търси по всички</option>
                        <option value="2" data-marker="2">>Търси по име</option>
                        <option value="3" data-marker="3">>Търси по презиме</option>
                        <option value="4" data-marker="4">>Търси по фамилия</option>
                        <option value="5" data-marker="5">>Търси по длъжност</option>
                        <option value="6" data-marker="6">>Търси по телефон</option>
                        <option value="7" data-marker="7">>Търси по имейл</option>
                    </select>
                </div>
                <input type="submit" name="button" value="Търси">
            </div>
        </form>
    </div>
</body>
</html>