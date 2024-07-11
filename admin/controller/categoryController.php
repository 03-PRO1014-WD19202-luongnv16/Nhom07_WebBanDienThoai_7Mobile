<?php

function categoryIndex() {
    $view = 'listCategory';
    $categorys = getAllCategory();
    require_once PATH_VIEW_ADMIN . 'layouts/master.php';
    require_once './views/listCategory.php';
}