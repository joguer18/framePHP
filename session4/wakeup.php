<?php
class Mario
{
 
    public $mensaje = 'Hola, ¿que haces?';
 
   
 
    public function __sleep(){
        $this->mensaje = 'He sido serializado';
        return array('mensaje');
    }
 
    public function __wakeup(){
        $this->mensaje = 'ola k ase';
    }
 
}
 
$mario = new Mario();
var_dump($mario); //Imprime: object(Mario)#1 (1) { ["mensaje"]=> string(18) "Hola, ¿que haces?" }
 echo '<br>';
$mario = serialize($mario);
var_dump($mario); //Imprime: string(57) "O:5:"Mario":1:{s:7:"mensaje";s:19:"He sido serializado";}"
 echo '<br>';
$mario = unserialize($mario);
var_dump($mario); //Imprime: object(Mario)#1 (1) { ["mensaje"]=> string(9) "ola k ase" }

 
?>