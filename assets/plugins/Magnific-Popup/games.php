<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GALLERY EXTENDED | INDIEGA</title>
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
                    Game Showcase
                </h1>
                <div class="breadcrumbs">
                    <a href="index.html">Home</a> /
                    <span class="color-1">Games</span>
                </div>
            </div>
        </div>
    </section>
    <!-- PAGE NAME END -->
    <!-- SECTION START -->
    <section class="gallery ptb150">
        <div class="container">
            <div class="row">
                <div class="extended-tpl each-element">
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
$game = [
    "Rackless Ball"       => [
        "category"      => "origin",
        "pageURL"       => "rackless-game.php",
        "description"   => "Tri-tip chuck bresaola, pork pig short ribs tail tenderloin prosciutto ",
        "playstoreLink" => "https://pl;aystore.com",
        "appstoreLink"  => "https://pl;aystore.com",
        "image"         => "image.png",
    ],
    "Rackless Ball Copy"  => [
        "category"      => "origin",
        "pageURL"       => "rackless-game.php",
        "description"   => "Tri-tip chuck b pork pig short ribs tail tenderloin prosciutto shoulder turkey ",
        "playstoreLink" => "https://pl;aystore.com",
        "appstoreLink"  => "https://pl;aystore.com",
        "image"         => "image.png",
    ],
    "Rackless Ball Copy2" => [
        "category"      => "origin",
        "pageURL"       => "rackless-game.php",
        "description"   => "Tri-tip chuck b pork pig short ribs tail tenderloin prosciutto shoulder turkey  ",
        "playstoreLink" => "https://pl;aystore.com",
        "appstoreLink"  => "https://pl;aystore.com",
        "image"         => "image.png",
    ],
];

foreach ( $game as $gameName => $gameDetails ) {
    ?>
                                <div class="item <?php echo $gameDetails['category']; ?> col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="item-content">
                                        <div class="image-bl">
                                            <img src="./assets/images/gallery/gallery-extended-1.jpg" alt="">
                                        </div>
                                        <div class="bottom-info background-4 text-center p30">
                                            <div class="category fsize-14 fweight-700 color-1 uppercase">
                                                Origin
                                            </div>
                                            <a href="game/<?php echo $gameDetails['pageURL']; ?>" class="img-name">
                                                <h5 data-trim="40">
                                                    <?php echo $gameName; ?>
                                                </h5>
                                            </a>
                                            <div class="mt20" data-trim="170">
                                                <?php echo $gameDetails['description']; ?>
                                            </div>
                                            <div class="game__button">
                                                <a href="<?php echo $gameDetails['playstoreLink'] ?>">
                                                    <div class="game__button--playstore">

                                                        <img src="assets/images/playstore-512.png" alt="" width="30px">
                                                        <p><span class="get">Get it on </span><br><span class="playstore-text">Google Play store</span></p>

                                                    </div>
                                                </a>
                                                <a href="<?php echo $gameDetails['appstoreLink'] ?>">
                                                    <div class="game__button--appstore">

                                                        <img src="assets/images/apple-logo.png" alt="" width="30px">
                                                        <p><span class="availabe">Avilable on the </span><br><span class="appstore-text">App Store</span></p>

                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php
}

?>



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
</body>

</html>