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

