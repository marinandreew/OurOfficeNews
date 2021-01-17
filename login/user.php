<?php
include "../database/db.php";

if(isset($_POST["action"])) {
    if($_POST["action"] == "login") {
        $userData = array(
            "username" => $_POST["username"],
            "password" => $_POST["password"]
        );
        if(userExistsByUsername($userData["username"])) {
            $databaseUser = getUserByUsername($userData["username"]);
            if(password_verify($userData["password"], $databaseUser["password"])) {
                $userKey = md5(uniqid());
                setUserKey($databaseUser["id"], $userKey);
   
                setcookie("user_key", $userKey, time() + (86400*30), "/");

                header("Location: ../index.php");
            } else {
                echo "Wrong password!";
            }
        } else {
            echo "Wrong password!";
        }

    } else if($_POST["action"] == "register") {
        $userData = array(
            "firstName" => $_POST["firstName"],
            "middleName" => $_POST["middleName"],
            "lastName" => $_POST["lastName"],
            "position" => $_POST["position"],
            "phoneNumber" => $_POST["phoneNumber"],
            "username" => $_POST["username"],
            "email" => $_POST["email"],
            "password" => $_POST["password"],
            "confirmPassword" => $_POST["confirmPassword"],
            "department" => $_POST["department"]
        );
        
        if(validateRegister($userData)) {
            if(!userExistsByUsername($userData["username"])) {
                if(addUser($userData)) {
                    header("Location: login.php");
                } else {
                    echo "There was problem with adding the user to the database.";
                }

            } else {
                echo "The username is already taken.";
            }
        }
    }

} else {
    die("Invalid request.");
}