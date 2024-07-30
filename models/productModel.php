<?php
function getAllProducts()
{
    global $conn; // Sử dụng kết nối từ connect.php
    $sql = "
        SELECT p.*, c.name as category_name 
        FROM products p 
        JOIN categories c ON p.category_id = c.category_id
    ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getProductById($id) {
    global $conn;
    $sql = "SELECT * FROM products WHERE product_id = $id";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

// function searchProductsByName($searchTerm) {
//     global $conn;
//     $sql = "SELECT * FROM products WHERE product_name LIKE :searchTerm";
//     $stmt = $conn->prepare($sql);
    
//     // Thêm ký tự '%' vào trước và sau từ khóa tìm kiếm
//     $searchTerm = "%$searchTerm%";
//     $stmt->bindParam(':searchTerm', $searchTerm, PDO::PARAM_STR);
    
//     $stmt->execute();
//     return $stmt->fetchAll(PDO::FETCH_ASSOC);
// }
