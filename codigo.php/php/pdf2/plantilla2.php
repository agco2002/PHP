<?php
require 'fpdf/fpdf.php';
class PDF extends FPDF
{
    function Header()
{
	$this->SetFillColor(59, 131, 189); // R, G, B (valores del 0 al 255)
    $this->Rect(0, 0, 210, 297, 'F'); //Rectángulo del tamaño de la página, 'f' Para rellenar el fondo
    
$this->image("imagen/datos.png",20,10,40,);//posicion de x y y alto ancho y alto
$this->setfont('arial','b',12);
$this->cell(30);

$this->SetTextColor(0,0,0);

$this->cell(120,10,'Reporte alumnos',0,0,'C');
$this->cell(25,5,"Fecha:". date("d/m/y"),0,1,'C');
$this->Ln(10);
}
function ChapterTitle($num, $label)
		{
			// Arial 12
			$this->SetFont('Arial','',12);
			// Color de fondo
			$this->SetFillColor(37,40,80);
			// Título
			$this->Cell(0,6,"Capítulo $num : $label",0,1,'L',true);
			// Salto de línea
			$this->Ln(4);
		}

function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo(). '/{nb}',0,0,'C');
    
}
}

?>  