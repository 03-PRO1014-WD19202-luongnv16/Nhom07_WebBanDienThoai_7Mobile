<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    body {
        font-family: "Poppins", sans-serif;
        color: #444444;
    }

    a,
    a:hover {
        text-decoration: none;
        color: inherit;
    }

    .section-products {
        padding: 80px 0 54px;
    }

    .section-products .header {
        margin-bottom: 50px;
    }

    .section-products .header h3 {
        font-size: 1rem;
        color: #fe302f;
        font-weight: 500;
    }

    .section-products .header h2 {
        font-size: 2.2rem;
        font-weight: 400;
        color: #444444;
    }

    .section-products .single-product {
        margin-bottom: 26px;
    }

    .section-products .single-product .part-1 {
        position: relative;
        height: 290px;
        max-height: 290px;
        margin-bottom: 20px;
        overflow: hidden;
    }

    .section-products .single-product .part-1::before {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
        transition: all 0.3s;
    }

    .section-products .single-product:hover .part-1::before {
        transform: scale(1.2, 1.2) rotate(5deg);
    }

    .section-products #product-1 .part-1::before {
        background: url("https://i.ibb.co/L8Nrb7p/1.jpg") no-repeat center;
        background-size: cover;
        transition: all 0.3s;
    }

    .section-products #product-2 .part-1::before {
        background: url("https://i.ibb.co/cLnZjnS/2.jpg") no-repeat center;
        background-size: cover;
    }

    .section-products #product-3 .part-1::before {
        background: url("https://i.ibb.co/L8Nrb7p/1.jpg") no-repeat center;
        background-size: cover;
    }

    .section-products #product-4 .part-1::before {
        background: url("https://i.ibb.co/cLnZjnS/2.jpg") no-repeat center;
        background-size: cover;
    }

    .section-products .single-product .part-1 .discount,
    .section-products .single-product .part-1 .new {
        position: absolute;
        top: 15px;
        left: 20px;
        color: #ffffff;
        background-color: #fe302f;
        padding: 2px 8px;
        text-transform: uppercase;
        font-size: 0.85rem;
    }

    .section-products .single-product .part-1 .new {
        left: 0;
        background-color: #444444;
    }

    .section-products .single-product .part-1 ul {
        position: absolute;
        bottom: -41px;
        left: 20px;
        margin: 0;
        padding: 0;
        list-style: none;
        opacity: 0;
        transition: bottom 0.5s, opacity 0.5s;
    }

    .section-products .single-product:hover .part-1 ul {
        bottom: 30px;
        opacity: 1;
    }

    .section-products .single-product .part-1 ul li {
        display: inline-block;
        margin-right: 4px;
    }

    .section-products .single-product .part-1 ul li a {
        display: inline-block;
        width: 40px;
        height: 40px;
        line-height: 40px;
        background-color: #ffffff;
        color: #444444;
        text-align: center;
        box-shadow: 0 2px 20px rgb(50 50 50 / 10%);
        transition: color 0.2s;
    }

    .section-products .single-product .part-1 ul li a:hover {
        color: #fe302f;
    }

    .section-products .single-product .part-2 .product-title {
        font-size: 1rem;
    }

    .section-products .single-product .part-2 h4 {
        display: inline-block;
        font-size: 1rem;
    }

    .section-products .single-product .part-2 .product-old-price {
        position: relative;
        padding: 0 7px;
        margin-right: 2px;
        opacity: 0.6;
    }

    .section-products .single-product .part-2 .product-old-price::after {
        position: absolute;
        content: "";
        top: 50%;
        left: 0;
        width: 100%;
        height: 1px;
        background-color: #444444;
        transform: translateY(-50%);
    }
</style>

<section class="section-products">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div>
                <div class="header">
                    <h3>User</h3>
                    <h2>Tất cả người dùng</h2>
                </div>
            </div>
        </div>
      
                 <!--        Single Product 
                        <div class="col-md-6 col-lg-4 col-xl-3">
                                <div id="product-4" class="single-product">
                                        <div class="part-1">
                                                <span class="new">new</span>
                                                <ul>
                                                        <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-plus"></i></a></li>
                                                        <li><a href="#"><i class="fas fa-expand"></i></a></li>
                                                </ul>
                                        </div>
                                        <div class="part-2">
                                                <h3 class="product-title">Here Product Title</h3>
                                                <h4 class="product-price">$49.99</h4>
                                        </div>
                                </div>
                        </div> -->

        <div class="products">

            <?php if (empty($users)): ?>
                <p>Không có người dùng nào.</p>
            <?php else: ?>
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>first name</th>
                            <th>last name</th>
                            <th>email</th>
                            <th>role</th>
                            <th>
                                action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?=$user['user_id']?></td>
                            <td><?=$user['first_name']?></td>
                            <td><?=$user['last_name']?></td>
                            <td><?=$user['email']?></td>
                            <td><?=$user['role']?></td>
                            <td>
                            <!-- <a href="<?= BASE_URL_ADMIN ?>?act=user-delete&id=<?= $user['user_id'] ?>"><button class="btn btn-danger">xóa</button></a>
                            <a href="<?= BASE_URL_ADMIN ?>?act=editUser&id=<?= $user['user_id'] ?>"> <button class="btn btn-warning"> Sửa</button></a> -->
                            <a href="<?= BASE_URL_ADMIN ?>?act=detailUser&id=<?= $user['user_id'] ?>"> <button class="btn btn-info"> detail</button></a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>
                </table>
               
               

            <?php endif; ?>
        </div>


    </div>
</section>