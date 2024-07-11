<?php

function saveContact($name, $email, $message) {
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':message', $message);
    return $stmt->execute();
}