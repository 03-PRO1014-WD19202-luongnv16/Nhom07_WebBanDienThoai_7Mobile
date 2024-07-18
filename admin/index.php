<?php

session_start();
// Require tất cả các file có trong commons

require_once '../commons/env.php';
require_once '../commons/connect.php';
require_once '../commons/helper.php';
require_once '../commons/model.php';

// Require file trong controllers vaf models

require_file(PATH_CONTROLLER_ADMIN);
require_file(PATH_MODEL_ADMIN);

// Navigation
$act = $_GET['act'] ?? '/';

// Kiểm tra xem user đã đăng nhập chưa

// middleware_auth_check($act); 

switch ($act) {
    case '/':
        dashboard();
        break;

    //Authen
    case 'login':
        authenShowFormLogin();
        break;
    // case 'logout':
    //     authenLogout();
    //     break;
    // CRUD Users
    case 'users' :
        userListAll();
        break;
    case 'user-detail' :
        userShowOne($_GET['id']);
        break;
    case 'user-create' :
         userCreate();
        break;
    case 'user-update' :
         userUpdate($_GET['id']);
        break;
    case 'user-delete' :
         userDelete($_GET['id']);
        break;
    // Categories
    case 'categories' :
        categoryListAll();
        break;
    case 'category-detail' :
        categoryShowOne($_GET['id']);
        break;
    case 'category-create' :
        categoryCreate();
        break;
    case 'category-update' :
        categoryUpdate($_GET['id']);
        break;
    case 'category-delete' :
        categoryDelete($_GET['id']);
        break;

    // CRUD Products
    case 'products':
        productListAll();
        break;
    case 'product-create':
        productCreate();
        break;
    case 'product-detail':
        productShowOne($_GET['id']);
        break;
    case 'product-update':
        productUpdate($_GET['id']);
        break;
    case 'product-delete':
        productDelete($_GET['id']);
        break;

    default:
        // Add any default behavior here
        break;
}

require_once '../commons/disconnect.php';
