<?php 
 session_start();
 $id_usu=$_SESSION["ses_id"];
	include 'plantilla_pdf.php';
	require 'conexion2.php';

	$query="SELECT * FROM visita WHERE usuario='$id_usu'";
	$resultado = $mysqli->query($query);

	$pdf = new PDF('P','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();

	$pdf->SetFillColor(232, 232, 232);
	$pdf->SetFont('Arial', 'B', 12);
	$pdf->Cell (30, 5, 'FECHA', 1, 0, 'C', 1);  
	$pdf->Cell (100, 5, 'NOMBRE', 1, 0, 'C', 1);
	$pdf->Cell (30, 5, 'CCT', 1, 0, 'C', 1);
	$pdf->Cell (12, 5, 'DO', 1, 0, 'C', 1);
	$pdf->Cell (12, 5, 'ZE', 1, 1, 'C', 1);

	$pdf->SetFont('Arial','',10);

	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(30,6,utf8_decode($row['titulo']),1,0,'C');
		$pdf->Cell(100,6,utf8_decode($row['nombre_esc']),1,0,'C');
		$pdf->Cell(30,6,utf8_decode($row['cct_esc']),1,0,'C');
		$pdf->Cell(12,6,utf8_decode($row['do']),1,0,'C');
		$pdf->Cell(12,6,utf8_decode($row['ze']),1,1,'C');
	}

	$pdf->Output();
?>