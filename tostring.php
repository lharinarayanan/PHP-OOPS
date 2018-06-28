<?php
 class name{
               public $name;
               public $age;
               public function __construct($name)
               {$this->name=$name;}
               public function __tostring()
               {return $this->name;} 
 }

$kiran = new name("nithin");
echo $kiran;//tostring will treat object as a string
?>