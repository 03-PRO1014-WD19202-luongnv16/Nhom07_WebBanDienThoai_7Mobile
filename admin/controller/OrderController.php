<?php
function orderIndex()
{
    $view = 'listOrder';
    $orders = getAllOrder();
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/listOrder.php';
}

function orderDetail($orderId)
{
    $view = 'detailOrder';
    $id=$_GET['id'];
    $orderDetails = getOrderDetails($orderId);
    $orders = getOrderById($id);
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/detailOrder.php';
}



