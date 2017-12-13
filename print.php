<?php
// Include the main TCPDF library (search for installation path).
require_once('tcpdf-master/tcpdf_import.php');

// create new PDF document
$pdf = new TCPDF('P','mm','A4', true, 'utf-8', false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
$pdf->SetPrintHeader(false);
//$pdf->SetMargins (5.0, 0, 5.0);

// ---------------------------------------------------------

// set font
$pdf->SetFont('times','',10);
$data = date("d      m      Y"); 
// add a page
$pdf->AddPage();
    	 $pdf->setCellPaddings(0,0,0,2);
$pdf->StartTransform();
// Rotate 20 degrees counter-clockwise centered by (70,110) which is the lower left corner of the rectangle
$pdf->Rotate(270, 80, 100);


// Stop Transformation

     // $pdf->Rotate(15, 12, $paciente->RetornaDados('nome'), 270, 0);
		//$pdf->Rotate(5, 32, '06 / 02 / 2015', 270, 0);
		 //$pdf->Rotate(15, 19, $_POST['nome'], 270, 0);
		 		// $pdf->Text(49, 169, $data);
        // $pdf->Text(-600, 160, $_POST['nome']);
		 $pdf->Text(49, 169, $data);
         $pdf->Text(0, 157, $_POST['nome']);
        //$pdf->Text(0, 161, $_POST['nome']);
		 
		 $pdf->Text(140, 122, $_POST['ODesfe']);
		 $pdf->Text(160, 122, $_POST['ODcili']);
		 $pdf->Text(180, 122, $_POST['ODeixo']);
		 $pdf->Text(195, 126, $_POST['ODdp']);
		 $pdf->Text(220, 122, $_POST['ODdnp']);
		 
		 $pdf->Text(140, 134,$_POST['OEesfe']);
		 $pdf->Text(160, 134,$_POST['OEcili']);
		 $pdf->Text(180, 134,$_POST['OEeixo']);
		 $pdf->Text(202, 132,$_POST['OEdp']);
		 $pdf->Text(220, 134,$_POST['OEdnp']);
		 
		 //tipo de lente
		 $pdf->Text(190, 154, $_POST['tipo1']);
		 //$pdf->Text(195, 55, $_POST['tipo2']);
		// $pdf->Rotate(19, 200, $paciente->RetornaDados('oeCil'), 270, 0);
		
		 $pdf->Text(154, 250, $_POST['adicao']);
		 $pdf->Text(140, 162, $_POST['ODlonge']);
		 $pdf->Text(160, 162, $_POST['OElonge']);
		 $pdf->Text(140, 168, $_POST['ODperto']);
		 $pdf->Text(160, 168, $_POST['OEperto']);
		// $pdf->Rotate(41, 195, $paciente->RetornaDados('RXEixoOE'), 270, 0);

		 $pdf->MultiCell(50, 180, $_POST['tipo2'], 0, '', 0, 2, 5, 122, false, 0, false, true, 50);

//	 $text = $paciente->RetornaDados('ObsBIO');

$pdf->StopTransform();
       $pdf-> Output();

/*
if ($_POST) {

$data = date("d      m      Y"); 
 
// Caminho para o arquivo fpdf.php
 require_once("fpdf17/fpdf.php");
// New - Novo documento PDF com orientação P - Retrato (Picture) que pode ser também L - Paisagem (Landscape)
$pdf= new FPDF('P','mm','A4');

 
$pdf-> Open();
 
// Definindo Fonte
$pdf->SetFont('arial','',10);
 
//posicao vertical no caso -1 e o limite da margem
$pdf->SetY("-2");
 
        //::::::::::::::::::Cabecalho::::::::::::::::::::
       // $pdf->Cell(0,5,'Gerando se FPDF',0,0,'L');
       // $pdf->Cell(0,5,'GUIA DO PHP',0,1,'R');
        $pdf->Cell(0,0,'',0,0,'L');
       // $pdf->Rotate(15, 12, $paciente->RetornaDados('nome'), 270, 0);
		//$pdf->Rotate(5, 32, '06 / 02 / 2015', 270, 0);
		 $pdf->Rotate(15, 19, $_POST['nome'], 270, 0);
		 $pdf->Rotate(5, 68, $data, 270, 0);
		 $pdf->Rotate(56, 155, $_POST['ODesfe'], 270, 0);
		 $pdf->Rotate(56, 175, $_POST['ODcili'], 270, 0);
		 $pdf->Rotate(56, 195, $_POST['ODeixo'], 270, 0);
		 $pdf->Rotate(55, 219, $_POST['ODdp'], 270, 0);
		 $pdf->Rotate(56, 235, $_POST['ODdnp'], 270, 0);
		 
		 $pdf->Rotate(43, 155, $_POST['OEesfe'], 270, 0);
		 $pdf->Rotate(43, 175, $_POST['OEcili'], 270, 0);
		 $pdf->Rotate(43, 195, $_POST['OEeixo'], 270, 0);
		 $pdf->Rotate(45, 225, $_POST['OEdp'], 270, 0);
		 $pdf->Rotate(43, 235, $_POST['OEdnp'], 270, 0);
		 
		 //tipo de lente
		 $pdf->Rotate(25, 210, $_POST['tipo1'], 270, 0);
		 $this->Rotate(45);
		 $pdf->Rotate(16, 210, $_POST['tipo2'], 270, 0);
		// $pdf->Rotate(19, 200, $paciente->RetornaDados('oeCil'), 270, 0);
		
		 $pdf->Rotate(31, 170, $_POST['adicao'], 270, 0);
		 $pdf->Rotate(12, 155, $_POST['ODlonge'], 270, 0);
		 $pdf->Rotate(12, 179, $_POST['OElonge'], 270, 0);
		 $pdf->Rotate(5, 155, $_POST['ODperto'], 270, 0);
		 $pdf->Rotate(5, 179, $_POST['OEperto'], 270, 0);
		// $pdf->Rotate(41, 195, $paciente->RetornaDados('RXEixoOE'), 270, 0);
   	 


//	 $text = $paciente->RetornaDados('ObsBIO');


       $pdf-> Output();
}*/
?>
<script>
window.print();
</script>
