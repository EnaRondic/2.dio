<?php
//Define a classs
  class User {
   public $name = 'Brad';
   public function sayHello(){
    return $this->name . ' says Hello';
   }

  }

  //Instatiate a user object from the user class
  $user1 = new User();

  echo $user1->name;

  echo '<br>';

  echo $user1->sayHello();
  echo ',<br>';

  //Create new user
  $user2 = new User();
  $user2->name = 'jeff';
  echo $user2 ->name;
  echo '<br>';
  echo $user2->sayHello();
