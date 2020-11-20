<?php
require_once "PHPMailer/PHPMailer.php";
require_once "PHPMailer/Exception.php";
require_once "PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

$mailStatus = "";
$allowedType = [
    'image/png',
    'image/jpg',
    'image/jpeg',
    'application/pdf',
    'application/msword',
    'application/vnd.ms-excel',
    'application/vnd.openxmlformats-officedocument.wordprocessingml.document'

];
if ($_FILES['cv']) {
    if (in_array($_FILES['cv']['type'], $allowedType) !== false) {
        move_uploaded_file($_FILES["cv"]["tmp_name"], "files/" . $_FILES["cv"]["name"]);
    }
}

if (isset($_POST['name'])) {


    $fullName = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    $subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    $position = filter_input(INPUT_POST, 'position', FILTER_SANITIZE_SPECIAL_CHARS);
    $cv = $_FILES["cv"]["name"];
    $portfolio = filter_input(INPUT_POST, 'portfolio', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    $designation = filter_input(INPUT_POST, 'designation', FILTER_SANITIZE_SPECIAL_CHARS);

    $mail = new PHPMailer(true);
    if ($fullName && $email && $subject) {
        try {
            $mail->Host = "mail.naptechgames.com";
            $mail->SMTPAuth = true;
            $mail->Username = "career@naptechgames.com";
            $mail->Password = 'Nxoq[{s$iCe=';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 465;

            $mail->setFrom("{$email}");
            $mail->addAddress('career@naptechgames.com');
            $mail->Subject = "{$subject}";
            $mail->Body = "Apply for: {$deisgnation} as {$position}<br><br>Name: {$fullName}<br>Phone: {$phone}<br>Portfolio Link: {$portfolio}<br><br><br> {$message} This is a portfolio test";

            $mail->addAttachment("files/{$cv}");
            $mail->isHTML(true);
            $mail->send();
            $mailStatus = "success";
        } catch (Exception $e) {
            $mailStatus = "failed";
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Game Designer</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" type="image/x-icon">
    <meta name="google-site-verification" content="EZDlVIqlfMRuScRWZLG9H7Kg0YOHss863ROA0Mew0zc" />
    <!-- Google Fonts
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../assets/fonts/css/font-awesome.min.css" />
    <!-- Bootstrap-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/style.css" />
    <!-- Responsive Style -->
    <link rel="stylesheet" href="../assets/css/responsive.css" />
    <!-- Animate CSS -->
    <link rel="stylesheet" href="../assets/plugins/animate.css-master/animate.min.css">

    <!-- Datapicker -->
    <link href="../assets/plugins/jquery-date-range-picker-master/dist/daterangepicker.min.css" rel="stylesheet">
    <!-- Sliders -->
    <link rel="../" type="text/css" href="assets/plugins/slick-1.8.0/slick/slick.css" />
    <link rel="../stylesheet" type="text/css" href="assets/plugins/slick-1.8.0/slick/slick-theme.css" />


    <style>
        .sample p {
            font-size: 15px;
            color: black;
        }

        .circular {
            background-color: black;
        }

        .fun {
            background-image: url(../assets/images/circular/g3.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            height: 100%;
            position: relative;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <?php include_once "../inc/header.php"; ?>
    <!-- PAGE NAME START -->
    <section class="fun page-name parallax" data-paroller-factor="0.1" data-paroller-type="background" data-paroller-direction="vertical">
        <div class="container">
            <div class="row">
                <h1 class="page-title">

                </h1>
                <div class="breadcrumbs">
                    <a href="index.html"></a>
                    <a href="#"></a>
                    <span class="color-1"></span>
                </div>
            </div>
        </div>
    </section>
    <!-- PAGE NAME END -->
    <!-- SECTION START -->
    <section class="circular ptb90">
        <!----------------Need to changr the class name------------>
        <div class="container">

            <?php
            if ($mailStatus == "success") {
            ?>

                <p class="status" style="margin: 2rem 0rem;">You CV Hvae been successfully submitted. Please wait. We will contact you shortly</p>
            <?php
            } elseif ($mailStatus == "failed") {
            ?>
                <p class="status fail" style="margin: 2rem 0rem;">Failed to submit your CV. Please make sure your CV files format is PDF or Doc. </p>
            <?php
            }
            ?>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <p style="color: #68FE5F; font-size: 30px;"><strong>Job Title : Game Designer<br />
                        </strong></p>
                    <div class="status"></div>
                    <form class="submit-form-data ptb30 form-area" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <input type="text" id="name" class="general_input italic" placeholder="Full name" name="name" required>
                            </div>
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <input type="email" id="email" class="general_input italic" placeholder="Email address" name="email" required>
                            </div>
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <input type="text" id="phone" class="general_input italic" placeholder="Phone Number" name="phone">
                            </div>
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <input type="text" id="subject" class="general_input italic" placeholder="Subject" name="subject">
                            </div>
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <select id="position" class="general_input italic" name="position">
                                    <option value="apply-for">Apply For</option>
                                    <option value="job">Job</option>
                                    <option value="intern">Intern</option>
                                </select>
                            </div>
                            <div class="input-wrap get-in-touch col-md-6 col-sm-6">
                                <input type="file" id="cv" class="general_input italic hidden" name="cv" onchange="pressed()">

                                <label for="cv" class="upload-file" id="fileLabel"> <i class="fa fa-file" aria-hidden="true"></i> Upload Your CV</label>
                            </div>
                            <div class="input-wrap get-in-touch col-md-12 col-sm-12">
                                <input type="text" id="portfolio" class="general_input italic" placeholder="Your Portfolio Link" name="portfolio">
                            </div>
                            <div class="input-wrap get-in-touch col-md-12">
                                <textarea class="general_input italic" id="message" placeholder="Write Something About You" name="message"></textarea>
                            </div>
                            <input type="hidden" name="designation" value="Game Designer Job">
                        </div>
                        <input type="submit" class="btn-idea get-touch-btn gradient mt30 color-white color-white plr50 ptb19" value="Send your Idea" id="submit-apply-form">
                    </form>
                </div>
                <!-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="item platinum text-center" style="background-color: #111">
                        <div class="ptb30 fsize-24 fweight-700 font-agency uppercase color-white">
                            Job Summary
                        </div>
                        <div class="current-bl color-white pt25 pb20" style="background-color: white;">
                            <div class="font-agency fweight-700 lheight-30">
                                <div class="sample" style="text-align: justify;padding-left: 50px;color: #61ebf3;">
                                    <p>Published on: Jun 8, 2020</p>
                                    <p>Vacancy: Not specific</p>
                                    <p>Employment Status: Full-time</p>
                                    <p>Experience: At least 1 year(s)</p>
                                    <p>Gender: Only males are allowed to apply</p>
                                    <p>Age: Age at least 22 years</p>
                                    <p>Job Location: Mymensingh</p>
                                    <p>Application Deadline: Jul 8, 2020</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>


        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">

                    <p>&nbsp;</p>
                    <p><strong>Job Description:</strong></p>
                    <p class="text-gray">A video game designer turns the concept of a game into a playable product. Game designers typically work in a managerial role on a video game project, an initial proposal that addresses budget concerns, target demographics, project requirements, and deadlines. Attention to detail is essential, as are clear writing and communication skills and enthusiasm and knowledge about the video game industry.<br><br>
                        The designers are responsible for the games' storylines and plots, user interfaces, in-game objectives, maps, scenarios, the degree of difficulty, and character development. Game designers typically work in studios or office settings with other designers and programmers.
                        <br><br>
                        If you're a passionate gamer with the imagination, creativity, and skills to build virtual worlds, consider a career in game design.
                    </p>
                    <br>
         <!--           <p>&nbsp;</p>-->
                    <p><strong>Job Responsibilities:</strong></p>
                    <ul class="text-gray list">
                        <li>Developing gameplay ideas, plots and storylines, characters, maps, scenarios, and levels of difficulty, user interface (menus and controls) concepts, And Coming up with ways of winning and losing the game.</li>
                        <li>Consider, plan, and detail every element of a new game, including the setting, rules, story flow, props, vehicles, character interface, and modes of play.</li>
                        <li>Developing innovative and funny game features that improve customer engagement.</li>
                        <li>Generating game design documents to aid in the production process.</li>
                        <li>Providing feature documentation, prototypes, and diagrams.</li>
                        <li>Maintain design level documentation, including mechanics, guidelines, and mission outlines.</li>
                        <li>Utilizing the knowledge of customer preferences to improve the design concepts of the games.</li>
                        <li>Creating innovative games for entertainment or education purposes.</li>
                        <li>Conceptualizing and developing characters, rules, settings, and stories for new games.</li>
                        <li>Pitching new game ideas to executives and clients.</li>
                        <li>Create detailed specifications for new features, scalable game systems, and in-game rewards.</li>
                        <li>Ensure that game mechanics, systems, and economies meet product goals around engagement, retention, and monetization.</li>
                        <li>lead on the user experience (UX) design of the game, ensuring players have the best experience</li>
                        <li>Conduct periodic design reviews throughout the video game development timeline.</li>
                        <li>Work collaboratively with others, including game developers, artists, and programmers, to produce a prototype - a small-scale playable version of the game.</li>
                        <li>Closely monitor, analyze, and respond to gameplay data and user feedback on your designs through their entire lifecycle, from development to testing to live in-game.</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p><strong>Educational Requirements:</strong></p>
                    <ul class="text-gray  list">
                        <li>Bachelor’s degree in Computer Science/Game design or any other related field.</li>
                        <li>BA/BS degree in computer science or related fields; or an equivalent combination of education and experience</li>
                        <li>Diploma in Computer Science or any other related field</li>
                        <li>A college degree or certificate in game design or creative writing will help you get hired as a game designer.</li>
                        <li>Enthusiasm and knowledge of the industry.</li>
                        <li>A strong passion for playing and making video games.</li>
                    </ul>

                    <p>&nbsp;</p>
                    <p><strong>Experience Requirements:</strong></p>
                    <!--<ul" class="text-gray list">-->
                        <li>Fresher Can Apply.</li>
                        </ul>
                        <p>&nbsp;</p>
                        <p><strong>Weekend: </strong>Friday</p>
                        <p><strong>Working Hour: </strong>Flexible Work Hour (10:00 am - 7:00 pm & 12 pm - 9pm)</p>
                        <p><strong>Job Location: </strong>Remote (Till COVID situation is stabilized)</p>
                        <br>
                <!--        <p>&nbsp;</p>-->
                        <p><strong>The candidates who fulfill the above requirements may submit their application. Please do not apply unnecessarily if it does not match your profile. Send your CV with the expected salary to the email at the link below with the subject line "Application for the post of Game Designer".</strong></p>


                </div>

            </div>
        </div>
    </section>
    <!-- REGISTER SECTION END -->
    <?php include_once "../inc/footer.php"; ?>
    <!-- Scripts -->
    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/plugins/slick-1.8.0/slick/slick.min.js"></script>
    <script src="../assets/plugins/flex-menu/flexmenu.min.js"></script>
    <script src="../assets/plugins/jquery-match-height-master/dist/jquery.matchHeight.js"></script>
    <script src="../assets/plugins/muuri-master/muuri.js"></script>
    <script src="../assets/plugins/vide-0.5.1/dist/jquery.vide.min.js"></script>
    <script src="../assets/plugins/paroller.js-master/dist/jquery.paroller.min.js"></script>
    <script src="../assets/js/jquery.inview.min.js"></script>
    <script src="../assets/js/progressbar.min.js"></script>
    <script src="../assets/plugins/lightbox2-master/dist/js/lightbox.js"></script>
    <script src="../assets/js/moment.min.js"></script>
    <script src="../assets/plugins/jquery-date-range-picker-master/dist/jquery.daterangepicker.min.js"></script>
    <script src="../assets/plugins/wow-master/dist/wow.min.js"></script>
    <script src="../assets/js/script.js"></script>
</body>

</html>