<?php
function userListAll()
{
    $title = 'Danh sach user';
    $view = 'users/index';
    $script = 'datatable';
    $script2 = 'users/script';
    $style = 'datatable';

    $users = listAll('users');

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function userShowOne($id)
{

    $user = showOne('users', $id);

    if (empty($user)) {
        e404();
    }

    $title = 'Chi tiet user: ' . $user['name'];
    $view = 'users/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function userCreate()
{
    $title = 'Tạo list user';
    $view = 'users/create';


    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
            "email" => $_POST['email'] ?? null,
            "password" => $_POST['password'] ?? null,
            "role" => $_POST['role'] ?? null,

        ];
        $errors = validateUserCreate($data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=user-create');
            exit();
        }

        insert('users', $data);
        $_SESSION['success'] = 'User created successfully';

        header('Location: ' . BASE_URL_ADMIN . '?act=users');
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function validateUserCreate($data)
{
    $errors = [];
    if (empty($data['name'])) {
        $errors[] = 'Name is required';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Name must be at least 50 characters';
    }
    if (empty($data['email'])) {
        $errors[] = 'Email is required';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is not valid';
    } else if (!checkUniqueEmail('users', $data['email'])) {
        $errors[] = 'Email already exists';
    }
    if (empty($data['password'])) {
        $errors[] = 'Password is required';
    } else if (strlen($data['password']) < 4 || strlen($data['password']) > 20) {
        $errors[] = 'Password must be at least 4 and at most 20 characters';
    }
    if ($data['role'] == null) {
        $errors[] = 'Type is required';
    } else if (!in_array($data['role'], [0, 1])) {
        $errors[] = 'Type must be 0 or 1 ';
    }

    return $errors;
}

function userUpdate($id)
{
    $user = showOne('users', $id);

    if (empty($user)) {
        e404();
    }
    $title = 'Update user: ' . $user['name'];
    $view = 'users/update';

    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? $user['name'],
            "email" => $_POST['email'] ?? $user['email'],
            "password" => $_POST['password'] ?? $user['password'],
            "role" => $_POST['role'] ?? $user['role'],
        ];
        $errors = validateUserUpdate($id, $data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            update('users', $id, $data);
            $_SESSION['success'] = 'User updated successfully';
        }
        header('Location: ' . BASE_URL_ADMIN . '?act=user-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function validateUserUpdate($id, $data)
{
    $errors = [];
    if (empty($data['name'])) {
        $errors[] = 'Name is required';
    } else if (strlen($data['name']) > 50) {
        $errors[] = 'Name must be at least 50 characters';
    }
    if (empty($data['email'])) {
        $errors[] = 'Email is required';
    } else if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Email is not valid';
    } else if (!checkUniqueEmailForUpdate('users', $data['email'], $id)) {
        $errors[] = 'Email already exists';
    }
    if (empty($data['password'])) {
        $errors[] = 'Password is required';
    } else if (strlen($data['password']) < 8 || strlen($data['password']) > 20) {
        $errors[] = 'Password must be at least 8 and at most 20 characters';
    }
    if ($data['role'] == null) {
        $errors[] = 'Type is required';
    } else if (!in_array($data['role'], [0, 1])) {
    }
}
function userDelete($id)
{
    delete2('users', $id);
    header('Location: ' . BASE_URL_ADMIN . '?act=users');
    exit();
}
