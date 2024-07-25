<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>
        <a href="<?= BASE_URL_ADMIN ?>?act=order-create" class="btn btn-primary">Create</a>

    </h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                DataTables Example
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>UserID</th>
                            <th>Order_Date</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($orders as $order) :
                        ?>
                            <tr>
                                <td><?= $order['id'] ?></td>
                                <td><?= $order['user_id'] ?></td>
                                <td><?= $order['order_date'] ?></td>
                                <td><?= $order['status'] ?></td>
                                <td><?= $order['total'] ?></td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['id'] ?>" class="btn btn-info">Show</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-update&id=<?= $order['id'] ?>" class="btn btn-warning">Update</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=order-delete&id=<?= $order['id'] ?>"
                                    onclick="return confirm('Are you sure?')"
                                    class="btn btn-danger">Delete</a>
                                </td>   
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>