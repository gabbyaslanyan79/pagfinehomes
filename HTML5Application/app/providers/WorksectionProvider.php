<?php
require_once dirname(__FILE__).'/../core/Worksection.php';
require_once dirname(__FILE__).'/../core/Work.php';
require_once dirname(__FILE__).'/../core/Picture.php';


class WorksectionProvider { 
    private $workSections = [];
    
    public function __construct() {
        $this->workSections['recent'] = $this->constructRecent();
        $this->workSections['current'] = $this->constructCurrent();
    }
    
    public function getWorkSections(){
        return $this->workSections;
    }
    
    private function constructRecent(){
        $workSection = new WorkSection("Recent Homes");
        $workSection->addWork('east_of_market_kirkland', $this->constructEastOfMarket());
        $workSection->addWork('enatai_bellevue', $this->constructEnataiBellevue());
        $workSection->addWork('cougar_mountain_bellevue', $this->constructCougarMountainBellevue());

        return $workSection;
    }
    
    private function constructCurrent(){
        $workSection = new WorkSection("Current Homes");
        $workSection->addWork('enatai_contemporary_farmhouse', $this->constructEnataiContempFarmhouse());
        $workSection->addWork('clyde_hill_luxury_modern', $this->constructClydeHillLuxuryModern());
        $workSection->addWork('houghton_point_modern_I', $this->constructHoughtonPointI());
        $workSection->addWork('houghton_point_modern_II', $this->constructHoughtonPointII());
        
        return $workSection;
    }

    
    private function constructEastOfMarket(){
        $work = new Work("East Of Market Kirkland");
        $work->setTourLink("http://tours.tourfactory.com/tours/tour.asp?t=1538755&guid=1b975b51-875a-40db-85cb-b854730b48ca&r=http%3A%2F%2Ffx%2Etourfactory%2Ecom%2FTour%2FDownloadPhotos%2F1538755");
        $work->setPicturePath("/img/works/east_of_market_kirkland");
        $work->addPicture(new Picture('1.jpg'));
        $work->addPicture(new Picture('2.jpg'));
        $work->addPicture(new Picture('3.jpg'));
        $work->addPicture(new Picture('4.jpg'));
        $work->addPicture(new Picture('5.jpg'));
        $work->addPicture(new Picture('6.jpg'));
        $work->addPicture(new Picture('7.jpg'));
        $work->addPicture(new Picture('8.jpg'));
        $work->addPicture(new Picture('9.jpg'));
        $work->addPicture(new Picture('10.jpg'));
        $work->addPicture(new Picture('11.jpg'));
        $work->addPicture(new Picture('12.jpg'));
        $work->addPicture(new Picture('13.jpg'));
        $work->addPicture(new Picture('14.jpg'));
        $work->addPicture(new Picture('15.jpg'));
        $work->addPicture(new Picture('16.jpg'));
        $work->addPicture(new Picture('17.jpg'));
        $work->addPicture(new Picture('18.jpg'));
        $work->addPicture(new Picture('19.jpg'));
        $work->addPicture(new Picture('20.jpg'));
        $work->addPicture(new Picture('21.jpg'));
        $work->addPicture(new Picture('22.jpg'));
        $work->addPicture(new Picture('23.jpg'));
        $work->addPicture(new Picture('24.jpg'));
        $work->addPicture(new Picture('25.jpg'));
        $work->addPicture(new Picture('26.jpg'));
        $work->addPicture(new Picture('27.jpg'));
        $work->addPicture(new Picture('28.jpg'));
        $work->addPicture(new Picture('29.jpg'));
        $work->addPicture(new Picture('30.jpg'));
        $work->addPicture(new Picture('31.jpg'));
        $work->addPicture(new Picture('32.jpg'));
        $work->addPicture(new Picture('33.jpg'));
        $work->addPicture(new Picture('34.jpg'));
        $work->addPicture(new Picture('35.jpg'));
        $work->addPicture(new Picture('36.jpg'));
        $work->addPicture(new Picture('37.jpg'));
        $work->addPicture(new Picture('38.jpg'));
        $work->addPicture(new Picture('39.jpg'));
        $work->addPicture(new Picture('40.jpg'));
        $work->addPicture(new Picture('41.jpg'));
        $work->addPicture(new Picture('42.jpg'));
        $work->addPicture(new Picture('43.jpg'));
        $work->addPicture(new Picture('44.jpg'));
        $work->addPicture(new Picture('45.jpg'));
        
        return $work;
    }
    
    private function constructEnataiBellevue(){
        $work = new Work("Enatai Bellevue");
        $work->setTourLink("http://tours.tourfactory.com/tours/tour.asp?t=1870729");
        $work->setPicturePath("/img/works/enatai_bellevue");
        $work->addPicture(new Picture('1.jpg'));
        $work->addPicture(new Picture('2.jpg'));
        $work->addPicture(new Picture('3.jpg'));
        $work->addPicture(new Picture('4.jpg'));
        $work->addPicture(new Picture('5.jpg'));
        $work->addPicture(new Picture('6.jpg'));
        $work->addPicture(new Picture('7.jpg'));
        $work->addPicture(new Picture('8.jpg'));
        $work->addPicture(new Picture('9.jpg'));
        $work->addPicture(new Picture('10.jpg'));
        $work->addPicture(new Picture('11.jpg'));
        $work->addPicture(new Picture('12.jpg'));
        $work->addPicture(new Picture('13.jpg'));
        $work->addPicture(new Picture('14.jpg'));
        $work->addPicture(new Picture('15.jpg'));
        $work->addPicture(new Picture('16.jpg'));
        $work->addPicture(new Picture('17.jpg'));
        $work->addPicture(new Picture('18.jpg'));        
        $work->addPicture(new Picture('19.jpg'));
        $work->addPicture(new Picture('20.jpg'));
        $work->addPicture(new Picture('21.jpg'));
        $work->addPicture(new Picture('22.jpg'));
        $work->addPicture(new Picture('23.jpg'));
        $work->addPicture(new Picture('24.jpg'));
        $work->addPicture(new Picture('25.jpg'));
        $work->addPicture(new Picture('26.jpg'));
        
        return $work;
    }
    
    private function constructCougarMountainBellevue(){
        $work = new Work("Cougar Mountain Bellevue");
        $work->setTourLink("http://tours.tourfactory.com/tours/tour.asp?t=1670746&guid={3748AE77-9A5C-475F-A6C1-24C2146CB735}");
        $work->setPicturePath("/img/works/cougar_mountain_bellevue");
        $work->addPicture(new Picture('1.jpg'));
        $work->addPicture(new Picture('2.jpg'));
        $work->addPicture(new Picture('3.jpg'));
        $work->addPicture(new Picture('4.jpg'));
        $work->addPicture(new Picture('5.jpg'));
        $work->addPicture(new Picture('6.jpg'));
        $work->addPicture(new Picture('7.jpg'));
        $work->addPicture(new Picture('8.jpg'));
        $work->addPicture(new Picture('9.jpg'));
        $work->addPicture(new Picture('10.jpg'));
        $work->addPicture(new Picture('11.jpg'));
        $work->addPicture(new Picture('12.jpg'));
        $work->addPicture(new Picture('13.jpg'));
        $work->addPicture(new Picture('14.jpg'));
        $work->addPicture(new Picture('15.jpg'));
        $work->addPicture(new Picture('16.jpg'));
        $work->addPicture(new Picture('17.jpg'));
        $work->addPicture(new Picture('18.jpg'));
        $work->addPicture(new Picture('19.jpg'));
        $work->addPicture(new Picture('20.jpg'));
        $work->addPicture(new Picture('21.jpg'));
        $work->addPicture(new Picture('22.jpg'));
        $work->addPicture(new Picture('23.jpg'));
        $work->addPicture(new Picture('24.jpg'));
        $work->addPicture(new Picture('25.jpg'));
        $work->addPicture(new Picture('26.jpg'));
        $work->addPicture(new Picture('27.jpg'));
        $work->addPicture(new Picture('28.jpg'));
        $work->addPicture(new Picture('29.jpg'));
        $work->addPicture(new Picture('30.jpg'));
        $work->addPicture(new Picture('31.jpg'));
        $work->addPicture(new Picture('32.jpg'));
        $work->addPicture(new Picture('33.jpg'));
        $work->addPicture(new Picture('34.jpg'));
        $work->addPicture(new Picture('35.jpg'));
        $work->addPicture(new Picture('36.jpg'));
        $work->addPicture(new Picture('37.jpg'));
        $work->addPicture(new Picture('38.jpg'));
        $work->addPicture(new Picture('39.jpg'));
        $work->addPicture(new Picture('40.jpg'));
        $work->addPicture(new Picture('41.jpg'));
        $work->addPicture(new Picture('42.jpg'));
        $work->addPicture(new Picture('43.jpg'));
        
        return $work;
    }
    
    private function constructEnataiContempFarmhouse(){
        $work = new Work("Enatai Contemporary Farmhouse"); 
        $work->setPicturePath("/img/works/enatai_contemporary_farmhouse");
        $work->addPicture(new Picture('1.jpg'));
        $work->addPicture(new Picture('2.jpg'));
        $work->addPicture(new Picture('3.jpg'));
        $work->addPicture(new Picture('4.jpg'));
        
        $work->addHighlight("3246 112th Ave SE Bellevue WA");
        $work->addHighlight("5,212 sq ft");
        $work->addHighlight("10,000 sq ft lot");
        $work->addHighlight("Completion Summer of 2018");
        
        return $work;
    }
    
    
    private function constructClydeHillLuxuryModern(){
        $work = new Work("Clyde Hill Luxury Modern"); 
        $work->setPicturePath("/img/works/clyde_hill_luxury_modern");
        $work->addPicture(new Picture('1.jpg'));
        $work->addPicture(new Picture('2.jpg'));
        $work->addPicture(new Picture('3.jpg'));
        $work->addPicture(new Picture('4.jpg'));        
        $work->addPicture(new Picture('5.jpg'));
        $work->addPicture(new Picture('6.jpg'));
        
        $work->addHighlight("9716 NE 14th St Clyde Hill WA");
        $work->addHighlight("5,358 sq ft");
        $work->addHighlight("882 sq ft rooftop deck");
        $work->addHighlight("13k+ sq ft lot");
        $work->addHighlight("Completion Spring of 2019");
        
        return $work;
    }
    
    private function constructHoughtonPointI(){
        $work = new Work("Houghton Point Modern I"); 
        $work->setPicturePath("/img/works/houghton_point_modern_I");
        $work->addPicture(new Picture('1.jpg'));
        $work->addPicture(new Picture('2.jpg'));
        $work->addPicture(new Picture('3.jpg'));
        $work->addPicture(new Picture('4.jpg'));
        
        $work->addHighlight("104xx NE 43rd St Kirkland WA Lot2");
        $work->addHighlight("4,500+ sq ft");
        $work->addHighlight("9,700 sq ft lot");
        $work->addHighlight("Completion Summer of 2019");
        
        return $work;
    }
    
    
    private function constructHoughtonPointII(){
        $work = new Work("Houghton Point Modern II"); 
        $work->setPicturePath("/img/works/houghton_point_modern_II");
        $work->addPicture(new Picture('placeholder.jpg'));
        
        $work->addHighlight("104xx NE 43rd St Kirkland WA Lot1");
        $work->addHighlight("4,500+ sq ft");
        $work->addHighlight("7,970 sq ft lot");
        $work->addHighlight("Completion Summer of 2019");
        
        return $work;
    }
} 