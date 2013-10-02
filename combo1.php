<?php
$rpta="";
if ($_POST["elegido"]=="Países") {
	$rpta= '
	<option value="vacio">(--vacío--)</option>	
	<option value="España">España</option>
	<option value="Francia">Francia</option>
	<option value="Italia">Italia</option>
	';	
}
if ($_POST["elegido"]=="Animales") {
	$rpta= '
	<option value="vacio">(--vacío--)</option>	
	<option value="Carnívoros">Carnívoros</option>
	<option value="Herbivoros">Herbivoros</option>
	';	
}
if ($_POST["elegido"]=="Automóviles") {
	$rpta= '
	<option value="vacio">(--vacío--)</option>	
	<option value="Dosruedas">De dos ruedas</option>
	<option value="Cuatroruedas">De cuatro ruedas</option>
	';	
}
echo $rpta;	
?>