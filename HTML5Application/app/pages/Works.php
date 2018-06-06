<?php
require_once dirname(__FILE__).'/../providers/WorksectionProvider.php';

function pageWorks() {
    $workSectionProvider = new WorksectionProvider();
    $workSections = $workSectionProvider->getWorkSections();
    $sectionKey = !empty($_GET['section']) ? $_GET['section'] : null;
    if($sectionKey == null || !isset($workSections[$sectionKey])){
        $section = reset($workSections);
        $sectionKey = key($workSections);
    }
    else{
        $section = $workSections[$sectionKey];
    }
    
    $workKey = !empty($_GET['work']) ? $_GET['work'] : null;
    $works = $section->getWorks();
    if($workKey == null || !isset($works[$workKey])){
        $work = reset($works);
        $workKey = key($works);
    }
    else{
        $work = $works[$workKey];
    }    

    ?>
    <div class="row pag-work">
        <div class="col-sm-4">
            <ul id="left-menu">
                <?php
                    foreach ($workSections as $scKey => $wkSection) {
                ?>
                
                <li>
                    <a class="left-menu-section-header" data-toggle="collapse" data-target="#<?php echo $scKey?>"><?=$wkSection->getName()?><span class="toggle-sign">></span></a>

                    <ul id="<?php echo $scKey?>" class="<?php echo ($sectionKey == $scKey) ? "collapse in" : "collapse" ?>">
                        <?php
                            foreach ($wkSection->getWorks() as $wkKey => $wk) {
                        ?>
                        <li class="left-menu-item"><a <?php echo ($sectionKey == $scKey && $wkKey == $workKey) ? 'class="current" href="#"' : "href=\"?page=works&section=$scKey&work=$wkKey\"" ?>><?php echo $wk->getName()?></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </li>
                <?php
                    }
                ?>
            </ul>
        </div>
        <!--Big and small pictures start-->
        <div class="col-sm-8">
            <div class="big-container">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
                <span class="pag-work-heading">Cougar Mountain Bellevue</span>
                <ul class="div-tour">
                    <li><a class="div-tour" href="http://tours.tourfactory.com/tours/tour.asp?t=1538755&guid=1b975b51-875a-40db-85cb-b854730b48ca&r=http%3A%2F%2Ffx%2Etourfactory%2Ecom%2FTour%2FDownloadPhotos%2F1538755"  target="_blank">
                            <img src="icon-tour.png" alt="Virtual Tour Icon"></a>  
                    </li>
                    <li><span class="tour-text">Take the Tour</span></li>    
                </ul>
            </div>
            <div class="clear-float"></div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
            <div class="col-sm-6 pag-work-smlimg">
                <img  class="pag-work-bigimg" src="/img/content/002_Front.jpg">
            </div>
        </div>

        <!--Big and small pictures end-->
    </div>
<?php } ?>