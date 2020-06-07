<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GALLERY | NAPTECHGAMES</title>
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
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="./assets/plugins/Magnific-Popup/dist/magnific-popup.css">
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
                    Gallery
                </h1>
                <div class="breadcrumbs">
                    <a href="index.html">Home</a> /
                    <span class="color-1">Gallery</span>
                </div>
            </div>
        </div>
    </section>
    <!-- PAGE NAME END -->
    <!-- SECTION START -->
    <section class="gallery ptb150">
        <div class="container">
            <div class="row">
                <div class="masonry-tpl">
                    <div class="grid-wrapper">
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

<?php
$image = [
    [
        "imageName"    => "gallery-masonry-1.jpg",
        "imageDetails" => "Using Banner Stands To Increase Trade",
        "category"     => "origin",
    ],
    [
        "imageName"    => "gallery-masonry-2.jpg",
        "imageDetails" => "Using Banner Stands To Increase Trade",
        "category"     => "playstation-4",
    ],
    [
        "imageName"    => "gallery-masonry-3.jpg",
        "imageDetails" => "Using Banner Stands To Increase Trade",
        "category"     => "uplay",
    ],
    [
        "imageName"    => "gallery-masonry-4.jpg",
        "imageDetails" => "Using Banner Stands To Increase Trade",
        "category"     => "playstation-4",
    ],
    [
        "imageName"    => "gallery-masonry-5.jpg",
        "imageDetails" => "Using Banner Stands To Increase Trade",
        "category"     => "xbox-one",
    ],
    [
        "imageName"    => "gallery-masonry-6.jpg",
        "imageDetails" => "Using Banner Stands To Increase Trade",
        "category"     => "steam",
    ],
    [
        "imageName"    => "gallery-masonry-8.jpg",
        "imageDetails" => "Using Banner Stands To Increase Trade",
        "category"     => "playstation-4",
    ],
    [
        "imageName"    => "gallery-masonry-7.jpg",
        "imageDetails" => "Using Banner Stands To Increase Trade",
        "category"     => "origin",
    ],
    [
        "imageName"    => "gallery-masonry-9.jpg",
        "imageDetails" => "Using Banner Stands To Increase Trade",
        "category"     => "origin",
    ],
];

?>
                            <div class="item <?php echo $image[0]["category"] ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="item-content">
                                    <div class="image-bl">
                                        <img src="./assets/images/gallery/<?php echo $image[0]["imageName"] ?>" alt="">
                                    </div>
                                    <div class="item-info">
                                        <div class="info-bl text-center">
                                            <a href="single-image.html" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            <?php echo $image[0]["imageDetails"] ?>
                                            </a>
                                            <div class="btn-container text-center mt30">
                                                <a href="./assets/images/gallery/<?php echo $image[0]["imageName"] ?>" class="item-btn inline-block valign-middle test-popup-link">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item <?php echo $image[1]["category"] ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="item-content">
                                    <div class="image-bl">
                                        <img src="./assets/images/gallery/<?php echo $image[1]["imageName"] ?>" alt="">
                                    </div>
                                    <div class="item-info">
                                        <div class="info-bl text-center">
                                            <a href="single-image.html" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            <?php echo $image[1]["imageDetails"] ?>
                                            </a>
                                            <div class="btn-container text-center mt30">
                                                <a href="./assets/images/gallery/<?php echo $image[1]["imageName"] ?>" class="item-btn inline-block valign-middle test-popup-link">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item <?php echo $image[2]["category"] ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="item-content">
                                    <div class="image-bl">
                                        <img src="./assets/images/gallery/<?php echo $image[2]["imageName"] ?>" alt="">
                                    </div>
                                    <div class="item-info">
                                        <div class="info-bl text-center">
                                            <a href="single-image.html" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            <?php echo $image[2]["imageDetails"] ?>
                                            </a>
                                            <div class="btn-container text-center mt30">
                                                <a href="./assets/images/gallery/<?php echo $image[2]["imageName"] ?>" class="item-btn inline-block valign-middle test-popup-link">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item <?php echo $image[3]["category"] ?> col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="item-content">
                                    <div class="image-bl">
                                        <img src="./assets/images/gallery/<?php echo $image[3]["imageName"] ?>" alt="">
                                    </div>
                                    <div class="item-info">
                                        <div class="info-bl text-center">
                                            <a href="single-image.html" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            <?php echo $image[3]["imageDetails"] ?>
                                            </a>
                                            <div class="btn-container text-center mt30">
                                                <a href="./assets/images/gallery/<?php echo $image[3]["imageName"] ?>" class="item-btn inline-block valign-middle test-popup-link">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item <?php echo $image[4]["category"] ?> col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="item-content">
                                    <div class="image-bl">
                                        <img src="./assets/images/gallery/<?php echo $image[4]["imageName"] ?>" alt="">
                                    </div>
                                    <div class="item-info">
                                        <div class="info-bl text-center">
                                            <a href="single-image.html" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            <?php echo $image[4]["imageDetails"] ?>
                                            </a>
                                            <div class="btn-container text-center mt30">
                                                <a href="./assets/images/gallery/<?php echo $image[4]["imageName"] ?>" class="item-btn inline-block valign-middle test-popup-link">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item <?php echo $image[5]["category"] ?> col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="item-content">
                                    <div class="image-bl">
                                        <img src="./assets/images/gallery/<?php echo $image[5]["imageName"] ?>" alt="">
                                    </div>
                                    <div class="item-info">
                                        <div class="info-bl text-center">
                                            <a href="single-image.html" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            <?php echo $image[5]["imageDetails"] ?>
                                            </a>
                                            <div class="btn-container text-center mt30">
                                                <a href="./assets/images/gallery/<?php echo $image[5]["imageName"] ?>" class="item-btn inline-block valign-middle test-popup-link">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item <?php echo $image[6]["category"] ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="item-content">
                                    <div class="image-bl">
                                        <img src="./assets/images/gallery/<?php echo $image[6]["imageName"] ?>" alt="">
                                    </div>
                                    <div class="item-info">
                                        <div class="info-bl text-center">
                                            <a href="single-image.html" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            <?php echo $image[6]["imageDetails"] ?>
                                            </a>
                                            <div class="btn-container text-center mt30">
                                                <a href="./assets/images/gallery/<?php echo $image[6]["imageName"] ?>" class="item-btn inline-block valign-middle test-popup-link">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item <?php echo $image[7]["category"] ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="item-content">
                                    <div class="image-bl">
                                        <img src="./assets/images/gallery/<?php echo $image[7]["imageName"] ?>" alt="">
                                    </div>
                                    <div class="item-info">
                                        <div class="info-bl text-center">
                                            <a href="single-image.html" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            <?php echo $image[7]["imageDetails"] ?>
                                            </a>
                                            <div class="btn-container text-center mt30">
                                                <a href="./assets/images/gallery/<?php echo $image[7]["imageName"] ?>" class="item-btn inline-block valign-middle test-popup-link">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item <?php echo $image[8]["category"] ?> col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="item-content">
                                    <div class="image-bl">
                                        <img src="./assets/images/gallery/<?php echo $image[8]["imageName"] ?>" alt="">
                                    </div>
                                    <div class="item-info">
                                        <div class="info-bl text-center">
                                            <a href="single-image.html" data-trim="40" class="item-title color-white fsize-24 fweight-700 font-agency uppercase">
                                            <?php echo $image[8]["imageDetails"] ?>
                                            </a>
                                            <div class="btn-container text-center mt30">
                                                <a href="./assets/images/gallery/<?php echo $image[8]["imageName"] ?>" class="item-btn inline-block valign-middle test-popup-link">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="cssload-container mt60">
                            <div class="cssload-double-torus"></div>
                        </div> -->
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
    <!-- Magnific popup script file -->
    <script src="assets/plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
</body>

</html>