<?php

class Box {
    private $w;
    private $h;
    private $l;

    public function __construct($w, $h, $l){
        $this ->w = $w;
        $this ->h = $h;
        $this ->l = $l;
        var_dump('Box was created');
    }
    public function volume(){
        return $this->w * $this->h * $this->l;
    }
}
