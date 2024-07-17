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
                <h2 class="mb-4 display-5 text-center">Thêm mới sản phẩm</h2>
                <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-12 col-lg-9">
                <div class="bg-white border rounded shadow-sm overflow-hidden"></div>
                <form action="./index.php?act=product-create" method="POST" enctype="multipart/form-data">
                    <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                        <div class="col-12">
                            <label for="fullname" class="form-label">Tên <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" required value="">
                        </div>
              <div class="col-12">
                            <label for="fullname" class="form-label">Ảnh <span class="text-danger">*</span></label>
                            <input type="file" class="form-control"  name="image" id="image" required>
                        </div>
                       
                        <div class="col-6">
                            <label for="category_id">Danh mục:</label>
                            <select name="category_id" id="category_id" required>
                                <?php foreach ($categorys as $category): ?>
                                    <option value="<?php echo $category['category_id']; ?>">
                                        <?php echo $category['name']; ?>
                                    </option>

                                <?php endforeach; ?>
                            </select><br>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Mô tả <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                required></textarea>
                        </div>
                        <div class="col-6">
                            <label for="fullname" class="form-label">Giá <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="price" name="price" required value="">
                        </div>
                        <div class="col-6">
                            <label for="fullname" class="form-label">số lượng <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="stock" name="stock" required value="">
                        </div>

                        <div class="col-12">
                            <label for="fullname" class="form-label">Giá khuyến mãi <span
                                    class="text-danger"></span></label>
                            <input type="number" class="form-control" id="priceSale" name="priceSale"  value="">
                        </div>

                        <div class="col-6">
                            <label for="fullname" class="form-label">Ram <span class="text-danger"></span></label>
                            <input type="text" class="form-control" id="ram" name="ram" value="">
                        </div>
                        <div class="col-6">
                            <label for="fullname" class="form-label">Bộ nhớ trong <span class="text-danger"></span></label>
                            <input type="text" class="form-control" id="rom" name="rom" value="">
                        </div>
                        <div class="col-12">
                            <label for="fullname" class="form-label">Màu sắc <span class="text-danger"></span></label>
                            <input type="text" class="form-control" id="color" name="color" value="">
                        </div>

                        <div class="col-12">
                            <br>
                            <div class="d-grid">
                                <a href="/index.php?act=product-create"><button class="btn btn-primary btn-lg"
                                        type="submit">Thêm mới</button></a>
                            </div>
                        </div>
                    </div>
                    <!-- <label for="name">Tên:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="message">Tin nhắn:</label>
    <textarea id="message" name="message" required></textarea><br><br>

    <button type="submit">Gửi</button> -->
                </form>

            </div>
        </div>
    </div>
</section>