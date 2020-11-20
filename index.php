<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NapTech Games – Play Simple With Fun</title>
    <meta name="description" content="NapTech Games is a part of NapTech Labs Ltd. Based in the United Kingdom and Bangladesh. We implement our visualization world and play something simple with fun for Mobile, Tablet, PC, Facebook & Web platform.">
    <meta name="google-site-verification" content="EZDlVIqlfMRuScRWZLG9H7Kg0YOHss863ROA0Mew0zc" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://naptechgames.com/">
    <meta property="og:title" content="NapTech Games – Lets Take The Challenges">
    <meta property="og:description" content="NapTech Games is a part of NapTech Labs Ltd. Based in the United Kingdom and Bangladesh. We implement our visualization world and play something simple with fun for Mobile, Tablet, PC, Facebook & Web platform.">
    <meta property="og:image" content="https://naptechgames.com/assets/images/homepage/slide-1.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://naptechgames.com/">
    <meta property="twitter:title" content="NapTech Games – Lets Take The Challenges">
    <meta property="twitter:description" content="NapTech Games is a part of NapTech Labs Ltd. Based in the United Kingdom and Bangladesh. We implement our visualization world and play something simple with fun for Mobile, Tablet, PC, Facebook & Web platform.">
    <meta property="twitter:image" content="https://naptechgames.com/assets/images/homepage/slide-1.jpg">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
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


    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="./assets/plugins/Magnific-Popup/dist/magnific-popup.css">
    <!-- Sliders -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick-1.8.0/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/slider/css/normalize.min.css" media="screen, print" />

    <link href="https://fonts.googleapis.com/css2?family=Quantico:wght@700&display=swap" rel="stylesheet">

    <style type="text/css">
        .slider__button a {
            font-family: "Quantico", sans-serif;
            color: #3dd0d8;
            font-size: 87.5%;
            text-shadow: none;
            line-height: 1.5;
            font-style: normal;
            text-decoration: none;
            text-align: center;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: uppercase;
            font-weight: 700;
            border-radius: 10px;
            box-shadow: 0 2px 4.8px 0.3px rgba(0, 0, 0, 0.3);
            transition: all 0.3s ease-out;
            padding: 20px 38px;
            background: #fff;
        }

        .slider__button a:hover {
            color: #fff;
            background: #6be31f26;
        }


        .slider__desc p {
            font-family: "Quantico", sans-serif;
            color: #ffffff;
            font-size: 87.5%;
            line-height: 1.5;
            font-weight: normal;
            font-style: normal;
            text-decoration: none;
            text-align: center;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: none;
            text-shadow: 0 2px 4.8px rgba(0, 0, 0, 0.3);
            margin: 30px auto;
            width: 70%;
        }

        .slider__desc {
            margin: -20px 0px 60px 0px;
        }

        .slider__head p {
            font-family: "Quantico", sans-serif;
            color: #ffffff;
            font-size: 200%;
            line-height: 85px;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            text-align: center;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: uppercase;
            text-shadow: 0 2px 4.8px rgba(0, 0, 0, 0.3);
            display: block;
            margin-bottom: 0px;
        }

        .slider__cta p {
            font-family: "Quantico", sans-serif;
            color: #ffffff;
            font-size: 350%;
            line-height: 1;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            text-align: center;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: uppercase;
            text-shadow: 0 2px 4.8px rgba(0, 0, 0, 0.3);
            margin-bottom: 0px;

        }


        /* slider Animation Delay And show */

        .head {
            animation-delay: .7s;
            animation-duration: 1.1s;
        }

        .cta {
            animation-delay: 1s;
            animation-duration: 1.4s;
        }

        .desc {
            animation-delay: 1.2s;
            animation-duration: 1.7s;
        }

        .main-slider {
            width: 100%;
            height: 100vh;
            background-image: url("assets/images/homepage/slide-1.jpg");
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        @media screen and (max-width: 980px) {
            .slider__cta p {
                font-size: 300%;
            }
        }

        @media screen and (max-width: 600px) {
            .slider__cta p {
                font-size: 150%;
            }

            .slider__head p {

                font-size: 100%;
                line-height: 35px;

            }

            .slider__button a {
                font-size: 70.5%;
                padding: 17px 24px;
            }
        }
    </style>

</head>

<body>

    <?php include_once "inc/header.php"; ?>

    <!-- SLIDER START -->
    <section class="main-slider">

        <div class="slider__head">
            <p class="animated fadeInRightBig	fast head">Welcome to naptechgames</p>
        </div>
        <div class="slider__cta">
            <p class="animated fadeInLeftBig slow	cta">Play Simple With Fun</p>
        </div>
        <div class="slider__desc">
            <p class="animated fadeInDownBig	desc"></p>
        </div>
        <div class="slider__button animated ">
            <a href="https://naptechgames.com/about" class=" animated fadeInUpBig button-anim">More About Us</a>
        </div>

        <div class="sl-social bg-white">
            <a href="https://www.facebook.com/naptechgames/" target="_blank" class="social facebook">
                <i class="fa fa-facebook color-3" aria-hidden="true"></i>
            </a>
            <a href="https://twitter.com/naptechgames" target="_blank" class="social twitter">
                <i class="fa fa-twitter color-3" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/naptechgames/" target="_blank" class="social google">
                <i class="fa fa-instagram color-3" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <!-- SLIDER END -->
    <!-- GAME SECTION START -->
    <section class="game-section ptb90">
        <div class="container">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Upcoming Games
                    </div>
                </div>
                <div class="tm-tabs tabs mt70">
                    <div class="tabs-nav">
                        <ul class="list-inline nav nav-tabs tabs-slider">
                            <li class="active col-lg-3 col-md-3">
                                <a href="#tab-item-1" data-toggle="tab">
                                    <div class="img-wrap">
                                        <img src="assets/images/homepage/upcoming-game/color-story.png" alt="">
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="nav-title color-white">
                                            Color Story
                                        </div>
                                        <div class="date">
                                            13 november, 2020
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-2" data-toggle="tab">
                                    <div class="img-wrap">
                                        <img src="assets/images/homepage/upcoming-game/against-covid-19.png" alt="">
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="nav-title color-white">
                                            Against Covid-19
                                        </div>
                                        <div class="date">
                                            25 september, 2020
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap">
                                        <img src="assets/images/homepage/upcoming-game/coronar-lorai.png" alt="">
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="nav-title color-white">
                                            Corona Lorai
                                        </div>
                                        <div class="date">
                                            2 november, 2020
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-4" data-toggle="tab">
                                    <div class="img-wrap">
                                        <img src="assets/images/homepage/upcoming-game/inner-shape.png" alt="">
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="nav-title color-white">
                                            Inner Shape
                                        </div>
                                        <div class="date">
                                            20 August , 2020
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-5" data-toggle="tab">
                                    <div class="img-wrap">
                                        <img src="assets/images/homepage/upcoming-game" alt="">
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="nav-title color-white">
                                            NO MAN’S SKY 2
                                        </div>
                                        <div class="date">
                                            Sept 15, 2019
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                    <div class="tab-content relative mt90">
                        <div class="tab-pane fade active in text-left clearfix background2" id="tab-item-1" style="border-radius: 10px;">
                            <div class="tab-info col-lg-6 col-md-12 col-sm-12 col-xs-12 ptb90 pl100 equal-height">
                                <div class="tab-head table uppercase fsize-14 fweight-700">
                                    <div class="table-cell valign-middle ws-20 color-2">
                                        Hyper Casual Game
                                    </div>
                                    <div class="table-cell valign-middle text-right">
                                        13 november, 2020
                                    </div>
                                </div>
                                <div class="uppercase fsize-32 fweight-700 font-agency color-white lheight-normal">
                                    Color Story
                                </div>
                                <div class="mt40 lheight-26 fweight-300 text-gray">
                                    <p>Color path has one tap control and is very easy to play. This one tap game is very addictive for the children and for all ages. If you mistakenly tap on the wrong color leaf, you will die.
                                    </p>
                                    <h6 class="text-gray">Game Speciality</h6>
                                    <ul class="mt10 ml20">
                                        <li>Color path is a new 3D game with endless gameplay </li>
                                        <li>The water drop should be move forward by the right color leaf </li>
                                    </ul>
                                </div>
                                <div class="mt60 table g-bottom">
                                    <!-- <div class="table-cell valign-middle">
                                        <a href="single-game.html" class="btn gradient color-white plr60 ptb19">
                                            Read more // Upcoming Game Button
                                        </a>
                                    </div> -->


                                    <div class="rating table-cell valign-middle text-left">
                                        <!-- To pull it right use text-right class -->
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-img col-lg-6 col-md-12 col-sm-12 col-xs-12 pr0 equal-height">
                                <div class="image-bl">
                                    <img class="game-full-img" src="assets/images/homepage/upcoming-game/2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in text-left clearfix" id="tab-item-2">
                            <div class="tab-info col-lg-6 col-md-12 col-sm-12 col-xs-12 ptb90 pl100 equal-height">
                                <div class="tab-head table uppercase fsize-14 fweight-700">
                                    <div class="table-cell valign-middle ws-20 color-1">
                                        Educational game
                                    </div>
                                    <div class="table-cell valign-middle text-right">
                                        25 september, 2020
                                    </div>
                                </div>
                                <div class="uppercase fsize-32 fweight-700 font-agency color-white lheight-normal">
                                    Against Covid-19
                                </div>
                                <div class="mt50 lheight-26 fweight-300 text-gray">
                                    <p>The number of cases of coronavirus in the world is increasing in an unprecedented way. So the prevention, cure and awareness measures of coronavirus are shown in this game. Through this game, the countrymen will be able to know about all the necessary steps to protect themselves and others.
                                    </p>
                                    <h6 class="text-gray">Game Speciality</h6>
                                    <ul class="mt10 ml20">
                                        <li>The player can buy the necessary items with the collecting coins and he can use them while playing. </li>
                                    </ul>
                                </div>
                                <div class="mt60 table g-bottom">
                                    <div class="rating table-cell valign-middle text-left">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-img col-lg-6 col-md-12 col-sm-12 col-xs-12 pr0 equal-height">
                                <div class="image-bl">
                                    <img class="game-full-img" src="assets/images/homepage/upcoming-game/4.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in text-left clearfix" id="tab-item-3">
                            <div class="tab-info col-lg-6 col-md-12 col-sm-12 col-xs-12 ptb90 pl100 equal-height">
                                <div class="tab-head table uppercase fsize-14 fweight-700">
                                    <div class="table-cell valign-middle ws-20 color-1">
                                        Educational game
                                    </div>
                                    <div class="table-cell valign-middle text-right">
                                        2 november, 2020
                                    </div>
                                </div>
                                <div class="uppercase fsize-32 fweight-700 font-agency color-white lheight-normal">
                                    Coronar Lorai

                                </div>
                                <div class="mt50 lheight-26 fweight-300 text-gray">
                                    <p>Coronar lorai is an educational game. The whole world has stopped being infected with Coronavirus. To get rid of this virus, we must first know the causes and symptoms. This game shows you how to protect yourself and your family from coronavirus.
                                    </p>
                                    <h6 class="text-gray">Game Speciality</h6>
                                    <ul class="mt10 ml20">
                                        <li>People will be able to learn about the next steps in being affected by coronavirus </li>
                                    </ul>
                                </div>
                                <div class="mt60 table g-bottom">
                                    <div class="rating table-cell valign-middle text-left">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-img col-lg-6 col-md-12 col-sm-12 col-xs-12 pr0 equal-height">
                                <div class="image-bl">
                                    <img class="game-full-img" src="assets/images/homepage/upcoming-game/3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in text-left clearfix" id="tab-item-4">
                            <div class="tab-info col-lg-6 col-md-12 col-sm-12 col-xs-12 ptb90 pl100 equal-height">
                                <div class="tab-head table uppercase fsize-14 fweight-700">
                                    <div class="table-cell valign-middle ws-20 color-1">
                                        Racing Game
                                    </div>
                                    <div class="table-cell valign-middle text-right">
                                        20 August , 2020
                                    </div>
                                </div>
                                <div class="uppercase fsize-32 fweight-700 font-agency color-white lheight-normal">
                                    Inner Shape
                                </div>
                                <div class="mt50 lheight-26 fweight-300 text-gray">
                                    <p> There are 4 shapes in the runway of the inner shape game. The ball will be in a different shape at different times. The ball has to go through the shape which the ball contains.</p>
                                    <h6 class="text-gray">Game Speciality</h6>
                                    <ul class="mt10 ml20">
                                        <li>Amazing graphics with different type of shapes.</li>
                                        <li>If the ball moves forward, the speed of the ball will gradually increase</li>
                                    </ul>
                                </div>
                                <div class="mt60 table g-bottom">
                                    <div class="rating table-cell valign-middle text-left">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-img col-lg-6 col-md-12 col-sm-12 col-xs-12 pr0 equal-height">
                                <div class="image-bl">
                                    <img class="game-full-img" src="assets/images/homepage/upcoming-game/1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GAME SECTION END -->
    <!-- GALLERY SECTION START -->
    <section class="gallery main-gallery ptb150">
        <div class="container">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Our Art Gallery
                    </div>
                    <div class="subtitle">
                        All New Images
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="grid-wrapper mt70">
                    <!-- <div class="filter_container text-center">
                        <div class="filter-item active" data-filter="all">
                            All
                        </div>
                        <div class="filter-item" data-filter="origin">
                            Casual
                        </div>
                        <div class="filter-item" data-filter="playstation-4">
                            Arcade
                        </div>
                        <div class="filter-item" data-filter="steam">
                            Grahics
                        </div>
                        <div class="filter-item" data-filter="uplay">
                            Hyper Casual
                        </div>

                    </div> -->
                    <div class="item_container relative mt40">
                        <div class="item origin col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="./assets/images/homepage/gallery/1.jpg" alt="">
                                </div>
                                <div class="item-info">
                                    <div class="info-bl text-center">
                                        <a href="#" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            Line And Circle - The Jungle Story
                                        </a>
                                        <div class="text-center mt30">
                                            <a href="./assets/images/homepage/gallery/1.jpg" class="item-btn inline-block valign-middle test-popup-link">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item playstation-4 col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="./assets/images/homepage/gallery/2.jpg" alt="">
                                </div>
                                <div class="item-info">
                                    <div class="info-bl text-center">
                                        <a href="#" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            Zap Knife - Hit To Target
                                        </a>
                                        <div class="text-center mt30">
                                            <a href="./assets/images/homepage/gallery/2.jpg" class="item-btn inline-block valign-middle test-popup-link">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item uplay col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="./assets/images/homepage/gallery/3.jpg" alt="">
                                </div>
                                <div class="item-info">
                                    <div class="info-bl text-center">
                                        <a href="#" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            Rackless Ball - 2020
                                        </a>
                                        <div class="text-center mt30">
                                            <a href="./assets/images/homepage/gallery/3.jpg" class="item-btn inline-block valign-middle test-popup-link">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item steam xbox-one col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="./assets/images/homepage/gallery/background.png" alt="">
                                </div>
                                <div class="item-info">
                                    <div class="info-bl text-center">
                                        <a href="#" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            Line And Circle Background
                                        </a>
                                        <div class="text-center mt30">
                                            <a href="./assets/images/homepage/gallery/background.png" class="item-btn inline-block valign-middle test-popup-link">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-12 text-center mt50">
                        <a href="gallery.php" class="btn border-btn plr50 ptb19 color-white">Discover more</a>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- GALLERY SECTION END -->
    <section class="service ptb90">
        <div class="container">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="5s">
                    <div class="title color-white pb20">
                        Our Services
                    </div>
                    <div class="service-list">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt10">
                            <div class="col-lg-10 col-md-10 col-sm-9  col-xs-9 order-sm-12">
                                <h5 style="text-align: right">Android Game</h5>
                                <p style="text-align: right" class="text-gray">Android is one of the most popular gaming platforms in the market. We make Android games for smartphones, tablets, etc. </p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 service-icon pt10 order-sm-1">
                                <img src="assets/images/homepage/service/android2.png" class="service-icon-size">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt10">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 service-icon pt10">
                                <img src="assets/images/homepage/service/ios.png">
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                <h5 style="text-align: left">IOS Game</h5>
                                <p style="text-align: left" class="text-gray">With the popularity of Apple devices like the iPhone and iPad, the market for iOS games is continuously growing every year, so we design games for devices like the iPhone and iPad. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt10">
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                <h5 style="text-align: right">AR Game</h5>
                                <p style="text-align: right" class="text-gray">Game visuals and audio content with the user’s real-time environment is how AR games are being played. We develop AR games that can transform your game idea into reality. </p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 pt10 service-icon">
                                <img src="assets/images/homepage/service/ar.png">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt10">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 pt10 service-icon">
                                <img src="assets/images/homepage/service/vr.png">
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                <h5 style="text-align: left">VR Games</h5>
                                <p style="text-align: left" class="text-gray">We develop creative designing and technically advanced Virtual Reality games to exhibit 360-video games. And many more. </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt10">
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                <h5 style="text-align: right">HTML5 Games</h5>
                                <p style="text-align: right" class="text-gray">If you don’t want to port your game for every specific platform, then opting for an HTML5 based game, our HTML 5 game app developers can bring your idea to life.</p>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 pt10 service-icon">
                                <img src="assets/images/homepage/service/html5f.png">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pt10">
                            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 pt10 service-icon">
                                <img src="assets/images/homepage/service/instant-game.png">
                            </div>
                            <div class="col-lg-10 col-md-10 col-sm-9 col-xs-9">
                                <h5 style="text-align: left">Instant Games</h5>
                                <p style="text-align: left" class="text-gray">With Instant Games, people can play games directly in the Facebook News Feed or in Messenger conversations, on both desktops and mobile devices. </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--section end-->
    <section class="technology ptb90" style="background-image: url(assets/images/homepage/tech-background2.jpg); background-size: cover;background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="5s">
                    <div class="title color-white">
                        Technology We Use
                    </div>
                </div>
                <div class="technology-icon">
                    <div class="row">
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/UNITY.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/UNREAL-ENGINE.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/BUILDBOX.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/ANDROID-STUDIO.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/CONSTRUCT.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/COCOS-2D.png">
                        </div>

                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/GAME-MAKER.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/PHOTOSHOP.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/ILLUSTRATOR.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/GIMP.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/INKSCAPE.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/CHARECTER-ANIMATOR.png">
                        </div>


                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/SPINE.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/SKETCH.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/FIGMA.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/MAYA.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/BLENDER.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/3DSMAX.png">
                        </div>


                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/CINEMA4D.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/FL-STUDIO.png">
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-4 col-xs-4">
                            <img src="assets/images/homepage/technology/LLMS.png">
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>

    <!-- BLOG SECTION START -->
    <section class="blog-section ptb90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                        <div class="title color-white">
                            Our Latest Posts
                        </div>
                        <div class="subtitle">
                            Latest News
                        </div>
                    </div>
                    <!-- <div class="title-description mt30 fweight-300 text-center">
                        Pork chop pastrami meatball, picanha salami capicola drumstick tri-tip flank short loin
                        <br /> strip steak prosciutto leberkas jowl fatback.
                    </div> -->
                </div>
            </div>
        </div>
        <div class=" each-element mt90 clearfix">
            <div class="container">
                <div class="row">
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-sx-12">
                        <a href="https://naptechgames.com/blogs/global-game-market" class="item-wrap">
                            <div class="image">
                                <img src="assets/images/homepage/blog/game-market.png" alt="" class="img-responsive">
                            </div>
                            <div class="item-info equal-height">
                                <div class="item-header table fsize-14 fweight-700 uppercase">
                                    <div class="table-cell platform color-2">Game</div>
                                    <div class="table-cell color-2 text-right">May 14, 2020</div>
                                </div>
                                <div class="item-title mt20" data-trim="40">Global Games Market 2020 in COVID-19 pandemic
                                </div>
                                <div class="item-text mt25 lheight-26 text-gray" data-trim="130">
                                    The gaming market is increasing day by day. Mobile, PC, Console gaming companies are investing million – billion dollars in this project.
                                </div>
                            </div>
                            <div class="author-comment table">
                                <div class="table-cell valign-middle">
                                    <i class="fa fa-user color-2 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5">by Suzana</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-sx-12">
                        <a href="https://naptechgames.com/blogs/skill-development-opportunity" class="item-wrap">
                            <div class="image">
                                <img src="assets/images/homepage/blog/skill-development.png" alt="" class="img-responsive">
                            </div>
                            <div class="item-info equal-height">
                                <div class="item-header table fsize-14 fweight-700 uppercase">
                                    <div class="table-cell platform color-2">Skill</div>
                                    <div class="table-cell color-2 text-right">Mar 14, 2020</div>
                                </div>
                                <div class="item-title mt20" data-trim="40">Skill development Opportunity</div>
                                <div class="item-text mt25 lheight-26 text-gray" data-trim="130">
                                    The Corona virus has already affected us in so many ways. States showing the rate of unemployment problem...
                                </div>
                            </div>
                            <div class="author-comment table">
                                <div class="table-cell valign-middle">
                                    <i class="fa fa-user color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5">by Arifa Ferdoushi</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-sx-12">
                        <a href="https://naptechgames.com/blogs/connect-with-customer-during-lockdown" class="item-wrap">
                            <div class="image">
                                <img src="assets/images/homepage/blog/connect-people.png" alt="" class="img-responsive">
                            </div>
                            <div class="item-info equal-height">
                                <div class="item-header table fsize-14 fweight-700 uppercase">
                                    <div class="table-cell platform color-2">Covid19</div>
                                    <div class="table-cell color-2 text-right">Apr 14, 2020</div>
                                </div>
                                <div class="item-title mt20" data-trim="40">How To Connect With Your Customers...</div>
                                <div class="item-text mt25 lheight-26 text-gray" data-trim="130">
                                    Because of COVID – 19, the whole world is facing some sort of financial crisis. We are no longer different from others...
                                </div>
                            </div>
                            <div class="author-comment table">
                                <div class="table-cell valign-middle">
                                    <i class="fa fa-user color-2 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5">by Asef Zahin</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG SECTION END -->
    <?php include_once "inc/footer.php"; ?>
    <!-- Scripts -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/slick-1.8.0/slick/slick.min.js"></script>
    <script src="assets/plugins/flex-menu/flexmenu.min.js"></script>
    <script src="assets/plugins/jquery-match-height-master/dist/jquery.matchHeight.js"></script>
    <script src="assets/plugins/muuri-master/muuri.js"></script>
    <!-- <script src="assets/plugins/paroller.js-master/dist/jquery.paroller.min.js"></script> -->
    <!-- <script src="assets/js/jquery.inview.min.js"></script> -->
    <!-- <script src="assets/js/progressbar.min.js"></script> -->
    <script src="assets/plugins/lightbox2-master/dist/js/lightbox.js"></script>
    <!-- <script src="assets/js/moment.min.js"></script> -->
    <!-- <script src="assets/plugins/jquery-date-range-picker-master/dist/jquery.daterangepicker.min.js"></script> -->
    <script src="assets/plugins/wow-master/dist/wow.min.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- Magnific popup script file -->
    <script src="assets/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
</body>

</html>