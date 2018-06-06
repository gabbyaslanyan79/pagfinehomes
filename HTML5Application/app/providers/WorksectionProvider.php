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
        $completedWorksection = new WorkSection("Completed Projects");
        $completedWorksection->addWork('east_of_market_kirkland', $this->constructEastOfMarket());
        $completedWorksection->addWork('enatai_bellevue', $this->constructEnataiBellevue());
        $completedWorksection->addWork('coguar_mountain_bellevue', $this->constructCoguarMountainBellevue());

        return $completedWorksection;
    }
    
    private function constructCurrent(){
        $completedWorksection = new WorkSection("Current Projects");
        $completedWorksection->addWork('east_of_market_kirkland', $this->constructEastOfMarket());
        return $completedWorksection;
    }
    
    private function constructFuture(){
        $completedWorksection = new WorkSection("Future Plans");
        $completedWorksection->addWork('east_of_market_kirkland', $this->constructEastOfMarket());
        return $completedWorksection;
    }
    
    private function constructEastOfMarket(){
        $eastOfMarket = new Work("East Of Market Kirkland");
        $eastOfMarket->setPicturePath("img/works/east_of_market_kirkland");
        $eastOfMarket->addPicture(new Picture('1.jpg'));
        $eastOfMarket->addPicture(new Picture('2.jpg'));
        $eastOfMarket->addPicture(new Picture('3.jpg'));
        $eastOfMarket->addPicture(new Picture('4.jpg'));
        $eastOfMarket->addPicture(new Picture('5.jpg'));
        
        return $eastOfMarket;
    }
    
    private function constructEnataiBellevue(){
        $enataiBellevue = new Work("Enatai Bellevue");
        $enataiBellevue->setPicturePath("img/works/enatai_bellevue");
        $enataiBellevue->addPicture(new Picture('1.jpg'));
        $enataiBellevue->addPicture(new Picture('2.jpg'));
        $enataiBellevue->addPicture(new Picture('3.jpg'));
        $enataiBellevue->addPicture(new Picture('4.jpg'));
        $enataiBellevue->addPicture(new Picture('5.jpg'));
        
        return $enataiBellevue;
    }
    
    private function constructCoguarMountainBellevue(){
        $coguarMountainBellevue = new Work("Coguar Mountain Bellevue");
        $coguarMountainBellevue->setPicturePath("img/works/coguar_mountain_bellevue");
        $coguarMountainBellevue->addPicture(new Picture('1.jpg'));
        $coguarMountainBellevue->addPicture(new Picture('2.jpg'));
        $coguarMountainBellevue->addPicture(new Picture('3.jpg'));
        $coguarMountainBellevue->addPicture(new Picture('4.jpg'));
        $coguarMountainBellevue->addPicture(new Picture('5.jpg'));
        
        return $coguarMountainBellevue;
    }
} 