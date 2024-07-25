<?php

function cartform()
{
    $view = 'cart';
    $categorys = getAllCategory();
    $cartItems = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/cart.php';
}

function addToCart()
{
    // print_r($_POST);
    $idProduct = $_POST['product_id'];
    $quantity = $_POST['quantity'];



    // Lấy thông tin sản phẩm từ database
    $product = getProductById($idProduct);

    if (!$product) {
        // Xử lý khi sản phẩm không tồn tại
        die('Không tìm thấy sản phẩm');
    }

    // Thêm sản phẩm vào giỏ hàng
    if (isset($_SESSION['cart'][$idProduct])) {
        $_SESSION['cart'][$idProduct]['quantity'] += $quantity;
    } else {
        $_SESSION['cart'][$idProduct] = [
            'product_id' => $idProduct,
            'name' => $product['name'],
            'price' => $product['price'],
            'quantity' => $quantity,
            'image' => $product['image'],
            'ram' => $product['ram'],
            'rom' => $product['rom'],
            'color' => $product['color'],




        ];
    }

    // Chuyển hướng về trang giỏ hàng
    header('Location: index.php?act=/cartForm');
}

function removeFromCart()
{
    $productId = $_GET['product_id'];

    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
    }

    header('Location: index.php?act=/cartForm');
}

function getCartItems()
{
    return isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
}

function clearCart()
{
    $_SESSION['cart'] = [];
}

function checkout()
{
    $view = 'checkout';
    $categorys = getAllCategory();
    // Kiểm tra giỏ hàng có rỗng không
    if (empty($_SESSION['cart'])) {

        header('Location: index.php?act=/cartForm');
        exit;
    }

    // Kiểm tra người dùng đã đăng nhập chưa
    if (!isset($_SESSION['user_id'])) {
        $_SESSION['redirect_to_checkout'] = true;
        header('Location: index.php?act=/loginform');
        exit;
    }
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/checkout.php';
}


function processCheckout()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $userId = $_SESSION['user_id'];
        $firstName = $_POST['first_name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $cartItems = getCartItems();
        $total = array_reduce($cartItems, function ($sum, $item) {
            return $sum + ($item['price'] * $item['quantity']);
        }, 0);

        $orderId = createOrder($userId, $total, $firstName, $email, $phone, $address);
        addOrderDetails($orderId, $cartItems);
        clearCart();

        header('Location: index.php?act=/paymentSuccess');
    } else {
        renderCheckoutView();
    }
}

function renderCheckoutView()
{
    $view='checkout';
    $categorys = getAllCategory();
    // include 'views/checkout.php';
    require_once PATH_VIEW . 'layouts/master.php';
}



function paymentSuccess(){
    $view='paymentSuccess';
    $categorys = getAllCategory();
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/paymentSuccess.php';
}
