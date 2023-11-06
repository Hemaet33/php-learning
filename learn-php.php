<?php
$string = "hello, World";
      echo str_replace('World','Riyad',$string);
      echo "<br>";
      echo chr(65);
      echo "<br>";
      $textArr = explode(',',$string);
      print_r($textArr);
      echo "<br>";
      echo join(" ",$textArr);
echo "<br>";
      echo lcfirst($string);
echo "<br>";
echo ucfirst($string);
echo "<br>";
echo strpos($string,"World");
echo "<br>";
echo str_word_count("Hello world Planet earth");
// PHP Class
    class Car{
      public $model;
      public $color;
      public function __construct ($model,$color){
      $this->model=$model;
      $this->color=$color;
      }
      public function display(){
        $message = "My car is of model $this->model & color of the car is $this->color.";
        return $message;
      }
    }

    $car = new Car('Toyota','white');
    echo $car->display();

    ?>