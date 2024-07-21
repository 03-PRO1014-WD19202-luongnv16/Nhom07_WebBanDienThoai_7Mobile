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
    '/loginform'=>loginform(),
    '/login' => handleLogin(),
    '/logout' => handleLogout(),
    
};



//...

require_once './commons/disconnect.php';
