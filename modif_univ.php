<?php 
include('function.php');

  $db = data_base_connect ();   

   $key_field='cd';   

   $var = array('Nom_Fr','Nom_Ar','Adresse','Tél','Fax','Site_Web');
   $fields = array('req9','required10','require22','required9','require9','url2');
   $table='Université';       
   Update_query($db,$key_field,$fields,$var,$table,"Code");
   header('Location: univer-form.php');
?>