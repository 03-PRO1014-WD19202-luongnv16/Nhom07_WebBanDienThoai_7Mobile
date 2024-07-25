<?php
function authenShowFormLoginClient(){
    if($_POST){
        authenLoginClient();
    }
    require_once PATH_VIEW . 'authen/login.php';
}
function authenLoginClient(){
    $user = getUserClientByEmailAndPassword($_POST['email'], $_POST['password']);
    if(empty($user)){
        $_SESSION['error'] = 'Email hoặc password không đúng';
        header('Location: ' . BASE_URL . '?act=login');
        exit();
    }
    $_SESSION['user'] = $user;
    header('Location: ' . BASE_URL);
    exit();
}
function authenLogout(){
   if(!empty($_SESSION['user'])){
       session_destroy();
   }
   header('Location: ' . BASE_URL);
   exit();
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