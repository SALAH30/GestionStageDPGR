<?php
  include_once("function.php");

  $var = array(' Code','Nom_Fr','Prénom_Fr','Nom_Ar','Prénom_Ar','Prénom_Père_Fr',
                  'Prénom_Père_Ar','Sexe','Etat_Civil','Date_Naissance','Tél','Email',
                  'Laboratoire_Code','Chercheurcol');
  $fields=array('digits','required1','required2','required4','required5','required6','required7','r3','Civil','required8','required9'
           ,'email2','Laboratoire_Code');
   
   $db = data_base_connect ();    
   
   $_POST['Chercheurcol']= (isset($_POST["submit3"])? 'false' :  'true' );  //( ( isset($_POST["submit1"])||isset($_POST["submit2"]) ) ? 'true' :  'false' );
 
   $st = Insert_query($db,$var,$fields,'chercheur','Chercheurcol') ;            
   
?>