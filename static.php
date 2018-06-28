<?php
// This code snippet highlights the use  of static datatype without initialising an object of both classes

  class person{
    public static $c=3;
    public static function name(){
    	echo "<br>Hi Hari<br>";
    }

 }
  class boy extends person{
      function callstatic(){
      	echo person::$c;
      	person::name();
      } 

  }
 //Demonstrating use of static keyword for the variable which has value 3 in all objects of the class 
 echo person::$c;
 person::name();
 boy::callstatic();
 ?>