<?php
    include_once 'fpdf/fpdf.php';
    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->Output();
?>