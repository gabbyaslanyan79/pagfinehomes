<?php
require_once dirname(__FILE__).'/../core/Worksection.php';
require_once dirname(__FILE__).'/../core/Work.php';
require_once dirname(__FILE__).'/../core/Picture.php';


class WorksectionProvider { 
    private $workSections = [];
    
    public function __construct() {
        $this->workSections['completed'] = $this->constructCompleted();
    }
    
    public function getWorkSections(){
        return $this->workSections;
    }
    
    private function constructCompleted(){
        $completedWorksection = new WorkSection("Completed Projects");
        $completedWorksection->addWork('east_of_market', $this->constructEastOfMarket());
        return $completedWorksection;
    }
    
    private function constructEastOfMarket(){
        $eastOfMarket = new Work("East Of Market Kirkland");
        $eastOfMarket->setPicturePath("img/projects/east_of_market_kirkland");
        $eastOfMarket->addPicture(new Picture('1.jpg'));
        $eastOfMarket->addPicture(new Picture('2.jpg'));
        $eastOfMarket->addPicture(new Picture('3.jpg'));
        $eastOfMarket->addPicture(new Picture('4.jpg'));
    }
} 