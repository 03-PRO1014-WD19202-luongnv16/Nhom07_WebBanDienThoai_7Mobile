<?php

function addReviewController()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_SESSION['user_id'])) {
            $user_id = $_SESSION['user_id'];
            $product_id = $_POST['product_id'];
            $comment = $_POST['comment'];
            $created_at = $_POST['created_at'];
            if (!empty($user_id) && !empty($product_id) && !empty($comment) && !empty($created_at)) {
                saveComment($user_id, $product_id, $comment, $created_at);
            }

            header("Location: http://nhom07_webbandienthoai_7mobile.test/?act=/product&id=$product_id");
        } else {
            $error = 'Loi'; 
            header("Location: http://nhom07_webbandienthoai_7mobile.test/?act=/loginform");
        }
    }
}
