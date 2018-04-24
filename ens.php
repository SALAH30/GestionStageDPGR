<?php 
require('includes/config.php'); 
//if not logged in redirect to login page
if(!$user->is_logged_in() ){ header('Location: login.php'); }

 ?>
 
<?php    


   function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   }
/*

$tel=substr($_POST['required9'],5,5);

*/

//-- -----------------------------------------------------
//-- INSERTION TABLE `Chercheur`.
//-- -----------------------------------------------------
   $db = data_base_connect ();
$statement3 = $db->prepare('INSERT
                INTO Enseignant ( Code_Enseignant , Chercheur_Code , Grade , Date_Recrutement , Spécialité , Nature , Date_Nomination ,Date_1_Insc , Université_Code )
                                          
                            VALUES ( :codeE , :codeC ,:grade , :date_recrutement, :specialite, :nature , :date_nomination ,:date_1_insc , :codeU)');
             

      
   // $clean['digits'] = $_POST['digits'];               
           $statement3->bindParam(':codeE', $_GET['id']);       
            
   // $clean['digits'] = $_POST['digits'];               
           $statement3->bindParam(':codeC', $_GET['id']); 
    

            $clean['req'] = (isset( $_GET['req'] )?  $_GET['req'] : '');
            $statement3->bindParam(':grade', $clean['req']);

            $time2 = strtotime((isset( $_GET['dp3'] )?  $_GET['dp3'] : ''));
            $newformat2 = date('Y-d-m',$time2);
            $statement3->bindParam(':date_recrutement', $newformat2);

            $clean['req1'] = (isset( $_GET['req1'] )?  $_GET['req1'] : '');
            $statement3->bindParam(':specialite', $clean['req1']);

            $clean['sport'] = (isset( $_GET['sport'] )?  $_GET['sport'] : '');
            $statement3->bindParam(':nature', $clean['sport']);

            $time3 = strtotime((isset( $_GET['dp2'] )?  $_GET['dp2'] : ''));
            $newformat3 = date('Y-m-d',$time3);
            $statement3->bindParam(':date_nomination', $newformat3);

            $time4 = strtotime((isset( $_GET['dp4'] )?  $_GET['dp4'] : ''));
            $newformat4 = date('Y-m-d',$time4);
            $statement3->bindParam(':date_1_insc',$newformat4);

            $clean['Pays'] = (isset( $_GET['Pays'] )?  $_GET['Pays'] : '');
            $statement3->bindParam(':codeU', $clean['Pays']);
                
        if(isset($_GET['req']))
        {
            try{
            $statement3->execute(); 
            } catch (Exception $e) {
                 exit($e ->getMessage());
		      }   
        }
header('Location: search-form2.php');
        ?>