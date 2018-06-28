<?php
  abstract class abc{
   public abstract function cname(); 
   public abstract function cost();
                    }
    class a extends abc{

    	public function cname(){return "Hyundai i10";}
        public function cost(){return 300000;}
    } 
   class b extends abc{

    	public function cname(){return "Maruti Suzuki SWIFT";}
        public function cost(){return 600000;}
    } 
    $car = new a();
     echo "Car name---".$car->cname()."<br>Car cost---".$car->cost()."<br>";
    $car1 = new b();  
      echo "Car name---".$car1->cname()."<br>Car cost---".$car1->cost()."<br>";
 ?>