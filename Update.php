<?php

               function data_base_connect ()
                  {
                    $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
                    
                    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    
                    return ($dbh);
                  }
 function Update_query($db,$key_field,$fields,$vars,$table,$code) 
      
      {
            $values = array();
            
            if (! empty($_POST[$key_field])) {
            
            $update_fields = array();
            
            foreach ($fields as $field) 
                  {                           
                     $values[] = $_POST[$field];
                  }
            foreach($vars as $var)
               {
                $update_fields[] = "$var = ?";
               }
            
            $values[] = $_POST[$key_field];
            
            $st = $db->prepare("UPDATE $table SET " .
                                       implode(',', $update_fields) ." WHERE $code = ?");
                                       
            $st->execute($values);  
            
            return $st;            
      
      } 
   }       
   
     function Update_query2($db,$key_field,$vars,$values,$table) 
      
      {
            
            
            if (! empty($_POST[$key_field])) {
            
            $update_fields = array();
            foreach($vars as $var)
               {
                $update_fields[] = "$var = ?";
               }
            
            $values[] = $_POST[$key_field];
            
            $st = $db->prepare("UPDATE $table SET " .
                                       implode(',', $update_fields) ."WHERE Code = ?");
                                       
            $st->execute($values);  
            
            return $st;            
      
            } 
   }
                  
            $db = data_base_connect ();   

            $key_field='Bechar';     
            
            
            
//-- ----------------------------------------------------- --------------------------------------
//--  Update TABLE `suivi_stage`. ------------------------ --------------------------------------
//-- ----------------------------------------------------- --------------------------------------
            
            //------------------------------
            //---Recuperation des Donnes ---
            //------------------------------
            
           // $CodeStage =  $_POST['Bechar'];
            
           // echo $CodeStage;
            
           /*   $Retour = (isset( $_POST['Suivi'] )?  'true' : 'false');
            
            $Annulation = (isset( $_POST['Suivi'] )?  'true' : 'false');
            
            $EtatStage = (isset( $_POST['Stage'] )?  $_POST['Stage'] :'');
            
            $result = (isset( $_POST['result'] )?  $_POST['result'] : '');     
 
            $Frais = (isset($_POST['Frais'])? 'true' : 'false'); 
            
            */
            
            //------------------------------
            //--- Traitement ---------------
            //------------------------------            
            $Attestaion = (isset( $_POST['Attestaion'] )?  'true' : 'false');
            $BandeTransport = (isset( $_POST['BandeTransport'] )?  'true' : 'false');
            $Frais = (isset( $_POST['Frais'] )?  'true' : 'false');
            if(isset( $_POST['Suivi'] )){
              $Suivi = $_POST['Suivi'];
            }
            $code=$_POST['Bechar'];
            if(isset($_POST['Stage'])){
             $etat = $_POST['Stage'];
            }
            $st = $db->prepare("UPDATE Suivi_Stage SET Attestation_Stage=".$Attestaion.",Transport=".$BandeTransport.",
              Frais=".$Frais.",Document='$Suivi' , Etat='$etat' 
              WHERE Code_Stage=".$code);
                                       
             $st->execute();  
            /*$fields = array('Frais','Document','Etat');
            $var = array('Frais','Suivi','Stage');
            $table='suivi_stage';
            
            Update_query($db,$key_field,$var,$fields,$table,"Code_Stage");*/
            

          
//-- ----------------------------------------------------- -------------------------------------
//--          Update TABLE `Stage`                          ------------------------------------
//-- ----------------------------------------------------- -------------------------------------

            //------------------------------
            //---Recuperation des Donnes ---
            //------------------------------     

             $dateEFFAller = substr((isset( $_POST['reservation1'] )?  $_POST['reservation1'] : ''),0,10);
             $dateEffAller = $dateEFFAller;
            
             $dateEFFRetour = substr((isset( $_POST['reservation1'] )?  $_POST['reservation1'] : ''),13,10);
             $dateEffRetour = $dateEFFRetour;
             
             $BandeTransport = ( isset($_POST['BandeTransport'])? 'true' : 'false' ); 

            $EtatStage = (isset( $_POST['Stage'] )?  $_POST['Stage'] :'');

            if ($dateEffAller!='') {
            $date1 = str_replace("/","-",$dateEffAller);
            $date2 = str_replace("/","-",$dateEffRetour);
            // On transforme les 2 dates en timestamp
            $date3 = strtotime($date1);
            $date4 = strtotime($date2);
             
            // On récupère la différence de timestamp entre les 2 précédents
            $nbJoursTimestamp = $date4 - $date3;
             
            $dure = ($nbJoursTimestamp/86400)+1;

            $values = array($dateEffAller,$dateEffRetour,$BandeTransport,$dure,$EtatStage);
            
            $vars = array('Date_Effective_Départ','Date_Effective_Retour','Frais_Transport','Durée','Etat_Stage');
              }          
           // ------------------------------
            //--- Traitement ---------------
            //------------------------------   
            else {
            $values = array($dateEffAller,$dateEffRetour,$BandeTransport,$EtatStage);
            
            $vars = array('Date_Effective_Départ','Date_Effective_Retour','Frais_Transport','Etat_Stage');
          }
            
            $table='Stage';

            Update_query2($db,$key_field,$vars,$values,$table);
            
//-- ----------------------------------------------------- -------------------------------------
//--          Update TABLE `perfectionnement`                          ------------------------------------
//-- ----------------------------------------------------- -------------------------------------

            //------------------------------
            //---Recuperation des Donnes ---
            //------------------------------  
              $table='perfectionnement';
              
               $field= array('result');
              
               $var2 = array('Résultat');
                  
           //------------------------------
           //-----Traitement---------------
           //------------------------------             
            Update_query($db,$key_field,$field,$var2,$table,"Code_Perfectionnement");

            header('Location: accueil.php');
            
             
?>