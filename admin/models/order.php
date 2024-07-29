<?php

function getAllOrder()
{
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "SELECT * FROM  orders";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getOrderDetails($orderId)
{
    global $conn; // Use the connection from connect.php
    $sql = 
    "SELECT 
        orderdetails.order_detail_id,
        orderdetails.order_id,
        orderdetails.product_id,
        orderdetails.quantity,
        orderdetails.price,
        products.name as product_name
    FROM 
        orderdetails
    JOIN 
        products ON orderdetails.product_id = products.product_id
    WHERE 
        orderdetails.order_id = :orderId";

    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':orderId', $orderId, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function getOrderById($id) {
    global $conn;
    $sql = "SELECT * FROM orders WHERE order_id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}