<?php
#проверява дали съществува юзер, ако да влиза в профил и се изпраща на мейн страница
#ако не, пише че юзер не съществува
?>
<?php
include "../database/db.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <link href="../css/responsive3.css" type="text/css" rel="stylesheet"/>
        <title>Our Office News</title>
  </head>
  <body>
    <div class="loginbox">
        <img src="../images/avatar1.png" class="avatar">
        <form method="POST" action="user.php">
            <div class="form-group">
                <label for="username"><p>Потребителско име</p></label>
                <input type="text" name="username" placeholder="Моля напишете вашето потребителско име" class="form-control" id="username" required>
            <div class="form-group">
                <label for="password"><p>Парола</p></label>
                <input type="password" name="password" class="form-control" placeholder="Моля напишете вашата парола" id="password" required>
            </div>
            <div class="form-group">
                <input type="submit" value="Влез" class="btn btn-primary">
                <input type="hidden" name="action" value="login">
            </div>
        </form>
    </div>
</body>
</html>
    