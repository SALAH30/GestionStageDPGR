<?php
session_start();
?>
<?php
/***** EDIT BELOW LINES *****/
$xls_filename = 'Université '.date('d-m-Y').'.xls'; // Define Excel (.xls) file name
 
/***** DO NOT EDIT BELOW LINES *****/
// Create MySQL connection
include_once("function.php");
$db = data_base_connect();  
function select_univ($dbh)
{
     $stmt = $dbh->prepare("SELECT * From Université");
      $stmt->execute();
     return($stmt);  
}
$result = select_univ($db);
     
// Header info settings
header("Content-Type: application/xls");
header("Content-Disposition: attachment; filename=$xls_filename");
header("Pragma: no-cache");
header("Expires: 0");
/***** Start of Formatting for Excel *****/
// Define separator (defines columns in excel &amp; tabs in word)
$sep = "\t"; // tabbed character
$nb=$result->columnCount();
// Start of printing column names as names of MySQL fields
echo 'Nom Francais '."\t".'Nom Arabe'."\t".'Adresse '."\t".'Telephone'."\t".'Fax '."\t".'Site Web';
print("\n");
// End of printing column names
// Start while loop to get data
while($row = $result->fetch())
{
  $schema_insert = "";
  for($j=0; $j<$nb ; $j++)
  {
    if(!isset($row[$j])) {
      $schema_insert .= "NULL".$sep;
    }
    elseif ($row[$j] != "") {
      $schema_insert .= "$row[$j]".$sep;
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