<?php

function productIndex() {
    $view = 'listProduct';
    $products = getAllProducts();
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/listProduct.php';
}

function productAdd(){
    $view = 'addProduct';
    $categorys = getAllCategory();
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/addProduct.php';
}


function handleProductForm() {
    $view = 'addProduct';
    $categorys = getAllCategory();

    $category_id = $_POST['category_id'];
    $description = $_POST['description'];
    $price= $_POST['price'];
    $stock=$_POST['stock'];


    // $image = $_FILES['image']['name'];
    // $target_dir = "././upload/image";
    // $target_file = $target_dir . basename($image);
    // move_uploaded_file($_FILES['image']['tmp_name'], $target_file);


    $priceSale= $_POST['priceSale'];
    $name = $_POST['name'];

    if (saveProduct($name, $description, $category_id, $priceSale, $stock,$price)) {
        $success = "Thêm mới thành công";
    } else {
        $error = "Có lỗi xảy ra. Vui lòng thử lại.";
    }
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/addProduct.php';
}


