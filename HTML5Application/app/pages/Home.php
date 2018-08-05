<?php
function pageHome(){
?>
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
            <img src="/img/carousel/house1.jpg" alt="carousel-image1">
        </div>

        <div class="item">
            <img src="/img/carousel/house2.jpg" alt="carousel-image2">
        </div>

        <div class="item">
            <img src="/img/carousel/house3.jpg" alt="carousel-image3">
        </div>

        <div class="item">
            <img src="/img/carousel/house4.jpg" alt="carousel-image4">
        </div>  

        <div class="item">
            <img src="/img/carousel/house5.jpg" alt="carousel-image5">
        </div>  

        <div class="item">
            <img src="/img/carousel/house6.jpg" alt="carousel-image6">
        </div>

        <div class="item">
            <img src="/img/carousel/house7.jpg" alt="carousel-image7">
        </div>

        <div class="item">
            <img src="/img/carousel/house8.jpg" alt="carousel-image8">
        </div>

        <div class="item">
            <img src="/img/carousel/house9.jpg" alt="carousel-image9">
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
            <a href="/?page=works">
                <img src="/img/content/icon-work.png" class="icon-pag" alt="Our Work Icon">
                <h3 class="pag-h3">Our Work</h3>
                <p>Sit back, relax and take a closer look to the work we have done and see our current projects...
                </p>
                <button type="button" class="btn pag-btn">Read More</button>
            </a>
        </div>

        <div class="col-sm-4 pag-col-style" >
            <a href="http://tours.tourfactory.com/tours/tour.asp?t=1538755&guid=1b975b51-875a-40db-85cb-b854730b48ca&r=http%3A%2F%2Ffx%2Etourfactory%2Ecom%2FTour%2FDownloadPhotos%2F1538755"  target="_blank">
                <img src="/img/content/icon-tour.png" class="icon-pag" alt="Virtual Tour Icon" >
                <h3 class="pag-h3">Virtual Tour</h3>
                <p>
                    Take a virtual tour on one of our construction gems.
                </p>
                <button type="button" class="btn pag-btn">Take Tour</button>
            </a>
        </div>

        <div class="col-sm-4 pag-col-style" >
            <a href="/?page=about">
                <img src="/img/content/icon-mission.png" class="icon-pag" alt="Our Mission Icon">
                <h3 class="pag-h3">Our Mission</h3>
                <p>PAG Fine Homes is committed to building multi-generational, sustainable, estate size homes in King County, WA.          
                </p>           
                <button type="button" class="btn pag-btn">Read More</button>
            </a>
        </div>
    </div>    

</div>
<!--Columns end-->
<?php } ?>