<?php

function saveUser($username, $email, $first_name,$last_name,$phone,$address,$password){
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "INSERT INTO users (username, email, first_name,last_name,phone,address,password) VALUES (:username, :email, :first_name, :last_name, :phone, :address, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':first_name', $first_name);
    $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':password', $password);
    return $stmt->execute();
}