<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">



    <?php
    include "assets/includes/links.php";
    ?>

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">


        <!-- preloader -->
        <?php
        include "assets/includes/loader.php";
        ?>
        <!-- preloader end -->


        <!-- main header -->
        <?php
        include "assets/includes/header.php";
        ?>
        <!-- main-header end -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><i class="fas fa-times"></i></div>

            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
                <div class="contact-info">
                    <h4>Contact Info</h4>
                    <ul>
                        <li>Mount Laurel, NJ 08054, USA</li>
                        <li><a href="mailto:office@drnajmunriyaz.com">office@drnajmunriyaz.com</a></li>
                    </ul>
                </div>
                <div class="social-links">
                    <ul class="clearfix">
                        <li><a href="index.html"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-facebook-square"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-pinterest-p"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-instagram"></span></a></li>
                        <li><a href="index.html"><span class="fab fa-youtube"></span></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->


        <!-- Page Title -->
        <section class="page-title centred">
            <div class="outer-container">
                <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/page-title-11.jpg);"></div>
                <div class="auto-container">
                    <div class="content-box">
                        <h1>Contact</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Page Title -->


        <!-- contact-section -->
        <section class="contact-section contact-page">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                            <div class="content-box d_block mr_30">
                                <div class="sec-title">
                                    <h5 class="g_color"><i class="icon-11 g_color"></i>Contact Form</h5>
                                    <h2>Send Us A Message</h2>
                                </div>
                                <div class="form-inner">
                                    <form action="index.html" method="post">
                                        <div class="row clearfix">
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <input type="text" name="name" placeholder="Name" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="text" name="phone" placeholder="Phone" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email" required="">
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Write Your Message"></textarea>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 message-btn">
                                                <button type="submit" class="theme-btn btn-one"><i class="icon-7"></i>Let's Get To Work</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 col-sm-12 info-column">
                            <div class="info-box">
                                <h2>Office Info</h2>
                                <ul class="info clearfix">
                                    <li><i class="icon-2"></i><a href="tel:+15513628226">+1(551)362-8226</a></li>
                                    <li><i class="icon-19"></i><a href="mailto:office@drnajmunriyaz.com">office@drnajmunriyaz.com</a></li>
                                    <li><i class="icon-23"></i>Mount Laurel, <br> NJ 08054</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-section -->


        <!-- subscribe-section -->
        <section class="subscribe-section">
            <div class="auto-container">
                <div class="row clearfix align-items-center">
                    <div class="col-lg-5 col-md-12 col-sm-12 text-column">
                        <div class="text">
                            <h2><i class="icon-19"></i>Subscribe Our Newsletter</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-12 form-column">
                        <div class="form-inner">
                            <form action="contact.html" method="post">
                                <div class="form-group">
                                    <input type="email" name="emaail" placeholder="Enter Your Email Adress" required="">
                                    <button type="submit" class="theme-btn btn-one"><i class="icon-7"></i>Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


        <!-- main-footer -->
        <?php
        include "assets/includes/footer.php";   
        ?>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->

    </div>

    <?php
    include "assets/includes/scripts.php";
    ?>
    <script src="assets/js/isotope.js"></script>


</body><!-- End of .page_wrapper -->

</html>