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
                        <h2 class="text-white">NORE Mojito</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i></li>
                            <li class="active text-white">NORE Mojito</li>
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
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="shop-style2_top d-block">
                    <div class="sec-title text-center">
                        <div class="text mt-2">
                            <p>
                                Cool, refreshing and full of character, NORE Mojito brings a sparkling twist to your refreshment moments.
                                Launching soon.
                            </p>
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