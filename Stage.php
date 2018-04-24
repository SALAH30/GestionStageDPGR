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
         $Attestaion = 'true';//(isset($_POST['Attestaion'])? 'true' : 'false');

         $Frais = 'false';//(isset($_POST['Frais'])? 'true' : 'false');

       //  $BandeTransport = 'false';//(isset($_POST['BandeTransport'])? 'true' : 'false'); 
            
         $etat = 'En Cours';
         
         $statement4 = $db->prepare("INSERT 
                         INTO suivi_stage( Attestation_Stage , Frais , Etat )
                         
                                   VALUES( $Attestaion , $Frais , :etat )");
         $statement4->bindParam(':etat', $etat );
         $statement4->execute();
$id = $db->lastInsertId('Code_Stage');


//-- -----------------------------------------------------
//-- INSERTION TABLE `STAGE`.
//-- -----------------------------------------------------
$statement = $db->prepare('INSERT
            INTO stage ( Code , Code_PV , Chercheur_Code , Durée , Ville , Etablissement , Adr_Etablissement , Tél_Etablissement , Email_Etablissement , Site_Web_Etablissement , Pays , Frais_de_Séjour , Frais_Transport , Frais_Visa , Frais_Assurance , Date_Prévue_Départ , Date_Prévue_Retour  , Moyen_Transport, Etat_Stage )                         
            VALUES (:Code , :Code_pv , :CodeStagiare , :Dure , :Ville , :Etablissement , :AdrEtablissement , :TelEtablissement , :EmailEtablissement , :SiteEtablissement , :Pays , :FraisSejour ,:FraisTransport , :FraisVisa , :FraisAssurance , :DatePrevuAller,:DatePrevuRetour  , :MoyenTransport , "En Cours")');

            $statement->bindParam(':Code', $id);

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
            $statement3 = $db->prepare("INSERT
                INTO manifestation ( Code_Manifestation , Désignation , Acronyme , Tél_Manifestation , Email_Manifestation , Site_Web_Manifestation , Titre_Article , 
                                     Frais_Inscription , Stage_Code )
                                          
                            VALUES ( :CodeManifestation , :Desination , :Acronyme, :Telephone, :Email , :SiteWeb , :TitreArticle, :FraisInscription , :Code  )");
                            
            $statement3->bindParam(':Code', $id);                

            $statement3->bindParam(':CodeManifestation', $id);

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

            $statement2 = $db->prepare("INSERT
                  INTO perfectionnement ( Code_Perfectionnement , Objectif , Missions , Stage_Code  )
                                          
                  VALUES ( :CodePerfectionnement, :Objectif, :Mission ,  :Code)"); 
            
            $statement2->bindParam(':Code', $id);            
            
            $statement2->bindParam(':CodePerfectionnement', $id);

            $clean['req'] =(isset( $_POST['req'] )?  $_POST['req'] : '');
            $statement2->bindParam(':Objectif', $clean['req']);

            $clean['req1'] = (isset( $_POST['req1'] )?  $_POST['req1'] : '');
            $statement2->bindParam(':Mission', $clean['req1']);

        try{
            $statement->execute();
            if(isset($_POST['requi3'])||isset($_POST['requi4'])||isset($_POST['digits4']))
            {
            $statement3->execute(); 
            }
            if(isset($_POST['req'])||isset($_POST['req1']))
            {
            $statement2->execute();                       
            }
            }catch (Exception $e) {
                            exit($e ->getMessage());
                       }


header('Location: documentation.php?code_cherch='.$clean['cherchcod'].'&code_stage='.$id);

    
?>

