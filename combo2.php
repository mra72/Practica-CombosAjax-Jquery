<?php
$rpta="";
if ($_POST["elegido"]=="España") {
	$rpta= '
	<option value="vacio">(--vacío--)</option>	
	<option value="op3_1">Madrid</option>
	<option value="op3_2">Barcelona</option>
	<option value="op3_3">Sevilla</option>
	';	
}
if ($_POST["elegido"]=="Francia") {
	$rpta= '
	<option value="vacio">(--vacío--)</option>	
	<option value="op3_1">Chateau</option>
	<option value="op3_2">París</option>
	';	
}

if ($_POST["elegido"]=="Italia") {
	$rpta= '
	<option value="vacio">(--vacío--)</option>	
	<option value="op3_1">Venecia</option>
	<option value="op3_2">Florencia</option>
	';	
}

if ($_POST["elegido"]=="Carnívoros") {
	$rpta= '
	<option value="vacio">(--vacío--)</option>	
	<option value="op3_1">León</option>
	<option value="op3_2">Tigre</option>
	';	
}

if ($_POST["elegido"]=="Herbivoros") {
	$rpta= '
	<option value="vacio">(--vacío--)</option>	
	<option value="op3_1">Koala</option>
	<option value="op3_2">Tortuga</option>
	';	
}

if ($_POST["elegido"]=="Dosruedas") {
	$rpta= '
	<option value="vacio">(--vacío--)</option>	
	<option value="op3_1">Bicicleta</option>
	<option value="op3_2">Moto</option>
	';	
}

if ($_POST["elegido"]=="Cuatroruedas") {
	$rpta= '
	<option value="vacio">(--vacío--)</option>	
	<option value="op3_1">Coche</option>
	<option value="op3_2">Camión</option>
	';	
}

echo $rpta;	
?>