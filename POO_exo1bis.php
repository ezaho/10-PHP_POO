<?php 
 class Html{
    private $_fichiers_css="<link rel=" ;
    private $_balises_meta="meta ...";
    private $_images="<img src=...>";
    private $_liens="<a href=..>";
    private $_fichiers_JS="<script>...</script>";
  function __construct(){
   }
       public function fichiercss(){
        return $this->_fichiers_css;
  }
       public function balimeta(){
        return $this->_balises_meta;
 }
       public function imaliens(){
        return $this->_images;
     }
       public function ahref(){
        return $this->_liens;
     }
       public function jsfich(){
        return $this->_fichiers_JS;
}
}
 $classhtml= new Html();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php
  echo "$classhtml->fichiercss()";
  echo "$classhtml->balimeta()";
  echo "$classhtml->imaliens()";
  echo "$classhtml->ahref()";
  echo "$classhtml->jsfich()";
   
 ?>
 </body>
 </html>