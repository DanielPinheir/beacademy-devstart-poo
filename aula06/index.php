<?php

include 'vendor/autoload.php';

//criando um PDF com Dompdf
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$html =  '';

for ($i = 0; $i < 10; $i++) {
    $html .= 'ó o pente! <br>';
}

$dompdf->loadHtml('<h1>Olá mundo, estou aprendendo PHP!!!</h1>' . $html);

//linha opcional
// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();
