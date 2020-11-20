<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Team</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <meta name="google-site-verification" content="EZDlVIqlfMRuScRWZLG9H7Kg0YOHss863ROA0Mew0zc" />
    <!-- Google Fonts
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/css/font-awesome.min.css" />
    <!-- Bootstrap-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- Style -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive Style -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/plugins/animate.css-master/animate.min.css">
    <!-- Light Box -->
    <link href="assets/css/lightbox.min.css" rel="stylesheet">
    <!--lightbox js-->
    <script src="assets/js/lightbox-plus-jquery.min.js"></script>
    <!-- Video js -->
    <link href="assets/css/video-js.css" rel="stylesheet">
    <!-- Datapicker -->
    <link href="assets/plugins/jquery-date-range-picker-master/dist/daterangepicker.min.css" rel="stylesheet">
    <!-- Sliders -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick-1.8.0/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick-1.8.0/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/gallery-grid.css" />


    <link href="https://fonts.googleapis.com/css2?family=Quantico:wght@700&display=swap" rel="stylesheet">

</head>

<body>
    <?php include_once "inc/header.php"; ?>
    <!-- PAGE NAME START -->
    <section class="team-header parallax" data-paroller-factor="0.1" data-paroller-type="background" data-paroller-direction="vertical">
        <div class="container">
            <div class="row header-center">
                <h1 class="page-title team-breadcrumb">
                    Together We Make
                    The Change
                    With The Innovative Thoughts
                </h1>
                <!-- <div class="breadcrumbs">
                    <a href="index.html">Home</a> /
                    <span class="color-1">Team</span>
                </div> -->
            </div>
        </div>
    </section>
    <!-- PAGE NAME END -->
    <!-- TEAM START -->
    <section class="team-bl pt35 pb60">
        <div class="container">
            <div class="row">
                <div class="container-wrapper">
                    <div class="title-bl text-center wow fadeIn" data-wow-duration="5s">
                        <div class="title color-white pb40">
                            Our Passionate team
                        </div>
                    </div>

                    <?php

                    $teamMember = [
                        // "Muhammad Hosain"     => [
                        //     "designation"   => "Game Producer",
                        //     "memberImage"   => "assets/images/team/musabbir.jpg",
                        //     // "memberURL"     => "team/swajon-rahaman.php",
                        //     // "facebookURL"   => "https://facebook.com",
                        //     // "twitterURL"    => "https://twitter.com",
                        //     // "googlePlusURL" => "https://google.com",
                        // ],
                        "Suzana Haque Esha"         => [
                            "designation"   => "Game Designer",
                            "memberImage"   => "assets/images/team/suzana-esha.jpg"
                        ],
                        "Mazma Akter Mim"         => [
                            "designation"   => "Game Designer",
                            "memberImage"   => "assets/images/team/mim.jpg"
                        ],
                        "Sumaiya Sultana"         => [
                            "designation"   => "Game Artist",
                            "memberImage"   => "assets/images/team/sumi.jpg"
                        ],
                        "Tanvir Ahmed Rony"         => [
                            "designation"   => "Game Artist",
                            "memberImage"   => "assets/images/team/tanvir.jpg"
                        ],
                        // "Arifa Ferdoushi Trisha"         => [
                        //     "designation"   => "UX Engineer",
                        //     "memberImage"   => "assets/images/team/"
                        // ],
                        "AB Faruki"         => [
                            "designation"   => "UI & UX Designer",
                            "memberImage"   => "assets/images/team/Faruki.jpg"
                        ],
                        "Md Jillur Rahman"         => [
                            "designation"   => "Graphics Designer",
                            "memberImage"   => "assets/images/team/mdjillur.jpg"
                        ],
                        "Golam Azam"         => [
                            "designation"   => "Graphics Designer",
                            "memberImage"   => "assets/images/team/azamkhan.jpg"
                        ],
                        "Mamun Sarker"         => [
                            "designation"   => "Graphics Designer",
                            "memberImage"   => "assets/images/team/mamun.jpg"
                        ],
                        "Afroza Sumi"         => [
                            "designation"   => "Graphics Designer",
                            "memberImage"   => "assets/images/team/afroja.jpg"
                        ],
                        "Pulak Dhar"         => [
                            "designation"   => "Sound Engineer",
                            "memberImage"   => "assets/images/team/pulok.jpg"
                        ],
                        "MD Mahadi Islam"         => [
                            "designation"   => "Game Developer",
                            "memberImage"   => "assets/images/team/mahadi.jpg"
                        ],
                        "MD Rulin Rahman"         => [
                            "designation"   => "Game Developer",
                            "memberImage"   => "assets/images/team/rulin.jpg"
                        ],
                        "Md. Rakib"         => [
                            "designation"   => "Game Developer",
                            "memberImage"   => "assets/images/team/etrsg.jpg"
                        ],
                        "Mehedi Hasan"         => [
                            "designation"   => "Game Developer",
                            "memberImage"   => "assets/images/team/emran.jpg"
                        ],
                        "Fuad Simon"         => [
                            "designation"   => "Game Developer",
                            "memberImage"   => "assets/images/team/fuad.jpg"
                        ],
                        "Touhidur Rahman"         => [
                            "designation"   => "Game Developer",
                            "memberImage"   => "assets/images/team/tr-rahat.jpg"
                        ],
                      /*   "Mahmudul Hasan"         => [
                            "designation"   => "HTML5 Game Developer",
                             "memberImage"   => "assets/images/team/team-1.jpg"
                        ],*/
                        "Md. Asef Zahin"         => [
                            "designation"   => "Content Designer",
                            "memberImage"   => "assets/images/team/asef.jpg"
                        ],
                        "Mushfiqur Rahman"         => [
                            "designation"   => "SEO & Marketing",
                            "memberImage"   => "assets/images/team/musfiq.jpg"
                        ],
                        "Zahida Sultana"         => [
                            "designation"   => "Marketing",
                            "memberImage"   => "assets/images/team/zahida-sultana.jpg"
                        ],
                    ];

                    foreach ($teamMember as $name => $memberValues) {
                    ?>
                        <div class="item-content first col-lg-4 col-md-4 col-sm-6 col-xs-12  mb30 equal-height wow fadeInUp" data-wow-duration="1s">
                            <div class="border-img">
                                <img src="<?php echo $memberValues['memberImage']; ?>" alt="<?php echo $name; ?>" class="img-responsive">
                            </div>
                            <div class="text-container background2 text-center">
                                <a class="name font-agency fsize-32 fweight-700 lheight-32 color-white">
                                    <?php echo $name; ?>
                                </a>
                                <div class="position mt10">
                                    <?php echo $memberValues['designation']; ?>
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
    <?php include_once "inc/footer.php"; ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/slick-1.8.0/slick/slick.min.js"></script>
    <script src="assets/plugins/flex-menu/flexmenu.min.js"></script>
    <script src="assets/plugins/jquery-match-height-master/dist/jquery.matchHeight.js"></script>
    <script src="assets/plugins/muuri-master/muuri.js"></script>
    <script src="assets/plugins/vide-0.5.1/dist/jquery.vide.min.js"></script>
    <script src="assets/plugins/paroller.js-master/dist/jquery.paroller.min.js"></script>
    <script src="assets/js/jquery.inview.min.js"></script>
    <script src="assets/js/progressbar.min.js"></script>
    <script src="assets/plugins/lightbox2-master/dist/js/lightbox.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/plugins/jquery-date-range-picker-master/dist/jquery.daterangepicker.min.js"></script>
    <script src="assets/plugins/wow-master/dist/wow.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>