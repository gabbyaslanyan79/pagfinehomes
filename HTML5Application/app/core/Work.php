<?php

class Work { 
    private $name;
    private $picturePath;
    private $pictures = [];
    
    function __construct($name) {
        $this->name = $name;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function addPicture($picture){
        $this->pictures[] = $picture;
    }
    
    public function getPicture(){
        return $this->pictures;
    }
    
    function getPicturePath() {
        return $this->picturePath;
    }

    function setPicturePath($picturePath) {
        $this->picturePath = $picturePath;
    }
} 