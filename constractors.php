<?php


class Person{
    private $firstName;
    private $lastName;
    private $age;
    private $address;
 
    public function __construct($firstName,$lastName,$age,$address){

        $this->firstName= $firstName;
        $this->lastName= $lastName;
        $this->age= $age;
        $this->address= $address;
    }


public function __toString(){
    return $this->firstName.' ' . $this->lastName.' '  . $this->age.' ' .$this->address;

  }
}

    $person1 = new Person('Muhammed','Essa',33,'IRAQ - Kirkuk');

    echo  ( $person1);
    // echo '<pre>';
    // echo var_dump( $person1);
    // echo '</pre>';

?>


