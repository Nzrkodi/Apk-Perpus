<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>PepuSman4 | Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>assets/static/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/owl.carousel.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/owl.theme.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/static/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="error-pagewrap">
        <div class="error-page-int">
            <div class="text-center m-b-md custom-login">
                <h3>PERPUSTAKAAN <br> SMA NEGERI 4 PALU</h3>
            </div>
            <div class="content-error">
                <div class="hpanel">
                    <div class="panel-body" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
                        <form action="<?= base_url('login/auth');?>" method="POST">
                            <h3 class="text-center">LOGIN</h3>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="form-group">
                                <label class="control-label" for="username">Username</label>
                                <input type="text" placeholder="Username" title="Please enter you username" required="" value="" name="user" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password</label>
                                <input type="password" title="Please enter your password" placeholder="******" required="" value="" name="pass" id="password" class="form-control">
                            </div>
                            <button class="btn btn-success btn-block loginbtn" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="text-center login-footer">
                <p>Copyright © 2022. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">PaerteCode</a></p>
            </div>
        </div>   
    </div>
    <!-- jquery
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/jquery.scrollUp.min.js"></script>
    <!-- counterup JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/counterup/jquery.counterup.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/counterup/waypoints.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/counterup/counterup-active.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/morrisjs/raphael-min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/morrisjs/morris.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/calendar/moment.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/calendar/fullcalendar.min.js"></script>
    <script src="<?= base_url(); ?>assets/static/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?= base_url(); ?>assets/static/js/main.js"></script>
</body>

</html>