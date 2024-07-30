<?php

function categoryIndex() {
    $view = 'listCategory';
    $categorys = getAllCategory();
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/listCategory.php';
}

function categoryAdd() {
    $view = 'addCategory';
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/addCategory.php';
}


function handleCategoryForm() {
    $view = 'addCategory';
    $name = $_POST['name'];
    $description = $_POST['description'];

    if (saveCategory($name, $description)) {
        $success = "Thêm mới thành công";
    } else {
        $error = "Có lỗi xảy ra. Vui lòng thử lại.";
    }
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/addCategory.php';
}

function removeCategory($category_id) {
    $result = deleteCategory($category_id);
//     if ($result) {
//         header("Location: ?act=categories");
//         exit;
//     } else {
//         header("Location: ?act=categories");
//         exit;
// }
$message = $result ? "Xóa danh mục thành công." : "Có lỗi xảy ra khi xóa danh mục.";
echo "<script>alert('$message'); window.location.href='index.php?act=categories';</script>";
}

function categoryEdit($id) {
    $view = 'editCategory';
    $category = getCategoryById($id);
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/editCategory.php';
}


// function updateCategoryForm() {
//     $view = 'editCategory';
//     $id = $_POST['category_id'];
//     $name = $_POST['name'];
//     $description = $_POST['description'];

//     if (updateCategory($id, $name,$description)) {
//         $success = "Sửa thành công";
//     } else {
//         $error = "Có lỗi xảy ra. Vui lòng thử lại.";
//     }
//     require_once PATH_VIEW_ADMIN . 'layout/master.php';
//     require_once './views/editCategory.php';
// }

function updateCategoryForm($id) {

    $view = 'editCategory';
    $id = $_POST['category_id'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category = getCategoryById($id);


    if (updateCategory($id, $name, $description)) {
        $success = "Sửa thành công";
    } else {
        $error = "Có lỗi xảy ra. Vui lòng thử lại.";
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/editCategory.php';
}