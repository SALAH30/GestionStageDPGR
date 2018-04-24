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
            $statement = $db->prepare("UPDATE Chercheur SET Nom_Fr = :Nom_Fr, Prénom_Fr = :Prenom_Fr, Nom_Ar = :Nom_Ar, Prénom_Ar = :Prenom_Ar, Prénom_Père_Fr = :Prenom_Pere_Fr, Prénom_Père_Ar = :Prenom_Pere_Ar, Sexe = :Sexe, Etat_Civil = :Etat_Civil, Date_Naissance = :Date_Naissance, Tél = :Tel, Email = :Email, Laboratoire_Code = :Laboratoire_Code WHERE Code= :code");
            $clean['required11'] =(isset( $_POST['required11'] )?  $_POST['required11'] : '');
            $statement->bindParam(':Nom_Fr', $clean['required11']);
            $clean['required21'] = (isset( $_POST['required21'] )?  $_POST['required21'] : '');
            $statement->bindParam(':Prenom_Fr', $clean['required21']);
            $clean['required41'] = (isset( $_POST['required41'] )?  $_POST['required41'] : '');
            $statement->bindParam(':Nom_Ar', $clean['required41']);
            $clean['required51'] = (isset( $_POST['required51'] )?  $_POST['required51'] : '');
            $statement->bindParam(':Prenom_Ar', $clean['required51']);
            $clean['required61'] = (isset( $_POST['required61'] )?  $_POST['required61'] : '');
            $statement->bindParam(':Prenom_Pere_Fr', $clean['required61']);
            $clean['required71'] = (isset( $_POST['required71'] )?  $_POST['required71'] : '');
            $statement->bindParam(':Prenom_Pere_Ar', $clean['required71']);           
            $clean['r31'] = (isset( $_POST['r31'] )?  $_POST['r31'] : '');
            $statement->bindParam(':Sexe', $clean['r31']);
            $clean['Civil1'] = (isset( $_POST['Civil1'] )?  $_POST['Civil1'] : '');
            $statement->bindParam(':Etat_Civil', $clean['Civil1']);
            $clean['required81'] = (isset( $_POST['required81'] )?  $_POST['required81'] : '');
            $statement->bindParam(':Date_Naissance',  $clean['required81']);
            $clean['required91'] = (isset( $_POST['required91'] )?  $_POST['required91'] : '');
            $statement->bindParam(':Tel', $clean['required91']);
            $clean['email21'] = (isset( $_POST['email21'] )?  $_POST['email21'] : '');
            $statement->bindParam(':Email', $clean['email21']);  
            $clean['Laboratoire_Code1'] = (isset( $_POST['Laboratoire_Code1'] )?  $_POST['Laboratoire_Code1'] : '');
            $statement->bindParam(':Laboratoire_Code', $clean['Laboratoire_Code1']);
            $clean['cherch_code'] = (isset($_POST['cherch_code'] ) ? $_POST['cherch_code'] : '');
            $statement->bindParam(':code', $clean['cherch_code']);
            if(isset($_POST['cherch_code']))
            {
                try{
                    $statement->execute(); 
                   } catch (Exception $e) {
                        //    exit($e ->getMessage());
                            }   
            }
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//-- -----------------------------------------------------
//-- INSERTION TABLE `Enseignant`.
//-- -----------------------------------------------------                
$statement3 = $db->prepare('UPDATE Enseignant SET Grade= :grade, Date_Recrutement= :date_recrutement, Spécialité= :specialite, Nature= :nature, Date_Nomination= :date_nomination, Université_Code= :codeU WHERE Chercheur_Code='.$_POST['cherch_code']);   
            $clean['req1111'] = (isset( $_POST['req1111'] )?  $_POST['req1111'] : '');
            $statement3->bindParam(':grade', $clean['req1111']);
            $clean['dp31'] = (isset( $_POST['dp31'] )?  $_POST['dp31'] : '');
            $statement3->bindParam(':date_recrutement', $clean['dp31']);
            $clean['req111'] = (isset( $_POST['req111'] )?  $_POST['req111'] : '');
            $statement3->bindParam(':specialite', $clean['req111']);
            $clean['sport1'] = (isset( $_POST['sport1'] )?  $_POST['sport1'] : '');
            $statement3->bindParam(':nature', $clean['sport1']);
            $clean['dp21'] = (isset( $_POST['dp21'] )?  $_POST['dp21'] : '');
            $statement3->bindParam(':date_nomination', $clean['dp21'] );
            $clean['Pays1'] = (isset( $_POST['Pays1'] )?  $_POST['Pays1'] : '');
            $statement3->bindParam(':codeU', $clean['Pays1']);
            if(isset($_POST['cherch_code']))
            {
                try{
                    $statement3->execute(); 
                   } catch (Exception $e) {
                            //exit($e ->getMessage());
                            }   
            }
//-------------------------------------------------------
//-- INSERTION TABLE `Doctorant`.
//-- -----------------------------------------------------             
            $statement2 = $db->prepare('UPDATE Doctorant SET Diplome_Base= :diplom_base, Diplome_Préparé= :diplom_prepar,
Date_Inscription= :date_insc, Sujet_Thèse= :sujet_these, Nom_Encadreur= :nom_enca, Prénom_Encadreur= :prenom_enca, Grade_Encadreur= :grad_enca, Etablissement_Encadreur= :etablissement_enca,
Nom_Co_Encadreur= :nom_co_enca, Prénom_Co_Encadreur= :prenom_co_enca, Grade_Co_Encadreur= :grad_co_enca,
Etablissement_Co_Encadreur= :etablissement_co_enca, Fonction= :fonction, Etablissement_Fonction= :etablissement_fonction, Lieu_Etablissement= :lieu_fonction,
Etablissement_Cotutelle= :etablissement_cotutelle, Laboratoire_Cotutelle= :laboratoire_cotutelle WHERE Chercheur_Code='.$_POST['cherch_code']);                          
            $clean['requis31'] = (isset( $_POST['requis31'] )?  $_POST['requis31'] : '');
            $statement2->bindParam(':diplom_base', $clean['requis31']);
            $clean['requis41'] = (isset( $_POST['requis41'] )?  $_POST['requis41'] : '');
            $statement2->bindParam(':diplom_prepar', $clean['requis41']);
            $clean['dp11'] = (isset( $_POST['dp11'] )?  $_POST['dp11'] : '');
            $statement2->bindParam(':date_insc', $clean['dp11']);            
            $clean['req51'] = (isset( $_POST['req51'] )?  $_POST['req51'] : '');
            $statement2->bindParam(':sujet_these', $clean['req51']);
            $clean['req61'] = (isset( $_POST['req61'] )?  $_POST['req61'] : '');
            $statement2->bindParam(':nom_enca', $clean['req61']);
            $clean['req71'] = (isset( $_POST['req71'] )?  $_POST['req71'] : '');
            $statement2->bindParam(':prenom_enca', $clean['req71']);
            $clean['req81'] = (isset( $_POST['req81'] )?  $_POST['req81'] : '');
            $statement2->bindParam(':grad_enca', $clean['req81']);
            $clean['req91'] = (isset( $_POST['req91'] )?  $_POST['req91'] : '');
            $statement2->bindParam(':etablissement_enca', $clean['req91']);
            $clean['req101'] = (isset( $_POST['req101'] )?  $_POST['req101'] : '');
            $statement2->bindParam(':nom_co_enca', $clean['req101']);
            $clean['req11'] = (isset( $_POST['req11'] )?  $_POST['req11'] : '');
            $statement2->bindParam(':prenom_co_enca', $clean['req11']);
            $clean['req121'] = (isset( $_POST['req121'] )?  $_POST['req121'] : '');
            $statement2->bindParam(':grad_co_enca', $clean['req121']);
            $clean['req131'] = (isset( $_POST['req131'] )?  $_POST['req131'] : '');
            $statement2->bindParam(':etablissement_co_enca', $clean['req131']);         
            $clean['req141'] = (isset( $_POST['req141'] )?  $_POST['req141'] : '');
            $statement2->bindParam(':fonction', $clean['req141']); 
            $clean['req151'] = (isset( $_POST['req151'] )?  $_POST['req151'] : '');
            $statement2->bindParam(':etablissement_fonction', $clean['req151']); 
            $clean['req161'] = (isset( $_POST['req161'] )?  $_POST['req161'] : '');
            $statement2->bindParam(':lieu_fonction', $clean['req161']); 
            $clean['req171'] = (isset( $_POST['req171'] )?  $_POST['req171'] : '');
            $statement2->bindParam(':etablissement_cotutelle', $clean['req171']); 
            $clean['req181'] = (isset( $_POST['req181'] )?  $_POST['req181'] : '');
            $statement2->bindParam(':laboratoire_cotutelle', $clean['req181']);  
            if(isset($_POST['cherch_code']))
            {
            try{    
                  $statement2->execute();         
               } catch (Exception $e) {
                            //exit($e ->getMessage());
                       }
            }
header('Location: search-form2.php');
?>