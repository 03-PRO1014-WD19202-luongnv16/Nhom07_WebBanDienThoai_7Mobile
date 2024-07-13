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

function deleteCategory($id){
    global $conn;
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    return $stmt->execute();
 
}

function updateCategory($id, $name, $description) {
    global $conn;
    $sql = "UPDATE categories SET name = :name, description = :description WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->bindParam(':name', $name, PDO::PARAM_STR);
    $stmt->bindParam(':description', $description, PDO::PARAM_STR);

    return $stmt->execute();
}
