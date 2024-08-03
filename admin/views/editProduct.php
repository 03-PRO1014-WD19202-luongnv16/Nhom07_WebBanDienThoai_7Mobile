
<?php if (isset($success)): ?>
    <p style="color: green;"><?= htmlspecialchars($success) ?></p>
<?php endif; ?>

<?php if (isset($error)): ?>
    <p style="color: red;"><?= htmlspecialchars($error) ?></p>
<?php endif; ?>

<section class="bg-light py-3 py-md-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="mb-4 display-5 text-center">Chỉnh sửa Product <?= htmlspecialchars($product['name']) ?></h2>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-9">
                <div class="bg-white border rounded shadow-sm overflow-hidden"></div>
                <form action="<?= BASE_URL_ADMIN ?>/index.php?act=product-update&product_id=<?= htmlspecialchars($product['product_id']) ?>" method="POST" enctype="multipart/form-data">
                    <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                        <div class="col-12">
                            <input type="number" class="form-control" id="product_id" name="product_id" required value="<?= htmlspecialchars($product['product_id']) ?>" hidden>
                            <label for="name" class="form-label">Tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required value="<?= htmlspecialchars($product['name']) ?>">
                        </div>
                        <div class="col-12">
                            <label for="category_id" class="form-label">Danh mục <span class="text-danger">*</span></label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                <?php foreach ($categories as $category): ?>
                                    <option value="<?= htmlspecialchars($category['category_id']) ?>"><?= htmlspecialchars($category['name']) ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <!-- <?= print_r($categories)?> -->
                        <div class="col-12">
                            <label for="description" class="form-label">Mô tả <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="3" required><?= htmlspecialchars($product['description']) ?></textarea>
                        </div>
                        <div>
                            <label for="image" class="form-label"> Image <span class="text-danger">*</span></label>
                            <img src="../upload/image/<?= htmlspecialchars ($product['image'])?>" alt="" style="width: 400px; height:300px ;">
                            <hr>
                            <input type="file" class="form-control" id="image" name="image" required value="<?= htmlspecialchars($product['image']) ?>">
                        </div>
                        <div class="col-12">
                            <label for="price" class="form-label">Price <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="price" name="price"  required value="<?= htmlspecialchars($product['price']) ?>" >
                        </div>
                        <div class="col-12">
                            <label for="stock" class="form-label">Stock<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="stock" name="stock"  required value="<?= htmlspecialchars($product['stock']) ?>" >
                        </div>
                        <div class="col-12">
                            <label for="priceSale" class="form-label">Price Sale <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="priceSale" name="priceSale"  value="<?= htmlspecialchars($product['priceSale']) ?>" >
                        </div>
                        <!-- <div class="col-12">
                            <label for="created_at" class="form-label">Create At<span class="text-danger">*</span></label>
                            <input type="datetime" class="form-control" id="created_at" name="created_at"  required value="<?= htmlspecialchars($product['created_at']) ?>">
                        </div> -->
                        <div class="col-12">
                            <label for="ram" class="form-label">Ram<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="ram" name="ram"  required value="<?= htmlspecialchars($product['ram']) ?>" >
                        </div><div class="col-12">
                            <label for="rom" class="form-label">Rom<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="rom" name="rom"  required value="<?= htmlspecialchars($product['rom']) ?>" >
                        </div>
                        <div class="col-12">
                            <label for="color" class="form-label">Color<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="color" name="color"  required value="<?= htmlspecialchars($product['color']) ?>" >
                        </div>
                        <div class="col-12">
                            <br>
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit"><a href="<?php BASE_URL_ADMIN ?>/index.php?act=products">Update</a></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
