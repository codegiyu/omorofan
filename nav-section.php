<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');
    </style>
    <title>Header - Omorofan EMT Nig Ltd</title>
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
                    <li class="top-links active-link"><a href="index.php" class="active-page">HOME</a></li>
                    <li class="top-links"><a href="services.php">SERVICES</a></li>
                    <li class="top-links"><a href="team.php">TEAM</a></li>
                    <li class="top-links"><a href="projects.php">PROJECTS</a></li>
                    <li class="top-links"><a href="about.php">ABOUT</a></li>
                    <li class="top-links"><a href="contact.php" class="contact-btn hidden-btn">CONTACT US</a></li>
                </ul>
            </div>
            <a href="contact.php" class="contact-btn hidden-btn2">CONTACT US</a>
        </nav>
    </section>
</body>
</html>