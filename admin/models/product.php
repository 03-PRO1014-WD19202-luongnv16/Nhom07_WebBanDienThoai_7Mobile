<?php
if (!function_exists('listAllForProducts')) {
    function listAllForProducts()
    {
        try {
            $sql = "SELECT * FROM products
            INNER JOIN categories ON products.category_id = categories.id 
            ORDER BY products.id DESC";
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            debug($e);
        }
    }
}
if (!function_exists('listForProducts')) {
    function listForProducts($id)
    {
        try {
            $sql = "SELECT * FROM products
            INNER JOIN categories ON products.category_id = categories.id 
            WHERE products.category_id = :id
            ORDER BY products.id DESC"; 
            $stmt = $GLOBALS['conn']->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            debug($e);
        }
    }
}
function getAllFromTable($table)
{
    try {
        $sql = "SELECT * FROM $table";
        $stmt = $GLOBALS['conn']->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        debug($e);
    }
}