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
/*$st = $db->prepare('SELECT Chercheur_Code FROM Stage WHERE Code=?');
$st->execute(array($_POST['digits']));
while($code = $st->fetch())
{
    $cod=$code['Chercheur_Code'];
}*/
if(isset($_POST['cherchcod']) || isset($_GET['code_cherch'])){

if(isset($_GET['code_cherch'])){
  $tab['0']=$_GET['code_cherch'];
  $tab['1']=$_GET['code_stage'];

  $fraii = 'pdf1.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1'];
  $fraia = 'pdf3.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1'];
  $Attestation = 'projetAB.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1'];
  $Billet = 'Billet.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1'];
  ?>
  <a href=<?php echo $fraii;?> target="_blank" > Frais inscription </a><br>
  <a href=<?php echo $Attestation;?> target="_blank" > Attestation </a><br>
  <a href=<?php echo $fraia;?> target="_blank" > Frais Allocation </a><br>
  <a href=<?php echo $Billet;?> target="_blank" > Billet </a>
  <?php
   /*header('Location: projetAB.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1']);
   header('Location: pdf1.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1']);
   header('Location: pdf3.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1']);
   header('Location: Billet.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1']);*/
}
else{
$tab = explode(' ',$_POST['cherchcod']);
}

if(isset($_POST["submit1"]) )
      {
    header('Location: projetAB.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1']);
}

if(isset($_POST["submit2"]) )
      {
     header('Location: pdf1.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1']);
}

if(isset($_POST["submit3"]) )
      {
    header('Location: pdf3.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1']);
}

if(isset($_POST["submit4"]) )
      {
     header('Location: Billet.php?code_cherch='.$tab['0'].'&code_stage='.$tab['1']);
}
}

?>