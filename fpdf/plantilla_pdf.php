<?php 
	require 'fpdf.php';
	class PDF extends FPDF{

		function header (){
			$this->Image('../Complementos/SEPpdf.png', 10, 11, 185);
			$this->Ln(25);	
		}
		function footer(){
			$this->SetY(-15);
			$this->SetFont('Arial', 'I', 8);
			$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
		}
	}
?>
