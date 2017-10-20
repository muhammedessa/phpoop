<?php

 //$this->firstName

class Person {
    
    public $firstName;
    public $lastName;
    public $age;
    public $address;
  

function printInfo(){
    $result = '';
    $result .= $this->firstName . ' , ' .$this->lastName;
    $result .=  ' , ' .$this->age . ' , ' . $this->address;

    return $result ;
}


}

$person1 = new Person();

echo '<pre>';
echo var_dump( $person1);
echo '</pre>';
 
echo '-------------------------';

$person1->firstName = 'Muhammed';
$person1->lastName = 'Essa';
$person1->age = 33;
$person1->address = 'IRAQ - Kirkuk';

echo '<pre>';
echo var_dump( $person1);
echo '</pre>';


echo '-------------------------';
echo '<br>';

echo $person1->printInfo();

?>