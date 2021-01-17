<?php

$search = filter_var(trim($_POST['search']), FILTER_SANITIZE_STRING);
$choose = filter_var(trim($_POST['choose']), FILTER_SANITIZE_STRING);

$server = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'office';

$connection = new mysqli($server, $username, $password, $dbname);
$query = $connection->query("SELECT * FROM users ORDER BY id DESC");
$search = mb_strtolower($search);
function print_text($row)
{
    ?>
    <div class = "list">
    <div class="cell" data-title="firstName"><?php echo($row['firstName']);?></div>
    <div class="cell" data-title="middleName"><?php echo($row['middleName']);?></div>
    <div class="cell" data-title="lastName"><?php echo($row['lastName']);?></div>
    <div class="cell" data-title="position"><?php echo($row['position']);?></div>
    <div class="cell" data-title="phoneNumber"><?php echo($row['phoneNumber']);?></div>
    <div class="cell" data-title="email"><?php echo($row['email']);?></div>
    </div>
<?php
}

if($choose == 2)
{
    $a = 0;
    while($row = $query->fetch_assoc()){
        $roww = mb_strtolower($row['firstName']);
        if($roww == $search)
        {
            $a = 1;
            print_text($row);
        }
    }
    if($a == 0)
    {
        echo "няма намерени :c";
    }
}
if($choose == 3)
{
    $a = 0;
    while($row = $query->fetch_assoc()){
        $roww = mb_strtolower($row['middleName']);
        if($roww == $search)
        {
            $a = 1;
            print_text($row);
        }
    }
    if($a == 0)
    {
        echo "няма намерени :c";
    }
}
if($choose == 4)
{
    $a = 0;
    while($row = $query->fetch_assoc()){
        $roww = mb_strtolower($row['lastName']);
        if($roww == $search)
        {
            $a = 1;
            print_text($row);
        }
    }
    if($a == 0)
    {
        echo "няма намерени :c";
    }
}
if($choose == 5)
{
    $a = 0;
    while($row = $query->fetch_assoc()){
        $roww = mb_strtolower($row['position']);
        if($roww == $search)
        {
            $a = 1;
            print_text($row);
        }
    }
    if($a == 0)
    {
        echo "няма намерени :c";
    }
}
if($choose == 6)
{
    $a = 0;
    while($row = $query->fetch_assoc()){
        $roww = mb_strtolower($row['phoneNumber']);
        if($roww == $search)
        {
            $a = 1;
            print_text($row);
        }
    }
    if($a == 0)
    {
        echo "няма намерени :c";
    }
}
if($choose == 7)
{
    $a = 0;
    while($row = $query->fetch_assoc()){
        $roww = mb_strtolower($row['email']);
        if($roww == $search)
        {
            $a = 1;
            print_text($row);
        }
    }
    if($a == 0)
    {
        echo "няма намерени :c";
    }
}
if($choose == 1)
{
    $a = 0;
    while($row = $query->fetch_assoc()){
        $row_first = mb_strtolower($row['firstName']);
        $row_middle = mb_strtolower($row['middleName']);
        $row_last = mb_strtolower($row['lastName']);
        $row_position = mb_strtolower($row['position']);
        $row_number = mb_strtolower($row['phoneNumber']);
        $row_email = mb_strtolower($row['email']);
        if($row_first == $search || $row_middle == $search || $row_last == $search || $row_position == $search || $row_number == $search || $row_email == $search)
        {
            $a = 1;
            print_text($row);
        }
    }
    if($a == 0)
    {
        echo "няма намерени :c";
    }
}