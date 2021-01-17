<?php

$search = filter_var(trim($_POST['search']), FILTER_SANITIZE_STRING);
$choose = filter_var(trim($_POST['choose']), FILTER_SANITIZE_STRING);
include "header.php";


if(isset($_GET['red'])){
    $ids = $_GET['id'];
    ?>
        <form method="POST" action="adminpanel/red_bd.php">
    <div class="menu">
        <div class="user">
            <input type="text" name="user" placeholder="Enter Nickname">
        </div>
        <div class="password">
            <input type="password" name="password" placeholder="Enter password">
        </div>
        <div class="repeat-password">
            <input type="password" name="repeat-password" placeholder="repeat password">
        </div>
        <div class="email">
            <input type="email" name="email" placeholder="Enter email">
        </div>
        <div class="phoneNumber">
            <input type="number" name="phoneNumber" placeholder="Enter phoneNumber">
        </div>
        <div class="firstName">
            <input type="text" name="firstName" placeholder="Enter firstName">
        </div>
        <div class="middleName">
            <input type="text" name="middleName" placeholder="Enter middleName">
        </div>
        <div class="lastName">
            <input type="text" name="lastName" placeholder="Enter lastName">
        </div>
        <div name="department" class="department">
                <select id="department" name="department" class="select">
                    <option value="1" data-marker="1">>Отдел 1</option>
                    <option value="2" data-marker="2">>Отдел 2</option>
                </select>
        </div>
        <div name="position" class="position">
                <select id="position" name="position" class="select">
                    <option value="1" data-marker="1">>Длъжност 1</option>
                    <option value="2" data-marker="2">>Длъжност 2</option>
                </select>
        </div>
        <div class="button">
            <input type="submit" name="button" value="Enter">
            <input type="hidden" name="hidden" value="<?php echo($ids);?>">
        </div>
    </div>
</form>
        <?php

}

$query = $db->query("SELECT * FROM users ORDER BY id DESC");
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
function admin($row)
{
    $userKey = $_COOKIE["user_key"];
    $userinfo = getUserByKey($userKey);
    if($userinfo["id"] == 10){
        ?>
        <div class="cell" data-title="Изтрий"><a  href="?&red=&id=<?php echo($row['id']);?>"><input class="button" type="submit" value="Red"></a></div>
        <?php
    }
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
            admin($row);
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
            admin($row);
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
            admin($row);
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
            admin($row);
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
            admin($row);
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
            admin($row);
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
            admin($row);
        }
    }
    if($a == 0)
    {
        echo "няма намерени :c";
    }
}