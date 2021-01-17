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
        <link href="../css/responsive.css" type="text/css" rel="stylesheet"/>
        <title>Our Office News</title>
  </head>
<h1>Login</h1>
<form method="POST" action="user.php">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Please enter your username" id="username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Please enter your password" id="password"  required>
    </div>
    <div class="form-group">
        <input type="submit" value="Login" class="btn btn-primary">
        <input type="hidden" name="action" value="login">
    </div>
</form>
</html>