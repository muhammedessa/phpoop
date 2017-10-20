<?php


class Student{

    private $properties;

    public function __get($propertyName){
     if(array_variables($propertyName,$properties)){
         return $this->properties[$propertyName];
     }
    }

    public function __set($propertyName,$propertyValue){
        $this->properties[$propertyName]= $propertyValue;
    }
}


$studentInfo = new Student();

$studentInfo->FirstName = 'Muhammed';
$studentInfo->lastName = 'Essa';
 
$studentInfo->age=33;
$studentInfo->address='Kirkuk - IRAQ';
$studentInfo->salary = 4000;

echo '<pre>';
echo var_dump( $studentInfo);
echo '</pre>';

echo "-----------------";
$studentInfo->FirstName = 'Ahmed';
$studentInfo->lastName = 'Essa';
 
$studentInfo->age=33;
$studentInfo->address='Baghdad - IRAQ';
$studentInfo->salary = 1000;

echo '<pre>';
echo var_dump( $studentInfo);
echo '</pre>';

?>