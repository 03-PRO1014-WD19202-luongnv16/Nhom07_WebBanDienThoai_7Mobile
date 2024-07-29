<!-- views/orderDetail.php -->

<style>
    .table-container {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        padding: 8px 12px;
        border: 1px solid #ddd;
    }

    th {
        background-color: #f4f4f4;
    }

    .btn {
        padding: 6px 12px;
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
                <form action="">
                    <div class="mb-3 col-8">
                        <label for="exampleFormControlInput1" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$orders['full_name']?>">
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$orders['phone']?>">

                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$orders['email']?>">
                    </div>

                    <div class="mb-3 col-4">
                        <label for="exampleFormControlInput1" class="form-label">Total</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" value="<?=$orders['total']?>">
                    </div>

                    <select class="form-select  col-4" aria-label="Default select example">
                        <option value="<?= $orders['status']?>" selected><?= $orders['status']?></option>
                        <option value="Chờ xác nhận">Chờ xác nhận</option>
                        <option value="Chờ giao Hàng">Chờ giao Hàng</option>
                        <option value="Đang giao hàng">Đang giao hàng</option>
                        <option value="Đã giao hàng">Đã giao hàng</option>
                        <option value="Đã thanh toán">Đã thanh toán</option>
                        <option value="Đã hủy">Đã hủy</option>
                    </select>
                    

                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $orders['address']?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Cập nhật trạng thái</button>
                </form>

                <br>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orderDetails as $detail): ?>
                            <tr>
                                <td><?= $detail['order_detail_id'] ?></td>
                                <td><?= $detail['order_id'] ?></td>
                                <td><?= $detail['product_name'] ?></td>
                                <td><?= $detail['quantity'] ?></td>
                                <td><?= $detail['price'] ?></td>
                            </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>
    </div>
</section>