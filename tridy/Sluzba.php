<?php

class Sluzba 
{

   /** @var int */
   public $id; 

   /** @var string */
   public $nazev;

   /** @var string */
   public $popis;

   /** @var string */
   public $ikona;

   /** @var float */
   public $cena;

    public function __construct(int $id, string $nazev, string $popis, string $ikona, float $cena)
    {
        $this->id = $id;
        $this->nazev = $nazev;
        $this->popis = $popis;
        $this->ikona = $ikona;
        $this->cena = $cena;   
    }

    
    
}

?>