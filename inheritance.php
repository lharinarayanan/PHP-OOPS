<?php
    class cars{
       
     public $carname;
     public $carid;
     public $carbrand;
     public function brand(){
     	$this->carbrand="Maruti".$this->carname;
     	return $this->carbrand;

     }
  }

  class user extends cars{
                              
                public $username;
                public $userid;

                public function userdetails(){
                	echo "Name : ".$this->username."<br>"."Id : ".$this->userid."<br>";
                	echo $this->carname."<br>".$this->carid."<br>".$this->brand()."<br>";

                }

    }
  
   $newcar = new user();
   $newcar->carname = "Swift";
   $newcar->carid = 5;
   $newcar->username = "Hari";
   $newcar->userid = 1;
   $newcar->brand();
   $newcar->userdetails();
  ?>











 