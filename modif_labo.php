<?php 
include('function.php');

  $db = data_base_connect ();   

   $key_field='cd';   

   $var = array('Désignation','Nom_Directeur','Prénom_Directeur','Tél','Fax','Site_Web','Université_Code');
   $fields = array('require2','required1','required2','required9','require9','url2','Pays');
   $table='Laboratoire';       
   Update_query($db,$key_field,$fields,$var,$table,"Code");
   header('Location: labo-form.php');
?>