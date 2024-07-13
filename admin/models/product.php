<?php

function getAllProducts()
{
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = " SELECT p.*, c.name as category_name 
        FROM products p 
        JOIN categories c ON p.category_id = c.category_id";
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function saveProduct($name, $description, $category_id, $priceSale, $stock, $price) {
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "INSERT INTO products (name, description, category_id, priceSale, stock, price) VALUES (:name,:description,:category_id,:priceSale,:stock,:price)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':priceSale', $priceSale);
    $stmt->bindParam(':stock', $stock);
    $stmt->bindParam(':price', $price);
    return $stmt->execute();
}