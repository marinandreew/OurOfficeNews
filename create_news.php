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
        <form action="adminpanel/add_news.php" method="post" enctype="multipart/form-data">
            <h2 class="parametr">Параметри</h2>
            <p>Заглавие:</p>
            <input type="text" name="title" maxlength="50" class="input-title" required>
            <p>Категория:</p>
            <p>
            <select id="news_type" name="news_type" class="select">
                <option value="1" data-marker="1">новина</option>
                <option value="2" data-marker="2">задание за работа</option>
            </select>
            </p>
            <h4>Описание:</h4>
            <input type="text" name="description" maxlength="600" class="input-description" placeholder="" style="height: 60;" required></textarea>
            <input type="submit" name="upload" value="Континиу">
        </form>
    </body>
</html>