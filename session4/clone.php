<?php 
  class A {
  	
  	public $x=5;
  	public $y;
  	
  	function  __clone(){
    	echo 'me estan clonando<br>';	
  	}
  
  	
  }

/*
  $a = new A;   // se instancia el objeto $a
  $b=$a;        // se crea otro objeto que referencia $a
  
  $b->x=10;		// se modifica la propiedad x
  
  echo $a->x;   
*/
  
  $a = new A;
  $b = clone $a;   // se clona el objeto $a hacia $b
  $b->x=10;
  echo $a->x;
  
  
  ?>