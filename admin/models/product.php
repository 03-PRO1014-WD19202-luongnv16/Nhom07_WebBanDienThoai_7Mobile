<?php

function getAllProducts()
{
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "SELECT p.*, 
    CASE 
        WHEN p.category_id IS NOT NULL THEN c.name 
        ELSE 'không tìm thấy danh mục' 
        END AS category_name
        FROM products p
        LEFT JOIN categories c ON p.category_id = c.category_id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function saveProduct($name, $description, $category_id, $priceSale, $stock, $price, $image, $ram, $rom,  $color)
{
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "INSERT INTO products (name, description, category_id, priceSale, stock, price, image, ram, rom, color) VALUES (:name,:description,:category_id,:priceSale,:stock,:price,:image,:ram,:rom,:color)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':category_id', $category_id);
    $stmt->bindParam(':priceSale', $priceSale);
    $stmt->bindParam(':stock', $stock);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':ram', $ram);
    $stmt->bindParam(':rom', $rom);
    $stmt->bindParam(':color', $color);



    return $stmt->execute();
}

function deleteProduct($product_id)
{
    global $conn;
    $sql = "DELETE FROM products WHERE product_id = :product_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':product_id', $product_id, PDO::PARAM_INT);
    return $stmt->execute();
}
