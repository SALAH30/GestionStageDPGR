<?php
    function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 
  /* function recherch($tab,$var)
   {
    $i=0;
    $trouv = 'false';
    while (($trouv=='false')&&($i<sizeof($tab))) {
      if($tab[$i][0]==$var)
      {
        $trouv='true';
      }
      else{
        $i++;
      }
    }
    if($trouv='true')
    {
      return $i;
    }
    else { 
      $i=-1;
      return $i;
    }
   }
                           $db = data_base_connect();

$st4 = $db->prepare("SELECT Laboratoire.Désignation FROM Chercheur JOIN Laboratoire WHERE Chercheur.Laboratoire_Code=Laboratoire.Code");

              $st4->execute();
              $t=0;

              while($row4 = $st4->fetch())
              {
                if($t==0)
                  {
                    $nom[0][0]=$row4['Désignation'];
                    $nom[0][1]=1;
                    $t++;
                  }
                else{
                  $cmp=recherch($nom,$row4['Désignation']);
                  if($cmp<>-1) {
                      $nom[$cmp][1]++;
                     }
                     else 
                     {
                      $nom[$t][0]="LCSI";
                      $nom[$t][1]=1;
                      $t++;
                     }
                    } 
              }*/
              $t="21/05/2015 - 20/07/2015";
              $aller=substr($t,0,10);    
              $retour=substr($t,13,10);
              if($aller=="29/05/2015")
              {echo $aller."  mlkdfùmkfdùsqmklfsdf ".$retour;}
              /*$tab = array('kok' => 13 ,'koko' => 13,'koko' => 13 );
              echo sizeof($tab);*/
?>