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
                    <div class="row" style="justify-content: center;">
                    <img src="../upload/image/<?= htmlspecialchars($postTopView['image']) ?>"
                        alt="<?= htmlspecialchars($postTopView['name']) ?>" style="height: 200px; width: 200px;">
                        </div>
                        <div class="row" style="height:95px; ">
                    <h1><?= htmlspecialchars($postTopView['name']) ?></h1>
                    </div>
                    <p class="price" style="margin-top: 15px;">
                        Giá:
                        <?php if (!empty($postTopView['priceSale'])): ?>
                            <span style="text-decoration: line-through;" ><?= htmlspecialchars($postTopView['price']) ?>
                                VND</span>
                            <span><?= htmlspecialchars($postTopView['priceSale']) ?> VND</span>
                        <?php else: ?>
                            <span><?= htmlspecialchars($postTopView['price']) ?> VND</span>
                        <?php endif; ?>
                    </p>
                    <!-- <p>Danh mục: <?= htmlspecialchars($postTopView['category_name']) ?></p> -->
                    <p>Còn lại: <?= htmlspecialchars($postTopView['stock']) ?></p>
                    <a href="<?= BASE_URL ?>?act=/product&id=<?=$postTopView['product_id']?>"><p><button style="border-radius: 8px;">Chi tiết</button></p></a>
                    <a href="<?= BASE_URL . '?act=cart-add&product_id=' . $products['id'] . '&quantity=1' ?>" class="btn btn-primary">Mua</a>
                </div>
            <?php endforeach; ?>

        </div>
    <?php endif; ?>
    <hr>

</div>


<!-- endtop4 -->

<!-- ======= Post Grid Section ======= -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>