<?php

function getAllCategory()
{
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "SELECT * FROM categorys";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
