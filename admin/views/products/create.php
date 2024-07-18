<div class="container my-5">
    <h1><?php echo $title; ?></h1>

    <?php if (!empty($_SESSION['errors'])) : ?>
        <div class="alert alert-danger">
            <?php
            foreach ($_SESSION['errors'] as $error) {
                echo $error . '<br>';
            }
            unset($_SESSION['errors']);
            ?>
        </div>
    <?php endif; ?>

    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="name">Ten</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $_SESSION['data']['name'] ?? ''; ?>" required>
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" class="form-control" id="price" name="price" value="<?php echo $_SESSION['data']['price'] ?? ''; ?>" required>
        </div>

        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $_SESSION['data']['description'] ?? ''; ?></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Chọn Category</option>
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['id']; ?>" <?php echo ($_SESSION['data']['category_id'] ?? '') == $category['id'] ? 'selected' : ''; ?>>
                        <?php echo $category['name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="stock">So Luong</label>
            <input type="number" class="form-control" id="stock" name="stock" value="<?php echo $product['stock']; ?>" required>
        </div>
        <div class="form-group">
            <label for="created_at">Ngay Tao</label>
            <input type="text" class="form-control" id="created_at" name="created_at" value="<?php echo $_SESSION['data']['created_at'] ?? ''; ?>" required>

        </div>
        <div class="form-group">
            <label for="hinh_anh">Hình ảnh</label>
            <input type="file" class="form-control-file" id="hinh_anh" name="hinh_anh">
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
        <a href="<?php echo BASE_URL_ADMIN . '?act=products'; ?>" class="btn btn-secondary">Quay lại</a>
    </form>
</div>