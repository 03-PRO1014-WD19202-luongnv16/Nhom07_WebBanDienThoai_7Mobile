<!-- ======= Hero Slider Section ======= -->

<!-- End Hero Slider Section -->


<!-- slide show -->

<div class="slideshow-container">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .text {
                font-size: 11px
            }
        }
    </style>

    <h1 style="text-align:center; margin-top: 100px;">Sale sập sàn</h1>
    <?php if (empty($postTopSales)): ?>
        <p>null</p>
    <?php else: ?>

        <?php foreach ($postTopSales as $postTopSale): ?>
            <div class="mySlides fade">
                <!-- <div class="numbertext">1 / 3</div> -->
                <img src="../upload/image/<?= htmlspecialchars($postTopSale['image']) ?>"
                    alt="<?= htmlspecialchars($postTopSale['name']) ?>" style="width:40%">
                <p class="price"><?= htmlspecialchars($postTopSale['name']) ?></p>
                <p class="price">
                    Giá:
                    <?php if (!empty($postTopSale['priceSale'])): ?>
                        <span style="text-decoration: line-through;"><?= htmlspecialchars($postTopSale['price']) ?>
                            VND</span>
                        <span><?= htmlspecialchars($postTopSale['priceSale']) ?> VND</span>
                    <?php else: ?>
                        <span><?= htmlspecialchars($postTopSale['price']) ?> VND</span>
                    <?php endif; ?>
                </p>
            </div>

        <?php endforeach; ?>
    <?php endif; ?>

</div>
<br>


<div style="text-align:center">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>

</div>

<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
<!-- endslide -->


<!-- top4newest -->

<style>
    .card {
        margin: auto;
        margin-top: 60px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 300px;
        text-align: center;
        font-family: arial;
    }

    .price {
        color: grey;
        font-size: 22px;
    }

    .card button {
        border: none;
        outline: 0;
        padding: 12px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
        font-size: 18px;
    }

    .card button:hover {
        opacity: 0.7;
    }
</style>
<div class="container" data-aos="fade-up">
    <h1 style="text-align:center; margin-top: 100px;">Sản Phẩm Mới Nhất</h1>
    <?php if (empty($postTopViews)): ?>
        <p>Không có sản phẩm nào.</p>
    <?php else: ?>
        <div class="row g-5">
            <?php foreach ($postTopViews as $postTopView): ?>
                <div class="card">
                    <img src="../upload/image/<?= htmlspecialchars($postTopView['image']) ?>"
                        alt="<?= htmlspecialchars($postTopView['name']) ?>" style="width:100%">
                    <h1><?= htmlspecialchars($postTopView['name']) ?></h1>
                    <p class="price">
                        Giá:
                        <?php if (!empty($postTopView['priceSale'])): ?>
                            <span style="text-decoration: line-through;"><?= htmlspecialchars($postTopView['price']) ?>
                                VND</span>
                            <span><?= htmlspecialchars($postTopView['priceSale']) ?> VND</span>
                        <?php else: ?>
                            <span><?= htmlspecialchars($postTopView['price']) ?> VND</span>
                        <?php endif; ?>
                    </p>
                    <!-- <p>Danh mục: <?= htmlspecialchars($postTopView['category_name']) ?></p> -->
                    <p>Còn lại: <?= htmlspecialchars($postTopView['stock']) ?></p>
                    <p><button>Thêm Vào giỏ hàng</button></p>
                </div>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>
    <hr>

</div>


<!-- endtop4 -->

<!-- ======= Post Grid Section ======= -->
<section id="posts" class="posts">
    <div class="container" data-aos="fade-up">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="post-entry-1 lg">
                    <a href="single-post.html"><img src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-1.jpg"
                            alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus
                        repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab
                        minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo,
                        eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium
                        dignissimos</p>

                    <!-- <div class="d-flex align-items-center author">
                        <div class="photo"><img src="<?= BASE_URL ?>assets/client/assets/img/person-1.jpg" alt="" class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0">Cameron Williamson</h3>
                        </div>
                    </div> -->
                </div>

            </div>

            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-lg-4 border-start custom-border">
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-2.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Sport</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-5.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Food</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 17th '22</span>
                            </div>
                            <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video
                                    Calls?</a></h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-7.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Design</span> <span class="mx-1">&bullet;</span>
                                <span>Mar 15th '22</span>
                            </div>
                            <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting Places On
                                    the Web?</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 border-start custom-border">
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-3.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For Instagram</a>
                            </h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-6.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Tech</span> <span class="mx-1">&bullet;</span>
                                <span>Mar 1st '22</span>
                            </div>
                            <h2><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-8.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Travel</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                        </div>
                    </div>



                    <!-- Trending Section -->
                    <div class="col-lg-4">

                        <div class="trending">
                            <h3>Trending</h3>
                            <ul class="trending-post">
                                <li>
                                    <a href="single-post.html">
                                        <span class="number">1</span>
                                        <h3>The Best Homemade Masks for Face (keep the Pimples Away)</h3>
                                        <span class="author">Jane Cooper</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-post.html">
                                        <span class="number">2</span>
                                        <h3>17 Pictures of Medium Length Hair in Layers That Will Inspire Your New
                                            Haircut</h3>
                                        <span class="author">Wade Warren</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-post.html">
                                        <span class="number">3</span>
                                        <h3>13 Amazing Poems from Shel Silverstein with Valuable Life Lessons</h3>
                                        <span class="author">Esther Howard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-post.html">
                                        <span class="number">4</span>
                                        <h3>9 Half-up/half-down Hairstyles for Long and Medium Hair</h3>
                                        <span class="author">Cameron Williamson</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="single-post.html">
                                        <span class="number">5</span>
                                        <h3>Life Insurance And Pregnancy: A Working Mom’s Guide</h3>
                                        <span class="author">Jenny Wilson</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div> <!-- End Trending Section -->
                </div>
            </div>

        </div> <!-- End .row -->
    </div>


</section> <!-- End Post Grid Section -->

<!-- ======= Culture Category Section ======= -->
<section class="category-section">
    <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Culture</h2>
            <div><a href="category.html" class="more">See All Culture</a></div>
        </div>

        <div class="row">
            <div class="col-md-9">

                <div class="d-lg-flex post-entry-2">
                    <a href="single-post.html" class="me-4 thumbnail mb-4 mb-lg-0 d-inline-block">
                        <img src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-6.jpg" alt=""
                            class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h3><a href="single-post.html">What is the son of Football Coach John Gruden, Deuce Gruden doing
                                Now?</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem
                            magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam
                            temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="<?= BASE_URL ?>assets/client/assets/img/person-2.jpg" alt=""
                                    class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">Wade Warren</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="post-entry-1 border-bottom">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-1.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do
                                    Now</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                                temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                        </div>

                        <div class="post-entry-1">
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.html">5 Great Startup Tips for Female Founders</a>
                            </h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-2.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During
                                    Video Calls?</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                                temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video
                            Calls?</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will
                            Inspire Your New Haircut</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium
                            Hair</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a>
                    </h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples
                            Away)</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Culture</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a>
                    </h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Culture Category Section -->

<!-- ======= Business Category Section ======= -->
<section class="category-section">
    <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Business</h2>
            <div><a href="category.html" class="more">See All Business</a></div>
        </div>

        <div class="row">
            <div class="col-md-9 order-md-2">

                <div class="d-lg-flex post-entry-2">
                    <a href="single-post.html" class="me-4 thumbnail d-inline-block mb-4 mb-lg-0">
                        <img src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-3.jpg" alt=""
                            class="img-fluid">
                    </a>
                    <div>
                        <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                            <span>Jul 5th '22</span>
                        </div>
                        <h3><a href="single-post.html">What is the son of Football Coach John Gruden, Deuce Gruden doing
                                Now?</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio placeat exercitationem
                            magni voluptates dolore. Tenetur fugiat voluptates quas, nobis error deserunt aliquam
                            temporibus sapiente, laudantium dolorum itaque libero eos deleniti?</p>
                        <div class="d-flex align-items-center author">
                            <div class="photo"><img src="<?= BASE_URL ?>assets/client/assets/img/person-4.jpg" alt=""
                                    class="img-fluid"></div>
                            <div class="name">
                                <h3 class="m-0 p-0">Wade Warren</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4">
                        <div class="post-entry-1 border-bottom">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-5.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do
                                    Now</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                                temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                        </div>

                        <div class="post-entry-1">
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.html">5 Great Startup Tips for Female Founders</a>
                            </h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-7.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                                <span>Jul 5th '22</span>
                            </div>
                            <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During
                                    Video Calls?</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                            <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero
                                temporibus repudiandae, inventore pariatur numquam cumque possimus</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video
                            Calls?</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That Will
                            Inspire Your New Haircut</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and Medium
                            Hair</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working Mom’s Guide</a>
                    </h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples
                            Away)</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Business</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a>
                    </h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Business Category Section -->

<!-- ======= Lifestyle Category Section ======= -->
<section class="category-section">
    <div class="container" data-aos="fade-up">

        <div class="section-header d-flex justify-content-between align-items-center mb-5">
            <h2>Lifestyle</h2>
            <div><a href="category.html" class="more">See All Lifestyle</a></div>
        </div>

        <div class="row g-5">
            <div class="col-lg-4">
                <div class="post-entry-1 lg">
                    <a href="single-post.html"><img src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-8.jpg"
                            alt="" class="img-fluid"></a>
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2><a href="single-post.html">11 Work From Home Part-Time Jobs You Can Do Now</a></h2>
                    <p class="mb-4 d-block">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero temporibus
                        repudiandae, inventore pariatur numquam cumque possimus exercitationem? Nihil tempore odit ab
                        minus eveniet praesentium, similique blanditiis molestiae ut saepe perspiciatis officia nemo,
                        eos quae cumque. Accusamus fugiat architecto rerum animi atque eveniet, quo, praesentium
                        dignissimos</p>

                    <div class="d-flex align-items-center author">
                        <div class="photo"><img src="<?= BASE_URL ?>assets/client/assets/img/person-7.jpg" alt=""
                                class="img-fluid"></div>
                        <div class="name">
                            <h3 class="m-0 p-0">Esther Howard</h3>
                        </div>
                    </div>
                </div>

                <div class="post-entry-1 border-bottom">
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the Pimples
                            Away)</a></h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

                <div class="post-entry-1">
                    <div class="post-meta"><span class="date">Lifestyle</span> <span class="mx-1">&bullet;</span>
                        <span>Jul 5th '22</span>
                    </div>
                    <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a>
                    </h2>
                    <span class="author mb-3 d-block">Jenny Wilson</span>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="row g-5">
                    <div class="col-lg-4 border-start custom-border">
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-6.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2><a href="single-post.html">Let’s Get Back to Work, New York</a></h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-5.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 17th '22</span></div>
                            <h2><a href="single-post.html">How to Avoid Distraction and Stay Focused During Video
                                    Calls?</a></h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-4.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Mar 15th '22</span></div>
                            <h2><a href="single-post.html">Why Craigslist Tampa Is One of The Most Interesting Places On
                                    the Web?</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-4 border-start custom-border">
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-3.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2><a href="single-post.html">6 Easy Steps To Create Your Own Cute Merch For Instagram</a>
                            </h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-2.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Mar 1st '22</span></div>
                            <h2><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should Know</a></h2>
                        </div>
                        <div class="post-entry-1">
                            <a href="single-post.html"><img
                                    src="<?= BASE_URL ?>assets/client/assets/img/post-landscape-1.jpg" alt=""
                                    class="img-fluid"></a>
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2><a href="single-post.html">5 Great Startup Tips for Female Founders</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-4">

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="single-post.html">How to Avoid Distraction and Stay Focused During
                                    Video Calls?</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="single-post.html">17 Pictures of Medium Length Hair in Layers That
                                    Will Inspire Your New Haircut</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="single-post.html">9 Half-up/half-down Hairstyles for Long and
                                    Medium Hair</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="single-post.html">Life Insurance And Pregnancy: A Working Mom’s
                                    Guide</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="single-post.html">The Best Homemade Masks for Face (keep the
                                    Pimples Away)</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                        <div class="post-entry-1 border-bottom">
                            <div class="post-meta"><span class="date">Lifestyle</span> <span
                                    class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                            <h2 class="mb-2"><a href="single-post.html">10 Life-Changing Hacks Every Working Mom Should
                                    Know</a></h2>
                            <span class="author mb-3 d-block">Jenny Wilson</span>
                        </div>

                    </div>
                </div>
            </div>

        </div> <!-- End .row -->
    </div>
</section><!-- End Lifestyle Category Section -->