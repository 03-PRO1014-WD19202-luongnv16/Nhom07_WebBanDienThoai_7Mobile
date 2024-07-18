<?php
function authenShowFormLoginClient(){
    $view = 'login';
    require_once PATH_VIEW . 'authen/login.php';
    // require_once PATH_VIEW .'layouts/master.php';
}

function authenLogin(){
    if(empty($user)){
        $_SESSION['error'] = 'Email hoặc password không đúng';
        header('Location: ' . BASE_URL . '?act=login');
        exit();
    }
    $_SESSION['user'] = $user;
    header('Location: ' . BASE_URL);
    exit();
}   