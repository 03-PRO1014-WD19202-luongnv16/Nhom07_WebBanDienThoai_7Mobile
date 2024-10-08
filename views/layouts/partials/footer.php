<footer id="footer" class="footer" style="margin-top: 50px;">

    <div class="footer-content">
        <div class="container">

            <div class="row g-5">
                <div class="col-lg-4">
                    <h3 class="footer-heading">About 7Mobile</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam ab, perspiciatis beatae autem deleniti voluptate nulla a dolores, exercitationem eveniet libero laudantium recusandae officiis qui aliquid blanditiis omnis quae. Explicabo?</p>
                    <p><a href="<?=BASE_URL?>?act=/about" class="footer-link-more">Learn More</a></p>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Navigation</h3>
                    <ul class="footer-links list-unstyled">
                        <li><a href="<?=BASE_URL?>?act=/"><i class="bi bi-chevron-right"></i> Home</a></li>
                        <li><a href="<?=BASE_URL?>?act=/products"><i class="bi bi-chevron-right"></i> Sản Phẩm</a></li>
                        <li><a href="<?=BASE_URL?>?act=/about"><i class="bi bi-chevron-right"></i> Về 7Mobile</a></li>
                        <li><a href="<?=BASE_URL?>?act=/contact"><i class="bi bi-chevron-right"></i> Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="col-6 col-lg-2">
                    <h3 class="footer-heading">Danh mục</h3>
                    <ul class="footer-links list-unstyled">
                        <!-- <li><a href="category.html"><i class="bi bi-chevron-right"></i> Business</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Culture</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Sport</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Food</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Politics</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Celebrity</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Startups</a></li>
                        <li><a href="category.html"><i class="bi bi-chevron-right"></i> Travel</a></li> -->
                        <?php foreach ($categorys as $category): ?>

<li><a
        href="/index.php?act=/productsByCategory&category_id=<?= $category['category_id'] ?>"><?= $category['name'] ?></a>
</li>

<?php endforeach; ?>

                    </ul>
                </div>

                 <div class="col-lg-4">
                    <!-- <h3 class="footer-heading">Recent Posts</h3> -->

                    <!-- <ul class="footer-links footer-blog-entry list-unstyled">
                        <li>
                            <a href="single-post.html" class="d-flex align-items-center">
                                <img src="<?= BASE_URL ?>assets/client/assets/img/post-sq-1.jpg" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <span>5 Great Startup Tips for Female Founders</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="single-post.html" class="d-flex align-items-center">
                                <img src="<?= BASE_URL ?>assets/client/assets/img/post-sq-2.jpg" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <span>What is the son of Football Coach John Gruden, Deuce Gruden doing Now?</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="single-post.html" class="d-flex align-items-center">
                                <img src="<?= BASE_URL ?>assets/client/assets/img/post-sq-3.jpg" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <span>Life Insurance And Pregnancy: A Working Mom’s Guide</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="single-post.html" class="d-flex align-items-center">
                                <img src="<?= BASE_URL ?>assets/client/assets/img/post-sq-4.jpg" alt="" class="img-fluid me-3">
                                <div>
                                    <div class="post-meta d-block"><span class="date">Culture</span> <span class="mx-1">&bullet;</span> <span>Jul 5th '22</span></div>
                                    <span>How to Avoid Distraction and Stay Focused During Video Calls?</span>
                                </div>
                            </a>
                        </li>

                    </ul> -->

                </div>
            </div>
        </div>
    </div>

      <div class="footer-legal">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <!-- <div class="copyright">
                        © Copyright <strong><span>ZenBlog</span></strong>. All Rights Reserved
                    </div>  -->
<!-- 
            <div class="credits">
                        All the links in the footer should remain intact.
                         You can delete the links only if you purchased the pro version. 
                         Licensing information: https://bootstrapmade.com/license/ 
                         Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/herobiz-bootstrap-business-template/ 
                         Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> 
                     </div>  -->
  
                </div>

                <div class="col-md-6">
                    <div class="social-links mb-3 mb-lg-0 text-center text-md-end">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>

                </div>

            </div>

        </div>
    </div>

</footer> 
