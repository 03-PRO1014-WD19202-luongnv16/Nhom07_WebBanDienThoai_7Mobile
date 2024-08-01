<?php
function listComment()
{
    $view = 'listComment';
    $comments = getAllComment();
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/listComment.php';
}