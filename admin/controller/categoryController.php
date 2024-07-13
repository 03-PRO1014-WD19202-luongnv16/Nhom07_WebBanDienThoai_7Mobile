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

function categoryDelete($id){
    return deleteCategory($id);

}

function categoryEdit($id) {
    $view = 'editCategory';
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/editCategory.php';
}


function editCategory($id, $name, $description) {
    return updateCategory($id, $name, $description);
}
