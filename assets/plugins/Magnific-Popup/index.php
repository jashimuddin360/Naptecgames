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
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slider/css/normalize.min.css" media="screen, print" />
    <link rel="stylesheet" type="text/css" href="./assets/plugins/slider/css/smartslider.min.css" media="screen, print" />
    <style type="text/css">
        .n2-ss-spinner-simple-white-container {
            position: absolute;
            top: 50%;
            left: 50%;
            margin: -20px;
            background: #fff;
            width: 20px;
            height: 20px;
            padding: 10px;
            border-radius: 50%;
            z-index: 1000;
        }

        .n2-ss-spinner-simple-white {
            outline: 1px solid RGBA(0, 0, 0, 0);
            width: 100%;
            height: 100%;
        }

        .n2-ss-spinner-simple-white:before {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 20px;
            height: 20px;
            margin-top: -11px;
            margin-left: -11px;
        }

        .n2-ss-spinner-simple-white:not(:required):before {
            content: '';
            border-radius: 50%;
            border-top: 2px solid #333;
            border-right: 2px solid transparent;
            animation: n2SimpleWhite .6s linear infinite;
            -webkit-animation: n2SimpleWhite .6s linear infinite;
        }

        @keyframes n2SimpleWhite {
            to {
                transform: rotate(360deg);
            }
        }

        @-webkit-keyframes n2SimpleWhite {
            to {
                -webkit-transform: rotate(360deg);
            }
        }
    </style>
    <script type="text/javascript">
        window.N2PRO = 1;
        window.N2GSAP = 1;
        window.N2PLATFORM = "wordpress";
        (function() {
            var N = this;
            N.N2_ = N.N2_ || {
                r: [],
                d: []
            }, N.N2R = N.N2R || function() {
                N.N2_.r.push(arguments)
            }, N.N2D = N.N2D || function() {
                N.N2_.d.push(arguments)
            }
        }).call(window);
        if (!window.n2jQuery) {
            window.n2jQuery = {
                ready: function(cb) {
                    console.error('n2jQuery will be deprecated!');
                    N2R(['$'], cb);
                }
            }
        }
        window.nextend = {
            localization: {},
            ready: function(cb) {
                console.error('nextend.ready will be deprecated!');
                N2R('documentReady', function($) {
                    cb.call(window, $)
                })
            }
        };
        window.N2SSPRO = 1;
        window.N2SS3C = "smartslider3";
        nextend.fontsLoaded = false;
        nextend.fontsLoadedActive = function() {
            nextend.fontsLoaded = true;
        };
        var fontData = {
            google: {
                families: ["Roboto:300,400:latin"]
            },
            active: function() {
                nextend.fontsLoadedActive()
            },
            inactive: function() {
                nextend.fontsLoadedActive()
            }
        };
        if (typeof WebFontConfig !== 'undefined') {
            var _WebFontConfig = WebFontConfig;
            for (var k in WebFontConfig) {
                if (k == 'active') {
                    fontData.active = function() {
                        nextend.fontsLoadedActive();
                        _WebFontConfig.active();
                    }
                } else if (k == 'inactive') {
                    fontData.inactive = function() {
                        nextend.fontsLoadedActive();
                        _WebFontConfig.inactive();
                    }
                } else if (k == 'google') {
                    if (typeof WebFontConfig.google.families !== 'undefined') {
                        for (var i = 0; i < WebFontConfig.google.families.length; i++) {
                            fontData.google.families.push(WebFontConfig.google.families[i]);
                        }
                    }
                } else {
                    fontData[k] = WebFontConfig[k];
                }
            }
        }
        if (typeof WebFont === 'undefined') {
            window.WebFontConfig = fontData;
        } else {
            WebFont.load(fontData);
        }
    </script>
    <script type="text/javascript" src="./assets/plugins/slider/js/n2-j.min.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/nextend-gsap.min.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/nextend-frontend.min.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/smartslider-frontend.min.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/smartslider-simple-type-frontend.min.js"></script>
    <script type="text/javascript" src="./assets/plugins/slider/js/nextend-webfontloader.min.js"></script>
    <script type="text/javascript">
        N2R('documentReady', function($) {

            nextend.fontsDeferred = $.Deferred();
            if (nextend.fontsLoaded) {
                nextend.fontsDeferred.resolve();
            } else {
                nextend.fontsLoadedActive = function() {
                    nextend.fontsLoaded = true;
                    nextend.fontsDeferred.resolve();
                };
                var intercalCounter = 0;
                nextend.fontInterval = setInterval(function() {
                    if (intercalCounter > 3 || document.documentElement.className.indexOf('wf-active') !==
                        -1) {
                        nextend.fontsLoadedActive();
                        clearInterval(nextend.fontInterval);
                    }
                    intercalCounter++;
                }, 1000);
            }
        });
    </script>
</head>

<body>

    <?php include "./inc/header.php";?>

    <!-- SLIDER START -->
    <section class="main-slider">
        <style type="text/css">
            div#n2-ss-4 {
                width: 1200px;
                float: left;
                margin: 0px 0px 0px 0px;
            }

            html[dir="rtl"] div#n2-ss-4 {
                float: right;
            }

            div#n2-ss-4 .n2-ss-slider-1 {
                position: relative;
                padding-top: 0px;
                padding-right: 0px;
                padding-bottom: 0px;
                padding-left: 0px;
                height: 500px;
                border-style: solid;
                border-width: 0px;
                border-color: #3e3e3e;
                border-color: RGBA(62, 62, 62, 1);
                border-radius: 0px;
                background-clip: padding-box;
                background-repeat: repeat;
                background-position: 50% 50%;
                background-size: cover;
                background-attachment: scroll;
            }

            div#n2-ss-4 .n2-ss-slider-background-video-container {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                overflow: hidden;
            }

            div#n2-ss-4 .n2-ss-slider-2 {
                position: relative;
                width: 100%;
                height: 100%;
            }

            .x-firefox div#n2-ss-4 .n2-ss-slider-2 {
                opacity: 0.99999;
            }

            div#n2-ss-4 .n2-ss-slider-3 {
                position: relative;
                width: 100%;
                height: 100%;
                overflow: hidden;
                outline: 1px solid rgba(0, 0, 0, 0);
                z-index: 10;
            }

            div#n2-ss-4 .n2-ss-slide-backgrounds,
            div#n2-ss-4 .n2-ss-slider-3>.n-particles-js-canvas-el,
            div#n2-ss-4 .n2-ss-slider-3>.n2-ss-divider {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
            }

            div#n2-ss-4 .n2-ss-slide-backgrounds {
                z-index: 10;
            }

            div#n2-ss-4 .n2-ss-slider-3>.n-particles-js-canvas-el {
                z-index: 12;
            }

            div#n2-ss-4 .n2-ss-slide-backgrounds>* {
                overflow: hidden;
            }

            div#n2-ss-4 .n2-ss-slide {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 20;
                display: block;
                -webkit-backface-visibility: hidden;
            }

            div#n2-ss-4 .n2-ss-layers-container {
                position: relative;
                width: 1200px;
                height: 500px;
            }

            div#n2-ss-4 .n2-ss-parallax-clip>.n2-ss-layers-container {
                position: absolute;
                right: 0;
            }

            div#n2-ss-4 .n2-ss-slide {
                -webkit-perspective: 1000px;
                perspective: 1000px;
            }

            div#n2-ss-4 .n2-ss-slide-active {
                z-index: 21;
            }

            div#n2-ss-4 .n2-ss-button-container,
            div#n2-ss-4 .n2-ss-button-container a {
                display: inline-block;
            }

            div#n2-ss-4 .n2-ss-button-container.n2-ss-fullwidth,
            div#n2-ss-4 .n2-ss-button-container.n2-ss-fullwidth a {
                display: block;
            }

            div#n2-ss-4 .n2-ss-button-container.n2-ss-nowrap {
                white-space: nowrap;
            }

            div#n2-ss-4 .n2-ss-button-container a div {
                display: inline;
                font-size: inherit;
            }

            div#n2-ss-4 .n2-ss-button-container a>div {
                display: inline-flex;
                align-items: center;
                vertical-align: top;
            }

            div#n2-ss-4 .n2-ss-button-container i {
                font-size: 100%;
                vertical-align: baseline;
            }

            div#n2-ss-4 .n2-ss-button-container a[data-iconplacement="left"] i {
                margin-right: 0.3em;
            }

            div#n2-ss-4 .n2-ss-button-container a[data-iconplacement="right"] i {
                margin-left: 0.3em;
            }

            div#n2-ss-4 .n2-ss-control-bullet {
                visibility: hidden;
                text-align: center;
                justify-content: center;
            }

            div#n2-ss-4 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize {
                width: 100%;
            }

            div#n2-ss-4 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize {
                height: 100%;
                flex-flow: column;
            }

            div#n2-ss-4 .nextend-bullet-bar {
                display: inline-flex;
                visibility: visible;
                align-items: center;
                flex-wrap: wrap;
            }

            div#n2-ss-4 .n2-bar-justify-content-left {
                justify-content: flex-start;
            }

            div#n2-ss-4 .n2-bar-justify-content-center {
                justify-content: center;
            }

            div#n2-ss-4 .n2-bar-justify-content-right {
                justify-content: flex-end;
            }

            div#n2-ss-4 .n2-ss-control-bullet-vertical>.nextend-bullet-bar {
                flex-flow: column;
            }

            div#n2-ss-4 .n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
                display: flex;
            }

            div#n2-ss-4 .n2-ss-control-bullet-horizontal.n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
                flex: 1 1 auto;
            }

            div#n2-ss-4 .n2-ss-control-bullet-vertical.n2-ss-control-bullet-fullsize>.nextend-bullet-bar {
                height: 100%;
            }

            div#n2-ss-4 .nextend-bullet-bar>div {
                display: inline-block;
                cursor: pointer;
                transition: background-color 0.4s;
                vertical-align: top;
            }

            div#n2-ss-4 .nextend-bullet-bar>div.n2-active {
                cursor: default;
            }

            div#n2-ss-4 div.n2-ss-bullet-thumbnail-container {
                position: absolute;
                opacity: 0;
                z-index: 10000000;
            }

            div#n2-ss-4 .n2-ss-bullet-thumbnail-container .n2-ss-bullet-thumbnail {
                background-size: cover;
                background-repeat: no-repeat;
                background-position: center;
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-be0a516f76efd05e36733289aaf2a6de-hover {
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
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-e5e826a3ba83ea69731d81df1c0fa84d-hover {
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
            }

            div#n2-ss-4 .n2-style-01ddb7ca1f625e69d1a2381951aa5192-heading {
                background: #ffffff;
                background: RGBA(255, 255, 255, 0);
                opacity: 1;
                padding: 0px 0px 0px 0px;
                box-shadow: none;
                border-width: 0px;
                border-style: solid;
                border-color: #000000;
                border-color: RGBA(0, 0, 0, 1);
                border-radius: 0px;
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph {
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
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a,
            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a:FOCUS {
                font-family: 'Roboto', 'Arial';
                color: #1890d7;
                font-size: 100%;
                text-shadow: none;
                line-height: 1.5;
                font-weight: normal;
                font-style: normal;
                text-decoration: none;
                text-align: center;
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: none;
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a:HOVER,
            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a:ACTIVE {
                font-family: 'Roboto', 'Arial';
                color: #1890d7;
                font-size: 100%;
                text-shadow: none;
                line-height: 1.5;
                font-weight: normal;
                font-style: normal;
                text-decoration: none;
                text-align: center;
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: none;
            }

            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a {
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
            }

            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a:HOVER,
            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a:ACTIVE,
            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a:FOCUS {
                color: #ffffff;
            }

            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading {
                background: #ffffff;
                opacity: 1;
                padding: 19px 50px 19px 50px;
                box-shadow: none;
                border-width: 0px;
                border-style: solid;
                border-color: #000000;
                border-color: RGBA(0, 0, 0, 1);
                border-radius: 0px;
                transition: all 0.3s ease-out;
            }

            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading:Hover,
            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading:ACTIVE,
            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading:FOCUS {
                background: #3dd0d8;
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-be0a516f76efd05e36733289aaf2a6de-hover {
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
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-e5e826a3ba83ea69731d81df1c0fa84d-hover {
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
            }

            div#n2-ss-4 .n2-style-01ddb7ca1f625e69d1a2381951aa5192-heading {
                background: #ffffff;
                background: RGBA(255, 255, 255, 0);
                opacity: 1;
                padding: 0px 0px 0px 0px;
                box-shadow: none;
                border-width: 0px;
                border-style: solid;
                border-color: #000000;
                border-color: RGBA(0, 0, 0, 1);
                border-radius: 0px;
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph {
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
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a,
            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a:FOCUS {
                font-family: 'Roboto', 'Arial';
                color: #1890d7;
                font-size: 100%;
                text-shadow: none;
                line-height: 1.5;
                font-weight: normal;
                font-style: normal;
                text-decoration: none;
                text-align: center;
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: none;
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a:HOVER,
            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a:ACTIVE {
                font-family: 'Roboto', 'Arial';
                color: #1890d7;
                font-size: 100%;
                text-shadow: none;
                line-height: 1.5;
                font-weight: normal;
                font-style: normal;
                text-decoration: none;
                text-align: center;
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: none;
            }

            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a {
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
            }

            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a:HOVER,
            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a:ACTIVE,
            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a:FOCUS {
                color: #ffffff;
            }

            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading {
                background: #ffffff;
                opacity: 1;
                padding: 19px 50px 19px 50px;
                box-shadow: none;
                border-width: 0px;
                border-style: solid;
                border-color: #000000;
                border-color: RGBA(0, 0, 0, 1);
                border-radius: 0px;
                transition: all 0.3s ease-out;
            }

            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading:Hover,
            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading:ACTIVE,
            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading:FOCUS {
                background: #3dd0d8;
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-be0a516f76efd05e36733289aaf2a6de-hover {
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
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-e5e826a3ba83ea69731d81df1c0fa84d-hover {
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
            }

            div#n2-ss-4 .n2-style-01ddb7ca1f625e69d1a2381951aa5192-heading {
                background: #ffffff;
                background: RGBA(255, 255, 255, 0);
                opacity: 1;
                padding: 0px 0px 0px 0px;
                box-shadow: none;
                border-width: 0px;
                border-style: solid;
                border-color: #000000;
                border-color: RGBA(0, 0, 0, 1);
                border-radius: 0px;
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph {
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
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a,
            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a:FOCUS {
                font-family: 'Roboto', 'Arial';
                color: #1890d7;
                font-size: 100%;
                text-shadow: none;
                line-height: 1.5;
                font-weight: normal;
                font-style: normal;
                text-decoration: none;
                text-align: center;
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: none;
            }

            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a:HOVER,
            div#n2-ss-4 .n2-ss-layer .n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph a:ACTIVE {
                font-family: 'Roboto', 'Arial';
                color: #1890d7;
                font-size: 100%;
                text-shadow: none;
                line-height: 1.5;
                font-weight: normal;
                font-style: normal;
                text-decoration: none;
                text-align: center;
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: none;
            }

            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a {
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
            }

            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a:HOVER,
            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a:ACTIVE,
            div#n2-ss-4 .n2-font-06be61400c1a4b339e67534a8a262348-link a:FOCUS {
                color: #ffffff;
            }

            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading {
                background: #ffffff;
                opacity: 1;
                padding: 19px 50px 19px 50px;
                box-shadow: none;
                border-width: 0px;
                border-style: solid;
                border-color: #000000;
                border-color: RGBA(0, 0, 0, 1);
                border-radius: 0px;
                transition: all 0.3s ease-out;
            }

            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading:Hover,
            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading:ACTIVE,
            div#n2-ss-4 .n2-style-588404275f372121297e39cfe0b03e24-heading:FOCUS {
                background: #3dd0d8;
            }

            div#n2-ss-4 .n2-style-2f5b33e7e6c0fd4c646594fe712ed299-dot {
                background: #000000;
                background: RGBA(0, 0, 0, 0);
                opacity: 1;
                padding: 20px 9px 20px 9px;
                box-shadow: none;
                border-width: 0px;
                border-style: solid;
                border-color: #000000;
                border-color: RGBA(0, 0, 0, 1);
                border-radius: 0px;
                transition: all 0.3s ease-out;
            }

            div#n2-ss-4 .n2-style-2f5b33e7e6c0fd4c646594fe712ed299-dot.n2-active,
            div#n2-ss-4 .n2-style-2f5b33e7e6c0fd4c646594fe712ed299-dot:HOVER {
                background: #ffffff;
                background: RGBA(255, 255, 255, 0);
                padding: 20px 9px 20px 9px;
                transition: all 0.3s ease-out;
            }

            div#n2-ss-4 .n2-style-3e702635329eba6b6b98a2cfe62c4664-simple {
                background: #ffffff;
                background: RGBA(255, 255, 255, 0);
                opacity: 1;
                padding: 0px 0px 0px 0px;
                box-shadow: none;
                border-width: 0px;
                border-style: solid;
                border-color: #ffffff;
                border-color: RGBA(255, 255, 255, 0);
                border-radius: 0px;
                transition: all 0.3s ease-out;
            }

            div#n2-ss-4 .n2-font-7b5c9760d048f32382e5cebedacdf830-dot,
            div#n2-ss-4 .n2-font-7b5c9760d048f32382e5cebedacdf830-dot:FOCUS {
                font-family: 'Agency FB';
                color: #ffffff;
                font-size: 150%;
                text-shadow: none;
                line-height: 1.2;
                font-weight: normal;
                font-style: normal;
                text-decoration: none;
                text-align: center;
                letter-spacing: normal;
                word-spacing: normal;
                text-transform: uppercase;
                font-weight: 700;
                opacity: 0.8;
                -webkit-writing-mode: vertical-rl;
                writing-mode: vertical-rl;
                transition: all 0.3s ease-out;
            }

            div#n2-ss-4 .n2-font-7b5c9760d048f32382e5cebedacdf830-dot.n2-active,
            div#n2-ss-4 .n2-font-7b5c9760d048f32382e5cebedacdf830-dot:HOVER,
            div#n2-ss-4 .n2-font-7b5c9760d048f32382e5cebedacdf830-dot:ACTIVE {
                color: #ffffff;
                font-size: 150%;
                opacity: 1;
                transition: all 0.3s ease-out;
            }
        </style>
        <div id="n2-ss-4-align" class="n2-ss-align">
            <div class="n2-padding">
                <div id="n2-ss-4" data-creator="Smart Slider 3" class="n2-ss-slider n2-ow n2-has-hover n2notransition n2-ss-load-fade " data-minFontSizedesktopPortrait="1" data-minFontSizedesktopLandscape="1" data-minFontSizetabletPortrait="1" data-minFontSizetabletLandscape="1" data-minFontSizemobilePortrait="1" data-minFontSizemobileLandscape="1" style="font-size: 16px;" data-fontsize="16">
                    <div class="n2-ss-slider-1 n2-ss-swipe-element n2-ow" style="">
                        <div class="n2-ss-slider-2 n2-ow">
                            <div class="n2-ss-slider-3 n2-ow" style="">

                                <div class="n2-ss-slide-backgrounds"></div>
                                <div data-first="1" data-slide-duration="0" data-id="15" style="" class="n2-ss-slide n2-ss-canvas n2-ow  n2-ss-slide-15">
                                    <div class="n2-ss-slide-background n2-ow" data-mode="fill">
                                        <img data-hash="7f12344252192edee35072e997e65114" data-desktop="./assets/plugins/slider/images/slide-1.jpg" data-blur="0" data-opacity="100" data-x="50" data-y="50" src="./assets/plugins/slider/images/slide-1.jpg" alt="" />
                                    </div>
                                    <div class="n2-ss-layers-container n2-ow" data-csstextalign="center" style="">
                                        <div class="n2-ss-layer n2-ow" style="overflow:visible;" data-csstextalign="inherit" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-pm="content" data-desktopportraitpadding="140|*|10|*|10|*|10|*|px+" data-desktopportraitinneralign="inherit" data-sstype="content" data-hasbackground="0" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="1" data-desktopportraitfontsize="100" data-plugin="rendered">
                                            <div class="n2-ss-section-main-content n2-ss-layer-content n2-ow" style="padding:8.75em 0.625em 0.625em 0.625em ;" data-verticalalign="center">
                                                <div class="n2-ss-layer n2-ow" style="margin:0em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0MzVcdTA0M2NcdTA0M2RcdTA0MzVcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDMyXHUwNDM1XHUwNDQwXHUwNDQ1XHUwNDQzIiwib3BhY2l0eSI6MCwieSI6NDAwfV19" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="50" data-plugin="rendered">
                                                    <div id="n2-ss-4item1" class="n2-font-be0a516f76efd05e36733289aaf2a6de-hover   n2-ow" style="display:block;">Welcome to Gamesplay</div>
                                                </div>
                                                <div class="n2-ss-layer n2-ow" style="margin:0em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0MzVcdTA0M2NcdTA0M2RcdTA0MzVcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDNiXHUwNDM1XHUwNDMyXHUwNDMwIiwiZGVsYXkiOjAuNSwib3BhY2l0eSI6MCwieCI6NDAwfV19" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="50" data-plugin="rendered">
                                                    <div id="n2-ss-4item2" class="n2-font-e5e826a3ba83ea69731d81df1c0fa84d-hover n2-style-01ddb7ca1f625e69d1a2381951aa5192-heading   n2-ow" style="display:block;">Online gaming site</div>
                                                </div>
                                                <div class="n2-ss-layer n2-ow" style="margin:2.5em 0em 0em 0em ;max-width: 955px;overflow:visible;" data-pm="normal" data-desktopportraitmargin="40|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="1" data-desktopportraitmaxwidth="955" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJCbHVyIiwiZGVsYXkiOjAuOCwib3BhY2l0eSI6MCwibjJibHVyIjoxMH1dfQ==" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="90" data-plugin="rendered">
                                                    <div class="n2-ow n2-ow-all n2-ss-desktop n2-ss-mobile n2-ss-tablet">
                                                        <p class="n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph   n2-ow">Pork chop pastrami meatball, picanha salami capicola drumstick tri-tip
                                                            flank short loin strip steak prosciutto
                                                            <br /> leberkas jowl fatback. Alcatra kielbasa sausage, turkey short
                                                            ribs shank bresaola.</p>
                                                    </div>
                                                </div>
                                                <div class="n2-ss-layer n2-ow" style="margin:3.125em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="50|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0NDNcdTA0NDVcdTA0MzBcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDNkXHUwNDM4XHUwNDM3XHUwNDQzIiwiZGVsYXkiOjEsIm9wYWNpdHkiOjAsInkiOi00MDB9XX0=" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="100" data-plugin="rendered">
                                                    <div class="n2-ss-button-container n2-ow n2-font-06be61400c1a4b339e67534a8a262348-link  n2-ss-nowrap">
                                                        <a class="n2-style-588404275f372121297e39cfe0b03e24-heading  n2-ow " onclick="return false;" href="#">
                                                            <div>
                                                                <div>More about us</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-slide-duration="0" data-id="16" style="" class="n2-ss-slide n2-ss-canvas n2-ow  n2-ss-slide-16">
                                    <div class="n2-ss-slide-background n2-ow" data-mode="fill">
                                        <img data-hash="df538617dc01fb19a0bb4e642cc11f2d" data-desktop="./assets/plugins/slider/images/slide-2.jpg" data-blur="0" data-opacity="100" data-x="50" data-y="50" src="./assets/plugins/slider/images/slide-2.jpg" alt="" />
                                    </div>
                                    <div class="n2-ss-layers-container n2-ow" data-csstextalign="center" style="">
                                        <div class="n2-ss-layer n2-ow" style="overflow:visible;" data-csstextalign="inherit" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-pm="content" data-desktopportraitpadding="140|*|10|*|10|*|10|*|px+" data-desktopportraitinneralign="inherit" data-sstype="content" data-hasbackground="0" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="1" data-desktopportraitfontsize="100" data-plugin="rendered">
                                            <div class="n2-ss-section-main-content n2-ss-layer-content n2-ow" style="padding:8.75em 0.625em 0.625em 0.625em ;" data-verticalalign="center">
                                                <div class="n2-ss-layer n2-ow" style="margin:0em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0MzVcdTA0M2NcdTA0M2RcdTA0MzVcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDMyXHUwNDM1XHUwNDQwXHUwNDQ1XHUwNDQzIiwib3BhY2l0eSI6MCwieSI6NDAwfV19" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="50" data-plugin="rendered">
                                                    <div id="n2-ss-4item5" class="n2-font-be0a516f76efd05e36733289aaf2a6de-hover   n2-ow" style="display:block;">A selection of the best</div>
                                                </div>
                                                <div class="n2-ss-layer n2-ow" style="margin:0em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0MzVcdTA0M2NcdTA0M2RcdTA0MzVcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDNiXHUwNDM1XHUwNDMyXHUwNDMwIiwiZGVsYXkiOjAuNSwib3BhY2l0eSI6MCwieCI6NDAwfV19" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="50" data-plugin="rendered">
                                                    <div id="n2-ss-4item6" class="n2-font-e5e826a3ba83ea69731d81df1c0fa84d-hover n2-style-01ddb7ca1f625e69d1a2381951aa5192-heading   n2-ow" style="display:block;">Games just for you</div>
                                                </div>
                                                <div class="n2-ss-layer n2-ow" style="margin:2.5em 0em 0em 0em ;max-width: 955px;overflow:visible;" data-pm="normal" data-desktopportraitmargin="40|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="1" data-desktopportraitmaxwidth="955" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJCbHVyIiwiZGVsYXkiOjAuOCwib3BhY2l0eSI6MCwibjJibHVyIjoxMH1dfQ==" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="90" data-plugin="rendered">
                                                    <div class="n2-ow n2-ow-all n2-ss-desktop n2-ss-mobile n2-ss-tablet">
                                                        <p class="n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph   n2-ow">Rump biltong buffalo kielbasa bresaola strip steak frankfurter bacon
                                                            tenderloin brisket picanha chuck meatball.
                                                            <br /> Alcatra chuck doner capicola brisket shankle leberkas tongue
                                                            meatball.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="n2-ss-layer n2-ow" style="margin:3.125em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="50|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0NDNcdTA0NDVcdTA0MzBcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDNkXHUwNDM4XHUwNDM3XHUwNDQzIiwiZGVsYXkiOjEsIm9wYWNpdHkiOjAsInkiOi00MDB9XX0=" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="100" data-plugin="rendered">
                                                    <div class="n2-ss-button-container n2-ow n2-font-06be61400c1a4b339e67534a8a262348-link  n2-ss-nowrap">
                                                        <a class="n2-style-588404275f372121297e39cfe0b03e24-heading  n2-ow " onclick="return false;" href="#">
                                                            <div>
                                                                <div>Our Gallery</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div data-slide-duration="0" data-id="17" style="" class="n2-ss-slide n2-ss-canvas n2-ow  n2-ss-slide-17">
                                    <div class="n2-ss-slide-background n2-ow" data-mode="fill">
                                        <img data-hash="daeb09696afe190d4a842f033c14d69b" data-desktop="./assets/plugins/slider/images/slide-3.jpg" data-blur="0" data-opacity="100" data-x="50" data-y="50" src="./assets/plugins/slider/images/slide-3.jpg" alt="" />
                                    </div>
                                    <div class="n2-ss-layers-container n2-ow" data-csstextalign="center" style="">
                                        <div class="n2-ss-layer n2-ow" style="overflow:visible;" data-csstextalign="inherit" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-pm="content" data-desktopportraitpadding="140|*|10|*|10|*|10|*|px+" data-desktopportraitinneralign="inherit" data-sstype="content" data-hasbackground="0" data-rotation="0" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="1" data-desktopportraitfontsize="100" data-plugin="rendered">
                                            <div class="n2-ss-section-main-content n2-ss-layer-content n2-ow" style="padding:8.75em 0.625em 0.625em 0.625em ;" data-verticalalign="center">
                                                <div class="n2-ss-layer n2-ow" style="margin:0em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0MzVcdTA0M2NcdTA0M2RcdTA0MzVcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDMyXHUwNDM1XHUwNDQwXHUwNDQ1XHUwNDQzIiwib3BhY2l0eSI6MCwieSI6NDAwfV19" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="50" data-plugin="rendered">
                                                    <div id="n2-ss-4item9" class="n2-font-be0a516f76efd05e36733289aaf2a6de-hover   n2-ow" style="display:block;">All new games are</div>
                                                </div>
                                                <div class="n2-ss-layer n2-ow" style="margin:0em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="0|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0MzVcdTA0M2NcdTA0M2RcdTA0MzVcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDNiXHUwNDM1XHUwNDMyXHUwNDMwIiwiZGVsYXkiOjAuNSwib3BhY2l0eSI6MCwieCI6NDAwfV19" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="50" data-plugin="rendered">
                                                    <div id="n2-ss-4item10" class="n2-font-e5e826a3ba83ea69731d81df1c0fa84d-hover n2-style-01ddb7ca1f625e69d1a2381951aa5192-heading   n2-ow" style="display:block;">Only in Gamesplay</div>
                                                </div>
                                                <div class="n2-ss-layer n2-ow" style="margin:2.5em 0em 0em 0em ;max-width: 955px;overflow:visible;" data-pm="normal" data-desktopportraitmargin="40|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="1" data-desktopportraitmaxwidth="955" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJCbHVyIiwiZGVsYXkiOjAuOCwib3BhY2l0eSI6MCwibjJibHVyIjoxMH1dfQ==" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="90" data-plugin="rendered">
                                                    <div class="n2-ow n2-ow-all n2-ss-desktop n2-ss-mobile n2-ss-tablet">
                                                        <p class="n2-font-7753338b51c1a1442e4b2825494fb15e-paragraph   n2-ow">Spare ribs venison swine tenderloin flank, ribeye pastrami jowl kielbasa
                                                            ham tongue meatloaf.
                                                            <br /> Pork belly drumstick alcatra leberkas, venison picanha pork.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="n2-ss-layer n2-ow" style="margin:3.125em 0em 0em 0em ;overflow:visible;" data-pm="normal" data-desktopportraitmargin="50|*|0|*|0|*|0|*|px+" data-desktopportraitheight="0" data-has-maxwidth="0" data-desktopportraitmaxwidth="0" data-cssselfalign="inherit" data-desktopportraitselfalign="inherit" data-sstype="layer" data-rotation="0" data-animations="eyJzcGVjaWFsWmVybyI6MCwiaW4iOlt7Im5hbWUiOiJcdTA0MTdcdTA0MzBcdTA0NDJcdTA0NDNcdTA0NDVcdTA0MzBcdTA0M2RcdTA0MzhcdTA0MzUgXHUwNDQxXHUwNDNkXHUwNDM4XHUwNDM3XHUwNDQzIiwiZGVsYXkiOjEsIm9wYWNpdHkiOjAsInkiOi00MDB9XX0=" data-desktopportrait="1" data-desktoplandscape="1" data-tabletportrait="1" data-tabletlandscape="1" data-mobileportrait="1" data-mobilelandscape="1" data-adaptivefont="0" data-desktopportraitfontsize="100" data-tabletportraitfontsize="80" data-mobileportraitfontsize="100" data-plugin="rendered">
                                                    <div class="n2-ss-button-container n2-ow n2-font-06be61400c1a4b339e67534a8a262348-link  n2-ss-nowrap">
                                                        <a class="n2-style-588404275f372121297e39cfe0b03e24-heading  n2-ow " onclick="return false;" href="#">
                                                            <div>
                                                                <div>Upcoming games</div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-ssleft="0+100" data-sstop="height/2-bulletheight/2" data-offset="100" class="n2-ss-widget n2-ss-widget-display-desktop n2-ss-widget-display-tablet n2-ss-widget-display-mobile  n2-flex n2-ss-control-bullet n2-ss-control-bullet-vertical" style="position: absolute;">
                            <div class="n2-style-3e702635329eba6b6b98a2cfe62c4664-simple  nextend-bullet-bar n2-ow n2-bar-justify-content-center">
                                <div class="n2-ow n2-style-2f5b33e7e6c0fd4c646594fe712ed299-dot n2-font-7b5c9760d048f32382e5cebedacdf830-dot " tabindex="0">01</div>
                                <div class="n2-ow n2-style-2f5b33e7e6c0fd4c646594fe712ed299-dot n2-font-7b5c9760d048f32382e5cebedacdf830-dot " tabindex="0">02</div>
                                <div class="n2-ow n2-style-2f5b33e7e6c0fd4c646594fe712ed299-dot n2-font-7b5c9760d048f32382e5cebedacdf830-dot " tabindex="0">03</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="n2-clear"></div>
                <div id="n2-ss-4-spinner" style="display: none;">
                    <div>
                        <div class="n2-ss-spinner-simple-white-container">
                            <div class="n2-ss-spinner-simple-white"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            N2R(["nextend-frontend", "smartslider-frontend", "nextend-gsap", "nextend-webfontloader",
                "smartslider-simple-type-frontend"
            ], function() {
                new N2Classes.SmartSliderSimple('#n2-ss-4', {
                    "admin": false,
                    "translate3d": 1,
                    "callbacks": "",
                    "background.video.mobile": 1,
                    "randomize": {
                        "randomize": 0,
                        "randomizeFirst": 0
                    },
                    "align": "normal",
                    "isDelayed": 0,
                    "load": {
                        "fade": 1,
                        "scroll": 0
                    },
                    "playWhenVisible": 1,
                    "playWhenVisibleAt": 0.5,
                    "responsive": {
                        "desktop": 1,
                        "tablet": 1,
                        "mobile": 1,
                        "onResizeEnabled": true,
                        "type": "fullpage",
                        "downscale": 1,
                        "upscale": 1,
                        "minimumHeight": -1,
                        "maximumHeight": -1,
                        "maximumSlideWidth": 3000,
                        "maximumSlideWidthLandscape": 3000,
                        "maximumSlideWidthTablet": 3000,
                        "maximumSlideWidthTabletLandscape": 3000,
                        "maximumSlideWidthMobile": 3000,
                        "maximumSlideWidthMobileLandscape": 3000,
                        "maximumSlideWidthConstrainHeight": 0,
                        "forceFull": 1,
                        "forceFullOverflowX": "body",
                        "forceFullHorizontalSelector": "body",
                        "constrainRatio": 1,
                        "verticalOffsetSelectors": "#wpadminbar",
                        "decreaseSliderHeight": 0,
                        "focusUser": 0,
                        "focusAutoplay": 0,
                        "deviceModes": {
                            "desktopPortrait": 1,
                            "desktopLandscape": 0,
                            "tabletPortrait": 1,
                            "tabletLandscape": 0,
                            "mobilePortrait": 1,
                            "mobileLandscape": 0
                        },
                        "normalizedDeviceModes": {
                            "unknownUnknown": ["unknown", "Unknown"],
                            "desktopPortrait": ["desktop", "Portrait"],
                            "desktopLandscape": ["desktop", "Portrait"],
                            "tabletPortrait": ["tablet", "Portrait"],
                            "tabletLandscape": ["tablet", "Portrait"],
                            "mobilePortrait": ["mobile", "Portrait"],
                            "mobileLandscape": ["mobile", "Portrait"]
                        },
                        "verticalRatioModifiers": {
                            "unknownUnknown": 1,
                            "desktopPortrait": 1,
                            "desktopLandscape": 1,
                            "tabletPortrait": 1,
                            "tabletLandscape": 1,
                            "mobilePortrait": 1,
                            "mobileLandscape": 1
                        },
                        "minimumFontSizes": {
                            "desktopPortrait": 1,
                            "desktopLandscape": 1,
                            "tabletPortrait": 1,
                            "tabletLandscape": 1,
                            "mobilePortrait": 1,
                            "mobileLandscape": 1
                        },
                        "ratioToDevice": {
                            "Portrait": {
                                "tablet": 0.7,
                                "mobile": 0.5
                            },
                            "Landscape": {
                                "tablet": 0,
                                "mobile": 0
                            }
                        },
                        "sliderWidthToDevice": {
                            "desktopPortrait": 1200,
                            "desktopLandscape": 1200,
                            "tabletPortrait": 840,
                            "tabletLandscape": 0,
                            "mobilePortrait": 600,
                            "mobileLandscape": 0
                        },
                        "basedOn": "combined",
                        "orientationMode": "width_and_height",
                        "scrollFix": 0,
                        "overflowHiddenPage": 0,
                        "desktopPortraitScreenWidth": 1200,
                        "tabletPortraitScreenWidth": 800,
                        "mobilePortraitScreenWidth": 440,
                        "tabletLandscapeScreenWidth": 800,
                        "mobileLandscapeScreenWidth": 440
                    },
                    "controls": {
                        "scroll": 0,
                        "drag": 1,
                        "touch": "horizontal",
                        "keyboard": 1,
                        "tilt": 0
                    },
                    "lazyLoad": 0,
                    "lazyLoadNeighbor": 0,
                    "blockrightclick": 0,
                    "maintainSession": 0,
                    "autoplay": {
                        "enabled": 1,
                        "start": 1,
                        "duration": 8000,
                        "autoplayToSlide": -1,
                        "autoplayToSlideIndex": -1,
                        "allowReStart": 0,
                        "pause": {
                            "click": 1,
                            "mouse": "0",
                            "mediaStarted": 1
                        },
                        "resume": {
                            "click": 0,
                            "mouse": "0",
                            "mediaEnded": 1,
                            "slidechanged": 0
                        }
                    },
                    "perspective": 1000,
                    "layerMode": {
                        "playOnce": 0,
                        "playFirstLayer": 1,
                        "mode": "skippable",
                        "inAnimation": "mainInEnd"
                    },
                    "parallax": {
                        "enabled": 1,
                        "mobile": 0,
                        "is3D": 0,
                        "animate": 1,
                        "horizontal": "mouse",
                        "vertical": "mouse",
                        "origin": "slider",
                        "scrollmove": "both"
                    },
                    "background.parallax.tablet": 0,
                    "background.parallax.mobile": 0,
                    "postBackgroundAnimations": 0,
                    "initCallbacks": [
                        "N2D(\"SmartSliderWidgetBulletTransition\",function(t,i){function e(i,e){this.slider=i,this.slider.started(t.proxy(this.start,this,e))}return e.prototype.start=function(i){if(this.slider.sliderElement.data(\"bullet\"))return!1;this.slider.sliderElement.data(\"bullet\",this),this.axis=\"horizontal\",this.offset=0,this.parameters=i,this.bar=this.slider.sliderElement.find(\".nextend-bullet-bar\");var e=\"universalclick\";if(\"mouseenter\"==i.action&&(e=\"mouseenter\"),this.originalDots=this.dots=this.bar.find(\"div\").on(e,t.proxy(this.onDotClick,this)),this.slider.isShuffled){for(var s=[],o=[],a=0;this.slider.realSlides.length>a;a++){var r=this.slider.realSlides[a];s.push(this.dots.get(r.originalIndex)),o.push(this.parameters.thumbnails[r.originalIndex]),i.numeric&&this.dots.eq(r.originalIndex).html(a+1)}this.originalDots=this.dots=t(s).appendTo(this.dots.parent()),this.parameters.thumbnails=o}if(this.slider.sliderElement.on({slideCountChanged:t.proxy(this.onSlideCountChanged,this),sliderSwitchTo:t.proxy(this.onSlideSwitch,this)}),this.slider.firstSlideReady.done(t.proxy(this.onFirstSlideSet,this)),0==i.overlay){var n=!1;switch(i.area){case 1:n=\"Top\";break;case 12:n=\"Bottom\";break;case 5:n=\"Left\",this.axis=\"vertical\";break;case 8:n=\"Right\",this.axis=\"vertical\"}n&&(this.offset=parseFloat(this.bar.data(\"offset\")),this.slider.responsive.addStaticMargin(n,this))}this.initThumbnails()},e.prototype.onFirstSlideSet=function(t){this.dots.eq(t.index).addClass(\"n2-active\")},e.prototype.onDotClick=function(i){this.slider.directionalChangeToReal(this.originalDots.index(i.currentTarget)),t(i.target).blur()},e.prototype.onSlideSwitch=function(t,i){this.dots.filter(\".n2-active\").removeClass(\"n2-active\"),this.dots.eq(i).addClass(\"n2-active\")},e.prototype.isVisible=function(){return this.bar.is(\":visible\")},e.prototype.getSize=function(){return\"horizontal\"==this.axis?this.bar.height()+this.offset:this.bar.width()+this.offset},e.prototype.initThumbnails=function(){this.parameters.thumbnails.length>0&&this.dots.each(t.proxy(function(i,e){\"\"!=this.parameters.thumbnails[i]&&t(e).on({universalenter:t.proxy(this.showThumbnail,this,i)},{leaveOnSecond:!0})},this))},e.prototype.showThumbnail=function(i,e){var s=this.getThumbnail(i);NextendTween.to(s,.3,{opacity:1}).play(),this.originalDots.eq(i).on(\"universalleave.thumbnailleave\",t.proxy(this.hideThumbnail,this,i,s))},e.prototype.hideThumbnail=function(t,i,e){e.stopPropagation(),this.originalDots.eq(t).off(\"universalleave.thumbnailleave\"),NextendTween.to(i,.3,{opacity:0,onComplete:function(){i.remove()}}).play()},e.prototype.getThumbnail=function(i){var e=this.originalDots.eq(i),s=this.slider.sliderElement.offset(),o=e.offset(),a=e.outerWidth(),r=e.outerHeight(),n=t(\"<div\/>\").append(t(\"<div\/>\").css({width:this.parameters.thumbnailWidth,height:this.parameters.thumbnailHeight,backgroundImage:'url(\"'+this.parameters.thumbnails[i]+'\")'}).addClass(\"n2-ss-bullet-thumbnail\")).addClass(this.parameters.thumbnailStyle).addClass(\"n2-ss-bullet-thumbnail-container\").appendTo(this.slider.sliderElement);switch(this.parameters.thumbnailPosition){case\"right\":n.css({left:o.left-s.left+a,top:o.top-s.top+r\/2-n.outerHeight(!0)\/2});break;case\"left\":n.css({left:o.left-s.left-n.outerWidth(!0),top:o.top-s.top+r\/2-n.outerHeight(!0)\/2});break;case\"top\":n.css({left:o.left-s.left+a\/2-n.outerWidth(!0)\/2,top:o.top-s.top-n.outerHeight(!0)});break;case\"bottom\":n.css({left:o.left-s.left+a\/2-n.outerWidth(!0)\/2,top:o.top-s.top+r})}return e.data(\"thumbnail\",n),n},e.prototype.onSlideCountChanged=function(i,e,s){this.dots=t();for(var o=0;this.originalDots.length>o;o++)o%s==0?this.dots=this.dots.add(this.originalDots.eq(o).css(\"display\",\"\")):this.originalDots.eq(o).css(\"display\",\"none\");this.parameters.numeric&&this.dots.each(function(t,i){i.innerHTML=t+1})},e});",
                        "new N2Classes.SmartSliderWidgetBulletTransition(this, {\"overlay\":true,\"area\":6,\"thumbnails\":[],\"action\":\"click\",\"numeric\":1});"
                    ],
                    "allowBGImageAttachmentFixed": false,
                    "bgAnimationsColor": "RGBA(51,51,51,1)",
                    "bgAnimations": 0,
                    "mainanimation": {
                        "type": "horizontal",
                        "duration": 800,
                        "delay": 0,
                        "ease": "easeOutQuad",
                        "parallax": 0,
                        "shiftedBackgroundAnimation": "auto"
                    },
                    "carousel": 1,
                    "dynamicHeight": 0
                });
            });
        </script>
        <div id="n2-ss-4-placeholder" style="position: relative;z-index:2;color:RGBA(0,0,0,0);max-height:3000px;">
            <img style="width: 100%; max-width:3000px; display: block;" class="n2-ow" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMCIgd2lkdGg9IjEyMDAiIGhlaWdodD0iNTAwIiA+PC9zdmc+" alt="Slider" />
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
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-sx-12">
                        <a href="/" class="item-wrap">
                            <div class="image">
                                <img src="./assets/images/blog-img-1.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="item-info equal-height">
                                <div class="item-header table fsize-14 fweight-700 uppercase">
                                    <div class="table-cell platform">xbox</div>
                                    <div class="table-cell color-2 text-right">mar 14, 2018</div>
                                </div>
                                <div class="item-title mt20" data-trim="40">Cow biltong pork belly kielbasa shankle</div>
                                <div class="item-text mt25 lheight-26" data-trim="130">
                                    Turducken cupim hamburger beef ribs picanha, drumstick buffalo tri-tip cow. Turducken prosciutto shank pork chop.
                                </div>
                            </div>
                            <div class="author-comment table">
                                <div class="table-cell valign-middle">
                                    <i class="fa fa-user color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5">by Admin</span>
                                </div>
                                <div class="table-cell valign-middle text-right">
                                    <i class="fa fa-comment color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5">126</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-sx-12">
                        <a href="/" class="item-wrap">
                            <div class="image">
                                <img src="./assets/images/blog-img-2.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="item-info equal-height">
                                <div class="item-header table fsize-14 fweight-700 uppercase">
                                    <div class="table-cell platform">ps 3</div>
                                    <div class="table-cell color-2 text-right">mar 18, 2018</div>
                                </div>
                                <div class="item-title mt20" data-trim="40">Cow short ribs beef strip steak jowl</div>
                                <div class="item-text mt25 lheight-26" data-trim="130">
                                    Capicola beef ribs pastrami biltong pork chop corned beef alcatra tail landjaeger. Spare ribs t-bone buffalo capicola, pork
                                    belly.
                                </div>
                            </div>
                            <div class="author-comment table">
                                <div class="table-cell valign-middle">
                                    <i class="fa fa-user color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5">by Admin</span>
                                </div>
                                <div class="table-cell valign-middle text-right">
                                    <i class="fa fa-comment color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5">452</span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="item col-lg-4 col-md-4 col-sm-12 col-sx-12">
                        <a href="/" class="item-wrap">
                            <div class="image">
                                <img src="./assets/images/blog-img-3.jpg" alt="" class="img-responsive">
                            </div>
                            <div class="item-info equal-height">
                                <div class="item-header table fsize-14 fweight-700 uppercase">
                                    <div class="table-cell platform">ps vita</div>
                                    <div class="table-cell color-2 text-right">mar 23, 2018</div>
                                </div>
                                <div class="item-title mt20" data-trim="40">Boudin shankle pork belly turducken spare rib</div>
                                <div class="item-text mt25 lheight-26" data-trim="130">
                                    Capicola chicken rump biltong boudin corned beef prosciutto short loin pork chop fatback flank beef porchetta tenderloin.
                                </div>
                            </div>
                            <div class="author-comment table">
                                <div class="table-cell valign-middle">
                                    <i class="fa fa-user color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5">by Admin</span>
                                </div>
                                <div class="table-cell valign-middle text-right">
                                    <i class="fa fa-comment color-1 fsize-14" aria-hidden="true"></i>
                                    <span class="color-2 ml5">364</span>
                                </div>
                            </div>
                        </a>
                    </div>
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
                                            <a href="#" class="item-btn inline-block valign-middle">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="item-btn inline-block valign-middle">
                                                <i class="fa fa-thumb-tack" aria-hidden="true"></i>
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
                                            <a href="#" class="item-btn inline-block valign-middle">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="item-btn inline-block valign-middle">
                                                <i class="fa fa-thumb-tack" aria-hidden="true"></i>
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
                                            <a href="#" class="item-btn inline-block valign-middle">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="item-btn inline-block valign-middle">
                                                <i class="fa fa-thumb-tack" aria-hidden="true"></i>
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
                                            <a href="#" class="item-btn inline-block valign-middle">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                            <a href="#" class="item-btn inline-block valign-middle">
                                                <i class="fa fa-thumb-tack" aria-hidden="true"></i>
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
                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/NQAYb9ok4s0?modestbranding=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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