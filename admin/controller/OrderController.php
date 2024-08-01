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
    // $product = getProductById($id);
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/detailOrder.php';
}

function updateOrderForm($id) {

    $view = 'listOrder';
    // $id = $_POST['order_id'];
    $status = $_POST['status'];
    // $description = $_POST['description'];
    // $category = getCategoryById($id);


    if (updateOrder($id, $status)) {
        $success = "Sửa thành công";
        $orders = getAllOrder();

    } else {
        $error = "Có lỗi xảy ra. Vui lòng thử lại.";
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
    require_once './views/listOrder.php';
}



