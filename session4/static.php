<?php
class A
{
    public static $my_static = 'Hola';

    public function staticValue() {
        return self::$my_static;
    }
}

class B extends A
{
    public function staticValue2() {
        return parent::$my_static;
    }
}

echo  A::$my_static . "<br>";


$obj = new A();
echo $obj->staticValue() . "<br>";
echo $obj->my_static . "<br><hr><br>";      // no se puede usar la propiedad $my_static



echo  A::$my_static . "<br>";
$classname = 'A';
echo  $classname::$my_static . "<br><hr><br>"; // A partir de PHP 5.3.0


echo B::$my_static . "<br>";
$b = new B();
echo $b->staticValue2() . "<br>";

?>
