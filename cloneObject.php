<?php



class Employee {
    
    private $firstName;
    private $lastName;
    private $age;
    private $address;
    private $salary;
  
 public function __construct($firstName,$lastName,$age,$address,$salary){
$this->firstName = $firstName;
$this->lastName = $lastName;
$this->age = $age;
$this->address = $address;
$this->salary = $salary;
 }

 public function __toString(){
     return "First name : $this->firstName <br> lastname : $this->lastName <br> Age :$this->age <br >  address: $this->address <br>  salary : $this->salary";
 }

}


$employee = new Employee('Muhammed','Essa',33,'Kirkuk - IRAQ',2000);

echo $employee;

echo '<br><br><br>';

$employee1 = new Employee('Ahmed','Omer',22,'Basra - IRAQ',4000);

echo $employee1;

echo '<br><br><br>';

$employee2 = $employee1;

echo $employee2;


echo '<br><br><br>';

$employee3 = clone $employee;

echo $employee

?>


