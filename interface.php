
<?php



interface Person{
    public function firstLastPerson($firstName,$lastName);
}

interface Person2{
    public function agePerson($age);
    public function addressPerson($address);
}

class Student implements Person,Person2{
    public function firstLastPerson($firstName,$lastName){
  return sprintf("Student first name: %s Last Name: %s",$firstName,$lastName);
    }

    public function agePerson($age){
        return sprintf("Student Age: %d  ",$age);
        }
        public function addressPerson($address){
        return sprintf("Student address: %s",$address);
            }
}


function printInfo(){
    $student1 = new Student();
    
    echo $student1->firstLastPerson('muhammed','essa'); echo '<br>';
    echo $student1->agePerson(33); echo '<br>';
    echo $student1->addressPerson('Kirkuk - IRAQ');
}

printInfo();
?>