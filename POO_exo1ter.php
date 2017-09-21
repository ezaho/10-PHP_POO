<?php 
 
 class Validator{
    private $_string;
    // defini variable pour que ça soit lu par tous
  function __construct($string){
    $this->_string=$string;
    // parametre à tester
   }
       public function valchain(){
        return is_string($this->_string);
  }
       public function valentier (){
        return is_integer($this->_string);
 }
       public function valvirg(){
        return is_float($this->_string);
     }
       
}
 $classvalidator= new Validator('momo');
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title></title>
 </head>
 <body>
 <?php
 echo "Chaine de caracteres: ".$classvalidator->valchain()."<br>";
 echo "Nombre entier: ".$classvalidator->valentier()."<br>";
 echo "Nombre à virgule: ".$classvalidator->valvirg()."<br>";
 
 ?>
 </body>
 </html>
 