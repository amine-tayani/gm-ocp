
<?php
require('fpdf.php');
class PDF extends FPDF
{
// En-tête
function Header()
{
    // Logo
    $this->Image('../images/OCP-logo.jpg',10,6,30);
    // Police Arial gras 15
    $this->SetFont('Arial','B',15);
    // Décalage à droite
    $this->Cell(40);
    // Titre
    $this->Cell(120,10,'ORDONNANCE',1,0,'C');
    // Saut de ligne
    $this->Ln(20);
}

// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(-15);
    // Police Arial italique 8
    $this->SetFont('Arial','I',8);
    // Numéro de page
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',18);
$pdf->Cell(20,20,'Nom :');
$pdf->ln(7.5);
$pdf->SetX(30);
$pdf->SetFont('Times','B',18);
$pdf->Write(5,utf8_decode($_GET['nom']));
$pdf->SetFont('Times','',18);
$pdf->ln(7.5);
$pdf->Cell(20,20,'Prenom :');
$pdf->ln(7.5);
$pdf->SetX(36);
$pdf->SetFont('Times','B',18);
$pdf->Write(5,utf8_decode($_GET['prenom']));
$pdf->SetFont('Times','',18);
$pdf->ln(7.5);
$pdf->Cell(20,20,'Matricule :');
$pdf->ln(7.5);
$pdf->SetX(42);
$pdf->SetFont('Times','B',18);
$pdf->Write(5,utf8_decode($_GET['mat']));
$pdf->SetFont('Times','',18);
$pdf->ln(7.5);
$pdf->Cell(20,20,'Service :');
$pdf->ln(7.5);
$pdf->SetX(34.5);
$pdf->SetFont('Times','B',18);
$pdf->Write(5,utf8_decode($_GET['ser']));
$pdf->SetFont('Times','',18);
$pdf->ln(7.5);
$pdf->Cell(20,20,'Bilan :');
$pdf->ln(7.5);
$pdf->SetX(31);
$pdf->SetFont('Times','B',18);
$pdf->Write(5,utf8_decode($_GET['bilan']));
$pdf->SetFont('Times','',18);
$pdf->ln(15);
$pdf->SetX(120);
$pdf->Write(5,utf8_decode('Signature du médecin'));
$pdf->ln(90);
$pdf->SetX(106);
$pdf->Write(5,utf8_decode('Fait à Safi. Le : '));
$pdf->SetX(146);
$date = date("d-m-Y");
$pdf->Write(5,utf8_decode($date));
$pdf->SetFont('Times','',10);
$pdf->ln(57);
$pdf->Write(5,utf8_decode('OCP SA'));
$pdf->ln(5);
$pdf->Write(5,utf8_decode('SITE DE SAFI'));
$pdf->ln(5);
$pdf->Write(5,utf8_decode('Route El Youdi-R.P.25,Safi - Téléphone : +212 (0) 34 86 90 89 - Fax :  +212 (0) 5 24 46 26 89 www.groupeocp.ma'));
$pdf->Output();
?>
