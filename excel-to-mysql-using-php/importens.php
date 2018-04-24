<?php
ini_set("display_errors",1);
require_once 'excel_reader2.php';
require_once 'db.php';
$data = new Spreadsheet_Excel_Reader("excel_reader.xls");
function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");

     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

     return ($dbh);
   }
            $db = data_base_connect ();

$html="<table border='1'>";
$i=0;
  if (isset($data->sheets[$i]['cells'])){
    if(count($data->sheets[$i]['cells'])>0) // checking sheet not empty
    {
    
      for($j=1;$j<=count($data->sheets[$i]['cells']);$j++) // loop used to get each row of the sheet
      {
        $html.="<tr>";
        for($k=1;$k<=count($data->sheets[$i]['cells'][$j]);$k++) // This loop is created to get data in a table format.
        {
          $html.="<td>";
          $html.=$data->sheets[$i]['cells'][$j][$k];
          $html.="</td>";
        }
        $nom_fr =  mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][1]);
        $prenom_fr = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][2]);
        $sexe = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][3]);
        $dat_nai = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][4]);
        $grad = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][5]);
        $date_nom = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][6]);
        $date_rec = mysqli_real_escape_string($connection,$data->sheets[$i]['cells'][$j][7]);
                $l=1;
                if($sexe=='Feminin') $sexe='Féminin';
                if($prenom_fr=='Faical') $prenom_fr='Faiçal';
                if($grad=='Maitre de conference A') $grad='Maître de conférence A';
                elseif($grad=='Maitre de conference B') $grad='Maître de conférence B';
                $query = "insert into Chercheur(Nom_Fr,Prénom_Fr,Sexe,Date_Naissance,Laboratoire_Code)
                values('".$nom_fr."','".$prenom_fr."','".$sexe."','".$dat_nai."','".$l."')";
                 //mysqli_query($connection,$query);
                $st = $db->prepare($query);
                $st->execute();
                $id = $db->lastInsertId('Code');
                $query1 = "insert into Enseignant(Code_Enseignant,Chercheur_Code,Grade,Date_Nomination,Date_Recrutement)                               values('".$id."','".$id."','".$grad."','".$date_nom."','".$date_rec."')";
                $st = $db->prepare($query1);
                $st->execute();
        $html.="</tr>";
      }
    }
  }

$html.="</table>";
echo "\t\t\tTableau des enseignant:\n\n";
echo $html;
echo utf8_decode("<br />Les données sont insérées dans la BDD.");
?>
