<?php

require_once dirname(__FILE__).'/../core/Worksection.php';

class Worksection { 
    private $name;
    private $works = [];
    
    function __construct($name) {
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function addWork($key, $work){
        $this->works[$key] = $work;
    }
    function getWorks() {
        return $this->works;
    }    
} 