<?php

class Superhero {
   public $name;
   public $costumeColor;
   public $artName;
   public $city;
   private $powers;

   public function __construct($name,$costumeColor,$artName,$city,$powers){
      $this->name =$name; 
      $this->costumeColor =$costumeColor; 
      $this->artName =$artName; 
      $this->city =$city; 
      $this->powers =$powers;     
   } 

   public function getPowers(){
       return  $this->powers ;    
   }
}


class Avengers {
    public $name;
    private $avengers=[];
    public function __construct($name){
        $this->name = $name;  
    }
    public function addAvenger(Superhero $superhero) {
        $this->avengers[] = $superhero;
        echo 'Eroe aggiunto agli Avengers:'. $superhero->name . '</br>Nome in codice:'. $superhero->artName . '</br>Posizione attuale:'. $superhero->city . '</br></br>';
    }

    public function getAvengers() {
        return $this->avengers;
    }
    
}


$ironman= new Superhero('Tony Stark','red','Iron Man','New York','armor');


$hulk= new Superhero('Bruce Banner','green','The Hulk','New York','strong');

$blackWidow= new Superhero('Natasha Romanoff','black','Black Widow','Moscow','acrobatic skills');


$cptAmerica= new Superhero('Steve Rogers','Usa flag','Captain America','New York','shield');


$thor= new Superhero('Thor','black and red','Thor','Asgard','god of thunder');



$theAvengers= new Avengers('avengers');

$theAvengers->addAvenger($ironman);
$theAvengers->addAvenger($hulk);
$theAvengers->addAvenger($blackWidow);
$theAvengers->addAvenger($cptAmerica);
$theAvengers->addAvenger($thor);




?>