<?php


class Student{

    static public $myName = 'Omer';
    public static $myLastName = 'Yousif';
    public static $myArray= array(1=>'Apple',2=>'Orange',3=>'Pear');

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



echo Student::$myName . '<br>';
echo Student::$myLastName;


echo '<pre>';
echo var_dump(Student::$myArray);
echo '</pre>';
 
?>