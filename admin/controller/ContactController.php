<?php

function contactIndex() {
    $view = 'listContact';
    $contacts = getAllContact();
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/listContact.php';
}