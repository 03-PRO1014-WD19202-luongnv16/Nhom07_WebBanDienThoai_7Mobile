<!-- views/orderDetail.php -->

<style>
    .table-container {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 8px 12px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f4f4f4;
    }

    .btn {
        padding: 6px 12px;
        color: #fff;
        background-color: #dc3545;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>

<section>
    <div class="container">
        <div class="row justify-content-center text-center">
            <div>
                <div class="header">
                    <h2>Chi tiết đơn hàng</h2>
                </div>
            </div>
        </div>
        <?php if (empty($orderDetails)): ?>
            <p>Không có chi tiết đơn hàng nào.</p>
        <?php else: ?>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID đơn hàng</th>
                            <th>ID sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orderDetails as $detail): ?>
                        <tr>
                            <td><?=$detail['order_detail_id']?></td>
                            <td><?=$detail['order_id']?></td>
                            <td><?=$detail['product_id']?></td>
                            <td><?=$detail['product_name']?></td>
                            <td><?=$detail['quantity']?></td>
                            <td><?=$detail['price']?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</section>
