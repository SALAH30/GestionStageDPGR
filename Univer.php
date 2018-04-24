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

            $db = data_base_connect ();
            
            
            $statement = $db->prepare('INSERT
             INTO université ( Code , Nom_Fr , Nom_Ar , Adresse , Tél , Fax , Site_Web )
                                          
                       VALUES (:Code , :NomFr , :NomAr , :Adresse , :Tel , :Fax , :SiteWeb )');
                
                //(digits,require2,required1,required2,required9,require9,url2,digitsUniv)
                
$clean['digits'] = (isset( $_POST['digits'] )?  $_POST['digits'] : '');     
$statement->bindParam(':Code', $clean['digits']);

$clean['required4'] = (isset( $_POST['required4'] )?  $_POST['required4'] : '');  
$statement->bindParam(':NomAr', $clean['required4']);

$clean['required1'] = (isset($_POST['required1'])?  $_POST['required1'] : '');  
$statement->bindParam(':NomFr', $clean['required1']);

$clean['require2'] = (isset($_POST['require2'] )?  $_POST['require2'] : '');  
$statement->bindParam(':Adresse', $clean['require2']);

$clean['required9'] = (isset($_POST['required9'] )?  $_POST['required9']: ''); 
$statement->bindParam(':Tel',$clean['required9']);

$clean['require9'] = (isset($_POST['require9'] )?  $_POST['require9'] : '');  
$statement->bindParam(':Fax',$clean['require9']);

$clean['url2'] = (isset($_POST['url2'] )?  $_POST['url2'] : '');
$statement->bindParam (':SiteWeb',$clean['url2']);

$statement->execute();

?>