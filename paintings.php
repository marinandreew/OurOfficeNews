<!DOCTYPE html>
<html>
  <head>
        <title>OON - Home</title>
        <link rel="stylesheet" href="main.css"/>
  </head>
  <body>
    <div class="navbar">
        <div class="container">
        <div class="logo_div">
            <a href="index.html"><img src="images/logo.png"  class="logo"></a>
        </div>
        <div class="navbar_links">
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <li class="nav-item">
                    <a href="myprofile.html" class="nav-link">My profile</a>
                </li>
                <li><a href="about.html">About us</a></li>
                <li><a href="login.html">Log in</a></li>
                <li><a href="registration.html">Registration</a></li>
                </ul>                            
            </div>
        </div>
    </div>
    <form action="add.php" method="post" enctype="multipart/form-data">
            <h4 class="parametr" name="parametr">Параметри</h4>
            <p name="titles">Заглавие:</p>
            <input id="title" name="title" maxlength="50" class="inputs" required>
            <p name="titles">Категория:</p>
            <p>
            <select id="news_type" name="news_type" class="select">
                <option value="1" data-marker="1">Новина</option>
                <option value="2" data-marker="2">Свободна Позиция</option>
            </select>
            </p>
            <p name="titles">Описание:</p>
            <input id="description" name="description" maxlength="50" class="inputs" placeholder="" style="height: 130px;" required></input>
            <br>
            <input type="submit" name="upload" value="Потвърди">
        </form> 
    </body>
    </html>