<?php 

function cartAdd($product_id, $quantity = 0, $price) {
    // Kiểm tra xem là có cái product với cái id kia không 
    $product = showOne('products', $product_id);
    if (empty($product)) {
        debug('404 Not found');
    }

    // Kiểm tra trong bảng carts thì đã có bản ghi nào của user đang đăng nhập chưa 
    // Có rồi thì lấy tra cartID, nếu chưa thì tạo mới
    $order_id = getCartID($_SESSION['users']['id']);

    // Add sản phẩm vào session cart: $_SESSION['users']['productID'] = $product
    // Add tiếp sản phẩm vào cart_items
    if (isset($_SESSION['orders'][$product_id])) {
        $_SESSION['order'][$product_id] = $product;
        $_SESSION['order'][$product_id]['quantity'] = $quantity;

        insert('orderdetails',[
            'order_id' => $order_id,
            'product_id' => $product_id,
            'quantity' => $quantity,
            'price' => $price,
        ]);
    } else {
        $qtyTMP = $_SESSION['order'][$product_id]['quantity'] += $quantity;

        updateQuantityByCartIDAndProductID($order_id, $product_id, $qtyTMP);
    }

    // Chuyển hướng qua list cart
    header('Location: ' . BASE_URL. '?act=cartView');
}


function cartList() {
    require_once PATH_VIEW . 'cartView.php';
}


function cartInc($product_id) {
    
}


function cartDec($product_id) {
    
}


function cartDel($product_id) {
    
}

