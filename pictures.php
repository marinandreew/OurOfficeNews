<?php
include "db.php";
include "layout/header.php";
if(!$loggedIn)
{
    header("Location: login.php");
}
?>
    
<!DOCTYPE html>
<html>
  <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/our.css"/>
  </head>
  <body>

<?php
    $server = $_SERVER['SERVER_ADDR'];
    $username = 'root';
    $password = 'root';
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
                <div class="cell" data-title="Име"><?php echo($row['title']);?></div>
                <div class="cell-di" data-title="Описание"><?php echo($row['description']);?></div>
                <div class="cell" data-title="Категория"><?php if($row['news_type'] == 1){
                        echo "новина";
                        }
                        else{
                        echo "задание за работа";
                        ?> <div class="cell" data-title="Изтрий"><a  href="?&delete=&id=<?php echo($row['id']);?>"><input class="button" type="submit" value="Приеми"></a></div>
                        <?php
                            }?></div>
                
            </div>

    <?php }}else{header("Location: paintings.php");} ?></div></body></html>
    