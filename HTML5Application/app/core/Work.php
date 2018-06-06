<?php

class Work { 
    private $name;
    private $picturePath;
    private $pictures = [];
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