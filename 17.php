<?php
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial", "B", "12");
$pdf->Cell(40, 10, 'Hello Worlds!');
$pdf->Output("D", "hello.pdf");
