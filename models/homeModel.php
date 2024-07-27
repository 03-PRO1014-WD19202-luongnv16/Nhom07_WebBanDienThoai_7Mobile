<?php

function postTopViewOnHome()
{
    global $conn;
    $sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT 4";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getTop3BiggestDiscountProducts()
{
    global $conn;
    $sql =  "SELECT *, (price - priceSale) AS discount 
    FROM products 
    WHERE priceSale IS NOT NULL AND priceSale > 0
    ORDER BY discount DESC 
    LIMIT 3";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getAllCategory()
{
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "SELECT * FROM categories";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductsByCategory($category_id)
{
    global $conn;
    $sql = "SELECT p.*, c.name AS category_name
    FROM products p
    LEFT JOIN categories c ON p.category_id = c.category_id
    WHERE p.category_id = :category_id";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

