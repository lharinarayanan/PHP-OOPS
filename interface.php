<?php
interface user{
	public function setproperty($x);
	public function description();
}
class mango implements user{
	public function setproperty($x){
     $this->x=$x;
	}
     public function description(){
      echo "Describing ".$this->x;
	}

  } 
 
 $abc = new mango();
 $abc->setproperty('mango');
 $abc->description();
 ?> 