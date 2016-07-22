<?php
require('../fpdf/fpdf.php');
require('conexion.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../images/banner_top1.jpg' , 30 ,8, 150 , 13,'jpg');
$pdf->Cell(18, 10, '', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(45, 8, '', 0);
$pdf->Cell(100, 8, 'TODOS LOS EGRESADOS REGISTRADOS EN SISEEPV', 0);
$pdf->Ln(23);

$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(10, 8, 'No.', 0);
$pdf->Cell(50, 8, 'NOMBRE ', 0);
$pdf->Cell(50, 8, utf8_decode('APELLIDOS'), 0);
$pdf->Cell(40, 8, 'CORREO', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA

$consulta = $base->query("SELECT * FROM graduate");
$item = 0;	
//$totaluni = 0;
//$totaldis = 0;
while ($datos = $consulta->fetch()) {
	$item = $item+1;
	$name = utf8_decode($datos['name']);
	$last_name = utf8_decode($datos['last_name']);
	$email = utf8_decode($datos['email']);
//	$totaluni = $totaluni + $productos2['precio_unit'];
//	$totaldis = $totaldis + $productos2['precio_dist'];

	$pdf->Cell(10, 8, $item, 0);
	$pdf->Cell(50, 8, $name, 0);
	$pdf->Cell(50, 8, $last_name, 0);
	$pdf->Cell(50, 8, $email, 0);	
	$pdf->Ln(8);
}

$pdf->Output();
?>