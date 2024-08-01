<?php

function userIndex() {
    $view = 'listUser';
    $users = getAllUser();
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/listUser.php';
}


function showUser($id) {
    $view = 'detailUser';
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/detailUser.php';
}

function userAdd(){
    $view = 'createUser';
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/createUser.php';
}
function userCreateForm() {
    $view = 'createUser';
    $name = $_POST['username'];
    $email = $_POST['email'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];   
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    if (saveUser($name, $email, $first_name, $last_name,$phone,$address, $password, $role)) {
        $success = "Thêm mới thành công";
    } else {
        $error = "Có lỗi xảy ra. Vui lòng thử lại.";
    }
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/createUser.php';
}

