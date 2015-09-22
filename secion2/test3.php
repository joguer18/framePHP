<?php 
if (isset($_COOKIE['test'])){
	echo  'lacookie tiene vigencia y valor'.$_COOKIE['test'].'<br>';
}
else 
	echo 'la cookie ya no existe';

?>