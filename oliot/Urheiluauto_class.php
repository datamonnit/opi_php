<?php

include_once 'Auto_class.php';

class Urheiluauto extends Auto {
    
    private $huippunopeus;

    function __construct() {
        parent::__construct();
    }

    public function setHuippunopeus($v)
    {
        $this->huippunopeus = $v;
    }

    public function autonTiedot()
    {
        $html = "Auton merkki on " . $this->merkki . " ja se on " . $this->vari ."!";
        $html .= "ja huippunopeus " . $this->huippunopeus . "";
        return $html;
    }

}