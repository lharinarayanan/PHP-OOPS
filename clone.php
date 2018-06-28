

<?php
class student{
	      public $name;
         public $age;
        public $marks;
      public  $year;
     public function __construct($name,$age,$marks,$year){
       $this->name=$name;
       $this->age=$age;
       $this->marks=$marks;
       $this->year=$year;
     }
     public function display()
    {
      echo "Name : ".$this->name."<br>";
      echo "Age : ".$this->age."<br>";
      echo "Gpa : ".$this->marks."<br>";
      echo "Year : ".$this->year."<br>";

    }
}
 $raghu=new student("Raghu",19,9,1);
 $raghu->display();
 // OBJECT harish actsby refernce to raghu
 $harish=$raghu;
 $ram= clone $raghu; 
 $harish->name="Harish";
// changing name of object harish changes raghu too 
 $raghu->display();
 $ram->display();
