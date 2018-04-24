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
//-- -----------------------------------------------------
//-- INSERTION TABLE `Chercheur`.
//-- -----------------------------------------------------
            $db = data_base_connect ();
            
            $statement = $db->prepare('INSERT
             INTO Chercheur (Nom_Fr , Prénom_Fr ,Nom_Ar ,Prénom_Ar ,Prénom_Père_Fr ,Prénom_Père_Ar ,Sexe ,Etat_Civil ,Date_Naissance ,Tél , Email 
             , Laboratoire_Code )                                         
          VALUES (:Nom_Fr , :Prenom_Fr ,:Nom_Ar ,:Prenom_Ar ,:Prenom_Pere_Fr ,:Prenom_Pere_Ar ,:Sexe ,:Etat_Civil ,:Date_Naissance ,:Tel , :Email  
             , :Laboratoire_Code)');
            $clean['required1'] =(isset( $_POST['required1'] )?  $_POST['required1'] : '');
            $statement->bindParam(':Nom_Fr', $clean['required1']);
            $clean['required2'] = (isset( $_POST['required2'] )?  $_POST['required2'] : '');
            $statement->bindParam(':Prenom_Fr', $clean['required2']);
            $clean['required4'] = (isset( $_POST['required4'] )?  $_POST['required4'] : '');
            $statement->bindParam(':Nom_Ar', $clean['required4']);
            $clean['required5'] = (isset( $_POST['required5'] )?  $_POST['required5'] : '');
            $statement->bindParam(':Prenom_Ar', $clean['required5']);
            $clean['required6'] = (isset( $_POST['required6'] )?  $_POST['required6'] : '');
            $statement->bindParam(':Prenom_Pere_Fr', $clean['required6']);
            $clean['required7'] = (isset( $_POST['required7'] )?  $_POST['required7'] : '');
            $statement->bindParam(':Prenom_Pere_Ar', $clean['required7']);           
            $clean['r3'] = (isset( $_POST['r3'] )?  $_POST['r3'] : '');
            $statement->bindParam(':Sexe', $clean['r3']);
            $clean['Civil'] = (isset( $_POST['Civil'] )?  $_POST['Civil'] : '');
            $statement->bindParam(':Etat_Civil', $clean['Civil']);
            $clean['required8'] = (isset( $_POST['required8'] )?  $_POST['required8'] : '');
            $statement->bindParam(':Date_Naissance',  $clean['required8']);
            $clean['required9'] = (isset( $_POST['required9'] )?  $_POST['required9'] : '');
            $statement->bindParam(':Tel', $clean['required9']);
            $clean['email2'] = (isset( $_POST['email2'] )?  $_POST['email2'] : '');
            $statement->bindParam(':Email', $clean['email2']);  
            $clean['Laboratoire_Code'] = (isset( $_POST['Laboratoire_Code'] )?  $_POST['Laboratoire_Code'] : '');
            $statement->bindParam(':Laboratoire_Code', $clean['Laboratoire_Code']);
            if(isset($_POST['required1']))
            {
                try{
                    $statement->execute(); 
                   } catch (Exception $e) {
                            exit($e ->getMessage());
                            }   
            }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//-- -----------------------------------------------------
//-- INSERTION TABLE `Enseignant`.
//-- -----------------------------------------------------                
$id = $db->lastInsertId('Code');
$statement3 = $db->prepare('INSERT 
                            INTO Enseignant ( Code_Enseignant , Chercheur_Code , Grade , Date_Recrutement , Spécialité , Nature , Date_Nomination , Université_Code )       
                            VALUES ( :codeE , :codeC ,:grade , :date_recrutement, :specialite, :nature , :date_nomination , :codeU)');
           $statement3->bindParam(':codeE', $id);       
           $statement3->bindParam(':codeC', $id);     
            $clean['req'] = (isset( $_POST['req'] )?  $_POST['req'] : '');
            $statement3->bindParam(':grade', $clean['req']);
            $clean['dp3'] = (isset( $_POST['dp3'] )?  $_POST['dp3'] : '');
            $statement3->bindParam(':date_recrutement', $clean['dp3']);
            $clean['req1'] = (isset( $_POST['req1'] )?  $_POST['req1'] : '');
            $statement3->bindParam(':specialite', $clean['req1']);
            $clean['sport'] = (isset( $_POST['sport'] )?  $_POST['sport'] : '');
            $statement3->bindParam(':nature', $clean['sport']);
            $clean['dp2'] = (isset( $_POST['dp2'] )?  $_POST['dp2'] : '');
            $statement3->bindParam(':date_nomination', $clean['dp2'] );
            $clean['Pays'] = (isset( $_POST['Pays'] )?  $_POST['Pays'] : '');
            $statement3->bindParam(':codeU', $clean['Pays']);
            if(isset($_POST['req']))
            {
                try{
                    $statement3->execute(); 
                   } catch (Exception $e) {
                            exit($e ->getMessage());
                            }   
            }
//-------------------------------------------------------
//-- INSERTION TABLE `Doctorant`.
//-- -----------------------------------------------------             
            $statement2 = $db->prepare('INSERT
                  INTO Doctorant ( Code_Doctorant , Chercheur_Code , Diplome_Base, Diplome_Préparé,Date_Inscription,Sujet_Thèse,Nom_Encadreur,Prénom_Encadreur,Grade_Encadreur,Etablissement_Encadreur,
                  Nom_Co_Encadreur,Prénom_Co_Encadreur,Grade_Co_Encadreur,Etablissement_Co_Encadreur,Fonction,Etablissement_Fonction,Lieu_Etablissement,Etablissement_Cotutelle,Laboratoire_Cotutelle )
                                          
                  VALUES ( :codeD, :codeC ,:diplom_base, :diplom_prepar ,:date_insc ,:sujet_these, :nom_enca,:prenom_enca ,:grad_enca ,:etablissement_enca ,:nom_co_enca ,:prenom_co_enca ,:grad_co_enca ,:etablissement_co_enca,:fonction ,:etablissement_fonction ,:lieu_fonction ,:etablissement_cotutelle ,:laboratoire_cotutelle )'); 
            $statement2->bindParam(':codeD', $id);
            $statement2->bindParam(':codeC', $id);                          
            $clean['requis3'] = (isset( $_POST['requis3'] )?  $_POST['requis3'] : '');
            $statement2->bindParam(':diplom_base', $clean['requis3']);
            $clean['requis4'] = (isset( $_POST['requis4'] )?  $_POST['requis4'] : '');
            $statement2->bindParam(':diplom_prepar', $clean['requis4']);
            $clean['dp1'] = (isset( $_POST['dp1'] )?  $_POST['dp1'] : '');
            $statement2->bindParam(':date_insc', $clean['dp1']);            
            $clean['req5'] = (isset( $_POST['req5'] )?  $_POST['req5'] : '');
            $statement2->bindParam(':sujet_these', $clean['req5']);
            $clean['req6'] = (isset( $_POST['req6'] )?  $_POST['req6'] : '');
            $statement2->bindParam(':nom_enca', $clean['req6']);
            $clean['req7'] = (isset( $_POST['req7'] )?  $_POST['req7'] : '');
            $statement2->bindParam(':prenom_enca', $clean['req7']);
            $clean['req8'] = (isset( $_POST['req8'] )?  $_POST['req8'] : '');
            $statement2->bindParam(':grad_enca', $clean['req8']);
            $clean['req9'] = (isset( $_POST['req9'] )?  $_POST['req9'] : '');
            $statement2->bindParam(':etablissement_enca', $clean['req9']);
            $clean['req10'] = (isset( $_POST['req10'] )?  $_POST['req10'] : '');
            $statement2->bindParam(':nom_co_enca', $clean['req10']);
            $clean['req11'] = (isset( $_POST['req11'] )?  $_POST['req11'] : '');
            $statement2->bindParam(':prenom_co_enca', $clean['req11']);
            $clean['req12'] = (isset( $_POST['req12'] )?  $_POST['req12'] : '');
            $statement2->bindParam(':grad_co_enca', $clean['req12']);
            $clean['req13'] = (isset( $_POST['req13'] )?  $_POST['req13'] : '');
            $statement2->bindParam(':etablissement_co_enca', $clean['req13']);         
            $clean['req14'] = (isset( $_POST['req14'] )?  $_POST['req14'] : '');
            $statement2->bindParam(':fonction', $clean['req14']); 
            $clean['req15'] = (isset( $_POST['req15'] )?  $_POST['req15'] : '');
            $statement2->bindParam(':etablissement_fonction', $clean['req15']); 
            $clean['req16'] = (isset( $_POST['req16'] )?  $_POST['req16'] : '');
            $statement2->bindParam(':lieu_fonction', $clean['req16']); 
            $clean['req17'] = (isset( $_POST['req17'] )?  $_POST['req17'] : '');
            $statement2->bindParam(':etablissement_cotutelle', $clean['req17']); 
            $clean['req18'] = (isset( $_POST['req18'] )?  $_POST['req18'] : '');
            $statement2->bindParam(':laboratoire_cotutelle', $clean['req18']);  
            if(isset($_POST['requis3']))
            {
            try{    
                  $statement2->execute();         
               } catch (Exception $e) {
                            exit($e ->getMessage());
                       }
            }
header('Location: search-form2.php');
?>