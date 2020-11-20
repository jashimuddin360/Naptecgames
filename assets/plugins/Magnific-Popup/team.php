<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEAM | INDIEGA</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="./assets/fonts/css/font-awesome.min.css" />
    <!-- Bootstrap-->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <!-- Style -->
    <link rel="stylesheet" href="./assets/css/style.css" />
    <!-- Responsive Style -->
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="./assets/plugins/animate.css-master/animate.min.css">
    <!-- Light Box -->
    <link href="./assets/plugins/lightbox2-master/dist/css/lightbox.css" rel="stylesheet">
    <!-- Video js -->
    <link href="./assets/css/video-js.css" rel="stylesheet">
    <!-- Datapicker -->
    <link href="./assets/plugins/jquery-date-range-picker-master/dist/daterangepicker.min.css" rel="stylesheet">
    <!-- Sliders -->
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slick-1.8.0/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slick-1.8.0/slick/slick-theme.css" />
</head>

<body>
    <?php include "./inc/header.php";?>
    <!-- PAGE NAME START -->
    <section class="page-name parallax" data-paroller-factor="0.1" data-paroller-type="background" data-paroller-direction="vertical">
        <div class="container">
            <div class="row">
                <h1 class="page-title">
                    Team
                </h1>
                <div class="breadcrumbs">
                    <a href="index.html">Home</a> /
                    <span class="color-1">Team</span>
                </div>
            </div>
        </div>
    </section>
    <!-- PAGE NAME END -->
    <!-- TEAM START -->
    <section class="team-bl ptb150">
        <div class="container">
            <div class="row">
                <div class="container-wrapper">



                    <?php

$teamMember = [
    "Musabbir Hossain"  => [
        "designation"   => "Game Producer",
        "memberURL"     => "team/musabbir-hosain.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Swajon Rahman"     => [
        "designation"   => "Graphics Designer",
        "memberURL"     => "team/swajon-rahaman.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Mazma Mim"         => [
        "designation"   => "Game Designer",
        "memberURL"     => "team/mazma-mim.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Suzana Haque Esha" => [
        "designation"   => "Game Designer",
        "memberURL"     => "tteam/suzana-haque-esha.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Md Mehedi Hasan"   => [
        "designation"   => "Game Developer",
        "memberURL"     => "team/md-mehedi-hasan.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Md Rulin Rahman"   => [
        "designation"   => "Game Developer",
        "memberURL"     => "team/md-rulin-rahman.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Pulak Dhar"        => [
        "designation"   => "Sound Engineer",
        "memberURL"     => "team/pulak-dhar.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Mehedi Hasan"      => [
        "designation"   => "Game Developer",
        "memberURL"     => "team/mehedi-hasan.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Md. Rakib"         => [
        "designation"   => "Game Developer",
        "memberURL"     => "team/md-rakib.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Musfiqur Rahman"   => [
        "designation"   => "Monetizer",
        "memberURL"     => "team/musfiqur-rahman.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Sumaiya Sultana"   => [
        "designation"   => "Designer",
        "memberURL"     => "team/sumaiya-sultana.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Zahida Sultana"    => [
        "designation"   => "Marketing",
        "memberURL"     => "team/zahida-sultana.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Md. Naim Ahamed"   => [
        "designation"   => "Marketing",
        "memberURL"     => "team/md-naim-ahamed.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Afroza Sumi"       => [
        "designation"   => "Graphics Designer",
        "memberURL"     => "team/afroza-sumi.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
    "Mamun Sarker"      => [
        "designation"   => "Graphics Designer",
        "memberURL"     => "team/mamun-sarker.php",
        "facebookURL"   => "https://facebook.com",
        "twitterURL"    => "https://twitter.com",
        "googlePlusURL" => "https://google.com",
    ],
];

foreach ( $teamMember as $name => $memberValues ) {
    ?>
                        <div class="item-content third col-lg-4 col-md-4 col-sm-6 col-xs-12 mb30 equal-height wow fadeInUp" data-wow-duration="1s">
                            <div class="border-img">
                                <img src="./assets/images/team/team-6.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="text-container background-4 text-center">
                                <a href="<?php echo $memberValues['memberURL']; ?>" class="name font-agency fsize-32 fweight-700 lheight-32 color-white">
                                    <?php echo $name; ?>
                                </a>
                                <div class="position mt10">
                                    <?php echo $memberValues['designation']; ?>
                                </div>
                                <div class="social mt20">
                                    <a href="<?php echo $memberValues['facebookURL']; ?>">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="<?php echo $memberValues['twitterURL']; ?>">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                    <a href="<?php echo $memberValues['googlePlusURL']; ?>">
                                        <i class="fa fa-google-plus" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php
}

?>
                </div>
            </div>
        </div>
    </section>
    <!-- TEAM END -->
    <?php include "./inc/footer.php";?>
    <!-- Scripts -->
    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/plugins/slick-1.8.0/slick/slick.min.js"></script>
    <script src="./assets/plugins/flex-menu/flexmenu.min.js"></script>
    <script src="./assets/plugins/jquery-match-height-master/dist/jquery.matchHeight.js"></script>
    <script src="./assets/plugins/muuri-master/muuri.js"></script>
    <script src="./assets/plugins/vide-0.5.1/dist/jquery.vide.min.js"></script>
    <script src="./assets/plugins/paroller.js-master/dist/jquery.paroller.min.js"></script>
    <script src="./assets/js/video.js"></script>
    <script src="./assets/js/jquery.inview.min.js"></script>
    <script src="./assets/js/progressbar.min.js"></script>
    <script src="./assets/plugins/lightbox2-master/dist/js/lightbox.js"></script>
    <script src="./assets/js/moment.min.js"></script>
    <script src="./assets/plugins/jquery-date-range-picker-master/dist/jquery.daterangepicker.min.js"></script>
    <script src="./assets/plugins/wow-master/dist/wow.min.js"></script>
    <script src="./assets/js/script.js"></script>
</body>

</html>