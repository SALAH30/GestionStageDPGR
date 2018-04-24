<?php  
ob_start();
 function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 
                $cod='';
                $nom='';
                $prenom='';
                $dat='';
                $grad='';
                $dure=0;
                $diplom_base='';
                $diplom_prep=''; 
                $ville='';
                $Pays='';
                $date_A='';
                $date_R='';
                $date_EA='';
                $date_ER='';
                $Frais=0;
                $cood=0;
$taux=107;
            $db = data_base_connect ();
$stage=$db->prepare('SELECT * FROM Stage WHERE Code='.$_GET['code_stage']);
$Manifestation=$db->prepare('SELECT * FROM Stage JOIN Manifestation WHERE Manifestation.Stage_Code=Stage.Code AND Stage.Code='.$_GET['code_stage']);
$chercheur_code= $db->prepare('SELECT * FROM Chercheur WHERE Code='.$_GET["code_cherch"]);
$Ens_code= $db->prepare('SELECT * FROM Chercheur JOIN Enseignant WHERE Chercheur.Code=Enseignant.Chercheur_Code AND Chercheur.Code='.$_GET["code_cherch"]);
$Doc_code= $db->prepare('SELECT * FROM Chercheur JOIN Doctorant WHERE Chercheur.Code=Doctorant.Chercheur_Code AND Chercheur.Code='.$_GET["code_cherch"]);

$chercheur_code->execute();
while ($code = $chercheur_code->fetch())
            {
                $cod=$code['Code'];
                $nom=$code['Nom_Fr'];
                $prenom=$code['Prénom_Fr'];
                $dat=$code['Date_Naissance'];
            }
$Ens_code->execute();
while ($code1 = $Ens_code->fetch())
            {
                $grad=$code1['Grade'];
            }
$Doc_code->execute();
while ($code2 = $Doc_code->fetch())
            {
                $diplom_base=$code2['Diplome_Base'];
                $diplom_prep=$code2['Diplome_Préparé'];    
            }
$stage->execute();
while ($code3 = $stage->fetch())
            {
                $ville = $code3['Ville'];
                $pays = $code3['Pays'];
                $dure = $code3['Durée'];
                $cood = $code3['Code'];
                $date_A = $code3['Date_Prévue_Départ'];
                $date_R = $code3['Date_Prévue_Retour'];
                $date_EA = $code3['Date_Effective_Départ'];
                $date_ER = $code3['Date_Effective_Retour'];
                $Frais = $code3['Frais_de_Séjour'];
            }
/*$Manifestation->execute();
while ($code4 = $Manifestation->fetch())
            {
                $Frais = $code4['Frais_Inscription'];
            }*/
?>
 <?php
if ($date_EA!='') {$date_A=$date_EA;$date_R=$date_ER;}
 ?>   
<style type="text/css"> 
table  
    { border-collapse:collapse;
     direction:rtl; 
    text-align:center; }
#tab td{ width:8.5% ; height:8%; } 

td 
    { text-align:center;  }
page{ font-size:12;  }
#tab2 td{text-align:left;}

</style>
<page backtop="35mm" backleft="10mm" backright="10mm" backbottom="30mm" >
<div style="text-align:right;font-size:15px;"><b><?php if ($cood<10) {echo '00'.$cood;} else {if ($cood>=100) {echo $cood;} else {echo '0'.$cood;}}?></b></div>
<table style="font-size:15px;">
    <tr>
  <td>  <b><u>Ecole Nationale supérieure d’Informatique</u></b></td>  
</tr>    
<tr>
    <td><b><u>Oued-Smar</u></b> </td>
</tr>
</table>
<table  align="center" >    
    <tr> 
        <td><br><br>  ETAT NOMINATIF DES CANDIDATS PROGRAMMES POUR UN  </td>
   </tr> 
   <tr> 
       <td><br> CONGE SCIENTIFIQUE DANS LE CADRE DU BUDGET <?php echo date('Y'); ?>  </td>
   </tr> 
    <tr>  
        <td> <br>EXERCICE DU 01/01/<?php echo date('Y'); ?> AU 31/12/<?php echo date('Y'); ?>      </td>
   </tr>
    
     
    
</table>
<table id="tab2"> 
    <tr> 
        <td ><u><br>Type de perfectionnement</u>  </td>
    </tr>
    <tr> 
        <td ><br>Séjour scientifique : S.S  </td>
    </tr>
    <tr> 
        <td><br>Stage de courte durée : SCD  </td>
    </tr> 
     <tr> 
        <td><br>Expériences au laboratoire et acquisition de nouvelles techniques : EL.AT  </td>
    </tr>
    

</table>
 

<br><br><br><br>
 
<table id="tab"  border="1" ALIGN="center" CELLSPACING="0"   > 
    <tr> 
	    <td style="width:2%;" > N°</td> 
		<td style="width:14%;">Nom et <br> Prénoms  </td> 
		<td> Grade   </td> 
		<td >Diplôme de <br> base</td> 
		<td> Diplôme &agrave;<br> préparer  </td> 
		<td> Pays <br>d’accueil  </td> 
		<td>Duré du stage   </td> 
		<td> Période  </td> 
		<td>Objectifs<br> du stage   </td> 
		<td> Montant de <br> L’allocation <br> en DA    </td> 
  
    </tr>  
    <tr>    
		<td style="width:2%;"> 01 </td> 
		<td style="width:14%;"><?php echo $nom; ?><br> <?php echo $prenom; ?></td> 
		<td> <?php echo $grad; ?> </td> 
		<td><?php if ($diplom_base!="") {echo $diplom_base;} else {echo '/////';} ?> </td> 
    <td><?php if ($diplom_prep!="") {echo $diplom_prep;} else {echo '/////';} ?> </td> 
		<td><?php echo $pays;?><br> <?php echo $ville;?> </td> 
		<td><?php echo $dure; ?> jour<?php if ($dure>1) echo 's'; ?><br> </td> 
		<td><?php echo $date_A;?> <br><?php echo $date_R;?> </td> 
		<td>SCD </td> 
	  <td><br><?php echo $Frais;?> <br> <br></td> 
    </tr>

</table>  <br><br><br><br> 
<table align=center> 
       <tr> 
       
           <td style="width:33%;">Visa du Directeur</td> 
           <td style="width:33%;">Visa du Directeur Adjoint</td>
          <td style="width:33%;"> Visa du  Président  du Conseil Scientifique </td>    
           </tr>
</table>
<table align=center >        
    <tr>
    <td style="width:100%;">        De  la Post-Graduation et de la Recherche</td>
    </tr>
</table>

</page>


<?php 

$content = ob_get_clean() ;  
 require('./html2pdf/html2pdf.class.php') ; 
 $pdf = new HTML2PDF('L','A4','fr', true,  'UTF-8' ,  array(5, 5, 5, 8) );
 $pdf->writeHTML($content) ;   
 $pdf->Output('Frais_de_Séjour_'.$nom.'_'.$prenom.'.pdf') ;  
 ?>
