<?php
function cartAdd($productID, $quantity = 0) {
    // kiem tra xem co cai product hay cai ID khong
    $product = showOne('products', $productID);
    if (empty($product)) {
        e404();
    }
    // Kiem tra xem trong bang cart co ban ghi cua user dang dang nhap chua
    $cartID = getCartID($_SESSION['user']['id']);

    $_SESSION['cartID'] = $cartID;

    if(!isset($_SESSION['cart'][$productID])) {
        $_SESSION['cart'][$productID] = $product;
        $_SESSION['cart'][$productID]['quantity'] = $quantity;
        insert('cart_items', [
            'cart_id' => $cartID,
            'product_id' => $productID,
            'quantity' => $quantity
        ]);
    }else {
        $_SESSION['cart'][$productID]['quantity'] += $quantity;
        updateQuantityByCartIDAndProductID($cartID, $productID,  $_SESSION['cart'][$productID]['quantity']);
    }
    header('Location: ' . BASE_URL . '?act=cart-list');
}

function cartDelete($productID) {
    $product = showOne('products', $productID);
    if (empty($product)) {
        e404();
    }
    if(isset($_SESSION['cart'][$productID])) {
        unset($_SESSION['cart'][$productID]);
        deleteByCartIDAndProductID($_SESSION['cartID'], $productID);
    }
    header('Location: ' . BASE_URL . '?act=cart-list');
}
function cartList() {
    require_once PATH_VIEWS . 'cart-list.php';
}
function cartInc($productID) {
    
}

function cartDec($productID) {

}