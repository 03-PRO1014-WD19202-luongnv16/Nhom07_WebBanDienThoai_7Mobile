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
            background-color: blue;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-btn{
            padding: 6px 12px;
            background-color: chocolate;
            color: white;
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
                    <h2>Tất cả đơn hàng</h2>
                </div>
            </div>
        </div>
        <?php if (empty($orders)): ?>
            <p>Không có danh mục nào.</p>
        <?php else: ?>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID khách hàng</th>
                            <th>Ngày đặt hàng</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($orders as $order): ?>
                        <tr>
                            <td><?=$order['order_id']?></td>
                            <td><?=$order['user_id']?></td>
                            <td><?=$order['order_date']?></td>
                            <td><?=$order['status']?></td>
                            <td><?=$order['total']?></td>
                            <td><?=$order['full_name']?></td>
                            <td><?=$order['email']?></td>
                            <td><?=$order['phone']?></td>
                            <td><?=$order['address']?></td>
                            <td>
                                <a href="<?= BASE_URL_ADMIN ?>?act=order-detail&id=<?= $order['order_id'] ?>"><button class="btn">Chi tiết</button></a>
                            </td>   
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</section>