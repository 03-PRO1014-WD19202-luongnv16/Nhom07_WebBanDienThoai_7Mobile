<?php

function postTopViewOnHome()
{
    global $conn;
    $sql = "SELECT * FROM products ORDER BY product_id DESC LIMIT 4";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);   
}

function getTop3BiggestDiscountProducts() {
    global $conn;
    $sql = "SELECT *, (price - priceSale) AS discount FROM products 
            ORDER BY discount DESC LIMIT 3";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);  
}