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
                        <ul class="bread-crumb clearfix">
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
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
                                                <i class="icon-17"></i>
                                                <input type="text" name="name" placeholder="Name" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <i class="icon-18"></i>
                                                <input type="text" name="phone" placeholder="Phone" required="">
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                <i class="icon-19"></i>
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
                                    <li><i class="icon-2"></i><a href="tel:+88123456987231">+88 12345 6987 231</a></li>
                                    <li><i class="icon-19"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                    <li><i class="icon-23"></i>380 St Kilda Road, Melbourne <br>VIC 3004, Australia</li>
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
        <section class="main-footer">
            <div class="shape">
                <div class="shape-1"></div>
                <div class="shape-2"></div>
                <div class="shape-3" style="background-image: url(assets/images/shape/shape-21.png);"></div>
                <div class="shape-4" style="background-image: url(assets/images/shape/shape-22.png);"></div>
            </div>
            <div class="auto-container">
                <div class="footer-top">
                    <div class="top-inner">
                        <figure class="footer-logo"><a href="index.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
                        <ul class="social-links clearfix">
                            <li><a href="index.html"><i class="icon-3"></i></a></li>
                            <li><a href="index.html"><i class="icon-4"></i></a></li>
                            <li><a href="index.html"><i class="icon-5"></i></a></li>
                            <li><a href="index.html"><i class="icon-6"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="widget-section">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget about-widget">
                                <div class="widget-title">
                                    <h3>About</h3>
                                </div>
                                <div class="widget-content">
                                    <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                                    <ul class="info clearfix">
                                        <li><i class="icon-2"></i><a href="tel:+88123456987231">+88 12345 6987 231</a></li>
                                        <li><i class="icon-19"></i><a href="mailto:info@example.com">info@example.com</a></li>
                                        <li><i class="icon-23"></i>380 St Kilda Road, Melbourne <br>VIC 3004, Australia</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Quick link</h3>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12 link-column">
                                        <ul class="links-list clearfix">
                                            <li><a href="index.html">Home</a></li>
                                            <li><a href="index.html">About</a></li>
                                            <li><a href="index.html">Contact</a></li>
                                            <li><a href="index.html">Services</a></li>
                                            <li><a href="index.html">Blog</a></li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 link-column">
                                        <ul class="links-list clearfix">
                                            <li><a href="index.html">About Company</a></li>
                                            <li><a href="index.html">Our Business</a></li>
                                            <li><a href="index.html">Meet Our Expert</a></li>
                                            <li><a href="index.html">Our Case Studies</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget gallery-widget">
                                <div class="widget-title">
                                    <h3>Gallery</h3>
                                </div>
                                <div class="widget-content">
                                    <ul class="image-list clearfix">
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-1.jpg" alt="">
                                                <a href="assets/images/resource/footer-1.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-24"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-2.jpg" alt="">
                                                <a href="assets/images/resource/footer-2.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-24"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-3.jpg" alt="">
                                                <a href="assets/images/resource/footer-3.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-24"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-4.jpg" alt="">
                                                <a href="assets/images/resource/footer-4.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-24"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-5.jpg" alt="">
                                                <a href="assets/images/resource/footer-5.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-24"></i></a>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure class="image">
                                                <img src="assets/images/resource/footer-6.jpg" alt="">
                                                <a href="assets/images/resource/footer-6.jpg" class="lightbox-image" data-fancybox="gallery"><i class="icon-24"></i></a>
                                            </figure>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom centred">
                    <p><a href="index.html">BitFix</a> &copy; 2025 All Right Reserved</p>
                </div>
            </div>
        </section>
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
