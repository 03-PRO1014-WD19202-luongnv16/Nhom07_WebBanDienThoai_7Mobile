<?php

function productIndex() {
    $view = 'listProduct';
    $products = getAllProducts();
    $categorys = getAllCategory();

    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/listProduct.php';
}

function productDetail($id) {
    $view = 'Product';
    $categorys = getAllCategory();

    $product = getProductById($id);
    require_once PATH_VIEW . 'layouts/master.php';
    require_once './views/Product.php';
}

