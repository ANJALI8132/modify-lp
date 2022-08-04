<?php
error_reporting(0);
$source = '';
$source = $_GET['utm_source'];
$medium = '';
$medium = $_GET['utm_medium'];
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="og:title" content="Modify Hardware Store">
    <meta name="og:type" content="">
    <meta name="og:url" content="">
    <meta name="og:image" content="">
    <meta name="og:site_name" content="">
    <meta name="og:description" content="">
    <meta name="fb:page_id" content="">
    <meta name="og:email" content="">
    <meta name="og:phone_number" content="">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">
    <!-- Title  -->
    <title>Modify Hardware Store</title>

    <!-- ***** All CSS Files ***** -->

    <!-- Style css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">

    <!-- Additional Style css -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- cookiealert css -->
    <link rel="stylesheet" href="assets/css/cookiealert.css">



</head>

<body class="homepage-1">




    <div class="main">
        <!-- ***** Welcome Area Start ***** -->
        <section id="home" class="section welcome-area">
            <div class="container-fluid p-0">
                <div class="row">
                    <!-- Welcome Intro Start -->
                    <div class="col-lg-7 col-md-12 p-0">
                        <div class="logo d-flex justify-content-center align-items-center"><img src="assets/img/logo/logo.jpg" alt=""></div>
                        <!-- <div class="banner-caption">
                            <h1><span>Lorem ipsum </span> <span>dolor sit amet .</span></h1>
                        </div> -->
                        <img src="assets/img/banner/hero-img.jpg" alt="" class="hero-img">

                    </div>
                    <div class="col-lg-5 col-md-12 p-0">
                        <div class="welcome-form-wrap d-flex flex-column justify-content-center">
                            <div class="welcome-form">
                                <form name="form1" method="post" action="email.php">
                                    <div class="form-title mx-5">
                                        <h1 class="fw-5">Get in touch with us</h1>
                                    </div>

                                    <div class="form-group mx-5">
                                        <input type="text" placeholder="Name" class="form-control" name="name" required>
                                    </div>

                                    <div class="form-group mx-5">
                                        <input placeholder="Phone" class="form-control" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                    </div>

                                    <div class="form-group mx-5">
                                        <input type="email" placeholder="Email" class="form-control" name="email" required>
                                    </div>

                                    <div class="form-group form-group-btn mx-5">
                                        <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                        <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                        <input type="submit" value="submit" class="form-control" name="submit">
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="ban-cta-phone fw-7">
                            <span class="fw-4">CALL:</span><a href="tel:+919895888766">+91 9895888766</a>
                        </div>

                    </div>

                </div>
        </section>

        <!-- ***** Product Area Start ***** -->
        <section class="product-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 pr-5 d-flex flex-column justify-content-center">
                        <h2 class="common-head fw-8 text-uppercase">

                            <span class="fw-5">Our </span><br> Products
                        </h2>
                        <p class="pt-head-text fw-4">We offer all hardware products from 50+ leading brands that reflect impeccable aesthetics and unique quality.</p>
                        <div class="common-btn1 pt-head-btn fw-7">
                            <a href="#" data-toggle="modal" data-target="#exampleModal0">View MORE</a>
                        </div>
                    </div>
                    <div iv class="col-xl-4">
                        <div class="product-box">
                            <div class="pt-bx-image">
                                <img src="assets/img/products/doors-hardwares.jpg" alt="">
                            </div>
                            <div class="pt-bx-content">
                                <h3 class="fw-7">Door and window <br>hardware</h3>
                                <p>The best door and window hardware in Thalassery is available at Modify. These include glass doors, glass door knobs, cabinet door hardware, door latch, door lock latch, window latches, auto-close hinges etc.</p>
                            </div>
                            <div class="pt-btn">
                                <div class="pt-bx-btn mt-5 ml-4">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <!-- productbox end -->
                    </div>
                    <div iv class="col-xl-4">
                        <div class="product-box">
                            <div class="pt-bx-image">
                                <img src="assets/img/products/locks.jpg" alt="">
                            </div>
                            <div class="pt-bx-content">
                                <h3 class="fw-7">Locks</h3>
                                <p>Get the best door locks in Thalassery, at our showroom. We offer a great selection of different types of locks like sliding door locks, front door locks, bathroom door locks, mortice locks, key locks, chain locks, rim locks, latch locks, door handle locks, sliding glass door locks and more.</p>
                            </div>
                            <div class="pt-btn">
                                <div class="pt-bx-btn mt-5 ml-4">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <!-- productbox end -->
                    </div>
                    <div iv class="col-xl-4">
                        <div class="product-box">
                            <div class="pt-bx-image">
                                <img src="assets/img/products/glass-fittings.jpg" alt="">
                            </div>
                            <div class="pt-bx-content">
                                <h3 class="fw-7">Glass fittings</h3>
                                <p>If you are looking for the best glass fittings in Thalassery, we are the perfect fit. Our store offers genuine glass fitting hardware that includes glass brackets, glass door knobs and more.</p>
                            </div>
                            <div class="pt-btn">
                                <div class="pt-bx-btn mt-5 ml-4">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <!-- productbox end -->
                    </div>
                    <div iv class="col-xl-4">
                        <div class="product-box">
                            <div class="pt-bx-image">
                                <img src="assets/img/products/handles.jpg" alt="">
                            </div>
                            <div class="pt-bx-content">
                                <h3 class="fw-7">Handles</h3>
                                <p>Explore a wide range of the best handles in Thalassery, at Modify. Front door handles, kitchen cabinet handles, drawer handles, cupboard handles, wooden door handles, pull handles, and interior door handles from top brands are available.</p>
                            </div>
                            <div class="pt-btn">
                                <div class="pt-bx-btn mt-5 ml-4">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <!-- productbox end -->
                    </div>
                    <div iv class="col-xl-4">
                        <div class="product-box">
                            <div class="pt-bx-image">
                                <img src="assets/img/products/kitchen-acceessories.jpg" alt="">
                            </div>
                            <div class="pt-bx-content">
                                <h3 class="fw-7">Kitchen accessories</h3>
                                <p>Find all the modern kitchen accessories and kitchen hardware that complete your kitchen, at our store. These include kitchen wardrobes, cabinet knobs, drawer knobs.</p>
                            </div>
                            <div class="pt-btn">
                                <div class="pt-bx-btn mt-5 ml-4">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <!-- productbox end -->
                    </div>
                    <div iv class="col-xl-4">
                        <div class="product-box">
                            <div class="pt-bx-image">
                                <img src="assets/img/products/wardrobe-accessories.jpg" alt="">
                            </div>
                            <div class="pt-bx-content">
                                <h3 class="fw-7">Wardrobe accessories</h3>
                                <p>Give your wardrobe a luxurious look with the best wardrobe accessories in Thalassery. They provide world-class functionality to your wardrobe and better space management.</p>
                            </div>
                            <div class="pt-btn">
                                <div class="pt-bx-btn mt-5 ml-4">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <!-- productbox end -->
                    </div>
                    <div iv class="col-xl-4">
                        <div class="product-box">
                            <div class="pt-bx-image">
                                <img src="assets/img/products/carpentary-tools.jpg" alt="">
                            </div>
                            <div class="pt-bx-content">
                                <h3 class="fw-7">Carpentry tools</h3>
                                <p>To enhance your efficiency, we offer a whole range of the best carpentry tools in Thalassery, all of which are high-quality and innovative.</p>
                            </div>
                            <div class="pt-btn">
                                <div class="pt-bx-btn mt-5 ml-4">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <!-- productbox end -->
                    </div>
                    <div iv class="col-xl-4">
                        <div class="product-box">
                            <div class="pt-bx-image">
                                <img src="assets/img/products/sliding-folding.jpg" alt="">
                            </div>
                            <div class="pt-bx-content">
                                <h3 class="fw-7">Sliding and folding <br>door accessories</h3>
                                <p>Discover an extensive range of the best sliding door accessories and folding door accessories in Thalassery, at our showroom.</p>
                            </div>
                            <div class="pt-btn">
                                <div class="pt-bx-btn mt-5 ml-4">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal0">KNOW MORE</a>
                                </div>
                            </div>
                        </div>
                        <!-- productbox end -->
                    </div>
                </div>
            </div>
        </section>


        <!-- ***** ABOUT AREA START ***** -->
        <section class="about-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h2 class="common-head text-uppercase fw-7 ">
                            <span class="fw-4">About </span>
                            Modify
                        </h2>
                        <div class="about-cont">
                            <p>Modi Aluminium, the renowned group with 28 years of proud tradition and an impressive track record is making a foray into the hardware sector, with its new venture in Thalassery- Modify Hardware Store! </p>
                            <p>Modify Hardware Store comprehensively deals with hardware products, including window/door hardware, glass fittings and carpentry tools from all leading brands. A great selection of quality products and better display facilities are the features that make us stand out from the rest. </p>
                            <div class="common-btn1 about-btn fw-7">
                                <a href="#" data-toggle="modal" data-target="#exampleModal0">more about us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="about-img">
                            <img src="assets/img/about/about-img.jpg" alt="">
                        </div>
                        <div class="counter-sec d-flex">
                            <div class="box-1">
                                <h3>1000+</h3>
                                <p>Products</p>
                            </div>
                            <div class="box-1">
                                <h3>100+</h3>
                                <p>Brands</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">

                    <div class="col-lg-5">
                        <div class="abv-991 pt-3">
                            <div class="common-btn1 about-btn fw-7">
                                <a href="#" data-toggle="modal" data-target="#exampleModal0">more about us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">

                    </div>
                </div> -->
            </div>

        </section>

        <!-- ***** Testi AREA START ***** -->
        <section class="testi-area section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="testi-head">
                            <h1>What are people <span>saying?</span></h1>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="testi-slider owl-carousel">
                            <div class="single-testi">
                                <div class="details">
                                    <div class="img">
                                        <img src="assets/img/testimonials/1.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <h4>Deepak</h4>
                                        <span>Malappuram </span>
                                    </div>
                                </div>
                                <div class="text">
                                    <img src="assets/img/testimonials/quotes.png" alt="">
                                    <p> Every hardware item and accessory you need for a complete home is available at Modify. Quality and durability are guaranteed. Super friendly and helpful staff.</p>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="details">
                                    <div class="img">
                                        <img src="assets/img/testimonials/2.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <h4>Abid</h4>
                                        <span>Calicut</span>
                                    </div>
                                </div>
                                <div class="text">
                                    <img src="assets/img/testimonials/quotes.png" alt="">
                                    <p> Great place to buy kitchen accessories and door and window hardware. I am fully satisfied with the superior quality of the products and the unmatched service offered. Recommend Modify to all who wish to give an elegant touch to their homes.</p>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="details">
                                    <div class="img">
                                        <img src="assets/img/testimonials/1.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <h4>Ananth</h4>
                                        <span>Thrissur</span>
                                    </div>
                                </div>
                                <div class="text">
                                    <img src="assets/img/testimonials/quotes.png" alt="">
                                    <p> Modify is undoubtedly the best hardware shop in Thalassery. I bought glass fittings from the store last year and do not have any complaints so far. The staff is very pleasant and cordial.</p>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="details">
                                    <div class="img">
                                        <img src="assets/img/testimonials/2.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <h4>Arun</h4>
                                        <span>Wayanad</span>
                                    </div>
                                </div>
                                <div class="text">
                                    <img src="assets/img/testimonials/quotes.png" alt="">
                                    <p> Modify has a huge collection of the best quality hardware items from so many top brands. With so many choices and assured quality at great prices, one is more than satisfied after a great purchase.</p>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="details">
                                    <div class="img">
                                        <img src="assets/img/testimonials/1.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <h4>Rajesh </h4>
                                        <span>Thiruvalla</span>
                                    </div>
                                </div>
                                <div class="text">
                                    <img src="assets/img/testimonials/quotes.png" alt="">
                                    <p> One-stop hardware shop in Thalassery that meets all your hardware needs. Under one roof you get many features like top quality, vast selection, great display, and trusted brands. All of this is complemented by a great staff. Look no further, choose Modify.
                                    </p>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="details">
                                    <div class="img">
                                        <img src="assets/img/testimonials/2.jpg" alt="">
                                    </div>
                                    <div class="name">
                                        <h4>Fasil</h4>
                                        <span>Thiruvananthapuram </span>
                                    </div>
                                </div>
                                <div class="text">
                                    <img src="assets/img/testimonials/quotes.png" alt="">
                                    <p> One-stop hardware shop in Thalassery that meets all your hardware needs. Under one roof you get many features like top quality, vast selection, great display, and trusted brands. All of this is complemented by a great staff. Look no further, choose Modify.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <div class="testi-btn">
                            <a href="#" data-toggle="modal" data-target="#exampleModal0">Enquire now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Our brands AREA START ***** -->
        <section class="brands-area section">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="brand-head">
                            <h2>Our <span>Brands</span></h2>
                        </div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/1.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/2.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/3.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/4.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/5.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/6.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/7.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/8.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/9.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/10.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/11.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/12.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/13.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/14.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/15.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2  col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/16.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/17.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/18.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/19.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/20.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/21.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/22.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/23.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/24.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/25.jpg" alt=""></div>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <div class="brand-box"><img src="assets/img/brands/26.jpg" alt=""></div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <h2 class="brand-btn-head"><a href="#" data-toggle="modal" data-target="#exampleModal0">More About Us</a></h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- ***** Footer AREA START ***** -->
        <footer class="section footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 footer-order-2">
                        <div class="footer-logo"><img src="assets/img/logo/footer-logo.png" alt=""></div>
                        <div class="footer-call">
                            <a href="tel:+919895888766"><span>Call:</span> +91 9895888766</a>
                        </div>
                        <div class="footer-copyright">
                            <p>&copy; 2022 Modify. All Rights Reserved. Designed by <a href="http://www.theviralmafia.com/?utm_source=modify" target="_blank"><img src="assets/img/logo/viralmafia.svg" alt=""></a> | <a href="#" data-toggle="modal" data-target="#myModal3">Privacy Policy</a></p>
                        </div>
                    </div>
                    <div class="col-md-6 footer-order-1">
                        <div class="footer-form">
                            <form name="form2" method="post" action="email.php">

                                <div class="form-group mx-5">
                                    <input type="text" placeholder="Name" class="form-control" name="name" required>
                                </div>

                                <div class="form-group mx-5">
                                    <input placeholder="Phone" class="form-control" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                </div>

                                <div class="form-group mx-5">
                                    <input type="email" placeholder="Email" class="form-control" name="email" required>
                                </div>

                                <div class="form-group form-group-btn mx-5">
                                    <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                    <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                    <input type="submit" value="submit" class="form-control" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- ***** Popup Area Start ***** -->
        <div class="appoint-model">
            <div class="container">
                <div class="col-12">
                    <div class="row">
                        <div class="modal fade order-model" id="exampleModal0" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog log-sign row" role="document">
                                <div class="col-sm-6 p-0 text-center pp-left">
                                    <div class="popupleft-content">
                                        <h3>Get Our<br><span>PRODUCTS</span></h3>
                                        <p>Our consultant will get in touch with you</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 p-0">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <a href="#" class="download-close" data-dismiss="modal" aria-label="Close"><span>X</span></a>
                                        </div>
                                        <div id="letter5">
                                            <div class="letter_inner">
                                                <div class="heading color-b">
                                                    <h2>Enquire Now</h2>
                                                </div>
                                                <div class="model-project-details">
                                                    <div class="heading color-b">
                                                        <div class="tab-content">
                                                            <div role="tabpanel" class="tab-pane active tab-log" id="profile2">
                                                                <form name="form3" method="post" action="email.php">
                                                                    <div class="row">
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" placeholder="Phone" name="phone" required type="tel" pattern="[0-9]{10}" maxlength="10" oninvalid="this.setCustomValidity('Please Enter 10 Digit Number')" onchange="this.setCustomValidity('')">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 col-md-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" name="esource" value="<?php echo $source; ?>">
                                                                                <input type="hidden" name="emedium" value="<?php echo $medium; ?>">
                                                                                <input type="submit" class="form-control" value="Submit" name="submit">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </div>
    <!-- ***** MAIN END***** -->
    <a href="#" class="vertical_btn" data-toggle="modal" data-target="#exampleModal0">Enquire</a>
    <div class="cont_link_box">
        <a title="WhatsApp" target="_blank" href="https://api.whatsapp.com/send?phone=+919895888766" class="whatsapp_icon"><i class="fab fa-whatsapp"></i></a>
        <a title="Call Now" target="_blank" href="tel:+919895888766" class="call_iconbtn"><i class="fa fa-phone-alt" aria-hidden="true"></i></a>
    </div>

    <!-- about Form-->
    <div class="modal fade popsec onload_pop" id="myModal3">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-body">
                    <button type="button" class="btn-close pop_button" data-dismiss="modal" aria-label="Close"> X </button>
                    <div class="privacy_onload">

                        <div class="pop-privacy-box">

                            <h4>Privacy Policy</h4>

                            <p>This privacy policy applies to the website( accountssolutions.org ). We may collect personal information such as your name, address, phone number and email address. We use this information to offer services, deliver services on your request and inform you about events and promotions. We use "cookies" to personalize your online experience. We secure the personal information you provide.</p>

                            <h4>Cookies Policy</h4>

                            <p>We use cookies to improve your experience of our website and to analyze performance and traffic in our website.</p>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- START Bootstrap-Cookie-Alert -->
    <div class="alert text-center cookiealert" role="alert">
        <b>Do you like cookies?</b> &#x1F36A;

        <button type="button" class="btn btn-primary btn-sm acceptcookies">
            I agree
        </button>
    </div>
    <!-- END Bootstrap-Cookie-Alert -->


    <!-- ***** All jQuery Plugins ***** -->
    <script src="assets/js/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap/popper.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>
    <script src="assets/js/active.js"></script>
    <script src="assets/js/cookiealert.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setTimeout(function() {
                $("#exampleModal0").modal('show');
            }, 7000);
        });
    </script>

</body>

</html>