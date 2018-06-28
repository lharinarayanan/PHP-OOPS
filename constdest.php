<?php
 class company{
                public $cname;
                public $cbranch;
                public function __construct($name,$branch){
                                                      $this->cname=$name;    
                                                      $this->cbranch=$branch;
                                                      echo "Entered constructor of base class<br>";
            }
      
       public function __destruct(){
           echo "Destroying base class<br>";
       }  

    }  
 class branch extends company {
                 public $cbranchname;
                 public $cbranchnumber;
                 public function __construct($cbranchname,$cbranchnumber,$name,$branch)
                 {
                 	parent::__construct($name,$branch);
                 	$this->cbranchname=$cbranchname;
                 	$this->cbranchnumber=$cbranchnumber;
                    echo $this->cname." ".$this->cbranch."<br>";
                   
                 }
        
           
                    public function __destruct(){
                    	             
                                   echo "Destroying sub class<br>";
                                   parent::__destruct();
                  }
              
           }
  $thinksynq = new branch("Alwarpet",2,"Thinksynq",400); 


?>