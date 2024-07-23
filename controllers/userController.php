<?php

function signup()
{
    $view = 'signup';
    $categorys = getAllCategory();

    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/signup.php';
}

function handleUserForm()
{
    $view = 'home';
    $username = $_POST['username'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];


    if (saveUser($username, $email, $first_name, $last_name, $phone, $address, $password)) {
        $success = "Đăng ký thành công!";
    } else {
        $error = "Có lỗi xảy ra. Vui lòng thử lại.";
    }
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/index.php';
}

function loginform()
{
    $view = 'login';
    $categorys = getAllCategory();
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/login.php';
}

function handleLogin()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        login($username, $password);
    } else {
        include 'views/login.php'; // Hiển thị form đăng nhập
    }
}

function handleLogout()
{
    logout(); // Xử lý đăng xuất
}

function login($username, $password)
{
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM users WHERE username = :username');
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($password === $user['password']) {
        session_start();
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['first_name'] = $user['first_name'];
        $_SESSION['role'] = $user['role'];
       


        if (isset($_SESSION['redirect_to_checkout'])) {
            unset($_SESSION['redirect_to_checkout']); // Hủy bỏ biến session
            header('Location: index.php?act=/checkout');
            exit;
        }

        header('Location: index.php?act=/');
        exit();
    } else {
        $error = 'Username hoặc mật khẩu không đúng';
    }
    $view = 'login';
    $categorys = getAllCategory();
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/login.php';

}

function logout()
{
    session_start();
    session_unset();
    session_destroy();

    header('Location: index.php?act=/');
    exit();
}

function checkLogin()
{
    session_start();
    return isset($_SESSION['user_id']);
}