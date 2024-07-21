<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a href="<?= BASE_URL?>" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="<?= BASE_URL ?>assets/client/assets/img/logo.png" alt=""> -->
            <h1>7Mobile</h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="<?= BASE_URL?>">Trang chủ</a></li>
                <!-- <li><a href="single-post.html">Single Post</a></li> -->
                <li class="dropdown"><a href="/index.php?act=/products"><span>Sản phẩm</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                    <ul>
                    <?php foreach ($categorys as $category): ?>

                        <li><a href="/index.php?act=/productsByCategory&category_id=<?= $category['category_id']?>"><?= $category['name']?></a></li>
                       
                        <?php endforeach; ?>
                    </ul>
                </li>

                <li><a href="/index.php?act=/about">Về 7Mobile</a></li>
                <li><a href="/index.php?act=/contact">Liên Hệ</a></li>
            </ul>
        </nav><!-- .navbar -->

        <div class="position-relative">
            <a href="#" class="mx-2"><span class="bi-facebook"></span></a>
            <a href="#" class="mx-2"><span class="bi-twitter"></span></a>
            <a href="#" class="mx-2"><span class="bi-instagram"></span></a>
            <a href="/index.php?act=/login" class="mx-2"><span>Login</span></a>
            <a href="/index.php?act=/signup" class="mx-2"><span>Sign up</span></a>
            <a href="/index.php?act=/viewCart" class="mx-2"><span>Cart</span></a>



            <a href="#" class="mx-2 js-search-open"><span class="bi-search"></span></a>
            <i class="bi bi-list mobile-nav-toggle"></i>

            <!-- ======= Search Form ======= -->
            <div class="search-form-wrap js-search-form-wrap">
                <form action="search-result.html" class="search-form">
                    <span class="icon bi-search"></span>
                    <input type="text" placeholder="Search" class="form-control">
                    <button class="btn js-search-close"><span class="bi-x"></span></button>
                </form>
            </div><!-- End Search Form -->

        </div>

    </div>

</header>