<?php

function createOrder($userId, $total, $fullname, $email, $phone, $address ) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO orders (user_id, total, fullname, email, phone, address) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->execute([$userId, $total, $fullname, $email, $phone, $address]);
    return $conn->lastInsertId();
}

function addOrderDetails($orderId, $cartItems) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO orderdetails (order_id, product_id, quantity, price, products_name) VALUES (?, ?, ?, ?, ?)");
    foreach ($cartItems as $item) {
        $stmt->execute([$orderId, $item['product_id'], $item['quantity'], $item['price'], $item['name']]);
    }
}