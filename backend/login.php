<!DOCTYPE html>
<html class="backend">
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
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="../stylesheet/bootstrap.css">
        <link rel="stylesheet" href="../stylesheet/layout.css">
        <link rel="stylesheet" href="../stylesheet/uielement.css">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet : optional -->
        <!--/ Theme stylesheet : optional -->

        <!-- modernizr script -->
        <script type="text/javascript" src="../plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <section class="container">
                <!-- START row -->
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <!-- Brand -->
                        <br><br>
                        <div class="text-center" style="margin-bottom:40px;">
                            <span class=""></span>
                            <span class=""></span>
                            <h1 class="semibold text-muted mt-5">Login to your account.</h1>
                        </div>
                        <!--/ Brand -->

                        <!-- Login form -->
                        <form class="panel" name="form-login" action="proseslogin.php" method="POST" data-parsley-validate>
                            <div class="panel-body">
                                <div class="form-group">
                                    <div class="form-stack has-icon pull-left">
                                        <input name="username" type="text" class="form-control input-lg" placeholder="Username" autofocus data-parsley-required>
                                        <i class="ico-user2 form-control-icon"></i>
                                    </div><br>
                                    <div class="form-stack has-icon pull-left">
                                        <input name="password" type="password" class="form-control input-lg" placeholder="Password" data-parsley-required>
                                        <i class="ico-lock2 form-control-icon"></i>
                                    </div>
                                </div>

                                <!-- Error container -->
                                <div id="error-container"class="mb15"></div>
                                <!--/ Error container -->

                                <div class="form-group nm">
                                    <input type="submit" class="btn btn-success btn-block" value="Login" name="login">
                                </div>
                            </div>
                        </form>
                        <!-- Login form -->
                    </div>
                </div>
                <!--/ END row -->
            </section>
            <!--/ END Template Container -->
        </section>
        <!--/ END Template Main -->


        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="../javascript/vendor.js"></script>
        <script type="text/javascript" src="../javascript/core.js"></script>
        <script type="text/javascript" src="../javascript/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="../plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="../javascript/backend/forms/validation.js"></script>
        <script type="text/javascript" src="../javascript/backend/pages/login.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>