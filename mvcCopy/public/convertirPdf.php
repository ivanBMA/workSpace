<?php
include_once "./vendor/autoload.php";
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->loadHtml();
$dompdf->render();
$contenido = $dompdf->output();
$nombreDelDocumento = "1_hola.pdf";
$bytes = file_put_contents($nombreDelDocumento, $contenido);