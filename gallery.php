<?php
ob_start();
?>

<!--Start breadcrumb area-->
<section class="breadcrumb-area">
    <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content text-center">
                    <div class="title">
                        <h2 class="text-white">Image Gallery</h2>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><i class="fa fa-angle-right"></i></li>
                            <li class="active text-white">Image Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="gallery-style-one">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h5>Our Gallery</h5>
            </div>
            <h2>Premium Water Collection</h2>
        </div>

        <div class="gallery-grid popup-gallery">

            <a href="assets/images/gallery/gallery-1.jpg" class="gallery-item">
                <img src="assets/images/gallery/gallery-1.jpg" alt="">
            </a>

            <a href="assets/images/gallery/gallery-2.jpg" class="gallery-item">
                <img src="assets/images/gallery/gallery-2.jpg" alt="">
            </a>

            <a href="assets/images/gallery/gallery-3.jpg" class="gallery-item">
                <img src="assets/images/gallery/gallery-3.jpg" alt="">
            </a>

            <a href="assets/images/product/specification-250ml.jpg" class="gallery-item">
                <img src="assets/images/product/specification-250ml.jpg" alt="">
            </a>

            <a href="assets/images/product/specification-500ml.jpg" class="gallery-item">
                <img src="assets/images/product/specification-500ml.jpg" alt="">
            </a>

            <a href="assets/images/product/specification-1000ml.jpg" class="gallery-item">
                <img src="assets/images/product/specification-1000ml.jpg" alt="">
            </a>

            <a href="assets/images/gallery/gallery-4.jpg" class="gallery-item">
                <img src="assets/images/gallery/gallery-4.jpg" alt="">
            </a>

            <a href="assets/images/gallery/gallery-5.jpg" class="gallery-item">
                <img src="assets/images/gallery/gallery-5.jpg" alt="">
            </a>

            <a href="assets/images/gallery/gallery-6.jpg" class="gallery-item">
                <img src="assets/images/gallery/gallery-6.jpg" alt="">
            </a>
                        <a href="assets/images/gallery/gallery-7.jpg" class="gallery-item">
                <img src="assets/images/gallery/gallery-7.jpg" alt="">
            </a>
        </div>
    </div>
</section>


<?php
$content = ob_get_clean();
require 'layout.php';
?>