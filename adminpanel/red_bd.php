<?php

include "../database/db.php";
$user = filter_var(trim($_POST['user']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
$hidden = filter_var(trim($_POST['hidden']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$phoneNumber = filter_var(trim($_POST['phoneNumber']), FILTER_SANITIZE_STRING);
$firstName = filter_var(trim($_POST['firstName']), FILTER_SANITIZE_STRING);
$middleName = filter_var(trim($_POST['middleName']), FILTER_SANITIZE_STRING);
$lastName = filter_var(trim($_POST['lastName']), FILTER_SANITIZE_STRING);
$department = filter_var(trim($_POST['department']), FILTER_SANITIZE_STRING);
$position = filter_var(trim($_POST['position']), FILTER_SANITIZE_STRING);

$query = $db->query("SELECT * FROM users WHERE id = '$hidden'");
$row = $query->fetch_assoc();
if($user == "")
{
    $user = $row['username'] ;
}
if($email == "")
{
    $email = $row['email'] ;
}
if($phoneNumber == "")
{
    $phoneNumber = $row['phoneNumber'] ;
}
if($firstName == "")
{
    $firstName = $row['firstName'] ;
}
if($middleName == "")
{
    $middleName = $row['middleName'] ;
}
if($lastName == "")
{
    $lastName = $row['lastName'] ;
}
if($department == "")
{
    $department = $row['department'] ;
}
if($position == "")
{
    $position = $row['position'] ;
}

$db->query("UPDATE users SET firstName = '$firstName', middleName = '$middleName', lastName = '$lastName', department = '$department', position = '$position', username = '$user', email = '$email', phoneNumber = '$phoneNumber' WHERE id = '$hidden'");

header('Location: ../main.php');