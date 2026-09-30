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
                        <h2 class="text-white">Packaged Drinking Water</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active text-white">Packaged Drinking Water</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End breadcrumb area-->

<!--Start Products Area-->
<section class="shop-style2-area">
    <div class="container">
        <div class="shop-style2_top d-block">
            <div class="sec-title text-center">
                <div class="sub-title">
                    <h5>Our Products</h5>
                </div>
                <h2>Pure Water for Every Need</h2>
                <p>
                <div class="text mt-2">
                    <p>From compact 250 mL bottles to convenient 1000 mL packs, NORE delivers
                        premium packaged drinking water with exceptional purity, refreshing taste,
                        and trusted quality for every occasion.</p>
                </div>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="theme_carousel shop-carousel_1 owl-dot-style1 owl-theme owl-carousel"
                    data-options='{
                    "loop": true,
                    "margin": 30,
                    "autoHeight": true,
                    "lazyLoad": true,
                    "nav": false,
                    "autoplay": false,
                    "autoplayTimeout": 6000,
                    "smartSpeed": 300,
                    "responsive": {
                        "0": {
                            "items": 1,
                            "dots": true
                        },
                        "600": {
                            "items": 1,
                            "dots": true
                        },
                        "768": {
                            "items": 1,
                            "dots": false
                        },
                        "992": {
                            "items": 2,
                            "dots": false
                        },
                        "1200": {
                            "items": 3,
                            "dots": false
                        }
                    }
                }'>

                    <!-- 1000 mL -->
                    <div class="single-shop-item single-shop-item--style2">
                        <div class="single-shop-item_inner">
                            <div class="img-holder">
                                <img src="assets/images/product/water-1000-ml.jpg" alt="NORE 1000 mL Water Bottle">
                                <div class="overlay">
                                    <span class="icon-email"></span>
                                    <a href="contact-us.php">Enquire</a>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3><a href="bottle-1-litre.php">1000 mL Bottle</a></h3>
                                <p>Perfect for daily hydration at home, work, and travel.</p>

                                <div class="header-right_buttom m-0">
                                    <div class="btns-box">
                                        <a class="btn-one" href="bottle-1-litre.php">
                                            <div class="round"></div>
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 500 mL -->
                    <div class="single-shop-item single-shop-item--style2">
                        <div class="single-shop-item_inner">
                            <div class="img-holder">
                                <img src="assets/images/product/water-500-ml.jpg" alt="NORE 500 mL Water Bottle">
                                <div class="overlay">
                                    <span class="icon-email"></span>
                                    <a href="contact-us.php">Enquire</a>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3><a href="bottle-500-ml.php">500 mL Bottle</a></h3>
                                <p>Refreshing hydration for everyday moments and active lifestyles.</p>

                                <div class="header-right_buttom m-0">
                                    <div class="btns-box">
                                        <a class="btn-one" href="bottle-500-ml.php">
                                            <div class="round"></div>
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 250 mL -->
                    <div class="single-shop-item single-shop-item--style2">
                        <div class="single-shop-item_inner">
                            <div class="img-holder">
                                <img src="assets/images/product/water-250-ml.jpg" alt="NORE 250 mL Water Bottle">
                                <div class="overlay">
                                    <span class="icon-email"></span>
                                    <a href="contact-us.php">Enquire</a>
                                </div>
                            </div>
                            <div class="title-holder">
                                <h3><a href="bottle-250-ml.php">250 mL Bottle</a></h3>
                                <p>Compact and convenient—ideal for events, meetings, and kids.</p>

                                <div class="header-right_buttom m-0">
                                    <div class="btns-box">
                                        <a class="btn-one" href="bottle-250-ml.php">
                                            <div class="round"></div>
                                            <span class="txt">Read More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Products Area-->


<?php
$content = ob_get_clean();
require 'layout.php';
?>