<?php
require('fpdf/fpdf.php');
 
class PDF extends FPDF
{
//Tableau coloré
function ExportTableau($header,$data)
{
    //Couleurs, épaisseur du trait et police grasse
    $this->SetFillColor(255,255,255); //fond des entetes de colonnes
    $this->SetTextColor(0); //couleur du texte des entetes des colonnes
    $this->SetDrawColor(0); // couleur des bordures
    $this->SetLineWidth(.3); //epaisseur des traits
    $this->SetFont('','B');
     
    //En-tête
    $w=array(10,40,45,40,30,50,20,27,20);
    for($i=0;$i<count($header);$i++)
        $this->Cell($w[$i],7,$header[$i],1,0,'C',1);
    $this->Ln();
     
    //Restauration des couleurs et de la police
    $this->SetFillColor(224,235,255); //couleur du fond des cases
    $this->SetTextColor(0); //couleur du texte des cases
    $this->SetFont('');
     
    //Données
    $fill=false;
    foreach($data as $row)
    {
        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);
        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);
        $this->Cell($w[2],6,$row[2],'LR',0,'L',$fill);
        $this->Cell($w[3],6,$row[3],'LR',0,'L',$fill);
        $this->Cell($w[4],6,$row[4],'LR',0,'L',$fill);
        $this->Cell($w[5],6,$row[5],'LR',0,'L',$fill);  
        $this->Cell($w[6],6,$row[6],'LR',0,'L',$fill);
        $this->Cell($w[7],6,$row[7],'LR',0,'L',$fill);
        $this->Cell($w[8],6,$row[8],'LR',0,'L',$fill);       
        $this->Ln();
        $fill=!$fill;
    }
    $this->Cell(array_sum($w),0,'','T');
}
}
 
// On se connecte à la base
$conne = new mysqli('localhost','root','','mediatech');
//Requete SQL
$query = "SELECT * FROM `liste`";
$result = mysqli_query($conne,$query) or die ('Erreur SQL !<br />' . $query . '<br />' . mysqli_error());
 
//Boucle sur les resultats
$data = array();
while($col = mysqli_fetch_array($result))
{
    array($col);
    $data[] = $col;
}
 
//Creation pdf
$pdf=new PDF('L');
//Titres des colonnes
$header=array('id','Nom','Prenom','etablissement','niveau','adresse','contact','temp','sexe');
//Tableau
$pdf->SetFont('Arial','',8);
$pdf->SetMargins(5,5);
$pdf->AddPage();
$pdf->ExportTableau($header,$data);
$pdf->Output('liste_des_élèves_mediatech_'.date("Y_m_d").'.pdf','I');
?>