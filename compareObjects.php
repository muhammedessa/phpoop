<?php

 //$this->firstName

class Employee {
    
    private $firstName;
    private $lastName;
    private $age;
 

    public function __construct($firstName,$lastName,$age ){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
  
    }
  
public function getFirstName(){

    return $this->firstName;
}
 public function getLastName(){
    return $this->lastName;
}
public function getAge(){
    return $this->age;
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
 

public static function compare($obj1 , $obj2 ){
return $obj1 == $obj2 ;
}


}

$employee1 = new Employee('Muhammed','Essa',33);
$employee2 = new Employee('Omer','Essa',33);


if (Employee::compare($employee1,$employee2)) {
   echo 'they are equal';
}else{
    echo 'they are not equal';
}
 
 $employee3 = $employee2;

 if ( $employee3 === $employee2 ) {
    echo 'they are identical';
 }else{
     echo 'they are not identical';
 }

?>