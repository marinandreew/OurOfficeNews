<?php

 $user = filter_var(trim($_POST['user']), FILTER_SANITIZE_STRING);
 $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
 $repeat = filter_var(trim($_POST['repeat-password']), FILTER_SANITIZE_STRING);
 $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
 $phoneNumber = filter_var(trim($_POST['phoneNumber']), FILTER_SANITIZE_STRING);
 $firstName = filter_var(trim($_POST['firstName']), FILTER_SANITIZE_STRING);
 $middleName = filter_var(trim($_POST['middleName']), FILTER_SANITIZE_STRING);
 $lastName = filter_var(trim($_POST['lastName']), FILTER_SANITIZE_STRING);
 $department = filter_var(trim($_POST['department']), FILTER_SANITIZE_STRING);
 $position = filter_var(trim($_POST['position']), FILTER_SANITIZE_STRING);

echo $user;
echo $password;
echo $repeat;
echo $email;
echo $phoneNumber;
echo $firstName;
echo $middleName;
echo $lastName;
echo $department;
echo $position;

 $psw = md5($password."gkwk4k2m");
 $db = new mysqli('localhost', 'root', 'root', 'office');
 $db->query("INSERT INTO `users` (`firstName`, `middleName`, `lastName`, `phoneNumber`, `username`, `email`, `password`, `department`) 
 VALUES('$firstName', '$middleName', '$lastName', '$phoneNumber', '$user', '$email', '$password', '$department')"); 
if ($db->error) {
    printf("Errormessage: %s\n", $connection->error);
}

 $db->close();

?>