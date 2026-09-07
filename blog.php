<?php
ob_start();
?>
<!--Start breadcrumb area paroller-->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content text-center">
                    <div class="title">
                        <h2 class="text-white">Blogs</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active text-white">Blogs</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<section class="blog-style2-area">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h5>Latest Insights</h5>
            </div>
            <h2>Explore Our Water Stories</h2>
        </div>

        <div class="row text-right-rtl">

            <!-- Blog 1 -->
            <div class="col-xl-4">
                <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/use/everyday.jpg" alt="Pure Drinking Water">
                        </div>
                        <div class="categories">
                            <h6><i class="fa fa-folder"></i>Pure Water</h6>
                        </div>
                    </div>

                    <div class="text-holder">
                        <div class="meta-box">
                            <ul class="meta-info">
                                <li><i class="fa fa-calendar"></i> September 05, 2026</li>
                            </ul>
                        </div>

                        <h3 class="blog-title">
                            <a href="javascript:void(0)">Why Choosing Pure Drinking Water Matters Every Day</a>
                        </h3>

                        <p>Pure drinking water supports your body's daily hydration, improves overall well-being, and helps you stay refreshed throughout the day with every clean sip.</p>
                    </div>
                </div>
            </div>

            <!-- Blog 2 -->
            <div class="col-xl-4">
                <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/use/office.jpg" alt="Office Hydration">
                        </div>
                        <div class="categories">
                            <h6><i class="fa fa-folder"></i>Office Tips</h6>
                        </div>
                    </div>

                    <div class="text-holder">
                        <div class="meta-box">
                            <ul class="meta-info">
                                <li><i class="fa fa-calendar"></i> August 28, 2026</li>
                            </ul>
                        </div>

                        <h3 class="blog-title">
                            <a href="javascript:void(0)">Simple Ways to Keep Your Office Team Hydrated</a>
                        </h3>

                        <p>Keeping clean drinking water easily accessible encourages healthier habits, boosts workplace productivity, and helps your team stay energized during busy workdays.</p>
                    </div>
                </div>
            </div>

            <!-- Blog 3 -->
            <div class="col-xl-4">
                <div class="single-blog-style1 single-blog-style2 wow fadeInUp" data-wow-duration="1500ms">
                    <div class="img-holder">
                        <div class="inner">
                            <img src="assets/images/use/5-tips.jpg" alt="Healthy Hydration">
                        </div>
                        <div class="categories">
                            <h6><i class="fa fa-folder"></i>Healthy Living</h6>
                        </div>
                    </div>

                    <div class="text-holder">
                        <div class="meta-box">
                            <ul class="meta-info">
                                <li><i class="fa fa-calendar"></i> August 18, 2026</li>
                            </ul>
                        </div>

                        <h3 class="blog-title">
                            <a href="javascript:void(0)">5 Healthy Hydration Habits for Every Lifestyle</a>
                        </h3>

                        <p>Simple hydration habits like carrying a water bottle and drinking regularly help maintain energy, support wellness, and keep you refreshed every single day.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>




<?php
$content = ob_get_clean();
require 'layout.php';
?>