<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/projectstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
    <title>Projects - Omorofan EMT Nig Ltd</title>
</head>
<body>
    <a id="back-to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <section class="container-fluid" id="nav-section">
        <nav class="navbar" id="nav-container">
            <a href="index.php" id="logo_link"><img src="img/Logo1.PNG" alt="logo" class="navbar-brand" id="nav-logo"></a>
            <input type="checkbox" id="check" class="checkbtn">
            <label for="check"><img src="img/bars.png" class="bars" width="30px" alt=""></label>
            <div id="nav-links">
                <ul>
                    <li class="top-links"><a href="index.php">HOME</a></li>
                    <li class="top-links"><a href="services.php">SERVICES</a></li>
                    <li class="top-links"><a href="team.php">TEAM</a></li>
                    <li class="top-links active-link"><a href="projects.php" class="active-page">PROJECTS</a></li>
                    <li class="top-links"><a href="about.php">ABOUT</a></li>
                    <li class="top-links"><a href="contact.php" class="contact-btn hidden-btn">CONTACT US</a></li>
                </ul>
            </div>
            <a href="contact.php" class="contact-btn hidden-btn2">CONTACT US</a>
        </nav>
    </section>
    <section class="container" id="banner-section">
        <div class="jumbotron" id="intro-header">
            <h2 id="banner-heading">Projects</h2>
        </div>
    </section>
    <section class="container-fluid main-content">
        <div class="main-content-container">
            <div class="nav-block">
                <ul>
                    <li class="nav-block-header">
                        <i class="fa fa-bars" aria-hidden="true"></i><a href="projects.php"> Projects</a>
                    </li>
                    <li class="sub-links">
                        <div class="bullet"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        <div class="link"><a href="projects/field_operation_intervention.php"> Field Operation Intervention at Well Site</a></div>
                    </li>
                    <li class="sub-links">
                        <div class="bullet"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        <div class="link"><a href="projects/C-Arm_troubleshooting_and_repair.php"> C-Arm Troubleshooting and Repair</a></div>
                    </li>
                    <li class="sub-links">
                        <div class="bullet"><i class="fa fa-caret-right" aria-hidden="true"></i></div>
                        <div class="link"><a href="projects/DC_MOT_troubleshooting_and_repair.php"> D.C. M.O.T. Troubleshooting and Repair</a></div>
                    </li>
                </ul>
            </div>
            <div class="main-block">
                <div class="content">
                    <div class="content-header">
                        <h1><i class="fa fa-star" aria-hidden="true"></i> PROJECTS</h1>
                    </div>
                    <div id="collection-list-wrap">
                        <div class="row">
                            <a href="projects/field_operation_intervention.php" class="img-wrap">
                                <div class="news-preview-wrap pic1">
                                    <div class="whitescreen" id="whitescreen-four">
                                        <div class="slide-up" id="slide-up-four"><p>Field Operation Intervention at Well Site</p></div>
                                    </div>
                                </div>
                            </a>
                            <a href="projects/DC_MOT_troubleshooting_and_repair.php" class="img-wrap">
                                <div class="news-preview-wrap pic2">
                                    <div class="whitescreen" id="whitescreen-five">
                                        <div class="slide-up" id="slide-up-five"><p>DC M.O.T. Troubleshooting and Repair</p></div>
                                    </div>
                                </div>
                            </a>
                            <a href="projects/C-Arm_troubleshooting_and_repair.php" class="img-wrap">
                                <div class="news-preview-wrap pic3">
                                    <div class="whitescreen" id="whitescreen-six">
                                        <div class="slide-up" id="slide-up-six"><p>C-Arm Troubleshooting and Repair</p></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <?php include("cta_and_footer.php") ?>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $("#whitescreen-four").hover(function() {
    	$("#slide-up-four").toggleClass("Display-slide-up");
        });

        $("#whitescreen-five").hover(function() {
    	$("#slide-up-five").toggleClass("Display-slide-up");
        });

        $("#whitescreen-six").hover(function() {
    	$("#slide-up-six").toggleClass("Display-slide-up");
        });
        

        var btn = $('#back-to-top');

        $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
        });

        btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
        });

    </script>
</body>
</html>