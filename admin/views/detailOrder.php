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
                <form action="<?= BASE_URL_ADMIN ?>?act=updateStatus&id=<?= $orders['order_id'] ?>" method="post">
                    <div class="mb-3 col-8">
                        <label for="exampleFormControlInput1" class="form-label">Full name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            value="<?= $orders['full_name'] ?>" disabled>
                    </div>
                    <div class="mb-3 col-6">
                        <label for="exampleFormControlInput1" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            value="<?= $orders['phone'] ?>" disabled>

                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            value="<?= $orders['email'] ?>" disabled>
                    </div>

                    <div class="mb-3 col-4">
                        <label for="exampleFormControlInput1" class="form-label">Total</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1"
                            value="<?= $orders['total'] ?>" disabled>
                    </div>
                    <?php if (isset($orders['status']) && $orders['status'] == 'Chờ xác nhận'): ?>
                        <select name="status" class="form-select  col-4" aria-label="Default select example">
                            <option value="<?= $orders['status'] ?>" selected><?= $orders['status'] ?></option>
                            <option value="Chờ giao Hàng">Chờ giao Hàng</option>
                            <option value="Đã hủy">Đã hủy</option>
                        </select>
                    <?php endif ?>
                    <?php if (isset($orders['status']) && $orders['status'] == 'Đã hủy'): ?>
                        <select name="status" class="form-select  col-4" aria-label="Default select example">
                            <option value="<?= $orders['status'] ?>" selected><?= $orders['status'] ?></option>
                            <!-- <option value="Đã hủy">Đã hủy</option> -->
                        </select>
                    <?php endif ?>
                    <?php if (isset($orders['status']) && $orders['status'] == 'Chờ giao hàng'): ?>
                        <select name="status" class="form-select  col-4" aria-label="Default select example">
                            <option value="<?= $orders['status'] ?>" selected><?= $orders['status'] ?></option>
                            <option value="Đang giao Hàng">Đang giao hàng</option>
                        </select>
                    <?php endif ?>
                    <?php if (isset($orders['status']) && $orders['status'] == 'Đang giao hàng'): ?>
                        <select name="status" class="form-select  col-4" aria-label="Default select example">
                            <option value="<?= $orders['status'] ?>" selected><?= $orders['status'] ?></option>
                            <option value="Giao hàng thành công">Giao hàng thành công</option>
                            <option value="Giao hàng thất bại">Giao hàng thất bại</option>
                        </select>
                    <?php endif ?>
                    <?php if (isset($orders['status']) && $orders['status'] == 'Giao hàng thành công'): ?>
                        <select name="status" class="form-select  col-4" aria-label="Default select example">
                            <option value="<?= $orders['status'] ?>" selected><?= $orders['status'] ?></option>
                         
                        </select>
                    <?php endif ?>
                    <?php if (isset($orders['status']) && $orders['status'] == 'Giao hàng thất bại'): ?>
                        <select name="status" class="form-select  col-4" aria-label="Default select example">
                            <option value="<?= $orders['status'] ?>" selected><?= $orders['status'] ?></option>
                           
                        </select>
                    <?php endif ?>



                    <div class="mb-3 mt-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            disabled><?= $orders['address'] ?></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Cập nhật trạng thái</button>
                </form>

                <br>
                <br>
                <table class="table">
                    <thead>
                        <tr>

                            <th>ID Đơn Hàng</th>
                            <th>Ảnh</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($orderDetails as $detail): ?>
                            <tr>
                                <!-- <td><?= $detail['order_detail_id'] ?></td> -->
                                <td><?= $detail['order_id'] ?></td>
                                <td><img src="../upload/image/<?= $detail['product_image'] ?>" style="width:140px;" alt=""></td>
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