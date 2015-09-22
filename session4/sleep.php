<?php

class Estudiante{
    private $nombre = '';
    private $puntuacion = 0;
   
   
    public function __construct($nombre, $puntuacion)
    {
        $this->nombre = $nombre;
        $this->puntuacion = $puntuacion;
       
    }
   
    public function show()
    {
        echo $this->nombre.' '.$this->puntuacion.'<br>';
    }
   
    function __sleep()
    {
        echo 'Ejecutando el sleep...';
        return array('nombre','puntuacion');
    }
   
    function __wakeup()
    {
        echo 'Waking up...';
    }
}


//codigo principal



$alumno = new Estudiante('Juan Perez',20);
$alumno->show();

$datos_alumno = serialize($alumno);


echo $datos_alumno;

?>
