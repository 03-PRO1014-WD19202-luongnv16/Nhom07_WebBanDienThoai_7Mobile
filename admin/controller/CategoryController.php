<?php
function categoryListAll()
{
    $title = 'Danh sach category';
    $view = 'categories/index';
    $script = 'datatable';
    $script2 = 'categories/script';
    $style = 'datatable';

    $categories = listAll('categories');

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function categoryShowOne($id)
{

    $category = showOne('categories', $id);

    if (empty($category)) {
        e404();
    }

    $title = 'Chi tiet category: ' . $category['name'];
    $view = 'categories/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function categoryCreate()
{
    $title = 'Tạo list category';
    $view = 'categories/create';


    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
            "description" => $_POST['description'] ?? null,

        ];
        $errors = validateCategoryCreate($data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=category-create');
            exit();
        }

        insert('categories', $data);
        $_SESSION['success'] = 'category created successfully';

        header('Location: ' . BASE_URL_ADMIN . '?act=categories');
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function validateCategoryCreate($data)
{
    $errors = [];
    if (empty($data['name'])) {
        $errors['name'] = 'Please enter title';
    }
    if (empty($data['description'])) {
        $errors['description'] = 'Please enter description';
    }
}

function categoryUpdate($id)
{
    $category = showOne('categories', $id);

    if (empty($category)) {
        e404();
    }
    $title = 'Update category: ' . $category['name'];
    $view = 'categories/update';

    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? $category['name'],
            "description" => $_POST['description'] ?? $category['description'],
        ];
        $errors = validateCategoryUpdate($id, $data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            update('categories', $id, $data);
            $_SESSION['success'] = 'category updated successfully';
        }
        header('Location: ' . BASE_URL_ADMIN . '?act=category-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function validateCategoryUpdate($id, $data)
{
    $errors = [];
    if (empty($data['name'])) {
        $errors[] = 'Name is required';
    }
    if (empty($data['description'])) {
        $errors['description'] = 'Please enter description';
    }
}
function categoryDelete($id)
{
    delete2('categories', $id);
    header('Location: ' . BASE_URL_ADMIN . '?act=categories');
    exit();
}
