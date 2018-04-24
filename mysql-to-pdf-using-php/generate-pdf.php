<?php
require('mysql_table.php');

class PDF extends PDF_MySQL_Table
{
function Header()
{
	//Title
	$this->SetFont('Arial','',18);
	$this->Cell(0,6,'Mysql',1,1,'C');
	$this->Ln(15);
	//Ensure table header is output
	parent::Header();
}
}

//Connect to database
mysql_connect('localhost','root','');
mysql_select_db('projet');

$pdf=new PDF();
$pdf->AddPage();
//First table: put all columns automatically
$pdf->Table('SELECT `Nom_Fr`,`Nature` from Chercheur Join Enseignant Where Chercheur.Code=Enseignant.Chercheur_Code');
$pdf->AddPage();
//Second table: specify 3 columns
/*$pdf->AddCol('user_login',40,'','C');
$pdf->AddCol('user_pass',40,'Password','C');
$pdf->AddCol('user_email',40,'Email','C');
$prop=array('HeaderColor'=>array(255,150,100),
			'color1'=>array(210,245,255),
			'color2'=>array(255,255,210),
			'padding'=>2);
$pdf->Table('select `user_pass`,  `user_email`, `user_login` from users order by `user_login` limit 0,10',$prop);*/

//$pdf->Output("C:\Users\John\Desktop/somename.pdf",'F'); 


$pdf->Output($downloadfilename.".pdf"); 
header('Location: '.$downloadfilename.".pdf");
?>
