<?php
class student{
	public $name;
	public $roll;
	//public $email;
	public function __get($var){
  	 echo "attempted to display variable $var and failed<br>";	
	}
	public function __set($var,$val){
  	 echo "<br>attempted to set variable $var as $val and failed";	
	}
}
$hari = new student();
echo $hari->email;
$hari->email="hari@gmail.com";
?>