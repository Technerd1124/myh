<?php 
class LivingThing { 
 public function breathe() { 
 echo "Breathing<br>"; 
 } 
} 
class Animal extends LivingThing { 
 public function eat() { 
 echo "Eating<br>"; 
 } 
} 
class Dog extends Animal { 
 public function bark() { 
 echo "Barking<br>"; 
 } 
}
$dog = new Dog(); 
$dog->breathe(); 
$dog->eat(); 
$dog->bark(); 
?> 
