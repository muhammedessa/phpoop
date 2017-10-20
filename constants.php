<?php


class Student{

    const number1 = 10;
    const number2 = 200;


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

    public static function printInfo(){
       return Student::number1+100;
    }

    public static function returnNameInfo($lastname){
        return Student::$myName .' '. $lastname;
     }
}



// echo Student::$myName . '<br>';
// echo Student::$myLastName;

echo Student::printInfo() . ' <br>' ;
echo Student::returnNameInfo('Essa');

// echo '<pre>';
// echo var_dump(Student::$myArray);
// echo '</pre>';
 
?>