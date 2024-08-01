<?php

if (!function_exists('checkUniqueEmail')) {
    function checkUniqueEmail($tableName, $email)
    {
        try {


            $sql = "SELECT * FROM $tableName WHERE email = :email LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (Exception $e) {
            debug($e);
        }
    }
}
if (!function_exists('checkUniqueEmailForUpdate')) {
    function checkUniqueEmailForUpdate($tableName, $id, $email)
    {
        try {


            $sql = "SELECT * FROM $tableName WHERE email = :email AND id <> :id LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);

            $stmt->bindParam(":email", $email);

            $stmt->bindParam(":id", $id);

            $stmt->execute();

            $data = $stmt->fetch();

            return empty($data) ? true : false;
        } catch (Exception $e) {
            debug($e);
        }
    }
}
if(!function_exists('getUserAdminByEmailAndPassword')){

    function getUserAdminByEmailAndPassword($email, $password)
    {
        try {
            $sql = "SELECT * FROM users WHERE email = :email AND password = :password AND type = 1 LIMIT 1";

            $stmt = $GLOBALS['conn']->prepare($sql);
            
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $password);
            
            $stmt->execute();
            return $stmt->fetch();
        } catch (Exception $e) {
            debug($e);
        }
    }
}

function getAllUser()
{
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "SELECT * FROM users";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function saveUser($name, $email, $first_name,$last_name,$phone,$address,$password, $role) {
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "INSERT INTO users (username, email, first_name,last_name,phone,address,password,role) VALUES (:username,:email,:first_name,:last_name,:phone,:address,:password,:role)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':role', $role);
    return $stmt->execute();
}


