<?php

session_start();
// Require tất cả các file có trong commons

require_once '../commons/env.php';
require_once '../commons/connect.php';
require_once '../commons/helper.php';
// require_once '../commons/model.php';

// Require file trong controllers vaf models

require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

// Navigation
$act = $_GET['act'] ?? '/';

// Kiểm tra xem user đã đăng nhập chưa

// middleware_auth_check($act);

match ($act) {
    '/' => dashboard(),
    //Authen
    'login' => authenShowFormLogin(),
    'logout' => authenLogout(),
    'categories' => categoryIndex(),
    'products' => productIndex(),
    'category-add' => categoryAdd(),
    'category-update'=> updateCategoryForm($_GET['id']),
    'category-create' => handleCategoryForm(),
    'category-delete'=> removeCategory($_GET['id']),
    'editCategory'=> categoryEdit($_GET['id']),
    'users'=> userIndex(),
    // 'userDetail'=> showUser($_GET['id']),
    'product-add'=> productAdd(),
    'product-create'=> handleProductForm(),
    'product-delete' => removeProduct($_GET['id']),
    // Don hang
    'order' => orderIndex(),
    'order-detail' => orderDetail($_GET['id']),
    'product-update'=> updateProductForm($_GET['product_id']),
    'editProduct'=> productEdit($_GET['id']),
    'updateStatus'=> updateOrderForm($_GET['id']),
    'orderByStatus'=> showOrdersByStatus($_GET['status']),
    // comment
    'comment' => listComment(),
    'contact' => contactIndex(),

    'user-add'=>userAdd(),
    'user-create'=>userCreateForm(),


};

require_once '../commons/disconnect.php';
