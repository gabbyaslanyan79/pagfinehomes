<?php
require_once dirname(__FILE__).'/../app/pages/Home.php';
require_once dirname(__FILE__).'/../app/pages/Contact.php';
require_once dirname(__FILE__).'/../app/pages/About.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>PAG Fine Homes Homepage</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="/pagstyles.css">

        <script src="/pagScript.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container-fluid">                

            <!--Main navigation start -->                
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="/"><img  id="pag-logo" src="pag_logo.jpg" alt="Pag Fine Homes logo"></a>
                        <a href="/?page=contact"><img class="media-contact" src="media-contact.png" alt="Contact Icon"></a>
                    </div>
                    <ul class="nav navbar-nav pag-nav-text">
                        <li><a href="/">Home</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="/work.html">OUR WORK<span class="toggle-sign">></span></a>

                            <ul class="dropdown-menu">
                                <li><a href="/work.html/#completed">COMPLETED PROJECTS</a></li>
                                <li><a href="/work.html/#current">CURRENT PROJECTS</a></li>
                                <li><a href="/work.html/#future">FUTURE PLANS</a></li>
                            </ul>
                        </li>    
                        <li><a href="/?page=about">ABOUT US</a></li>
                        <li><a href="/?page=contact">CONTACT US</a></li>
                    </ul>
                </div>
            </nav>
            <!--Main navigation end -->   
            <?php
            $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
            
            switch ($page) {
                case "home":
                    pageHome();
                    break;
                case "contact":
                    pageContact();
                    break;
                case "about":
                    pageAbout();
                    break;
                default:
                    pageNotFound();
                    break;
            }
            ?>
            
            <!--Footer start-->
            <div class="pag-footer container-fluid">
                <ul class="pag-partners">
                    <li><img src="/img/partners1.png"></li>
                    <li><img src="/img/partners2.png"></li>
                    <li><img src="/img/partners3.png"></li>
                    <li><img src="/img/partners4.png"></li>
                </ul>
                <ul class="footer-nav">
                    <li><a >Home</a></li>
                    <li><a>Our Work</a></li>
                    <li><a>About Us</a></li>
                    <li><a>Contact Us</a></li>        
                </ul>
                <span>© 2018 PAG FINE HOMES LLC. ALL RIGHTS RESERVED</span>

            </div>
            <!--Footer end-->
        </div>
    </body>
</html>
