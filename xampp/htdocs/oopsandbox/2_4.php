<?php
class User {
public $name;
public $age;

public function __construct($name, $age){

    //echo 'constructor ran...';
    $this->name = $name;
    $this->age = $age;
}

public function sayHello(){
    return $this->name . 'Says Hello';
}
}

$user1 = new User('Brad', 36);
echo $user1 ->name .  'Is ' . $user1->age . 'years old';
echo '<br>';
echo $user1->sayHello();

echo '<br>';

$user2 = new User('Sara', 25);
echo $user2->name . 'is' . $user2->age . 'years old';
echo '<br>';
echo $user2->sayHello();


