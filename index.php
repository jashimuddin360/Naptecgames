<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDIEGA</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="./assets/fonts/css/font-awesome.min.css" />
    <!-- Bootstrap-->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" />
    <!-- Style -->
    <link rel="stylesheet" href="./assets/css/home.css" />
    <!-- Responsive Style -->
    <link rel="stylesheet" href="./assets/css/responsive.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="./assets/plugins/animate.css-master/animate.min.css">

    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="./assets/plugins/Magnific-Popup/dist/magnific-popup.css">

    <!-- Sliders -->
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slick-1.8.0/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slick-1.8.0/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slider/css/smartslider.min.css" media="screen, print" />

    <style>




.slider__button a{
    font-family: 'Roboto', 'Arial';
    color: #3dd0d8;
    font-size: 87.5%;
    text-shadow: none;
    line-height: 1.5;
    font-weight: 700;
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
.slider__button a:hover{
    color: #fff;
    background: #3dd0d8;
}


.slider__desc p{
            font-family: 'Roboto', 'Arial';
    color: #ffffff;
    font-size: 87.5%;
    text-shadow: none;
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
        .slider__desc{
            margin: -20px 0px 13px 0px;
        }

        .slider__head p{
            font-family: 'Roboto', 'Arial';
    color: #ffffff;
    font-size: 300%;
    text-shadow: none;
    line-height: 1;
    font-weight: 700;
    font-style: normal;
    text-decoration: none;
    text-align: center;
    letter-spacing: normal;
    word-spacing: normal;
    text-transform: uppercase;
    font-weight: 700;
    text-shadow: 0 2px 4.8px rgba(0, 0, 0, 0.3);
    font-family: "Agency FB";
    display: block;
    margin-bottom: 0px;
        }

        .slider__cta p{
            font-family: 'Roboto', 'Arial';
            color: #ffffff;
            font-size: 600%;
            text-shadow: none;
            line-height: 1;
            font-weight: 700;
            font-style: normal;
            text-decoration: none;
            text-align: center;
            letter-spacing: normal;
            word-spacing: normal;
            text-transform: uppercase;
            font-weight: 700;
            text-shadow: 0 2px 4.8px rgba(0, 0, 0, 0.3);
            font-family: "Agency FB";
            margin-bottom: 0px;

        }


        /* slider Animation Delay And show */

        .head{
            animation-delay: .7s;
            animation-duration: 1.1s;
        }
        .cta{
            animation-delay: 1s;
            animation-duration: 1.4s;
        }
        .desc{
            animation-delay: 1.2s;
            animation-duration: 1.7s;
        }

        .main-slider{
            width: 100%;
            height: 100vh;
            background-image: url("assets/images/slide-1.jpg") ;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        @media screen and (max-width: 600px){
            .slider__cta p {
                font-size: 200%;
            }
        }
        @media screen and (max-width: 980px){
            .slider__cta p {
                font-size: 400%;
            }
        }
    </style>
</head>

<body>

    <?php include "./inc/header.php";?>

    <!-- SLIDER START -->
    <section class="main-slider" >

        <div class="slider__head" >
            <p class="animated fadeInRightBig	fast head" >Welcome to naptechgames</p>
        </div>
        <div class="slider__cta" >
            <p class="animated fadeInLeftBig slow	cta" >Play For Fun</p>
        </div>
        <div class="slider__desc" >
            <p class="animated fadeInDownBig	desc" >This is a p tag Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt commodi, deserunt nisi error mollitia recusandae!</p>
        </div>
        <div class="slider__button animated ">
            <a href="#" class=" animated fadeInUpBig button-anim">More About Us</a>
        </div>

        <div class="sl-social bg-white">
            <a href="#" class="social facebook">
                <i class="fa fa-facebook color-3" aria-hidden="true"></i>
            </a>
            <a href="#" class="social twitter">
                <i class="fa fa-twitter color-3" aria-hidden="true"></i>
            </a>
            <a href="#" class="social google">
                <i class="fa fa-google-plus color-3" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <!-- SLIDER END -->
    <!-- GAME SECTION START -->
    <section class="game-section pt150 pb85">
        <div class="container">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        UpComing Games:
                    </div>
                    <div class="subtitle">
                        Coming soon
                    </div>
                </div>
                <div class="tm-tabs tabs mt70">
                    <div class="tabs-nav">
                        <ul class="list-inline nav nav-tabs tabs-slider">
                            <li class="active col-lg-3 col-md-3">
                                <a href="#tab-item-1" data-toggle="tab">
                                    <div class="img-wrap">
                                        <img src="./assets/images/game-img-1.jpg" alt="">
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="nav-title color-white">
                                            Fifal 2018
                                        </div>
                                        <div class="date">
                                            Mar 18-20, 2018
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-2" data-toggle="tab">
                                    <div class="img-wrap">
                                        <img src="./assets/images/game-img-2.jpg" alt="">
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="nav-title color-white">
                                            Mix Combination
                                        </div>
                                        <div class="date">
                                            Apr 25-27, 2018
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-3" data-toggle="tab">
                                    <div class="img-wrap">
                                        <img src="./assets/images/game-img-3.jpg" alt="">
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="nav-title color-white">
                                            Forza Jacson
                                        </div>
                                        <div class="date">
                                            Mar 11, 2019
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-4" data-toggle="tab">
                                    <div class="img-wrap">
                                        <img src="./assets/images/game-img-4.jpg" alt="">
                                    </div>
                                    <div class="nav-header-bl mt25">
                                        <div class="nav-title color-white">
                                            NO MAN’S SKY
                                        </div>
                                        <div class="date">
                                            Sept 15, 2019
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-3 col-md-3">
                                <a href="#tab-item-5" data-toggle="tab">
                                    <div class="img-wrap">
                                        <img src="./assets/images/game-img-4.jpg" alt="">
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
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content relative mt90">
                        <div class="tab-pane fade active in text-left clearfix" id="tab-item-1">
                            <div class="tab-info col-lg-6 col-md-12 col-sm-12 col-xs-12 ptb90 pl100 equal-height">
                                <div class="tab-head table uppercase fsize-14 fweight-700">
                                    <div class="table-cell valign-middle ws-20 color-1">
                                        New games action
                                    </div>
                                    <div class="table-cell valign-middle text-right">
                                        Apr 25-27, 2018
                                    </div>
                                </div>
                                <div class="uppercase fsize-32 fweight-700 font-agency color-white lheight-normal">
                                    Fifal 2018
                                </div>
                                <div class="mt50 lheight-26 fweight-300">
                                    <p>Andouille frankfurter hamburger, swine leberkas tenderloin cupim. Ground round ball tip
                                        pastrami, turducken chicken porchetta fatback frankfurter. Pig kielbasa jowl strip.</p>
                                    <p>Steak sausage pork loin bacon tri-tip meatball shoulder cupim beef pork chop kevin boudin.
                                        Short loin pig meatball ham landjaeger pastrami. Drumstick ham hock chuck pork belly
                                        chicken prosciutto biltong salami ham pancetta.</p>
                                </div>
                                <div class="mt60 table g-bottom">
                                    <div class="table-cell valign-middle">
                                        <a href="single-game.html" class="btn gradient color-white plr60 ptb19">
                                            Read more
                                        </a>
                                    </div>
                                    <div class="rating table-cell valign-middle text-right">
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
                                    <img class="game-full-img" src="./assets/images/game-slide-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in text-left clearfix" id="tab-item-2">
                            <div class="tab-info col-lg-6 col-md-12 col-sm-12 col-xs-12 ptb90 pl100 equal-height">
                                <div class="tab-head table uppercase fsize-14 fweight-700">
                                    <div class="table-cell valign-middle ws-20 color-1">
                                        New games action
                                    </div>
                                    <div class="table-cell valign-middle text-right">
                                        Apr 25-27, 2018
                                    </div>
                                </div>
                                <div class="uppercase fsize-32 fweight-700 font-agency color-white lheight-normal">
                                    Mix Combination
                                </div>
                                <div class="mt50 lheight-26 fweight-300">
                                    <p>Andouille frankfurter hamburger, swine leberkas tenderloin cupim. Ground round ball tip
                                        pastrami, turducken chicken porchetta fatback frankfurter. Pig kielbasa jowl strip.</p>
                                    <p>Steak sausage pork loin bacon tri-tip meatball shoulder cupim beef pork chop kevin boudin.
                                        Short loin pig meatball ham landjaeger pastrami. Drumstick ham hock chuck pork belly
                                        chicken prosciutto biltong salami ham pancetta.</p>
                                </div>
                                <div class="mt60 table g-bottom">
                                    <div class="table-cell valign-middle">
                                        <a href="single-game.html" class="btn gradient color-white plr60 ptb19">
                                            Read more
                                        </a>
                                    </div>
                                    <div class="rating table-cell valign-middle text-right">
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
                                    <img class="game-full-img" src="./assets/images/game-slide-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in text-left clearfix" id="tab-item-3">
                            <div class="tab-info col-lg-6 col-md-12 col-sm-12 col-xs-12 ptb90 pl100 equal-height">
                                <div class="tab-head table uppercase fsize-14 fweight-700">
                                    <div class="table-cell valign-middle ws-20 color-1">
                                        New games action
                                    </div>
                                    <div class="table-cell valign-middle text-right">
                                        Apr 25-27, 2018
                                    </div>
                                </div>
                                <div class="uppercase fsize-32 fweight-700 font-agency color-white lheight-normal">
                                    Forza Jacson
                                </div>
                                <div class="mt50 lheight-26 fweight-300">
                                    <p>Andouille frankfurter hamburger, swine leberkas tenderloin cupim. Ground round ball tip
                                        pastrami, turducken chicken porchetta fatback frankfurter. Pig kielbasa jowl strip.</p>
                                    <p>Steak sausage pork loin bacon tri-tip meatball shoulder cupim beef pork chop kevin boudin.
                                        Short loin pig meatball ham landjaeger pastrami. Drumstick ham hock chuck pork belly
                                        chicken prosciutto biltong salami ham pancetta.</p>
                                </div>
                                <div class="mt60 table g-bottom">
                                    <div class="table-cell valign-middle">
                                        <a href="single-game.html" class="btn gradient color-white plr60 ptb19">
                                            Read more
                                        </a>
                                    </div>
                                    <div class="rating table-cell valign-middle text-right">
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
                                    <img class="game-full-img" src="./assets/images/game-slide-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in text-left clearfix" id="tab-item-4">
                            <div class="tab-info col-lg-6 col-md-12 col-sm-12 col-xs-12 ptb90 pl100 equal-height">
                                <div class="tab-head table uppercase fsize-14 fweight-700">
                                    <div class="table-cell valign-middle ws-20 color-1">
                                        New games action
                                    </div>
                                    <div class="table-cell valign-middle text-right">
                                        Apr 25-27, 2018
                                    </div>
                                </div>
                                <div class="uppercase fsize-32 fweight-700 font-agency color-white lheight-normal">
                                    NO MAN’S SKY
                                </div>
                                <div class="mt50 lheight-26 fweight-300">
                                    <p>Andouille frankfurter hamburger, swine leberkas tenderloin cupim. Ground round ball tip
                                        pastrami, turducken chicken porchetta fatback frankfurter. Pig kielbasa jowl strip.</p>
                                    <p>Steak sausage pork loin bacon tri-tip meatball shoulder cupim beef pork chop kevin boudin.
                                        Short loin pig meatball ham landjaeger pastrami. Drumstick ham hock chuck pork belly
                                        chicken prosciutto biltong salami ham pancetta.</p>
                                </div>
                                <div class="mt60 table g-bottom">
                                    <div class="table-cell valign-middle">
                                        <a href="single-game.html" class="btn gradient color-white plr60 ptb19">
                                            Read more
                                        </a>
                                    </div>
                                    <div class="rating table-cell valign-middle text-right">
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
                                    <img class="game-full-img" src="./assets/images/game-slide-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in text-left clearfix" id="tab-item-5">
                            <div class="tab-info col-lg-6 col-md-12 col-sm-12 col-xs-12 ptb90 pl100 equal-height">
                                <div class="tab-head table uppercase fsize-14 fweight-700">
                                    <div class="table-cell valign-middle ws-20 color-1">
                                        New games action
                                    </div>
                                    <div class="table-cell valign-middle text-right">
                                        Apr 25-27, 2018
                                    </div>
                                </div>
                                <div class="uppercase fsize-32 fweight-700 font-agency color-white lheight-normal">
                                    NO MAN’S SKY 2
                                </div>
                                <div class="mt50 lheight-26 fweight-300">
                                    <p>Andouille frankfurter hamburger, swine leberkas tenderloin cupim. Ground round ball tip
                                        pastrami, turducken chicken porchetta fatback frankfurter. Pig kielbasa jowl strip.</p>
                                    <p>Steak sausage pork loin bacon tri-tip meatball shoulder cupim beef pork chop kevin boudin.
                                        Short loin pig meatball ham landjaeger pastrami. Drumstick ham hock chuck pork belly
                                        chicken prosciutto biltong salami ham pancetta.</p>
                                </div>
                                <div class="mt60 table g-bottom">
                                    <div class="table-cell valign-middle">
                                        <a href="single-game.html" class="btn gradient color-white plr60 ptb19">
                                            Read more
                                        </a>
                                    </div>
                                    <div class="rating table-cell valign-middle text-right">
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
                                    <img class="game-full-img" src="./assets/images/game-slide-img-1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GAME SECTION END -->
    <!-- BLOG SECTION START -->
    <section class="blog-section ptb90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                        <div class="title color-white">
                            Our latest Posts:
                        </div>
                        <div class="subtitle">
                            Frash news
                        </div>
                    </div>
                    <div class="title-description mt30 fweight-300 text-center">
                        Pork chop pastrami meatball, picanha salami capicola drumstick tri-tip flank short loin
                        <br /> strip steak prosciutto leberkas jowl fatback.
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-wrapper each-element mt90 clearfix">
            <div class="container">
                <div class="row">
<?php
$blog = [
    "Cow biltong pork belly kielbasa shankle"       => [
        "description" => "Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto shank pork chop.",
        "publishDate" => "mar 14, 2018",
        "category"    => "xbox",
        "image"       => "blog-img-1.jpg",
        "comments"    => 0,
        "blogURL"     => "blog/post.php",
    ],
    "Cow short ribs beef strip steak jowl"          => [
        "description" => "Capicola beef ribs pastrami biltong pork chop corned beef alcatra tail landjaeger. Spare ribs t-bone buffalo capicola, pork belly.",
        "publishDate" => "mar 14, 2018",
        "category"    => "ps 3",
        "image"       => "blog-img-2.jpg",
        "comments"    => 0,
        "blogURL"     => "blog/post.php",
    ],
    "Boudin shankle pork belly turducken spare rib" => [
        "description" => "Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto shank pork chop.",
        "publishDate" => "mar 14, 2018",
        "category"    => "xbox",
        "image"       => "blog-img-3.jpg",
        "comments"    => 0,
        "blogURL"     => "blog/post.php",
    ],
];
foreach ( $blog as $blogName => $blogDetails ) {
    ?>
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-sx-12">
                        <a href="<?php echo $blogDetails['blogURL']; ?>" class="item-wrap">
                            <div class="image">
                                <img src="./assets/images/<?php echo $blogDetails['image']; ?>" alt="" class="img-responsive">
                            </div>
                            <div class="item-info equal-height">
                                <div class="item-header table fsize-14 fweight-700 uppercase">
                                    <div class="table-cell platform">xbox</div>
                                    <div class="table-cell color-2 text-right"><?php echo $blogDetails['publishDate']; ?></div>
                                </div>
                                <div class="item-title mt20" data-trim="40"><?php echo $blogName; ?></div>
                                <div class="item-text mt25 lheight-26" data-trim="130">
                                    <?php echo $blogDetails['description']; ?>
                                </div>
                            </div>
                            <div class="author-comment table">
                                <div class="table-cell valign-middle">
                                    <i class="fa fa-user color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5">by Admin</span>
                                </div>
                                <div class="table-cell valign-middle text-right">
                                    <i class="fa fa-comment color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5"><?php echo $blogDetails['comments']; ?></span>
                                </div>
                            </div>
                        </a>
                    </div>
    <?php

}
?>
                </div>
            </div>
        </div>
    </section>
    <!-- BLOG SECTION END -->
    <!-- TESTIMONIAL SECTION START -->
    <section class="pt90 pb170">
        <div class="container">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Testimonials:
                    </div>
                    <div class="subtitle">
                        All Reviews
                    </div>
                </div>
                <div class="testimonial-slider testimonial-tpl mt100">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="slide-item">
                            <div class="author-img">
                                <img src="./assets/images/testimonials/testimonial-author-1.jpg" alt="">
                            </div>
                            <div class="text-center">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <div class="fsize-24 fweight-700 color-white font-agency uppercase">
                                    Birdie Stephens
                                </div>
                                <div class="color-1 fsize-14 fweight-700 uppercase">
                                    Gamer
                                </div>
                                <div class="fsize-20 italic mt40">
                                    «Fatback landjaeger prosciutto jerky ham. Salami cappig cupim leberkas. Kevin tenderloin ground round. Spare ribs pork belly
                                    cupim.»
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="slide-item">
                            <div class="author-img">
                                <img src="./assets/images/testimonials/testimonial-author-2.jpg" alt="">
                            </div>
                            <div class="text-center">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <div class="fsize-24 fweight-700 color-white font-agency uppercase">
                                    Miguel Carpenter
                                </div>
                                <div class="color-1 fsize-14 fweight-700 uppercase">
                                    Gamer
                                </div>
                                <div class="fsize-20 italic mt40">
                                    «Porchetta strip steak ball tip, salami pork belly jerky beef ribs. Venison ham hock beef ribs sirloin. Burgdoggen filet
                                    mignon porchetta.»
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="slide-item">
                            <div class="author-img">
                                <img src="./assets/images/testimonials/testimonial-author-3.jpg" alt="">
                            </div>
                            <div class="text-center">
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                                <div class="fsize-24 fweight-700 color-white font-agency uppercase">
                                    Martha Jones
                                </div>
                                <div class="color-1 fsize-14 fweight-700 uppercase">
                                    Gamer
                                </div>
                                <div class="fsize-20 italic mt40">
                                    «Hamburger pork beef shank turducken drumstick pork loin. Pork short ribs rump fatback capicola ham strip steak.»
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- TESTIMONIAL SECTION END -->
    <!-- GALLERY SECTION START -->
    <section class="gallery main-gallery ptb150">
        <div class="container">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Screenshots gallery
                    </div>
                    <div class="subtitle">
                        All New Images
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="grid-wrapper mt70">
                    <div class="filter_container text-center">
                        <div class="filter-item active" data-filter="all">
                            All
                        </div>
                        <div class="filter-item" data-filter="origin">
                            Origin
                        </div>
                        <div class="filter-item" data-filter="playstation-4">
                            Playstation 4
                        </div>
                        <div class="filter-item" data-filter="steam">
                            Steam
                        </div>
                        <div class="filter-item" data-filter="uplay">
                            Uplay
                        </div>
                        <div class="filter-item" data-filter="xbox-one">
                            Xbox one
                        </div>
                    </div>
                    <div class="item_container relative mt40">
                        <div class="item origin col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="item-content">
                                <div class="image-bl">
                                    <img src="./assets/images/gallery/gallery-1.jpg" alt="">
                                </div>
                                <div class="item-info">
                                    <div class="info-bl text-center">
                                        <a href="#" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            Using Banner Stands To Increase Trade
                                        </a>
                                        <div class="text-center mt30">
                                            <a href="./assets/images/gallery/gallery-1.jpg" class="item-btn inline-block valign-middle test-popup-link">
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
                                    <img src="./assets/images/gallery/gallery-2.jpg" alt="">
                                </div>
                                <div class="item-info">
                                    <div class="info-bl text-center">
                                        <a href="#" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            Using Banner Stands To Increase Trade
                                        </a>
                                        <div class="text-center mt30">
                                        <a href="./assets/images/gallery/gallery-2.jpg" class="item-btn inline-block valign-middle test-popup-link">
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
                                    <img src="./assets/images/gallery/gallery-4.jpg" alt="">
                                </div>
                                <div class="item-info">
                                    <div class="info-bl text-center">
                                        <a href="#" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            Using Banner Stands To Increase Trade
                                        </a>
                                        <div class="text-center mt30">
                                            <a href="./assets/images/gallery/gallery-4.jpg" class="item-btn inline-block valign-middle test-popup-link">
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
                                    <img src="./assets/images/gallery/gallery-3.jpg" alt="">
                                </div>
                                <div class="item-info">
                                    <div class="info-bl text-center">
                                        <a href="#" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            Using Banner Stands To Increase Trade
                                        </a>
                                        <div class="text-center mt30">
                                            <a href="./assets/images/gallery/gallery-3.jpg" class="item-btn inline-block valign-middle test-popup-link">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center mt50">
                        <a href="gallery.php" class="btn border-btn plr50 ptb19 color-white">Discover more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- GALLERY SECTION END -->
    <!-- STREAMS SECTION START -->
    <section class="ptb150">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 st-tabs tabs mt70">
                    <div class="tabs-nav">
                        <ul class="list-inline nav nav-tabs">
                            <li class="active col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <a href="#stream-1" data-toggle="tab">
                                    <div class="tab-title">
                                        Most popular streams
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <a href="#stream-2" data-toggle="tab">
                                    <div class="tab-title">
                                        Upcoming Competitions
                                    </div>
                                </a>
                            </li>
                            <li class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <a href="#stream-3" data-toggle="tab">
                                    <div class="tab-title">
                                        Prosciutto meatball flank
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content stream-bl relative">
                        <div class="tab-pane fade active in text-left clearfix" id="stream-1">
                            <div class="left-col col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="video-bl equal-height">
                                <div class="image_bg equal-height" style="background-image: url('./assets/images/competition-full.jpg');">
                                    <div class="bottom-bar">
                                        <a href="#" class="btn gradient color-white plr50 ptb19">
                                            Contact us now
                                        </a>
                                    </div>
                                </div>
                                    <!-- <div class="buttonbar mt75">
                                        <div id="play" class="play-show play relative fsize-24 inline-block">
                                            <div class="pp-wrapper">
                                                <i class="fa fa-play color-white" aria-hidden="true"></i>
                                                <i class="fa fa-pause color-white" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="video-bottom">
                                        <div class="video-title">
                                            Tenderloin shoulder picanha rump
                                        </div>
                                        <div class="mt15">
                                            <div class="stream-img">
                                                <img src="./assets/images/stream-img-1.jpg" alt="">
                                            </div>
                                            <div class="stream-img">
                                                <img src="./assets/images/stream-img-2.jpg" alt="">
                                            </div>
                                            <div class="stream-img">
                                                <img src="./assets/images/stream-img-3.jpg" alt="">
                                            </div>
                                            <div class="inline-block valign-middle color-white ml15">
                                                2569 watching now
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <div class="right-col col-lg-6 col-md-6 col-sm-12 col-xs-12 equal-height">
                                <div class="top-wrapp">
                                    <div class="fsize-24 fweight-700 font-agency color-white uppercase lheight-28">
                                        Create Your own channel and Start to Stream games now
                                    </div>
                                    <div class="mt40 lheight-26">
                                        Drumstick meatloaf capicola short ribs, pork chop cupim kielbasa jerky porchetta pancetta chicken pastrami turkey tenderloin
                                        sausage. Pig buffalo alcatra meatball. T-bone hamburger bresaola kevin shank porchetta
                                        ground. Round beef tail tri-tip. Short loin pork strip steak venison.
                                    </div>
                                    <a href="#" class="btn gradient color-white plr40 ptb19 mt30">
                                        Get started now
                                    </a>
                                </div>
                                <div class="bottom-wrapp mt40">
                                    <div class="fsize-24 fweight-700 font-agency uppercase color-white">9 136 streams from most recent games</div>
                                    <div>267 347 watching now</div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in competition text-left clearfix" id="stream-2">
                            <div class="left-col col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="image_bg equal-height" style="background-image: url('./assets/images/competition-full.jpg');">
                                    <div class="bottom-bar">
                                        <a href="#" class="btn gradient color-white plr50 ptb19">
                                            Contact us now
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-col col-lg-6 col-md-6 col-sm-12 col-xs-12 equal-height">
                                <div class="item-g">
                                    <div class="img-com inline-block valign-middle">
                                        <img src="./assets/images/competition-1.jpg" alt="">
                                    </div>
                                    <div class="info-bl inline-block valign-middle ml25">
                                        <div class="fsize-24 fweight-700 font-agency uppercase color-white" data-trim="35">Shankle ribeye bacon</div>
                                        <div>267 347 participants</div>
                                    </div>
                                </div>
                                <div class="item-g">
                                    <div class="img-com inline-block valign-middle">
                                        <img src="./assets/images/competition-2.jpg" alt="">
                                    </div>
                                    <div class="info-bl inline-block valign-middle ml25">
                                        <div class="fsize-24 fweight-700 font-agency uppercase color-white" data-trim="35">Doner bresaola pork Kielbasa</div>
                                        <div>267 347 participants</div>
                                    </div>
                                </div>
                                <div class="item-g">
                                    <div class="img-com inline-block valign-middle">
                                        <img src="./assets/images/competition-3.jpg" alt="">
                                    </div>
                                    <div class="info-bl inline-block valign-middle ml25">
                                        <div class="fsize-24 fweight-700 font-agency uppercase color-white" data-trim="35">Kielbasa fatback alcatr</div>
                                        <div>267 347 participants</div>
                                    </div>
                                </div>
                                <div class="item-g">
                                    <div class="img-com inline-block valign-middle">
                                        <img src="./assets/images/competition-4.jpg" alt="">
                                    </div>
                                    <div class="info-bl inline-block valign-middle ml25">
                                        <div class="fsize-24 fweight-700 font-agency uppercase color-white" data-trim="35">Bacon tenderloin drumstick meatball</div>
                                        <div>267 347 participants</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade in competition text-left clearfix" id="stream-3">
                            <div class="left-col col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="image_bg equal-height" style="background-image: url('./assets/images/competition-full.jpg');">
                                    <div class="bottom-bar">
                                        <a href="#" class="btn gradient color-white plr50 ptb19">
                                            Contact us now
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="right-col col-lg-6 col-md-6 col-sm-12 col-xs-12 equal-height">
                                <div class="item-g">
                                    <div class="img-com inline-block valign-middle">
                                        <img src="./assets/images/competition-1.jpg" alt="">
                                    </div>
                                    <div class="info-bl inline-block valign-middle ml25">
                                        <div class="fsize-24 fweight-700 font-agency uppercase color-white" data-trim="35">Shankle ribeye bacon</div>
                                        <div>267 347 participants</div>
                                    </div>
                                </div>
                                <div class="item-g">
                                    <div class="img-com inline-block valign-middle">
                                        <img src="./assets/images/competition-2.jpg" alt="">
                                    </div>
                                    <div class="info-bl inline-block valign-middle ml25">
                                        <div class="fsize-24 fweight-700 font-agency uppercase color-white" data-trim="35">Doner bresaola pork Kielbasa</div>
                                        <div>267 347 participants</div>
                                    </div>
                                </div>
                                <div class="item-g">
                                    <div class="img-com inline-block valign-middle">
                                        <img src="./assets/images/competition-3.jpg" alt="">
                                    </div>
                                    <div class="info-bl inline-block valign-middle ml25">
                                        <div class="fsize-24 fweight-700 font-agency uppercase color-white" data-trim="35">Kielbasa fatback alcatr</div>
                                        <div>267 347 participants</div>
                                    </div>
                                </div>
                                <div class="item-g">
                                    <div class="img-com inline-block valign-middle">
                                        <img src="./assets/images/competition-4.jpg" alt="">
                                    </div>
                                    <div class="info-bl inline-block valign-middle ml25">
                                        <div class="fsize-24 fweight-700 font-agency uppercase color-white" data-trim="35">Bacon tenderloin drumstick meatball</div>
                                        <div>267 347 participants</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- STREAMS SECTION END -->
    <!-- PRICE SECTION START -->
    <!-- <section class="price ptb150">
        <div class="container">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Our Pricing Plans
                    </div>
                    <div class="subtitle">
                        Spesial Plans
                    </div>
                </div>
                <div class="mt90">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInLeft" data-wow-duration="2s">
                        <div class="item standart text-center">
                            <div class="ptb30 fsize-24 fweight-700 font-agency uppercase color-white">
                                Standard Plan
                            </div>
                            <div class="current-bl color-white pt25 pb20">
                                <div class="font-agency fweight-700 lheight-30">
                                    <span class="fsize-24">$</span>
                                    <span class="fsize-48">39</span>
                                    <span class="fsize-24">99</span>
                                </div>
                                <div class="fsize-14 uppercase fweight-700">
                                    Per mouth
                                </div>
                            </div>
                            <div class="price-content equal-height">
                                <div class="item-list">Pork Ground Found Biltong</div>
                                <div class="item-list">Capicola Sausage Beef Ribs</div>
                                <div class="item-list">Pork Doner Frankfurter</div>
                            </div>
                            <div class="text-center pb60">
                                <a href="#" class="btn border-btn color-white plr50 ptb19">Buy Plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInDown" data-wow-duration="1s">
                        <div class="item gold text-center">
                            <div class="ptb30 fsize-24 fweight-700 font-agency uppercase color-white">
                                Golden Plan
                            </div>
                            <div class="current-bl color-white pt25 pb20">
                                <div class="font-agency fweight-700 lheight-30">
                                    <span class="fsize-24">$</span>
                                    <span class="fsize-48">59</span>
                                    <span class="fsize-24">59</span>
                                </div>
                                <div class="fsize-14 uppercase fweight-700">
                                    Per mouth
                                </div>
                            </div>
                            <div class="price-content equal-height">
                                <div class="item-list">Doner Boudin Rump Picanha</div>
                                <div class="item-list">Leberkas Kevin Drumstick</div>
                                <div class="item-list">Beef Mignon Bresaola</div>
                            </div>
                            <div class="text-center pb60">
                                <a href="#" class="btn border-btn color-white plr50 ptb19">Buy Plan Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="2s">
                        <div class="item platinum text-center">
                            <div class="ptb30 fsize-24 fweight-700 font-agency uppercase color-white">
                                Platinum Plan
                            </div>
                            <div class="current-bl color-white pt25 pb20">
                                <div class="font-agency fweight-700 lheight-30">
                                    <span class="fsize-24">$</span>
                                    <span class="fsize-48">89</span>
                                    <span class="fsize-24">39</span>
                                </div>
                                <div class="fsize-14 uppercase fweight-700">
                                    Per mouth
                                </div>
                            </div>
                            <div class="price-content equal-height">
                                <div class="item-list">Bresaola Shoulder Venison </div>
                                <div class="item-list">Frankfurter Cow Ribeye Kielbasa</div>
                                <div class="item-list">Cupim Drumstick Tail Pancetta</div>
                            </div>
                            <div class="text-center pb60">
                                <a href="#" class="btn border-btn color-white plr50 ptb19">Buy Plan Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- PRICE SECTION END -->
    <!-- FAQ SECTION START -->
    <section class=" price ptb150">
        <div class="container">
            <div class="row">
                <div class="title-bl text-center wow fadeIn" data-wow-duration="2s">
                    <div class="title color-white">
                        Requently Asked Questions
                    </div>
                    <div class="subtitle">
                        You should know this
                    </div>
                </div>
                <div class="mt30 text-center">
                    Corned beef ham frankfurter cow, strip steak shoulder doner flank. Pork chop spare ribs
                    <br /> pork ball tip. Prosciutto jowl meatball shankю
                </div>
            </div>
            <div class="row">
                <div class="faq-container mt90">
                    <div class="left-column-1 column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="table">
                            <div class="table-row">
                                <div class="counter-round table-cell valign-top">
                                    <div class="counter-bl">
                                        01
                                    </div>
                                </div>
                                <div class="counter-content table-cell valign-top">
                                    <div class="counter-title">Bresaola hamburger sirloin?</div>
                                    <div class="counter-text mt25">
                                        Flank andouille leberkas, shoulder shankle prosciutto chicken corned beef cupim kevin ham buffalo. Cow short ribs shoulder
                                        pancetta alcatra pork chop.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-column-2 column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="table">
                            <div class="table-row">
                                <div class="counter-content table-cell valign-top text-right">
                                    <div class="counter-title">Filet mignon rump doner landjaeger?</div>
                                    <div class="counter-text mt25">
                                        Beef ribs meatloaf andouille tail pork belly bresaola tenderloin. Sirloin shank filet mignon rump. Jerky drumstick meatloaf
                                        sirloin ball tip landjaeger.
                                    </div>
                                </div>
                                <div class="counter-round table-cell valign-top">
                                    <div class="counter-bl">
                                        02
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="left-column-3 column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="table">
                            <div class="table-row">
                                <div class="counter-round table-cell valign-top">
                                    <div class="counter-bl">
                                        03
                                    </div>
                                </div>
                                <div class="counter-content table-cell valign-top">
                                    <div class="counter-title">Capicola jerky turducken meatloaf?</div>
                                    <div class="counter-text mt25">
                                        Meatloaf shank corned beef rump, alcatra chicken bacon turducken tongue. Burgdoggen drumstick short loin tongue shankle shank.
                                        Pig salami pancetta.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-column-4 column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="table">
                            <div class="table-row">
                                <div class="counter-content table-cell valign-top text-right">
                                    <div class="counter-title">Meatloaf leberkas short loin?</div>
                                    <div class="counter-text mt25">
                                        Beef leberkas drumstick jowl flank burgdoggen strip steak shoulder. Shankle tri-tip spare ribs turkey beef ribs fatback buffalo
                                        t-bone tail flank.
                                    </div>
                                </div>
                                <div class="counter-round table-cell valign-top">
                                    <div class="counter-bl">
                                        04
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- FAQ SECTION END -->
    <!-- REGISTER SECTION START -->
    <section class="register-section background-gradient ptb100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
                    <div class="reg-wrapper">
                        <div class="title-bl text-left">
                            <div class="title color-white">
                                Register for our Newsletter now
                            </div>
                            <div class="subtitle">
                                Newslatter
                            </div>
                        </div>
                        <div class="color-white">
                            We are always ready to welcome you!
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 wow fadeInRight" data-wow-duration="2s">
                    <form action="#" class="reg-form">
                        <div class="reg_input">
                            <input type="text" placeholder="Enter your Email address here">
                        </div>
                        <button class="reg_submit">
                            <i class="fa fa-envelope color-1 fsize-14" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- REGISTER SECTION END -->
    <?php include "./inc/footer.php"?>
    <a href="#" id="toTop" class="color-white">
        <i class="fa fa-angle-up fsize-14" aria-hidden="true"></i>
    </a>
    <!-- Scripts -->
    <script src="./assets/js/jquery-3.3.1.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/plugins/slick-1.8.0/slick/slick.min.js"></script>
    <script src="./assets/plugins/flex-menu/flexmenu.min.js"></script>
    <script src="./assets/plugins/jquery-match-height-master/dist/jquery.matchHeight.js"></script>
    <script src="./assets/plugins/muuri-master/muuri.js"></script>
    <script src="./assets/plugins/vide-0.5.1/dist/jquery.vide.min.js"></script>
    <script src="./assets/plugins/lightbox2-master/dist/js/lightbox.js"></script>
    <script src="./assets/plugins/wow-master/dist/wow.min.js"></script>
    <script src="./assets/js/script.js"></script>
    <!-- Magnific popup script file -->
    <script src="assets/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
</body>

</html>