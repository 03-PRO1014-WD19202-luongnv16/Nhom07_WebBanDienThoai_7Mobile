<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title ?></h1>


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">
                Create
            </h6>
        </div>
        <div class="card-body">
            <?php if (isset($_SESSION['errors'])) : ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php foreach ($_SESSION['errors'] as $error) : ?>
                            <li>
                                <?= $error ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <?php unset($_SESSION['errors']); ?>
            <?php endif; ?>
            <form action="" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3 mt-3">
                            <label for="user_id" class="form-label">UserID:</label>
                            <input type="text" class="form-control" id="user_id" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['user_id'] :  null ?>" placeholder="Enter user_id" name="user_id">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="order_date" class="form-label">Order_Date:</label>
                            <input type="text" class="form-control" id="order_date" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['order_date'] : null ?>" placeholder="Enter order_date" name="order_date">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="order_status" class="form-label">Status:</label>
                            <input type="text" class="form-control" id="order_status" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['order_status'] : null ?>" placeholder="Enter order_status" name="order_status">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="total" class="form-label">Total:</label>
                            <input type="text" class="form-control" id="total" value="<?= isset($_SESSION['data']) ? $_SESSION['data']['total'] : null ?>" placeholder="Enter total" name="total">
                        </div>
                    </div>
                    

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="<?= BASE_URL_ADMIN ?>?act=orders" class="btn btn-danger">Back to List</a>
            </form>
        </div>
    </div>
</div>
<?php if (isset($_SESSION['data'])) {
    unset($_SESSION['data']);
} ?>