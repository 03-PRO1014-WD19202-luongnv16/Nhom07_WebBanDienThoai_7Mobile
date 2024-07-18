<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">
        <?= $title ?>
        <a href="<?= BASE_URL_ADMIN ?>?act=product-create" class="btn btn-primary">Create</a>

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
                            <th>Category</th>
                            <th>Ten</th>
                            <th>Mo ta</th>
                            <th>Gia</th>
                            <th>So Luong</th>
                            <th>Ngay Tao</th>
                            <th>Hinh Anh</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        foreach ($products as $product) :
                        ?>
                            <tr>
                                <td><?= $product['id'] ?></td>
                                <td><?= $product['category_id'] ?></td>
                                <td><?= $product['name'] ?></td>
                                <td><?= $product['description'] ?></td>
                                <td><?= $product['price'] ?></td>
                                <td><?= $product['stock'] ?></td>
                                <td><?= $product['created_at'] ?></td>

                                <td>
                                    <img src="<?= BASE_URL . $product['hinh_anh'] ?>" alt="" width="100px">
                                </td>
                                <td>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-detail&id=<?= $product['id'] ?>" class="btn btn-info">Show</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-update&id=<?= $product['id'] ?>" class="btn btn-warning">Update</a>
                                    <a href="<?= BASE_URL_ADMIN ?>?act=product-delete&id=<?= $product['id'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>