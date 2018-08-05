<?php

class Work { 
    private $name;
    private $picturePath;
    private $pictures = [];
    private $highlights = [];
    private $tourLink;
    
    function __construct($name) {
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function addPicture($picture){
        $picture->setPath($this->picturePath);
        $this->pictures[] = $picture;
    }
    
    public function getPictures(){
        return $this->pictures;
    }
    
    public function addHighlight($highlight){
        $this->highligts[] = $highlight;
    }
    
    public function getHighlights(){
        return $this->highligts;
    }
    
    function getPicturePath() {
        return $this->picturePath;
    }

    function setPicturePath($picturePath) {
        $this->picturePath = $picturePath;
    }
    
    function getTourLink() {
        return $this->tourLink;
    }

    function setTourLink($tourLink) {
        $this->tourLink = $tourLink;
    }
} 