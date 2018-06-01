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
                            <a href="/index.php"><img  id="pag-logo" src="pag_logo.jpg" alt="Pag Fine Homes logo"></a>
                            <a href="/contact.php"><img class="media-contact" src="media-contact.png" alt="Contact Icon"></a>
                        </div>
                        <ul class="nav navbar-nav pag-nav-text">
                            <li><a href="/index.php">Home</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="/work.html">OUR WORK<span class="toggle-sign">></span></a>
                                
                                <ul class="dropdown-menu">
                                    <li><a href="/work.html/#completed">COMPLETED PROJECTS</a></li>
                                    <li><a href="/work.html/#current">CURRENT PROJECTS</a></li>
                                    <li><a href="/work.html/#future">FUTURE PLANS</a></li>
                                </ul>
                            </li>    
                            <li><a href="/about.html">ABOUT US</a></li>
                            <li><a href="/contact.php">CONTACT US</a></li>
                        </ul>
                    </div>
                </nav>
            <!--Main navigation end -->              
            <!--Carousel start-->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                    <li data-target="#myCarousel" data-slide-to="6"></li>
                    <li data-target="#myCarousel" data-slide-to="7"></li>
                    <li data-target="#myCarousel" data-slide-to="8"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="/img/house1.jpg" alt="carousel-image1">
                    </div>

                    <div class="item">
                        <img src="/img/house2.jpg" alt="carousel-image2">
                    </div>

                    <div class="item">
                        <img src="/img/house3.jpg" alt="carousel-image3">
                    </div>

                    <div class="item">
                        <img src="/img/house4.jpg" alt="carousel-image4">
                    </div>  

                    <div class="item">
                        <img src="/img/house5.jpg" alt="carousel-image5">
                    </div>  

                    <div class="item">
                        <img src="/img/house6.jpg" alt="carousel-image6">
                    </div>

                    <div class="item">
                        <img src="/img/house7.jpg" alt="carousel-image7">
                    </div>

                    <div class="item">
                        <img src="/img/house8.jpg" alt="carousel-image8">
                    </div>

                    <div class="item">
                        <img src="/img/house9.jpg" alt="carousel-image9">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>           
            <!--Carousel end-->

<!--Columns start-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4 pag-col-style">
            <a href="work.html">
                <img src="icon-work.png" class="icon-pag" alt="Our Work Icon">
                <h3 class="pag-h3">Our Work</h3>
                <p>Sit back, relax and take a closer look to the work we have done and see our current projects and our future big plans...
                </p>
                <button type="button" class="btn pag-btn">Read More</button>
            </a>
        </div>

        <div class="col-sm-4 pag-col-style" >
            <a href="http://tours.tourfactory.com/tours/tour.asp?t=1538755&guid=1b975b51-875a-40db-85cb-b854730b48ca&r=http%3A%2F%2Ffx%2Etourfactory%2Ecom%2FTour%2FDownloadPhotos%2F1538755"  target="_blank">
                <img src="icon-tour.png" class="icon-pag" alt="Virtual Tour Icon" >
                <h3 class="pag-h3">Virtual Tour</h3>
                <p>
                    Take a virtual tour on one of our construction gems.
                </p>
                <button type="button" class="btn pag-btn">Take Tour</button>
            </a>
        </div>

        <div class="col-sm-4 pag-col-style" >
            <a href="about.html">
                <img src="icon-mission.png" class="icon-pag" alt="Our Mission Icon">
                <h3 class="pag-h3">Our Mission</h3>
                <p>PAG Construction is committed to building multi-generational, sustainable, estate size homes in King County, WA.          
                </p>           
                <button type="button" class="btn pag-btn">Read More</button>
            </a>
        </div>
    </div>    
    
</div>
<!--Columns end-->

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
