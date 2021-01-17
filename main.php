<?php
#това мейн страница, тук ще има обяви и предложения за работа
#ако юзер приема предложение, изпраща си нотификейшн към админ- notification.php
?>

<!DOCTYPE html>
<html>
        <head>
            <meta charset="UTF-8">
            <link rel="stylesheet" href="css/our.css"/>
        </head>
    <body>
    <?php
        include "database/db.php";
        include "header.php";
        if($_COOKIE['user_key'] == '')
        {
            header("Location: login/login.php");
        }
        if(isset($_GET['delete'])){
            $ids = $_GET['id'];
            $db->query("DELETE FROM news WHERE id = '$ids'");
        }

        $query = $db->query("SELECT * FROM news ORDER BY id DESC");
    ?> 
        
        <div class="table">
        
            <?php
            while($row = $query->fetch_assoc()){
            ?>
                <div class="second">
                    <div class="cell" data-title="Име"><?php echo($row['title']);?></div>
                    <div class="cell-di" data-title="Описание"><?php echo($row['description']);?></div>
                    <div class="cell" data-title="Категория">
                        <?php 
                            if($row['news_type'] == 1){
                                echo "новина";
                                }
                            else{
                                echo "задание за работа";
                        ?> 
                    <div class="cell" data-title="Изтрий"><a href="?&delete=&id=<?php echo($row['id']);?>"><input class="button" type="submit" value="Приеми"></a></div>    
                            <?php } ?></div>
                </div>
        
            <?php 
            }  
            ?>
        </div>
    </body>
</html>
    