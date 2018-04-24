<?php 
require('includes/config.php'); 
//if not logged in redirect to login page
if(!$user->is_logged_in() ){ header('Location: login.php'); }

 ?>
 
<?php

//include_once("Database.php");	

   function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 


//-- -----------------------------------------------------
//-- INSERTION TABLE `STAGE`.
//-- -----------------------------------------------------
            $db = data_base_connect ();
            
            $statement = $db->prepare('INSERT
             INTO stage ( Code , Chercheur_Code,Durée , Ville , Etablissement , Adr_Etablissement , Tél_Etablissement , Email_Etablissement , Site_Web_Etablissement ,
                         Pays , Etat_Stage , Frais_de_Séjour , Frais_Transport , Frais_Visa , Frais_Assurance , Date_Prévue_Départ , Date_Prévue_Retour ,Date_Effective_Départ,
                         Date_Effective_Retour , Moyen_Transport )
                                          
                VALUES ( :Code , :CodeStagiare , :Dure , :Ville , :Etablissement , :AdrEtablissement , :TelEtablissement , :EmailEtablissement , :SiteEtablissement ,
                         :Pays , :Civil , :FraisSejour ,:FraisTransport , :FraisVisa , :FraisAssurance , :DatePrevuAller,:DatePrevuRetour , :DateEffectivAller , 
                         :DateEffectivRetour , :MoyenTransport )');

            $clean['digit'] = $_POST['digit'];
            $statement->bindParam(':Code', $clean['digit']);

            $clean['number_stg'] = $_POST['number_stg'];
            $statement->bindParam(':CodeStagiare', $clean['number_stg']);

            $clean['Dure'] = $_POST['Dure'];
            $statement->bindParam(':Dure', $clean['Dure']);

            $clean['required1'] = $_POST['required1'];
            $statement->bindParam(':Ville', $clean['required1']);

            $clean['required'] = $_POST['required'];
            $statement->bindParam(':Etablissement', $clean['required']);

            $clean['require2'] = $_POST['require2'];
            $statement->bindParam(':AdrEtablissement', $clean['require2']);

            $clean['required9'] = $_POST['required9'];
            $statement->bindParam(':TelEtablissement', $clean['required9']);

            $clean['email2'] = $_POST['email2'];
            $statement->bindParam(':EmailEtablissement', $clean['email2']);

            $clean['url2'] = $_POST['url2'];
            $statement->bindParam(':SiteEtablissement', $clean['url2']);

            $clean['Pays'] = $_POST['Pays'];
            $statement->bindParam(':Pays', $clean['Pays']);

            $clean['Civil'] = $_POST['Civil'];
            $statement->bindParam(':Civil', $clean['Civil']);

            $clean['digits0'] = $_POST['digits0'];
            $statement->bindParam(':FraisSejour', $clean['digits0']);

            $clean['digits1'] = $_POST['digits1'];
            $statement->bindParam(':FraisTransport', $clean['digits1']);

            $clean['digits2'] = $_POST['digits2'];
            $statement->bindParam(':FraisVisa', $clean['digits2']);

            $clean['digits3'] = $_POST['digits3'];
            $statement->bindParam(':FraisAssurance', $clean['digits3']);
            
            /*echo "oui".$clean['dp2']."wah";
            echo "oui".$clean['dp3']."wah";
            echo "oui".$clean['dp4']."wah";
            echo "oui".$clean['dp5']."wah";*/

            $clean['dp2'] = $_POST['dp2'];
            $statement->bindParam(':DatePrevuAller', $clean['dp2']);

            $clean['dp3'] = $_POST['dp3'];
            $statement->bindParam(':DatePrevuRetour', $clean['dp3']);

            $clean['dp4'] = $_POST['dp4'];
            $statement->bindParam(':DateEffectivAller', $clean['dp4']);

            $clean['dp5'] = $_POST['dp5'];
            $statement->bindParam(':DateEffectivRetour', $clean['dp5']);
            
                        echo "oui".$clean['dp2']."wah";
            echo "oui".$clean['dp3']."wah";
            echo "oui".$clean['dp4']."wah";
            echo "oui".$clean['dp5']."wah";


            $clean['requird2'] = $_POST['requird2'];
            $statement->bindParam(':MoyenTransport', $clean['requird2']);
            
            //$statement->execute();


              
//-- -----------------------------------------------------
//-- INSERTION TABLE `ETAT STAGE`.
//-- -----------------------------------------------------

         $Attestaion = (isset($_POST['Attestaion'])? 'true' : 'false');

         $Frais = (isset($_POST['Frais'])? 'true' : 'false');

         $BandeTransport = (isset($_POST['BandeTransport'])? 'true' : 'false'); 
         
         $statement4 = $db->prepare("INSERT 
                         INTO suivi_stage( Code_Stage , Attestation_Stage , Frais , Document_Retour)
                         
                                   VALUES( :Code  , $Attestaion , $Frais , $BandeTransport )");
                                   
         $statement4->bindParam(':Code', $clean['digit']);                  



 
//-- -----------------------------------------------------
//-- INSERTION TABLE `Manifestation`.
//-- -----------------------------------------------------                
    
    
if( isset($_POST["submit2"]))
      { 
         //echo"Votre nom: <b>".$_POST['number3']."</b><br>\n"  ;
            
            $statement3 = $db->prepare("INSERT
                INTO manifestation ( Code_Manifestation , Désignation , Acronyme , Tél_Manifestation , Email_Manifestation , Site_Web_Manifestation , Titre_Article , 
                                     Frais_Inscription , Stage_Code )
                                          
                            VALUES ( :CodeManifestation , :Desination , :Acronyme, :Telephone, :Email , :SiteWeb , :TitreArticle, :FraisInscription , :Code  )");
                            
            $statement3->bindParam(':Code', $clean['digit']);                

            $clean['number3'] = $_POST['number3'];
            $statement3->bindParam(':CodeManifestation', $clean['number3']);

            $clean['requi3'] = $_POST['requi3'];
            $statement3->bindParam(':Desination', $clean['requi3']);

            $clean['requi4'] = $_POST['requi4'];
            $statement3->bindParam(':Acronyme', $clean['requi4']);

            $clean['requi5'] = $_POST['requi5'];
            $statement3->bindParam(':Telephone', $clean['requi5']);

            $clean['email4'] = $_POST['email4'];
            $statement3->bindParam(':Email', $clean['email4']);

            $clean['url'] = $_POST['url'];
            $statement3->bindParam(':SiteWeb', $clean['url']);

            $clean['req9'] = $_POST['req9'];
            $statement3->bindParam(':TitreArticle', $clean['req9']);

            $clean['digits4'] = $_POST['digits4'];
            $statement3->bindParam(':FraisInscription', $clean['digits4']);
            
           
                                   $statement4->execute();
                  $statement->execute();
                  $statement3->execute(); 


      }                


//-- -----------------------------------------------------
//-- INSERTION TABLE `Perfectionnement`.
//-- -----------------------------------------------------  

    

if(isset($_POST["submit1"]) )
      
      {
           //echo "Votre nom: <b>".$_POST['number2']."</b><br>\n"  ;
           
            $statement2 = $db->prepare("INSERT
                  INTO perfectionnement ( Code_Perfectionnement , Objectif , Missions , Résultat , Stage_Code  )
                                          
                  VALUES ( :CodePerfectionnement, :Objectif, :Mission, :Resultat, :Code)"); 
            
            $statement2->bindParam(':Code', $clean['digit']);            
            
            $clean['number2'] = $_POST['number2'];
            $statement2->bindParam(':CodePerfectionnement', $clean['number2']);

            $clean['req'] = $_POST['req'];
            $statement2->bindParam(':Objectif', $clean['req']);

            $clean['req1'] = $_POST['req1'];
            $statement2->bindParam(':Mission', $clean['req1']);

            $clean['req2'] = $_POST['req2'];
            $statement2->bindParam(':Resultat', $clean['req2']);
       
                          $statement4->execute();
                  $statement->execute();
                  $statement2->execute();                       

      }


                  
                  if ($statement3->execute()) {
                  echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
                  }
                  else{
                  echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
                  }

                  $db = null;
   

    
?>

