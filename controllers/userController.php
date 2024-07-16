<?php 
function signup(){
    $view = 'signup';
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/signup.php';
}

function handleUserForm(){
    $view = 'home';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];


    if (saveUser($username, $email, $first_name,$last_name,$phone,$address,$password)) {
        $success = "Đăng ký thành công!";
    } else {
        $error = "Có lỗi xảy ra. Vui lòng thử lại.";
    }
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/index.php';
}