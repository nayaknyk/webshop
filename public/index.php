<?php
    include '../boot.php';
?>
<head>
    <title>WebShop | Home</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
    <!-- //Fonts -->

</head>

<body>

    <!-- mian-content -->
    <div class="main-banner" id="home">
        <!-- header -->
        <header class="header">
            <div class="container-fluid px-lg-5">
                <!-- nav -->
                <nav class="py-4">
                    <div id="logo">
                        <h1> <a href="">WebShop</a></h1>
                    </div>
                </nav>
                <!-- //nav -->
            </div>
        </header>
        <!-- //header -->
        <!--/banner-->
        <div class="banner-info">
            <p>Trending this week</p>
            <h3 class="mb-4">Fresh Belts</h3>
            <div class="ban-buttons">
                <a href="<?= Http::asset('shop'); ?>" class="btn">Shop Now</a>
                <a href="<?= Http::asset('about'); ?>" class="btn active">Read More</a>
            </div>
        </div>
        <!--// banner-inner -->

    </div>
    <!--//main-content-->
    <!--/ab -->
    <section class="about py-md-5 py-5">
        <div class="container-fluid">
            <div class="feature-grids row px-3">
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"><span class="fa fa-truck" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">FREE SHIPPING</h3>
                            <p>On all order over $2000</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row bottom-gd2-active">
                        <div class="icon-gd col-md-3 text-center"><span class="fa fa-bullhorn" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">FREE RETURN</h3>
                            <p>On 1st exchange in 30 days</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"> <span class="fa fa-gift" aria-hidden="true"></span></div>

                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">MEMBER DISCOUNT</h3>
                            <p>Register & save up to $29%</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 gd-bottom">
                    <div class="bottom-gd row">
                        <div class="icon-gd col-md-3 text-center"> <span class="fa fa-usd" aria-hidden="true"></span></div>
                        <div class="icon-gd-info col-md-9">
                            <h3 class="mb-2">PREMIUM SUPPORT</h3>
                            <p>Support 24 hours per day</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //ab -->
    <!--/ab -->
    <section class="about py-5">
        <div class="container pb-lg-3">
            <h3 class="tittle text-center">Popular Products</h3>
            <div class="row">
                <div class="col-md-6 latest-left">
                    <div class="product-shoe-info shoe text-center">
                        <img src="images/img1.jpg" class="img-fluid" alt="">
                        <div class="shop-now"><a href="shop.html" class="btn">Shop Now</a></div>
                    </div>
                </div>
                <div class="col-md-6 latest-right">
                    <div class="row latest-grids">
                        <div class="latest-grid1 product-men col-12">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="images/img2.jpg" class="img-fluid" alt="">
                                    <div class="shop-now"><a href="shop.html" class="btn">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="latest-grid2 product-men col-12 mt-lg-4">
                            <div class="product-shoe-info shoe text-center">
                                <div class="men-thumb-item">
                                    <img src="images/img3.jpg" class="img-fluid" alt="">
                                    <div class="shop-now"><a href="shop.html" class="btn">Shop Now</a></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //ab -->
    <!-- footer -->
    <footer>
        <div class="container">
            <div class="row footer-top">
                <div class="col-lg-4 footer-grid_section_w3layouts">
                    <h2 class="logo-2 mb-lg-4 mb-3">
                        <a href="index.html">WebShop</a>
                    </h2>
                    <ul class="w3layouts_social_list list-unstyled">
                        <li>
                            <a href="#" class="w3pvt_facebook">
                                <span class="fa fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="#" class="w3pvt_twitter">
                                <span class="fa fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="w3pvt_dribble">
                                <span class="fa fa-dribbble"></span>
                            </a>
                        </li>
                        <li class="ml-2">
                            <a href="#" class="w3pvt_google">
                                <span class="fa fa-google-plus"></span>
                            </a>
                        </li>
                    </ul>
                </div>
    
            </div>
        </div>
    </footer>
    <!-- //footer -->

</body>

</html>