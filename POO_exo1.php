<<?php 
class Form {
	private $_debform="<form>";
	private $_finform="</form>";
	private $_input="<input type=";
    private $_select="<select>  </select>";

function __construct(){
   }
   public function create(){
        return $this->_debform;
  }
  public function termi(){
  	     return $this->_finform;
  }
  public function text($type="",$value=""){
  	     return $this->_input. "$type"."value=".$value.">";
  }
  public function select(){
  	      return $this->_select;
  }
  public function checkbox($type="",$value="",$item=""){
  	      return $this->_input. $type."value=" .$value.">".$item."<br>";
  }
  public function submit($button="" ,$type="submit"){
  	return $this->_input. $type."value=";
  }
}
$neoform=new Form();


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <?php
  echo $neoform->create();
  echo $neoform->text("ezaho","riri");
  echo $neoform->select();
  echo $neoform->checkbox("radio","male","Male");
  echo $neoform->checkbox("radio","female","Female");
  echo $neoform->checkbox("radio","other","Other");
  echo $neoform->submit("button","Envoyez");
  echo $neoform->termi();
 ?>
 </body>
 </html>