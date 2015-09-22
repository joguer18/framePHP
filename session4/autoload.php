<?php

function __autoload($class) {
    if (!file_exists($file = dirname(__FILE__) . '/class' . $class . '.php')) return;
    require_once($file);
}

//include_once('clases/classAreas.php');


$a = new Areas();
echo $a->rectangulo(2,3);



?>
