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
   " SELECT 
    orderdetails.order_detail_id,
    orderdetails.order_id,
    orderdetails.product_id,
    orderdetails.quantity,
    orderdetails.price,
    products.name AS product_name,
    products.image AS product_image
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

function updateOrder($id, $status) {
    global $conn;
    $sql = "UPDATE orders SET status = :status WHERE order_id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    // $stmt->bindParam(':description', $description, PDO::PARAM_STR);
    return $stmt->execute();
}
