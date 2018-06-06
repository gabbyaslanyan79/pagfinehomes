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
    
    $pictures = $work->getPictures();
    $fronPic = array_shift($pictures);

    ?>
    <div class="row pag-work">
        <div class="col-sm-4">
            <ul class="left-menu">
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
                <a href="<?php echo $fronPic->getFilePath()?>" data-toggle="lightbox" data-gallery="example-gallery">
                    <img  class="pag-work-bigimg" src="<?php echo $fronPic->getFilePath()?>">
                </a>
                <span class="pag-work-heading"><?php echo $work->getName()?></span>
                <ul class="div-tour">
                    <li><a class="div-tour" href="<?php echo $work->getTourLink()?>"  target="_blank">
                            <img src="/img/content/icon-tour.png" alt="Virtual Tour Icon"></a>  
                    </li>
                    <li><span class="tour-text">Take the Tour</span></li>    
                </ul>
            </div>
            <div class="clear-float"></div>
            <?php 
            foreach($pictures as $pic){?>
            <div class="col-sm-6 pag-work-smlimg">
                <a href="<?php echo $pic->getFilePath()?>" data-toggle="lightbox" data-gallery="example-gallery">
                <img  class="pag-work-bigimg" src="<?php echo $pic->getFilePath()?>">
                </a>
            </div>
            <?php } ?>
        </div>
        <!--Big and small pictures end-->
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script type="text/javascript">
                        $(document).ready(function ($) {
                            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox();
            });
                        });
    </script>
<?php } ?>