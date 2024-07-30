<?php

function saveComment($user_id, $product_id, $comment, $created_at) {
    global $conn;
    $sql = "INSERT INTO comments (user_id, product_id, comment, created_at) VALUES (:user_id, :product_id, :comment, :created_at)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_id', $user_id);
    $stmt->bindParam(':product_id', $product_id);
    $stmt->bindParam(':comment', $comment);
    $stmt->bindParam(':created_at', $created_at);

    return $stmt->execute();
}

function getCommentByProductID($product_id){
    global $conn;
    // $sql = "SELECT * FROM comments WHERE product_id = :product_id ORDER BY created_at DESC";
    $sql = "SELECT comments.*, users.username 
             FROM comments 
             JOIN users ON comments.user_id = users.user_id 
             WHERE comments.product_id = :product_id 
             ORDER BY comments.created_at DESC";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['product_id' => $product_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC); 
}
