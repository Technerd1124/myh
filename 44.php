
<?php

class ParentClass
{
    public function show()
    {
        echo "THis is Parent Class <br>";
    }
}

class ChildClass extends ParentClass
{

    public function show()
    {
        echo "THis is Child Class <br>";
    }
}


$obj = new ChildClass();
$obj->show(); // This will call the show method of ChildClass
$pr = new ParentClass();
$pr->show(); // This will call the show method of ParentClass
?>