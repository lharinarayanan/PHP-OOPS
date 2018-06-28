<?php
 interface A{
 	public function compute($x,$y);
    }
 interface B extends A{
 	public function divide($x,$y);
 }
 class result implements B{
 	public function compute($x,$y){
 	
 		echo "Multiplication of $x and $y<br>".$x*$y."<br>";
 	}
    public function divide($x,$y){
 	
 		echo "Division of $x by $y<br>".$x/$y."<br>";
 	}
}
$obj = new result();
$obj->compute(5,6);
$obj->divide(120,6);
?>