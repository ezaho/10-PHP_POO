<?php 
 class Html{
    private $_fichiers_css="<link rel="stylesheet"," ...">";
    private $_balises_meta="meta ...";
    private $_images=<img src="...">;
    private $_liens=<a href="...">;
    private $_fichiers_JS="<script>...</script>";
  function __construct(){
   }
       public function fichiercss(){
        return $this->_ficss;
  }
       public function balimeta(){
        return $this->_balme;
 }
       public function imaliens(){
        return $this->_imgli;
     }
       public function ahref(){
        return $this->_ahre;
     }
       public function jsfich(){
        return $this->_fichjs;
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
  echo $classhtml->fichiercss();
  echo $classhtml->balme();
  echo $classhtml->imgli();
  echo $classhtml->ahre();
  echo $classhtml->fichjs();

 ?>
 </body>
 </html>