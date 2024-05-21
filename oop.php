<?php
class User{


    // There are three access modifiers:

    //     public - the property or method can be accessed from everywhere. This is default
    //     protected - the property or method can be accessed within the class and by classes derived from that class
    //     private - the property or method can ONLY be accessed within the class
        
    public $name;
    public $email;
    public $password;
}



$user = new User();
echo $user->name = 'ASad';
// var_dump($user);


//constructor and methods

// class Fruit {
//     public $name;
//     public $color;
  
//     function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color;
//     }
//     function set_Name($name) {
//      $this->name = $name;
//     }
    
//     function get_name() {
//       return $this->name;
//     }
//   }

//   $apple = new Fruit("Apple", 'brwon');
//   echo $apple->set_Name('Ali');
//   echo $apple->get_name();


  class Fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function intro() {
      echo "The fruit is {$this->name} and the color is {$this->color}.";
    }
  }
  
  // Strawberry is inherited from Fruit
  class Strawberry extends Fruit {
    public $title;
        public function __construct($name, $color, $title) {
        parent::__construct($name, $color);
            $this->title = $title; 
      }
    public function message() {
      echo "Am I a fruit or a berry? ";
    }
    function get_name() {
              return $this->title;
            }
  }
  $strawberry = new Strawberry("Strawberry", "red", 'testing');
  $strawberry->message();
  $strawberry->intro();
  echo $strawberry->get_name();
  
