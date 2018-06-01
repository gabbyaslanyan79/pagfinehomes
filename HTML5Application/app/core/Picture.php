<?php

class Picture { 
    private $file;
    private $path;

    function __construct($file) {
        $this->file = $file;
    }
    
    function getPath() {
        return $this->path;
    }

    function setPath($path) {
        $this->path = $path;
    }

    function getFilePath(){
        return $this->path . '/' . $this->file;
    }

} 