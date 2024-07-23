<?php
function updateQuantityByCartIDAndProductID($order_id, $product_id, $quantity) {
    try{
        $sql = "UPDATE orderdetails set quantity = :quantity 
        WHERE order_id = :order_id AND product_id = :product_id";

        $stmt = $GLOBALS['conn']->prepare($sql);

        $stmt->bindParam("quantity", $quantity);
        $stmt->bindParam("order_id", $order_id);
        $stmt->bindParam("product_id", $product_id);

        $stmt->execute();
    } catch (\Exception $e){
        debug($e);
    }
}