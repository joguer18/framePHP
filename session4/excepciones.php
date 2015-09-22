<?php
function division($dividendo, $divisor) {
    if (!$divisor) {
        throw new Exception('Divisi�n por cero.',1);
    }
    else return $dividendo/$divisor;
}
 


// codigo principal
try {
	$r = 5/0;
   // echo division(5,0) . '<br>';
    
} catch (Exception $e) {
    echo 'Excepci�n capturada: ',  $e->getMessage(), '<br>';
    echo 'Codigo de error ',$e->getCode(),'<br>';
    echo 'Linea de error ',$e->getLine(),'<br>';
    echo 'Archivo de error ',$e->getFile(),'<br>';
}

// Continuar la ejecuci�n
echo 'Fin del codigo';
?>
