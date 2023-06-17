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
    $this->Cell(120,10,'Engagement pour prise en charge',1,0,'C');
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
$pdf->SetFont('Times','',12);
$pdf->Write(10,utf8_decode('N° d\'ordre : ....................................'));
$pdf->SetFont('Times','B',12);

$pdf->Cell(120,30,'DESTINATAIRE : ');
$pdf->ln(12.5);
$pdf->SetX(105);
$pdf->Write(5,utf8_decode($_GET['des']));
$pdf->ln(10);
$pdf->SetFont('Times','U',16);
$pdf->Cell(20,20,'OBJET : PRISE EN CHARGE :');
$pdf->SetFont('Times','',12);
$pdf->ln(10);
$pdf->Cell(20,20,'Monsieur,');
$pdf->ln(5);
$pdf->Cell(20,20,'Nous avons l\'honneur de vous adresser notre agent qui a les informations suivantes :');
$pdf->ln(7.5);
$pdf->SetX(15);
$pdf->Cell(20,20,'- Nom :');
$pdf->ln(7.5);
$pdf->SetX(30);
$pdf->SetFont('Times','B',12);
$pdf->Write(5,utf8_decode($_GET['nom']));
$pdf->SetFont('Times','',12);
$pdf->ln(-3);
$pdf->SetX(15);
$pdf->Cell(20,20,'- Prenom :');
$pdf->ln(7.5);
$pdf->SetX(34);
$pdf->SetFont('Times','B',12);
$pdf->Write(5,utf8_decode($_GET['prenom']));
$pdf->SetFont('Times','',12);
$pdf->ln(-3);
$pdf->SetX(15);
$pdf->Cell(20,20,'- Matricule :');
$pdf->ln(7.5);
$pdf->SetX(37);
$pdf->SetFont('Times','B',12);
$pdf->Write(5,utf8_decode($_GET['mat']));
$pdf->SetFont('Times','',12);
$pdf->ln(-3);
$pdf->SetX(15);
$pdf->Cell(20,20,'- Service :');
$pdf->ln(7.5);
$pdf->SetX(34);
$pdf->SetFont('Times','B',12);
$pdf->Write(5,utf8_decode($_GET['ser']));
$pdf->SetFont('Times','',12);
$pdf->ln(-3);
$pdf->SetX(15);
$pdf->Cell(20,20,'- Code d\'emploi :');
$pdf->ln(7.5);
$pdf->SetX(45);
$pdf->SetFont('Times','B',12);
$pdf->Write(5,utf8_decode($_GET['cemp']));
$pdf->SetFont('Times','',12);
$pdf->ln(-3);
$pdf->SetX(15);
$pdf->Cell(20,20,'- Division :');
$pdf->ln(7.5);
$pdf->SetX(37);
$pdf->SetFont('Times','B',12);
$pdf->Write(5,utf8_decode($_GET['div']));
$pdf->SetFont('Times','',12);
$pdf->ln(-3);
$pdf->SetX(15);
$pdf->Cell(20,20,'- Bilan :');
$pdf->ln(7.5);
$pdf->SetX(30);
$pdf->SetFont('Times','B',12);
$pdf->Write(5,utf8_decode($_GET['bilan']));
$pdf->SetFont('Times','',12);
$pdf->ln(7);
$pdf->Write(5,utf8_decode('Et portons à votre connaissance que le GROUPE O.C.P prend en charge les frais engager à cet effet. Dans le cas où le malade devrait etre déplacé dans un autre établissement hospitalier, nous vous saurions gré de bien vouloir demander votre avis au préalable.'));
$pdf->ln(4);
$pdf->Write(10,utf8_decode('Vous voudriez bien : '));
$pdf->ln(5);
$pdf->SetX(15);
$pdf->Write(10,utf8_decode('- Etablir vos factures en cinq exemplaires au nom de : OCP.SA/SAFI.'));
$pdf->ln(5);
$pdf->SetX(15);
$pdf->Write(10,utf8_decode('- Référencer vos factures.'));
$pdf->ln(5);
$pdf->SetX(15);
$pdf->Write(10,utf8_decode('- Mentionner votre domicillation bancaire ou postale (RIB).'));
$pdf->ln(5);
$pdf->SetX(15);
$pdf->Write(10,utf8_decode('- Nous retourner impérativement la feuille de maladie numéro : '));
$pdf->SetFont('Times','B',12);
$pdf->Write(10,utf8_decode($_GET['num']));
$pdf->SetFont('Times','',12);
$pdf->ln(10);
$pdf->Write(5,utf8_decode('Nous vous en souhaitons bonne réception et vous prions d\'agréer, Monsieur, l\'expression de nos meilleurs salutations.'));
$pdf->ln(10);
$pdf->SetX(120);
$pdf->Write(5,utf8_decode('Fait à Safi. Le : '));
$pdf->SetX(146);
$date = date("d-m-Y");
$pdf->Write(5,utf8_decode($date));
$pdf->ln(10);
$pdf->SetX(90);
$pdf->Write(5,utf8_decode('P. LE PRESIDENT DIRECTEUR GENERALE & P.O.'));
$pdf->ln(5);
$pdf->SetX(90);
$pdf->Write(5,utf8_decode('LE CHEF DU SERVICE A LA SANTE AU TRAVAIL:'));
$pdf->Output();
?>