<?php
session_start();

// Require tất cả các file có trong commons

require_once './commons/env.php';
require_once './commons/connect.php';
require_once './commons/helper.php';
// require_once './commons/model.php';  

// Require file trong controllers vaf models

// require_file(PATH_VIEW);
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

// Navigation:
$act = $_GET['act'] ?? '/';

match ($act) {
    '/' => homeIndex(),
    '/products' => productIndex(),
    '/contact' => contactIndex(),
    'handleContactForm' => handleContactForm(),
    '/about' => aboutIndex(),
    '/signup'=> signup(),
    '/uploadUser' => handleUserForm(),
    '/product'=> productDetail($_GET['id']),
    '/productsByCategory'=> productByCategory($_GET['category_id']),
    'cart-add' => cartAdd($_GET['product_id'], $_GET['quantity']),
    'cart-list' => cartList(),
    'cart-inc' => cartInc($_GET['product_id']),
    'cart-dec' => cartDec($_GET['product_id']),
    'cart-del' => cartDel($_GET['product_id']),
    
};
//...

require_once './commons/disconnect.php';
