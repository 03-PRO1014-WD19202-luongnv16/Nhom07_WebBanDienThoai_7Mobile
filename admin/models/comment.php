<?php

function getAllComment()
{
    global $conn;
    
    $sql = "
        SELECT 
            c.comment_id, 
            c.comment, 
            c.created_at, 
            u.username AS user_name, 
            p.name AS product_name 
        FROM comments c
        LEFT JOIN users u ON c.user_id = u.user_id
        LEFT JOIN products p ON c.product_id = p.product_id
    ";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

