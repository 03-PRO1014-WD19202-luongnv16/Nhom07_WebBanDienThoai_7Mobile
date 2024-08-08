<?php
function getAllContact()
{
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "SELECT * FROM contacts";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}