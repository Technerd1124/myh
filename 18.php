
<?php 
class Animal { 
 public function makeSound() { 
 echo "Animal makes a sound<br>"; 
 } 
} 
class Dog extends Animal { 
 public function makeSound() { 
 parent::makeSound(); 
 echo "Dog barks<br>"; 
 } 
} 
$dog = new Dog(); 
$dog->makeSound(); 
?>
