<?php
require_once dirname(__FILE__).'/../core/Worksection.php';
require_once dirname(__FILE__).'/../core/Work.php';
require_once dirname(__FILE__).'/../core/Picture.php';


class WorksectionProvider { 
    private $workSections = [];
    
    public function __construct() {
        $this->workSections['completed'] = $this->constructCompleted();
        $this->workSections['current'] = $this->constructCurrent();
        $this->workSections['future'] = $this->constructFuture();
    }
    
    public function getWorkSections(){
        return $this->workSections;
    }
    
    private function constructCompleted(){
        $workSection = new WorkSection("Completed Projects");
        $workSection->addWork('east_of_market_kirkland', $this->constructEastOfMarket());
        $workSection->addWork('enatai_bellevue', $this->constructEnataiBellevue());
        $workSection->addWork('coguar_mountain_bellevue', $this->constructCoguarMountainBellevue());

        return $workSection;
    }
    
    private function constructCurrent(){
        $workSection = new WorkSection("Current Projects");
        $workSection->addWork('east_of_market_kirkland', $this->constructEastOfMarket());
        return $workSection;
    }
    
    private function constructFuture(){
        $workSection = new WorkSection("Future Plans");
        $workSection->addWork('east_of_market_kirkland', $this->constructEastOfMarket());
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
        
        return $work;
    }
    
    private function constructEnataiBellevue(){
        $work = new Work("Enatai Bellevue");
        $work->setTourLink("http://tours.tourfactory.com/tours/tour.asp?t=1538755&guid=1b975b51-875a-40db-85cb-b854730b48ca&r=http%3A%2F%2Ffx%2Etourfactory%2Ecom%2FTour%2FDownloadPhotos%2F1538755");
        $work->setPicturePath("/img/works/east_of_market_kirkland");
        $work->addPicture(new Picture('1.jpg'));
        $work->addPicture(new Picture('2.jpg'));
        $work->addPicture(new Picture('3.jpg'));
        $work->addPicture(new Picture('4.jpg'));
        $work->addPicture(new Picture('5.jpg'));
        $work->addPicture(new Picture('6.jpg'));
        
        return $work;
    }
    
    private function constructCoguarMountainBellevue(){
        $work = new Work("Coguar Mountain Bellevue");
        $work->setTourLink("http://tours.tourfactory.com/tours/tour.asp?t=1538755&guid=1b975b51-875a-40db-85cb-b854730b48ca&r=http%3A%2F%2Ffx%2Etourfactory%2Ecom%2FTour%2FDownloadPhotos%2F1538755");
        $work->setPicturePath("/img/works/east_of_market_kirkland");
        $work->addPicture(new Picture('1.jpg'));
        $work->addPicture(new Picture('2.jpg'));
        $work->addPicture(new Picture('3.jpg'));
        $work->addPicture(new Picture('4.jpg'));
        $work->addPicture(new Picture('5.jpg'));
        $work->addPicture(new Picture('6.jpg'));
        
        return $work;
    }
} 