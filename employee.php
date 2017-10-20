<?php

 //$this->firstName

class Employee {
    
    private $firstName;
    private $lastName;
    private $age;
    private $address;
    private $salary;
  
public function getFirstName(){

    return $this->firstName;
}
 public function getLastName(){
    return $this->lastName;
}
public function getAge(){
    return $this->age;
}
public function getAddress(){
    return $this->address;
}
public function getSalary(){
    return $this->salary;
}

public function setFirstName($firstName){
$this->firstName = $firstName;
}
public function setLastName($lastName){
    $this->lastName = $lastName;
    }
public function setAge($age){
$this->age = $age;
}
public function setAddress($address){
$this->address = $address;
}
public function setSalary($salary){
$this->salary = $salary;
}




}

$employee1 = new Employee();

echo '<pre>';
echo var_dump( $employee1);
echo '</pre>';
 
echo '-------------------------';

$employee1->setFirstName('Muhammed');
$employee1->setLastName('Essa');
$employee1->setAge(33);
$employee1->setAddress('Kirkuk - IRAQ');
$employee1->setSalary(3000);
 

echo '<pre>';
echo var_dump( $employee1);
echo '</pre>';

?>