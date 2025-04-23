<?php
class Animal
{
    public function sound()
    {
        echo "Animals make sounds<br>";
    }
}
class Cat extends Animal
{
    public function meow()
    {
        echo "Cat says Meow<br>";
    }
}
$cat = new Cat();
$cat->sound();
$cat->meow();
