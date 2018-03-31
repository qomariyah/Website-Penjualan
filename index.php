<?php
    include ("cart.php");

?>

<!DOCTYPE html>
<html class="frontend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Handmade's | Lamp Craft</title>
        <meta name="description" content="A place where you can find various handicraft products made from bottles.">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="plugins/owl/css/owl-carousel.css">
        <link rel="stylesheet" href="plugins/layerslider/css/layerslider.css">
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="stylesheet/bootstrap.css">
        <link rel="stylesheet" href="stylesheet/layout.css">
        <link rel="stylesheet" href="stylesheet/uielement.css">
        <link rel="stylesheet" href="stylesheet/themes/layouts/fixed-header.css">
        <!--/ Application stylesheet -->
        <!-- modernizr script -->
        <script type="text/javascript" src="plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        <header id="header" class="navbar">
            <div class="container">
                <!-- START navbar header -->
                <div class="navbar-header navbar-header-transparent">
                    <!-- Brand -->
                    <a class="navbar-brand" href="index.php">
                        <h2 style="color: black; margin-bottom: 2px">HANDMADE's</h2>
                    </a>
                    <!--/ Brand -->
                </div>
                <!--/ END navbar header -->

                <!-- START Toolbar -->
                <div class="navbar-toolbar clearfix">
                    <!-- START Left nav -->
                    <ul class="nav navbar-nav">
                        <!-- Navbar collapse: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
                        <li class="navbar-main navbar-toggle">
                            <a href="#" data-toggle="collapse" data-target="#navbar-collapse">
                                <span class="meta">
                                    <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                                </span>
                            </a>
                        </li>
                        <!--/ Navbar collapse -->
                    </ul>
                    <!--/ END Left nav -->

                    <!-- START navbar form -->
                    <div class="navbar-form navbar-left dropdown" id="dropdown-form">
                        <form action="" role="search">
                            <div class="has-icon">
                                <input type="text" class="form-control input-lg" placeholder="Search this site...">
                                <i class="ico-search form-control-icon"></i>
                            </div>
                        </form>
                    </div>
                    <!-- START navbar form -->

                    <!-- START Right nav -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle dropdown-hover" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="icon"><i class="ico-user"></i></span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <?php
                                if (empty($_SESSION['member'])) { ?>
                                    <ul class="dropdown-menu dropdown-menu-alt">
                                    <li><a href="page-login.php"><span class="icon ico-user22"> Login</span></a></li>
                                    <li><a href="signout.php"><span class="icon ico-signout"> Sign out</span></a></li>
                            </ul>
                            <?php
                                } else { ?>
                                    <ul class="dropdown-menu dropdown-menu-alt">
                                    <li><a href="profile.php?id=<?php echo $_SESSION['id_member']; ?>" class="text-primary"><span class="icon ico-user22"> </i><?php echo $_SESSION['member']; ?></span></a></li>
                                    <li><a href="signout.php"><span class="icon ico-signout"> Sign out</span></a></li>
                            </ul>
                            <?php
                                }
                            ?>
                            
                        </li>
                        <!-- Search form toggler -->
                        <li>
                            <a href="#" data-toggle="dropdown" data-target="#dropdown-form">
                                <span class="meta">
                                    <span class="icon"><i class="ico-search"></i></span>
                                </span>
                            </a>
                        </li>
                        <!--/ Search form toggler -->

                        <!-- Shopping cart dropdown -->
                        <li class="dropdown custom" id="header-dd-cart">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="meta">
                                    <span class="icon"><i class="ico-cart4"></i></span>
                                </span>
                            </a>

                            <!-- Dropdown menu -->
                            <div class="dropdown-menu" role="menu">
                                <!--<div class="dropdown-header">
                                    <span class="title">Shopping Cart <span class="count"></span></span>
                                    <span class="option text-right"><a href="javascript:void(0);">Checkout</a></span>
                                </div>-->
                                <div class="dropdown-body slimscroll">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner spinner16"></span></div>
                                    <!--/ indicator -->

                                    <!-- Item list -->
                                    <div class="panel panel-minimal mb0">
                                        <ul class="list-group">
                                        <?php
                                            if (!empty($_SESSION["shopping_cart"])) {
                                                $total = 0;
                                                foreach ($_SESSION["shopping_cart"] as $key => $value) {
                                                ?>
                                            <li class="list-group-item pt20 pb20">
                                                <div class="row">
                                                    <div class="col-xs-7">
                                                        <h5 class="semibold ellipsis"><?php echo $value["item_name"]; ?> (x<?php echo $value["item_quantity"]; ?>)</h5>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <h5 class="semibold text-info pull-left"><?php echo number_format($value["item_quantity"] * $value["item_price"]) ; ?></h5>
                                                        <a href="catalog.php?action=delete&id=<?php echo $value['item_id']; ?>" class="pull-right text-muted"><i class="ico-close2"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php
                                                    $total = $total + ($value["item_quantity"] * $value["item_price"]);
                                                }
                                            }
                                            ?>

                                        </ul>
                                    </div>
                                    <!--/ Item list -->
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-xs-5">
                                            <h4 class="ellipsis font-alt text-success" style="margin-top:7px;"><?php echo number_format($total) ; ?></h4>
                                        </div>
                                        <div class="col-xs-7 text-right">
                                            <a href="#" class="btn btn-primary">Check Out</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <a href="shopping-cart.php" class="text-primary">View Shopping Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Dropdown menu -->
                        </li>
                        <!--/ Shopping cart dropdown -->
                    </ul>
                    <!--/ END Right nav -->

                    <!-- START nav collapse -->
                    <div class="collapse navbar-collapse navbar-collapse-alt" id="navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active">
                                <a href="index.php" class="dropdown-toggle dropdown-hover">
                                    <span class="meta">
                                        <span class="text">HOME</span>
                                    </span>
                                </a>
                            </li>
                            <li >
                                <a href="catalog.php" class="dropdown-toggle dropdown-hover">
                                    <span class="meta">
                                        <span class="text">CATALOG</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="about.php" class="dropdown-toggle dropdown-hover">
                                    <span class="meta">
                                        <span class="text">ABOUT</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="contact.php" class="dropdown-toggle dropdown-hover">
                                    <span class="meta">
                                        <span class="text">CONTACT</span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!--/ END nav collapse -->
                </div>
                <!--/ END Toolbar -->
            </div>
        </header>
        <!--/ END Template Header -->

        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Layerslider -->
            <section id="layerslider"style="width:100%; height:553px;">
                <!-- Slide #1 -->
                <div class="ls-slide" data-ls="transition2d:1; slidedelay:4000;">
                    <!-- slide background -->
                    <img src="image/layerslider/dhg.jpg" class="ls-bg" width="100%">
                    <!--/ slide background -->
                    <h1 class="ls-l font-alt" style="top:110px;left:150px;color:white;" data-ls="offsetxin:0; durationin:1000; delayin:1500; easingin:easeOutElastic; rotatexin:-90; transformoriginin:50% top 0; offsetxout:-200; durationout:1000;">
                        Welcome To Handmade's
                    </h1>
                     <!-- Layer #1 -->
                    <img class="ls-l" style="top:90px;left:68%;width:50%;height:70%;" src="image/layerslider/Untitled-2.png" data-ls="delayin:1000; easingin:easeOutElastic;">
                    <!--/ Layer #1 -->
                    <!-- Layer #3 -->
                    <h4 class="ls-l" style="top:220px;left:150px;width:550px;color:white;" data-ls="offsetxin:0; durationin:2000; delayin:2000; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                        Join as our member
                    </h4>
                    <!--/ Layer #3 -->

                    <!-- Layer #4 -->
                    <a  href="page-login.php" class="ls-l btn btn-default" style="top:270px;left:150px;width:100px;" data-ls="offsetxin:0; durationin:1500; delayin:2500; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                       Login
                    </a>
                    <a  href="page-register.php" class="ls-l btn btn-default" style="top:270px;left:300px;width:100px;" data-ls="offsetxin:0; durationin:1500; delayin:2500; easingin:easeOutElastic; rotatexin:90; transformoriginin:50% top 0; offsetxout:-400;">
                       Sign Up
                    </a>
                    <!--/ Layer #4 -->
                </div>
                <!-- Slide #1 -->

                <!-- Slide #2 -->
                <div class="ls-slide" data-ls="transition2d:1; slidedelay:2000;">
                    <!-- slide background -->
                    <img src="image/layerslider/ghc.jpg" class="ls-bg" alt="Slide background">
                    <!--/ slide background -->

                    <!-- Layer #1 -->
                    <img class="ls-l" style="top:80px;left:100px;width:25%;height:60%;" src="image/layerslider/specialoffer.png" data-ls="delayin:200; easingin:easeOutElastic;">
                    <!--/ Layer #1 -->

                    <!-- Layer #1 -->
                    <img class="ls-l" style="top:90px;left:75%;width:50%;height:70%;" src="image/layerslider/Untitled-2.png" data-ls="delayin:1000; easingin:easeOutElastic;">
                    <!--/ Layer #1 -->
                    
                    <!-- Layer #3 -->
                    <p class="ls-l text-default text-right" style="top:470px;left:65%;width:550px;" data-ls="easingin:easeOutElastic; delayin:1500;">
                        <a href="catalog.php" class="btn btn-primary btn-xs">
                            Check our catalog <i class="ico-angle-right ml5"></i>
                        </a>
                    </p>
                    <!--/ Layer #3 -->
                </div>
                <!-- Slide #2 -->
            </section>
            <!--/ END Layerslider -->

            <!-- START Features Section -->
            <section class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-header text-center">
                                <h1 class="section-title font-alt mb25">LATEST PRODUCT</h1>
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- example 2 -->
                                        <div class="owl-carousel" id="auto-play">
                                        
                                        <?php 
                                            include ("conn/connection.php");

                                            $query = mysqli_query($koneksi, "SELECT * FROM tb_produk order by id_produk desc LIMIT 8");
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($query)) {
                                        ?>
                                            <!-- thumbnail #1 -->
                                            <div class="item thumbnail">
                                                <!-- media -->
                                                <div class="media">
                                                    <!-- toolbar overlay -->
                                                    <div class="overlay">
                                                        <div class="toolbar">
                                                            <a href="itemdetail.php?id=<?php echo $data['id_produk']; ?>" class="btn btn-warning" title="view this product"><i class="ico-search"></i></a>
                                                        </div>
                                                    </div>
                                                    <!--/ toolbar overlay -->
                                                    <img src="img/<?php echo $data['gbr_produk']; ?>" alt="Photo" width="100%" />
                                                </div>
                                                <!--/ media -->
                                            </div>
                                            <?php
                                                $no++;
                                                }
                                            ?>
                                            <!--/ thumbnail #1 -->
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ END Features Section -->


            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!-- START Template Footer -->
        <footer role="contentinfo" class="bgcolor-dark pt25">
            <!-- container -->
            <div class="container mb25">
                <!-- row -->
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="font-alt mt0">ABOUT US</h4>
                        <p>Information technology is growing very fast along with human needs are also growing.Similarly, the creative industries such as handicrafts from bottles usednow considered by the craftsmen.</p>
                        <p>Handmade's is a place where you can find beautiful lamps that come from used bottles that have been processed in a way that is not only beautiful and also useful for everyday life.</p>
                        <a href="about.php" class="text-primary">Read more</a>
                    </div>
                    <div class="visible-sm visible-xs" style="margin-bottom:25px;"></div>

                    <!-- Address + Social -->
                    <div class="col-md-4">
                        <h4 class="font-alt mt0">ADDRESS</h4>
                        <address>
                            <strong>Handmade's</strong><br>
                            304 Bahurekso Ave, Kebonagung<br>
                            Kajen, 51161<br>
                            Pekalongan<br>
                            <abbr title="Phone">Phone:</abbr> 0857-4190-8334
                        </address>
                        <h4 class="font-alt mt0">STAY CONNECT</h4>
                        <a href="#" class="text-muted mr15" data-toggle="tooltip" title="Facebook"><i class="ico-facebook2"></i></a>
                        <a href="#" class="text-muted mr15" data-toggle="tooltip" title="Twitter"><i class="ico-twitter2"></i></a>
                        <a href="#" class="text-muted mr15" data-toggle="tooltip" title="Google+"><i class="ico-google-plus2"></i></a>
                        <a href="#" class="text-muted mr15" data-toggle="tooltip" title="Instagram"><i class="ico-instagram2"></i></a>
                    </div>
                    <div class="visible-sm visible-xs" style="margin-bottom:25px;"></div>
                    <!--/ Address + Social -->

                    <!-- Newsletter -->
                    <div class="col-md-4">
                        <h4 class="font-alt mt0">Message</h4>
                        <form role="form" name="sendmessage" action="" method="POST">

                            <?php
                                include ("sendmessage.php");
                            ?>
                            
                            <div class="form-group">
                                <input type="text" class="form-control" name="namemsg" id="newsletter_email" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="emailmsg" id="newsletter_email" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Enter your message" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="form-control btn btn-primary btn-block" name="sendmsg" id="newsletter_email" value="Send">
                            </div>
                        </form>
                    </div>
                    <!--/ Newsletter -->
                </div>
                <!--/ row -->
            </div>
            <!--/ container -->

            <!-- bottom footer -->
            <div class="footer-bottom pt15 pb15 bgcolor-dark bgcolor-dark-darken10">
                <!-- container -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- copyright -->
                            <p class="nm text-muted">&copy; Copyright 2017 <a href="#" class="text-white">Handmade's</a>. All Rights Reserved.</p>
                            <!--/ copyright -->
                        </div>
                    </div>
                </div>
                <!--/ container -->
            </div>
            <!--/ bottom footer -->
        </footer>

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="javascript/vendor.js"></script>
        <script type="text/javascript" src="javascript/core.js"></script>
        <script type="text/javascript" src="javascript/frontend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="plugins/smoothscroll/js/smoothscroll.js"></script>
        <script type="text/javascript" src="plugins/owl/js/owl.carousel.js"></script>
        <script type="text/javascript" src="javascript/backend/components/carousel.js"></script>
        <script type="text/javascript" src="plugins/layerslider/js/greensock.js"></script>
        <script type="text/javascript" src="plugins/layerslider/js/layerslider.transitions.js"></script>
        <script type="text/javascript" src="plugins/layerslider/js/layerslider.kreaturamedia.jquery.js"></script>
        <script type="text/javascript" src="javascript/frontend/home/home-v1.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>