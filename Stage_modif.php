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

//-- -----------------------------------------------------
//-- INSERTION TABLE `ETAT STAGE`.
//-- -----------------------------------------------------
      /*   $Attestaion = 'true';
         $Frais = 'false';          
         $etat = 'En_Cours';
         $statement4 = $db->prepare("INSERT 
                         INTO suivi_stage( Attestation_Stage , Frais , Etat )
                                   VALUES( $Attestaion , $Frais , :etat )");
         $statement4->bindParam(':etat', $etat );
         $statement4->execute();
$id = $db->lastInsertId('Code_Stage');
*/

//-- -----------------------------------------------------
//-- MODIFICATION TABLE `STAGE`.
//-- -----------------------------------------------------
$statement = $db->prepare('UPDATE Stage SET Code_PV= :Code_pv , Chercheur_Code= :CodeStagiare , Durée= :Dure , Ville= :Ville ,
 Etablissement= :Etablissement , Adr_Etablissement= :AdrEtablissement , Tél_Etablissement= :TelEtablissement , 
 Email_Etablissement= :EmailEtablissement , Site_Web_Etablissement= :SiteEtablissement , Pays= :Pays , Frais_de_Séjour= :FraisSejour ,
 Frais_Transport= :FraisTransport , Frais_Visa= :FraisVisa , Frais_Assurance= :FraisAssurance ,
  Date_Prévue_Départ= :DatePrevuAller, Date_Prévue_Retour= :DatePrevuRetour  , Moyen_Transport= :MoyenTransport WHERE Code='.$_POST['stage_code']);


            $clean['digit'] = (isset( $_POST['digit'] )?  $_POST['digit'] : '');
            $statement->bindParam(':Code_pv', $clean['digit']);

            $clean['cherchcod'] = (isset( $_POST['cherchcod'] )?  $_POST['cherchcod'] : '');
            $statement->bindParam(':CodeStagiare', $clean['cherchcod']);

            $clean['Dure'] = (isset( $_POST['Dure'] )?  $_POST['Dure'] : '');
            $statement->bindParam(':Dure', $clean['Dure']);

            $clean['required1'] =(isset( $_POST['required1'] )?  $_POST['required1'] : '');
            $statement->bindParam(':Ville', $clean['required1']);

            $clean['required'] = (isset( $_POST['required'] )?  $_POST['required'] : '');
            $statement->bindParam(':Etablissement', $clean['required']);

            $clean['require22'] =(isset( $_POST['require22'] )?  $_POST['require22'] : '');
            $statement->bindParam(':AdrEtablissement', $clean['require22']);

            $clean['required9'] =(isset( $_POST['required9'] )?  $_POST['required9'] : '');
            $statement->bindParam(':TelEtablissement', $clean['required9']);

            $clean['email2'] = (isset( $_POST['email2'] )?  $_POST['email2'] : '');
            $statement->bindParam(':EmailEtablissement', $clean['email2']);

            $clean['url2'] = (isset( $_POST['url2'] )?  $_POST['url2'] : '');
            $statement->bindParam(':SiteEtablissement', $clean['url2']);

            $clean['Pays'] = (isset( $_POST['Pays'] )?  $_POST['Pays'] : '');
            $statement->bindParam(':Pays', $clean['Pays']);

            $clean['digits0'] = (isset( $_POST['digits0'] )?  $_POST['digits0'] : '');
            $statement->bindParam(':FraisSejour', $clean['digits0']);

            $clean['digits1'] = (isset( $_POST['digits1'] )?  $_POST['digits1'] : '');
            $statement->bindParam(':FraisTransport', $clean['digits1']);

            $clean['digits2'] = (isset( $_POST['digits2'] )?  $_POST['digits2'] : '');
            $statement->bindParam(':FraisVisa', $clean['digits2']);

            $clean['digits3'] = (isset( $_POST['digits3'] )?  $_POST['digits3'] : '');
            $statement->bindParam(':FraisAssurance', $clean['digits3']);
            
            $clean['reservation1'] = substr((isset( $_POST['reservation1'] )?  $_POST['reservation1'] : ''),0,10);
            $statement->bindParam(':DatePrevuAller', $clean['reservation1'] );
            
            $clean['Dpr'] = substr((isset( $_POST['reservation1'] )?  $_POST['reservation1'] : ''),13,10);
            $statement->bindParam(':DatePrevuRetour', $clean['Dpr'] );

            $clean['requird2'] = (isset( $_POST['requird2'] )?  $_POST['requird2'] : '');
            $statement->bindParam(':MoyenTransport', $clean['requird2']);

//-- -----------------------------------------------------
//-- INSERTION TABLE `Manifestation`.
//-- -----------------------------------------------------                          
            $statement3 = $db->prepare("UPDATE manifestation SET Désignation= :Desination , Acronyme= :Acronyme, Tél_Manifestation= :Telephone, Email_Manifestation= :Email , Site_Web_Manifestation= :SiteWeb , Titre_Article= :TitreArticle, Frais_Inscription= :FraisInscription WHERE Code_Manifestation=".$_POST['stage_code']);

            $clean['requi3'] = (isset( $_POST['requi3'] )?  $_POST['requi3'] : '');
            $statement3->bindParam(':Desination', $clean['requi3']);

            $clean['requi4'] = (isset( $_POST['requi4'] )?  $_POST['requi4'] : '');
            $statement3->bindParam(':Acronyme', $clean['requi4']);

            $clean['requi5'] = (isset( $_POST['requi5'] )?  $_POST['requi5'] : '');
            $statement3->bindParam(':Telephone', $clean['requi5']);

            $clean['email4'] = (isset( $_POST['email4'] )?  $_POST['email4'] : '');
            $statement3->bindParam(':Email', $clean['email4']);

            $clean['url'] = (isset( $_POST['url'] )?  $_POST['url'] : '');
            $statement3->bindParam(':SiteWeb', $clean['url']);

            $clean['req9'] = (isset( $_POST['req9'] )?  $_POST['req9'] : '');
            $statement3->bindParam(':TitreArticle', $clean['req9']);

            $clean['digits4'] = (isset( $_POST['digits4'] )?  $_POST['digits4'] : '');
            $statement3->bindParam(':FraisInscription', $clean['digits4']);
           
    
//-- -----------------------------------------------------
//-- INSERTION TABLE `Perfectionnement`.
//-- -----------------------------------------------------  

            $statement2 = $db->prepare("UPDATE perfectionnement SET Objectif=:Objectif, Missions= :Mission, Résultat= :result WHERE Code_Perfectionnement=".$_POST['stage_code']); 
            
            $clean['req'] =(isset( $_POST['req'] )?  $_POST['req'] : '');
            $statement2->bindParam(':Objectif', $clean['req']);

            $clean['req1'] = (isset( $_POST['req1'] )?  $_POST['req1'] : '');
            $statement2->bindParam(':Mission', $clean['req1']);

            $clean['resu'] = (isset( $_POST['resu'] )?  $_POST['resu'] : '');
            $statement2->bindParam(':result', $clean['resu']);


        try{
            $statement->execute();
            if(isset($_POST['requi3'])||isset($_POST['requi4'])||isset($_POST['digits4']))
            {
            $statement3->execute(); 
            }
            if(isset($_POST['req'])||isset($_POST['req1'])||isset($_POST['resu']))
            {
            $statement2->execute();                       
            }
            }catch (Exception $e) {
                            exit($e ->getMessage());
                       }

header('Location: stage-form.php');                       
?>

