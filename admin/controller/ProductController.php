<?php
function productListAll()
{
    $title = 'Danh sach san pham';
    $view = 'products/index';
    $script = 'datatable';
    $script2 = 'products/script';
    $style = 'datatable';
    $products = listAllForProducts(); // Corrected function name
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function productShowOne($id){
    $product = showOne('products', $id);
    if (empty($product)) {
        e404();
    }
    $title = 'Chi tiet san pham: ' . $product['name'];
    $view = 'products/show';
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function productCreate(){
    $title = 'Them moi san pham';
    $view = 'products/create';
    $categories = listAllForProducts();
    $categories = getAllFromTable('categories');
    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
            "category_id" => $_POST['category_id'] ?? null,
            "price" => $_POST['price'] ?? null,
            "description" => $_POST['description'] ?? null,
            "stock" => $_POST['stock'] ?? null,
            "created_at" => $_POST['created_at'] ?? null,
            "hinh_anh" => $_FILES['hinh_anh'] ?? null,
        ];
        validateProductCreate($data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=product-create');
            exit();
        }

        insert('products', $data);
        $_SESSION['success'] = 'Product created successfully';
        header('Location: ' . BASE_URL_ADMIN . '?act=products');
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function validateProductCreate($data)
{
    $errors = [];
    if (empty($data['name'])) {
        $errors['name'] = 'Please enter title';
    }
    if (empty($data['price'])) {
        $errors['price'] = 'Please enter price';
    }
    if (empty($data['description'])) {
        $errors['description'] = 'Please enter description';
    }
    if (empty($data['hinh_anh'])) {
        $errors['hinh_anh'] = 'Please enter image';
    }
}
function productUpdate($id){
    $product = showOne('products', $id);
    $categories = getAllFromTable('categories');
    if (empty($product)) {
        e404();
    }
    $title = 'Update san pham: ' . $product['name'];
    $view = 'products/update';
    if (!empty($_POST)) {
        $data = [
            "name" => $_POST['name'] ?? null,
            "category_id" => $_POST['category_id'] ?? null,
            "price" => $_POST['price'] ?? null,
            "description" => $_POST['description'] ?? null,
            "stock" => $_POST['stock'] ?? null,
            "created_at" => $_POST['created_at'] ?? null,
            "hinh_anh" => $_POST['hinh_anh'] ?? null,
        ];
        $errors = validateProductUpdate($id, $data);
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            update('products', $id, $data);
            $_SESSION['success'] = 'product updated successfully';
        }
        header('Location: ' . BASE_URL_ADMIN . '?act=product-update&id=' . $id);
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function validateProductUpdate($id, $data)
{
    $errors = [];
    if (empty($data['name'])) {
        $errors['name'] = 'Please enter title';
    }
    if (empty($data['price'])) {
        $errors['price'] = 'Please enter price';
    }
    if (empty($data['description'])) {
        $errors['description'] = 'Please enter description';
    }

    return $errors;
}
function productDelete($id){
    {
        delete2('products', $id);
        header('Location: ' . BASE_URL_ADMIN . '?act=products');
        exit();
    }
}