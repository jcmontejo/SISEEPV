<?php
$date1 = $_POST['llegada'];
$date2 = $_POST['salida'];
$tipo = $_POST['tipo'];
$datetime1 = new DateTime($date1);
$datetime2 = new DateTime($date2);
$interval = $datetime1->diff($datetime2);
echo $interval->format('%R%a');

if ($tipo == 1) {
	$precio1 = 300;
	$dias = $interval->format('%R%a');
	$total = $dias * $precio1;
	/*echo "<br>";*/
	/*echo $total;*/
	echo '<script language="javascript">window.location="consultar.php?var=$total"</script>;';
}
if ($tipo == 2) {
	$precio1 = 400;
	$dias = $interval->format('%R%a');
	$total = $dias * $precio1;
	echo "<br>";
	echo $total;
}
if ($tipo == 3) {
	$precio1 = 450;
	$dias = $interval->format('%R%a');
	$total = $dias * $precio1;
	echo "<br>";
	echo $total;
}
if ($tipo == 4) {
	$precio1 = 100;
	$dias = $interval->format('%R%a');
	$total = $dias * $precio1;
	echo "<br>";
	echo $total;
}
?>
