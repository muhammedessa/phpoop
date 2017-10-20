<?php


class Person{

public function printFirstName($name){ echo 'Name is : '.$name;}
public function printLastName($lname){echo 'Last Name is : '.$lname; }
public function printAge($age){echo 'Age is : '.$age; }

}

class Student extends Person{

    public function printFirstName($name){ echo 'Name is : '.$name;}
 
}

class Employee extends Person{
    
    public function printLastName($lname){echo 'Last Name is : '.$lname; }

    public function printAddress($address){echo 'address is : '.$address; }
    
     
    }

class Muhammed extends Employee{
        public function printLastName($lname){echo 'Last Name is : '.$lname; }
    
        public function printAddress($address){echo 'address is : '.$address; }
}


$student = new Student();
$student->printFirstName('Class Student');
echo '<br>';
$employee = new Employee();
$employee->printLastName('class Employee');
$employee->printAddress('Kirkuk IRAQ');

echo '<br>';
$muhammed = new Muhammed();
$muhammed->printLastName('class Muhammed');

echo '<br>';
$muhammed->printAddress('Sulaymaniya IRAQ');
?>