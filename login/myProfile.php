<?php
include "../database/db.php";
include "../header.php";
if(!$loggedIn)
{
    header("Location: login.php");
}



?>
<h1>Welcome- <?=$userinfo["username"];?></h1>
<h1>firstName- <?=$userinfo["firstName"];?></h1>
<h1>middleName- <?=$userinfo["middleName"];?></h1>
<h1>lastName- <?=$userinfo["lastName"];?></h1>
<h1>position- <?=$userinfo["position"];?></h1>
<h1>phoneNumber- <?=$userinfo["phoneNumber"];?></h1>
<h1>email- <?=$userinfo["email"];?></h1>
<h1>department- <?=$userinfo["department"];?></h1>


