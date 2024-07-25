<?php
function orderListAll()
{
    $title = 'Danh sach order';
    $view = 'orders/index';
    $script = 'datatable';
    $script2 = 'orders/script';
    $style = 'datatable';
    $title = 'Danh sach order';
    $orders = listAll('orders');

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function orderShowOne($id)
{

    $orders = showOne('orders', $id);

    if (empty($orders)) {
        e404();
    }

    $view = 'categories/show';

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}
function orderCreate()
{
    $title = 'Tạo list order';
    $view = 'orders/create';
    $title = 'Tạo list order';

    if (!empty($_POST)) {
        $data = [
            "user_id" => $_POST['user_id'] ?? null,
            "order_date" => $_POST['order_date'] ?? null,
            "status" => $_POST['status'] ?? null,
            "total" => $_POST['total'] ?? null,

        ];
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
            header('Location: ' . BASE_URL_ADMIN . '?act=order-create');
            exit();
        }

        insert('orders', $data);
        $_SESSION['success'] = 'order created successfully';

        header('Location: ' . BASE_URL_ADMIN . '?act=orders');
        exit();
    }
    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}



function orderUpdate($id)
{
    $orders = showOne('orders', $id);
    if (empty($orders)) {
        e404();
    }
    $view = 'orders/update';
    $title = 'Update order: ' . $orders['order_date'];
    if (!empty($_POST)) {
        $data = [
            "user_id" => $_POST['user_id'] ?? $orders['user_id'],
            "order_date" => $_POST['order_date'] ?? $orders['order_date'],
            "status" => $_POST['status'] ?? $orders['status'],
            "total" => $_POST['total'] ?? $orders['total'],
        ];
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['data'] = $data;
        } else {
            update('orders', $id, $data);
            $_SESSION['success'] = 'order updated successfully';
        }
        header('Location: ' . BASE_URL_ADMIN . '?act=order-update&id=' . $id);
        exit();
    }

    require_once PATH_VIEW_ADMIN . 'layout/master.php';
}

function orderDelete($id)
{
    delete2('orders', $id);
    header('Location: ' . BASE_URL_ADMIN . '?act=orders');
    exit();
}
