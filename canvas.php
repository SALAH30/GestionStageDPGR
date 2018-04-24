<?php
session_start();
?>

<?php
/***** EDIT BELOW LINES *****/
$xls_filename = 'Canevas '.date('d-m-Y').'.xls'; // Define Excel (.xls) file name
 
/***** DO NOT EDIT BELOW LINES *****/
// Create MySQL connection
include_once("function.php");
$db = data_base_connect(); 
   
function select_query_chercheur_Stage($dbh)
{
     $stmt = $dbh->prepare("SELECT  Nom_Fr,Prénom_Fr,Stage.Durée,Pays,Ville,Frais_de_Séjour,Frais_Visa,Frais_Transport FROM Chercheur JOIN Stage WHERE Chercheur.Code=Stage.Chercheur_Code ");
      $stmt->execute();
     return($stmt);  
}

$result = select_query_chercheur_Stage($db);;  
// Header info settings
header("Content-type: application/vnd.ms-excel; charset=utf-8");
header("Content-Disposition: attachment; filename=$xls_filename");
header("Pragma: no-cache");
header("Expires: 0");
/***** Start of Formatting for Excel *****/
// Define separator (defines columns in excel &amp; tabs in word)
$sep = "\t"; // tabbed character
$nb=$result->columnCount();
// Start of printing column names as names of MySQL fields
echo utf8_decode("\t\t\tCANEVAS N°: 2 \n\t                ETAT NOMINATIF DES ENSEIGNANTS CHERCHEURS \n             HOSPITALO UNIVERSITAIRES ET CHERCHEURS PERMANANTS AYANT BENEFICIERS  \n                  D'UN PERFECTIONNEMENT A L'ETRANGER (INFERIEURE OU EGALE A 06 MOIS ) \n                                                  AU TITRE DE L'EXERCICE ".date('d/m/Y')." \n \n");
echo utf8_decode("\t \t Montant exacte perçu par le bénéficiaire \n");
echo utf8_decode('Nom et Prénom'."\t".'Durée de Stage'."\t".'Pays - Ville'."\t".'Frais d\'allocation en DA'."\t".'Frais d\'inscription en DA'."\t".'Frais de passage en DA'."\t");

print("\n");
// End of printing column names
 
// Start while loop to get data
while($row = $result->fetch())
{
  $schema_insert = "";
  utf8_decode($schema_insert);
  for($j=0; $j<$nb ; $j++)
  {
    utf8_decode($row[$j]);
    if(!isset($row[$j])) {
      $schema_insert .= "NULL".$sep;
    }
    elseif ($row[$j] != "") {
      if(($j==0)||($j==3)){
      $schema_insert .=  utf8_decode("$row[$j]")." - ";
    }elseif ($j==2)  $schema_insert .= "$row[$j]"." jours".$sep;else $schema_insert .=  utf8_decode("$row[$j]").$sep;
    }
    else {
      $schema_insert .= "".$sep;
    }
  }
  $schema_insert = str_replace($sep."$", "", $schema_insert);
  $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
  $schema_insert .= "\t";
  print(trim($schema_insert));
  print "\n";
}
?>
