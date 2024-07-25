<?php
session_start();
// Require tất cả các file có trong commons

require_once './commons/env.php';
require_once './commons/connect.php';
require_once './commons/helper.php';
require_once './commons/model.php';  

// Require file trong controllers vaf models

require_file(PATH_VIEW);
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);

$arrRouteNeedAuth = [
    'cart-add' ,
    'cart-list' ,
    'cart-delete' ,
    'cart-inc',
    'cart-dec',
];

// Kiem tra xem dang nhap chua

middleware_auth_check_client($act, $arrRouteNeedAuth);

// Navigation:
$act = $_GET['act'] ?? '/';

switch ($act) {
    case '/' :
        homeIndex();
        break;
    //Authen
    case 'login' :
         authenShowFormLoginClient();
        break;
    case 'cart-add' :
        cartAdd($_GET['productID'], $_GET['quantity']);
        break;
    case 'cart-list' :
        cartList();
        break;
    case 'cart-delete' :
        cartDelete($_GET['productID']);
        break;
    case 'cart-inc':
        cartInc($_GET['productID']);
        break;
    case 'cart-dec':
        cartDec($_GET['productID']);
        break;
    default : 
    break;
    // 'logout' => authenLogout(),
    //...
};
//...

require_once './commons/disconnect.php';
