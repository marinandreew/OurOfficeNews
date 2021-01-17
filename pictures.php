<!DOCTYPE html>
<html>
  <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css"/>
        <title>OON - Home</title>
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
<?php
    $server = 'localhost' ;
    $username = 'root';
    $password = '';
    $dbname = 'office';
    $charset = 'utf8';

    $connection = new mysqli($server, $username, $password, $dbname);
    if(isset($_GET['delete'])){
        $ids = $_GET['id'];
        $connection->query("DELETE FROM news WHERE id = '$ids'");
    }
    $query = $connection->query("SELECT * FROM news ORDER BY id DESC");
    $a = $connection->query("SELECT COUNT(1) FROM news");
    $if = $a->fetch_array();
    if($if[0] > 0)
    {
    ?> 
    <div class="table">
  <?php
	while($row = $query->fetch_assoc()){
?>

 
         
              <div class="second">
              <form>   
              <div class="cell" data-title="Име"><?php echo($row['title']);?></div>
                <div class="cell-di" data-title="Описание"><?php echo($row['description']);?></div>
                <div class="cell" data-title="Категория" name="category"><?php if($row['news_type'] == 1){
                        echo "Новина";
                        }
                        else{
                        echo "Задание за работа";
                        ?> <div class="cell" data-title="Изтрий"><a  href="?&delete=&id=<?php echo($row['id']);?>"><input class="button" type="submit" value="Приеми"></a></div>
                        <?php
                            }?>
                               
                          </div>
                          </form>
                          <br>
                          <br>       
                        </div>
                          

    <?php }}else{header("Location: paintings.php");} ?></div>
  </body></html>
    