<?php

function getAllCategory()
{
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "SELECT * FROM categories";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function saveCategory($name, $description) {
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "INSERT INTO categories (name, description) VALUES (:name,:description)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    return $stmt->execute();
}

function deleteCategory($category_id) {
    global $conn;
    $sql = "DELETE FROM categories WHERE category_id = :category_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    return $stmt->execute();
}

function getCategoryById($category_id) {
    global $conn;
    $sql = "SELECT category_id, name, description FROM categories WHERE category_id = :category_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':category_id', $category_id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// function updateCategory($id, $name, $description) {
//     global $conn;
//     $sql = "UPDATE categories SET name = :name, description = :description WHERE category_id = :id";
//     $stmt = $conn->prepare($sql);
//     $stmt->bindParam(':category_id', $id, PDO::PARAM_INT);
//     $stmt->bindParam(':name', $name, PDO::PARAM_STR);
//     $stmt->bindParam(':description', $description, PDO::PARAM_STR);
//     return $stmt->execute();
// }
