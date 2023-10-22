<!doctype html>
<html lang="en">

<head>
    <title>HIKER | HOME</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- all css  -->
    <?php include 'includes/all_css.php' ?>
</head>

<body>
    <!-- navbar  -->
    <?php include 'components/Navbar.php' ?>

    <!-- categories  -->
    <section class="categories">
        <div class="container">
            <div class="categoryCardWrapper">
                <div class="categoryCardWrapperInner d-flex flex-nowrap">
                    <a class="categoryCard">
                        <div class="cImg">
                            <img src="assets/img/category/category1_03.jpg" alt="">
                        </div>
                        <h5>Mobile Mount</h5>
                    </a>
                    <a class="categoryCard">
                        <div class="cImg">
                            <img src="assets/img/category/category1_05.jpg" alt="">
                        </div>
                        <h5>Audio</h5>
                    </a>
                    <a class="categoryCard">
                        <div class="cImg">
                            <img src="assets/img/category/category1_07.jpg" alt="">
                        </div>
                        <h5>Life Style</h5>
                    </a>
                    <a class="categoryCard">
                        <div class="cImg">
                            <img src="assets/img/category/category1_03.jpg" alt="">
                        </div>
                        <h5>power</h5>
                    </a>
                    <a class="categoryCard">
                        <div class="cImg">
                            <img src="assets/img/category/category1_05.jpg" alt="">
                        </div>
                        <h5>Mobile Mount</h5>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- banner  -->
    <section class="bannerSection">
        <div class="container">
            <a class="bannerImg">
                <img src="assets/img/banners/b1.png" alt="">
            </a>
        </div>
    </section>

    <!-- banner  -->
    <section class="bannerSection">
        <div class="container">
            <a class="bannerImg">
                <img src="assets/img/banners/b2.png" alt="">
            </a>
        </div>
    </section>

    <!-- Best seller  -->
    <section class="bestSeller sectionPadding">
        <div class="container">
            <div class="sectionTitle">
                <h2>Best seller</h2>
            </div>
            <div class="productsWrapper">
                <div class="productsWrapperInner d-flex flex-nowrap">
                    <?php for ($i=1; $i < 6; $i++) { ?>
                    <a class="productCard">
                        <div class="pImg">
                            <img src="https://placehold.co/400x400" alt="">
                        </div>
                        <div class="pContent">
                            <p class="pName">Mobile Stand</p>
                            <p class="price">INR 499</p>
                        </div>
                    </a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile Mount  -->
    <section class="mobileMount mb-5">
        <div class="container">
            <div class="sectionTitle">
                <h2>Mobile Mount</h2>
            </div>
            <div class="productSliderWrapper">
                <div class="productSlider">
                    <div class="productSlideItem productSlideItem">
                        <a class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p4.png" alt="">
                            </div>
                            <p class="psTitle">Magnetic Mount</p>
                        </a>
                    </div>
                    <div class="productSlideItem">
                        <a class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p1.png" alt="">
                            </div>
                            <p class="psTitle">ac vent</p>
                        </a>
                    </div>

                    <div class="productSlideItem">
                        <a class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p1.png" alt="">
                            </div>
                            <p class="psTitle">Bagpack last</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- banners  -->
    <section class="bannerSection">
        <div class="container">
            <a class="bannerImg">
                <img src="assets/img/banners/b4.png" alt="">
            </a>
        </div>
    </section>

    <!-- banners  -->
    <section class="bannerSection">
        <div class="container">
            <a class="bannerImg">
                <img src="assets/img/banners/b5.png" alt="">
            </a>
        </div>
    </section>

    <!-- lifestyle  -->
    <section class="lifeStyle sectionPadding">
        <div class="container">
            <div class="sectionTitle">
                <h2>Lifestyle</h2>
            </div>
            <div class="productSliderWrapper">
                <div class="productSlider">
                    <div class="productSlideItem productSlideItem">
                        <a class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p1.png" alt="">
                            </div>
                            <p class="psTitle">Bagpack</p>
                        </a>
                    </div>
                    <div class="productSlideItem">
                        <a class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p4.png" alt="">
                            </div>
                            <p class="psTitle">Wallet</p>
                        </a>
                    </div>

                    <div class="productSlideItem">
                        <a class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p1.png" alt="">
                            </div>
                            <p class="psTitle">Purse</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- banner  -->
    <section class="bannerSection mt-2">
        <div class="container">
            <a class="bannerImg">
                <img src="assets/img/banners/b6.png" alt="">
            </a>
        </div>
    </section>

    <!-- power  -->
    <section class="power sectionPadding">
        <div class="container">
            <div class="sectionTitle">
                <h2>Power</h2>
            </div>
            <div class="productSliderWrapper">
                <div class="productSlider">
                    <div class="productSlideItem productSlideItem">
                        <a class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p2.png" alt="">
                            </div>
                            <p class="psTitle">Wall Charger</p>
                        </a>
                    </div>
                    <div class="productSlideItem">
                        <a class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p1.png" alt="">
                            </div>
                            <p class="psTitle">car charger</p>
                        </a>
                    </div>

                    <div class="productSlideItem">
                        <a class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p1.png" alt="">
                            </div>
                            <p class="psTitle">laptop charger</p>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- banner  -->
    <section class="bannerSection mt-2">
        <div class="container">
            <a class="bannerImg">
                <img src="assets/img/banners/b7.png" alt="">
            </a>
        </div>
    </section>

    <!-- testimonials  -->
    <section class="customers sectionPadding">
        <div class="container">
            <div class="sectionTitle">
                <h2>our customers <i class="fa-solid fa-heart"></i> us</h2>
            </div>
            <div class="productSliderWrapper">
                <div class="productSlider">
                    <div class="productSlideItem productSlideItem">
                        <div class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p2.png" alt="">
                            </div>
                            <p class="psTitle">"Amazing quality and durable"</p>
                            <p class="tag d-flex align-items-center"><i class="fa-brands fa-instagram"></i> @mansi</p>
                        </div>
                    </div>
                    <div class="productSlideItem">
                        <div class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p1.png" alt="">
                            </div>
                            <p class="psTitle">"Terrible quality, avoid at all costs."</p>
                            <p class="tag d-flex align-items-center"><i class="fa-brands fa-instagram"></i> @rohan</p>
                        </div>
                    </div>

                    <div class="productSlideItem">
                        <div class="productSlideCard">
                            <div class="psImg">
                                <img src="assets/img/products/p1.png" alt="">
                            </div>
                            <p class="psTitle">"Terrible quality, avoid at all costs."</p>
                            <p class="tag d-flex align-items-center"><i class="fa-brands fa-instagram"></i> @john</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- features  -->
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="featureCard">
                        <div class="fIcon">
                            <img src="assets/img/icons/box.png" alt="">
                        </div>
                        <p class="featName">Fast and safe delivery</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="featureCard">
                        <div class="fIcon">
                            <img src="assets/img/icons/return-box.png" alt="">
                        </div>
                        <p class="featName">easy return</p>
                    </div>
                </div>
                <div class="col-4">
                    <div class="featureCard">
                        <div class="fIcon">
                            <img src="assets/img/icons/whatsapp.png" alt="">
                        </div>
                        <p class="featName">Friendy support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- black bar above footer  -->
    <section class="blackBar">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="bbCard">
                        <div class="bbIcon">
                            <img src="assets/img/icons/blackbar/013-stand.png" alt="">
                        </div>
                        <div class="bbTitle">
                            Mounts
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bbCard">
                        <div class="bbIcon">
                            <img src="assets/img/icons/blackbar/010-earbuds.png" alt="">
                        </div>
                        <div class="bbTitle">
                            audio
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bbCard">
                        <div class="bbIcon">
                            <img src="assets/img/icons/blackbar/009-usb-cable.png" alt="">
                        </div>
                        <div class="bbTitle">
                            power
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bbCard">
                        <div class="bbIcon">
                            <img src="assets/img/icons/blackbar/007-backpack-2.png" alt="">
                        </div>
                        <div class="bbTitle">
                            lifestyle
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="bbCard">
                        <div class="bbIcon">
                            <img src="assets/img/icons/blackbar/001-shield.png" alt="">
                        </div>
                        <div class="bbTitle">
                            safety
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <?php include 'components/Footer.php' ?>

    <!-- all js  -->
    <?php include 'includes/all_js.php' ?>
</body>

</html>
