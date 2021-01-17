<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

function validateRegister($userData) {
    if($userData["username"] == "" || $userData["password"] == "" || $userData["email"] == "") {
        return false;
    }

    if($userData["password"] != $userData["confirmPassword"]) {
        return false;
    }
    return true;
}

function userExistsByUsername($username) {
    global $db;
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    return ($result->num_rows > 0);
}

function userExistsByEmail($email) {
    global $db;
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();   
    return ($result->num_rows > 0);
}

function addUser($userData) {
    global $db;
    $sql = "INSERT INTO users (firstName, middleName, lastName, position, phoneNumber, username, email, password, department, time, userKey) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $db->prepare($sql);

    $encryptedPassword = password_hash($userData["password"], PASSWORD_DEFAULT);
    $time = time();
    $shareKey = md5(uniqid());
    $userKey = "";
    $stmt->bind_param("ssssssssiis",
        $userData["firstName"],
        $userData["middleName"],
        $userData["lastName"],
        $userData["position"],
        $userData["phoneNumber"],
        $userData["username"], 
        $userData["email"],
        $encryptedPassword,
        $userData["department"],
        $time,
        $userKey
    );
    return $stmt->execute();

}

function getUserByUsername($username) {
    global $db;
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return NULL;
    }
}

function getUserByKey($userKey) {
    global $db;
    $sql = "SELECT * FROM users WHERE userKey = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $userKey);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return NULL;
    }
}

function setUserKey($user_id, $key) {
    global $db;
    $sql = "UPDATE users SET userKey = ? WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("si", $key, $user_id);
    return $stmt->execute();
}

function getUserIdByShareKey($shareKey) {
    global $db;
    $sql = "SELECT id FROM users WHERE shareKey = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param("s", $shareKey);
    $stmt->execute();
    $result = $stmt->get_result();
    if($result->num_rows > 0) {
        $userinfo = $result->fetch_assoc();

        return $userinfo["id"];
    } else {
        return NULL;
    }
}