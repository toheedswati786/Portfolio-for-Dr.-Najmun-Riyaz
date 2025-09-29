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

        <!-- error-section -->
        <section class="error-section centred">
            <div class="auto-container">
                <div class="inner-box">
                    <figure class="error-image"><img src="assets/images/icons/error-1.png" alt=""></figure>
                    <h2>Oh -No!</h2>
                    <h1 class="g_color">404</h1>
                    <h3>Sorry We Can't Find That Page!</h3>
                    <p>We're not being able to find the page you're looking for.</p>
                    <a href="index.php" class="theme-btn btn-one"><i class="icon-7"></i>Back To Home</a>
                </div>
            </div>
        </section>
        <!-- error-section end -->


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