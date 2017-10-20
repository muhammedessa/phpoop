<?php

abstract class Person{
    protected $firstName;
    protected $lastName;

    public function __construct($firstName,$lastName ){
        
                $this->firstName= $firstName;
                $this->lastName= $lastName;
                
            }

 public function __toString(){
   return "$this->firstName $this->lastName" ;
            
              }

      abstract public function getSalary(); 
      abstract public function getAge();        
}

class Employee extends Person{

    private $salary;
    private $age;

    public function __construct($firstName,$lastName,$salary,$age ){
        parent::__construct($firstName,$lastName );
                $this->salary= $salary;
                $this->age= $age;
                
            }

     public function getSalary(){} 
      public function getAge() {}

        public function __toString(){
   return sprintf("Employee Info Full name : %s Salary %0.2f Age:%d",parent::__toString(), $this->salary, $this->age) ;
  }     

}


$employee1 = new Employee('Muhammed','Essa',3000,33);

echo $employee1;



class Student extends Person{
    private $department;
    private $age;
    private $address;

    public function __construct($firstName,$lastName,$department,$age ,$address){
        parent::__construct($firstName,$lastName );
                $this->department= $department;
                $this->age= $age;
                $this->address= $address;
                
            }

public function getSalary(){} 

    public function getAge() {
        return $this->age;
    }
    public function getDepartment() {
        return $this->department;
    }
    public function getAddress() {
        return $this->address;
    }


public function __toString(){
    return sprintf("Employee Info Full name : %s Department %s Age:%d address : %s",parent::__toString(), $this->getDepartment(), $this->getAge(),$this->getAddress()) ;
    }

}

echo '<br><br><br><br><br>';

$student1 = new Student('Muhammed','Essa','PHP developer',33,'Kirkuk IRAQ');

echo $student1;


?>