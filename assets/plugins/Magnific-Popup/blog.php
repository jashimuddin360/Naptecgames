<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BLOG RIGHT SIDEBAR | INDIEGA</title>
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
                    Blog
                </h1>
                <div class="breadcrumbs">
                    <a href="index.html">Home</a> /
                    <span class="color-1">Blog</span>
                </div>
            </div>
        </div>
    </section>
    <!-- PAGE NAME END -->
    <!-- SECTION START -->
    <section class="blog-content ptb150 each-element">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">


<?php
$postData = [
    "SAMPLE POST FORMAT WITH ICON TO FIX" => [
        "description"    => "Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto shank pork chop frankfurter shankle.",
        "publishDate"    => "Mar 14,2018",
        "category"       => "XBOX",
        "thumbnailImage" => "blog-img-1.jpg",
        "postBy"         => "by Admin",
        "comments"       => 0,
        "postURL"        => "post.php",
    ],
    "SAMPLE  FORMAT WITH ICON TO FIX"     => [
        "description"    => "Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto shank pork chop frankfurter shankle.",
        "publishDate"    => "Mar 14,2018",
        "category"       => "XBOX",
        "thumbnailImage" => "blog-img-1.jpg",
        "postBy"         => "by Admin",
        "comments"       => 0,
        "postURL"        => "post.php",
    ],
    "SAMPLE POST  WITH ICON TO FIX"       => [
        "description"    => "Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto shank pork chop frankfurter shankle. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea eligendi provident ducimus nihil veritatis blanditiis fugiat repudiandae nobis impedit reiciendis?",
        "publishDate"    => "Mar 14,2018",
        "category"       => "XBOX",
        "thumbnailImage" => "blog-img-1.jpg",
        "postBy"         => "by Admin",
        "comments"       => 0,
        "postURL"        => "post.php",
    ],
    "SAMPLE POST  WITH ICON TO rr FIX"    => [
        "description"    => "Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto shank pork chop frankfurter shankle. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea eligendi provident ducimus nihil veritatis blanditiis fugiat repudiandae nobis impedit reiciendis?",
        "publishDate"    => "Mar 14,2018",
        "category"       => "XBOX",
        "thumbnailImage" => "blog-img-1.jpg",
        "postBy"         => "by Admin",
        "comments"       => 0,
        "postURL"        => "post.php",
    ],
];

foreach ( $postData as $postTitle => $postInformation ) {
    ?>
                    <article class="vertical-item format-continue-link fsize-0 clearfix">
                        <div class="item-left-img col-lg-4 col-md-4 col-sm-12 col-xs-12 equal-height">
                            <img src="./assets/images/blog/<?php echo $postInformation['thumbnailImage']; ?>" alt="">
                        </div>
                        <div class="post-content col-lg-8 col-md-8 col-sm-12 col-xs-12 equal-height">
                            <div class="post-wrapper">
                                <div class="table">
                                    <div class="table-row">
                                        <div class="table-cell valign-top">
                                            <div class="platform fsize-14 fweight-700 uppercase">
                                            <?php echo $postInformation['category']; ?>
                                            </div>
                                        </div>
                                        <div class="table-cell valign-top text-right">
                                            <div class="fsize-14 fweight-700 uppercase">
                                            <?php echo $postInformation['publishDate']; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt15">
                                    <a href="blog/<?php echo $postInformation['postURL']; ?>" class="post-title">
                                        <h5><?php echo $postTitle; ?></h5>
                                    </a>
                                    <div class="read-more-wrap mt15">
                                        <div class="fsize-16 lheight-26" data-trim-text="136">
                                        <?php echo $postInformation['description']; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="post-bottom table">
                                <div class="table-cell valign-middle">
                                    <i class="fa fa-user color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 fsize-14 ml5"> <?php echo $postInformation['postBy']; ?></span>
                                </div>
                                <div class="table-cell valign-middle text-right">
                                    <i class="fa fa-comment color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 fsize-14 ml5"> <?php echo $postInformation['comments']; ?></span>
                                </div>
                            </div>
                        </div>
                    </article>
    <?php
}

?>



                </div>
                <div class="sidebar col-lg-4 col-md-4 col-sm-5 col-xs-12">
                    <!--  ===================================== Instagram Widget ===================================== -->
                    <!-- <div class="widget-bl insta-widget">
                        <h5 class="fsize-20 text-center">Instagram Widget</h5>
                        <div class="widget-wrapper clearfix">
                            <a href="#" class="instagram-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <img src="./assets/images/blog/insta-img-1.jpg" alt="">
                            </a>
                            <a href="#" class="instagram-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <img src="./assets/images/blog/insta-img-2.jpg" alt="">
                            </a>
                            <a href="#" class="instagram-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <img src="./assets/images/blog/insta-img-3.jpg" alt="">
                            </a>
                            <a href="#" class="instagram-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <img src="./assets/images/blog/insta-img-4.jpg" alt="">
                            </a>
                            <a href="#" class="instagram-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <img src="./assets/images/blog/insta-img-5.jpg" alt="">
                            </a>
                            <a href="#" class="instagram-item col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                <img src="./assets/images/blog/insta-img-6.jpg" alt="">
                            </a>
                        </div>
                    </div> -->
                    <!--  ===================================== End Instagram Widget ===================================== -->
<!-- ===================Categories ========================= -->
                    <!-- <div class="widget-bl categories-widget">
                        <h5 class="fsize-20 text-center">Categories</h5>
                        <div class="widget-wrapper">
                            <ul class="list-1">
                                <li class="color1">
                                    <a href="#">
                                        <span>All categories</span>
                                        <span class="float-right">/375</span>
                                    </a>
                                </li>
                                <li class="color1">
                                    <a href="#">
                                        <span>Pancetta landjeager</span>
                                        <span class="float-right">/75</span>
                                    </a>
                                </li>
                                <li class="color1">
                                    <a href="#">
                                        <span>Alcatra ground</span>
                                        <span class="float-right">/142</span>
                                    </a>
                                </li>
                                <li class="color1">
                                    <a href="#">
                                        <span>Round pork turkey</span>
                                        <span class="float-right">/269</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="widget-bl twitter-widget">
                        <h5 class="fsize-20 text-center">Twitter</h5>
                        <div class="widget-wrapper">
                            <div class="twitter-item table">
                                <div class="table-row">
                                    <div class="table-cell valign-top">
                                        <i class="fa fa-twitter color-6" aria-hidden="true"></i>
                                    </div>
                                    <div class="table-cell valign-top pl20">
                                        <div>
                                            Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto shank.
                                        </div>
                                        <a href="#" class="color-6 mt20 block">http://t.co/hVbJKs9eRt</a>
                                    </div>
                                </div>
                            </div>
                            <div class="twitter-item table">
                                <div class="table-row">
                                    <div class="table-cell valign-top">
                                        <i class="fa fa-twitter color-6" aria-hidden="true"></i>
                                    </div>
                                    <div class="table-cell valign-top pl20">
                                        <div>
                                            Tongue picanha cow tri-tip, bacon sausage meatloaf kielbasa prosciutto.
                                        </div>
                                        <a href="#" class="color-6 mt20 block">http://t.co/hVbJKs9eRt</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="widget-bl latest-widget">
                        <h5 class="fsize-20 text-center">Latest posts</h5>
                        <div class="widget-wrapper">
                            <a href="post.html" class="latest-item">
                                <div class="table">
                                    <div class="table-row">
                                        <div class="latest-img table-cell valign-middle">
                                            <img src="./assets/images/blog/latest-img-1.jpg" alt="">
                                        </div>
                                        <div class="latest-title table-cell valign-middle pl20">
                                            <div class="title-top font-agency fweight-700 uppercase color-white">
                                                Pancetta cow filet mignon shoulder bacon sausage meatloaf
                                            </div>
                                            <div class="color-2 uppercase fsize-12 fweight-700">
                                                Mar 20, 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="post.html" class="latest-item">
                                <div class="table">
                                    <div class="table-row">
                                        <div class="latest-img table-cell valign-middle">
                                            <img src="./assets/images/blog/latest-img-2.jpg" alt="">
                                        </div>
                                        <div class="latest-title table-cell valign-middle pl20">
                                            <div class="title-top font-agency fweight-700 uppercase color-white">
                                                Alcatra rump tenderloin, capicola kielbasa
                                            </div>
                                            <div class="color-2 uppercase fsize-12 fweight-700">
                                                Mar 21, 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="post.html" class="latest-item">
                                <div class="table">
                                    <div class="table-row">
                                        <div class="latest-img table-cell valign-middle">
                                            <img src="./assets/images/blog/latest-img-3.jpg" alt="">
                                        </div>
                                        <div class="latest-title table-cell valign-middle pl20">
                                            <div class="title-top font-agency fweight-700 uppercase color-white">
                                                Porchetta venison pork loin tri-tip shank spare ribs
                                            </div>
                                            <div class="color-2 uppercase fsize-12 fweight-700">
                                                Mar 22, 2018
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div> -->
                    <div class="widget-bl calendar-widget">
                        <div class="widget-wrapper">
                            <div class="calendar-bl">
                                <div class="calendar-container"></div>
                            </div>
                        </div>
                    </div>


                    <div class="widget-bl subscribe-widget">
                        <h5 class="fsize-20 text-center">Sign up newsletter</h5>
                        <div class="widget-wrapper">
                            <form class="subscribe-form" action="#">
                                <input type="text" placeholder="Enter your email">
                                <button class="color-white">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                </button>
                            </form>
                            <div class="text-left lheight-26 mt20">
                                Subscribe to our Newsletter right now to be updated. We promice not to spam!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SECTION END -->
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