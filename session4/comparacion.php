<?php 
  class A {
  	
  	public $x=5;
  	public $y;
  	
   	
  }

  
  $a = new A;
  $b = clone  $a;   // se clona el objeto $a hacia $b
  //$b->x=10;
  if ($a===$b)  echo 'son iguales';
  else echo 'son diferentes';
  
  
  
  
  
  
  

?>