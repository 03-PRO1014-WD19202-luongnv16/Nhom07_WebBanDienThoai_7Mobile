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
                    <h2>Tất cả bình luận</h2>
                </div>
            </div>
        </div>
        <?php if (empty($comments)): ?>
            <p>Không có danh mục nào.</p>
        <?php else: ?>
            <div class="table-container">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên khách hàng</th>
                            <th>Tên sản phẩm</th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($comments as $comment): ?>
                        <tr>
                            <td><?=$comment['comment_id']?></td>
                            <td><?=$comment['user_name']?></td>
                            <td><?=$comment['product_name']?></td>
                            <td><?=$comment['comment']?></td>
                            <td><?=$comment['created_at']?></td>
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