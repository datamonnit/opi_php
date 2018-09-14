<?php
class Auto {
    
    public $hinta;
    protected $merkki;
    protected $vari;

    function __construct() {
       
    }

    public function setMerkki($m) 
    {
        $this->merkki = $m;
    }

    public function setVari($v)
    {
        $this->vari = $v;
    }

    public function autonTiedot()
    {
        $html = "<p>Auton merkki on " . $this->merkki . " ja se on " . $this->vari ."!</p>";
        return $html;
    }

    public function tarjousHinta($alennus_pros)
    {
        $uusi_hinta = $this->hinta - ($this->hinta * $alennus_pros / 100);
        return $uusi_hinta;
    }

}