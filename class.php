<?php
 
  class p{

  	         public function variable(){
  	         	echo "This is variable function"."<br>";
  	         	$name="bar";//variable method declaration
  	         	$this->$name();
  	         }
           public function bar(){
  	         	
  	         echo "This is bar function";
  	         }
        
         }
     $obj=new p();
     $obj->variable();
     ?>