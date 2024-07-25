<?php
function orderIndex()
{
    $view = 'listOrder';
    $orders = getAllOrder();
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/listOrder.php';
}

// orderController.php

function orderDetail($orderId)
{
    $view = 'detailOrder';
    $orderDetails = getOrderDetails($orderId);
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/detailOrder.php';
}



