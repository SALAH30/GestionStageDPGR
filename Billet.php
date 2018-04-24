<?php  
ob_start()  ; 
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
                $diplom_base='';
                $diplom_prep=''; 
                $ville='';
                $pays='';
                $date_A='';
                $date_R='';
                $date_EA='';
                $date_ER='';
                $Mtrans='';
                $Frais=0;
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
       //        $dure = $code3['Dure'];
                $date_A = $code3['Date_Prévue_Départ'];
                $date_R = $code3['Date_Prévue_Retour'];
                $date_EA = $code3['Date_Effective_Départ'];
                $date_ER = $code3['Date_Effective_Retour'];
                $Mtrans = $code3['Moyen_Transport'];
            }
$Manifestation->execute();
while ($code4 = $Manifestation->fetch())
            {
                $Frais = $code4['Frais_Inscription'];
            }

?>  

<style type="text/css"> 
table  
    { border-collapse:collapse;
     direction:rtl; 
    text-align:center;  
    } 
td{
    height:4%;

  } 
.t1{ width:4%; }  
.t2{ width:56% } 
.t3{ width:40% }    
input {
    background-color: transparent;
    border: 0px solid transparent;
    height: 30px;
    width: 70px;
    color: black;
}
</style>
<page backtop="10mm" backleft="10mm" backright="10mm" backbottom="10mm" >  
    <table>
        <tr>
            <td style="width:100%;" ><h4>Fiche d’organisation</h4></td>
        </tr>
        <tr>
            <td style="width:2%;"><h4>De déplacement / mission</h4></td>
        </tr>
    
    </table >
    <table border="1" height="70%"  >
    <tr>
        <td class="t1"   > 1</td> 
        <td class="t2" align="left"><b> Direction requérant de déplacement  </b> </td>
        <td style="width:40%;" align="left" style="padding-left:5px;"> DPGR</td>
    </tr>
    <tr>
        <td class="t1" >2 </td> 
        <td class="t2" align="left"><b> Nom et prénom</b>  </td>
        <td style="width:40%;" align="left" style="padding-left:5px;"> <?php echo $nom.' '.$prenom; ?></td>
    </tr>
    <tr>
        <td class="t1" >3 </td> 
        <td class="t2" align="left"> <b> Grade  / fonction</b> </td>
        <td class="t3" align="left" style="padding-left:5px;"> <?php echo $grad;?> </td>
    </tr>
    <tr>
        <td class="t1" > 4</td> 
        <td class="t2" align="left"> <b> Motif / occasion du déplacement : (mission,</b>  <br> <b> stage, formation, séminaire, conférence…….etc).</b> </td>
        <td class="t3" align="left" style="padding-left:5px;"><?php if($Frais!=0){ echo 'Manifestation scientifique';} else echo 'Stage de court duré';?></td>
    </tr>
    <tr>
        <td class="t1"  >5 </td> 
        <td class="t2" align="left"> <b> Destination</b> </td>
        <td class="t3" align="left" style="padding-left:5px;"> <?php echo $pays.' - '.$ville;?></td>
    </tr>
    <tr>
        <td class="t1" >6 </td> 
        <td class="t2" align="left"><b> Moyen de transport</b> </td>
        <td class="t3" align="left" style="padding-left:5px;"> <?php echo $Mtrans;?></td>
    </tr>
    <tr>
        <td class="t1" > 7</td> 
        <td class="t2" align="left"><b> Date de départ</b> </td>
        <td class="t3" align="left" style="padding-left:5px;"><?php if ($date_EA!='') {echo $date_EA;} else {?> <input type="text" name="Dure" id="Dure" value="<?php echo $date_A;?>"><?php } ?></td>
    </tr>
    <tr>
        <td class="t1" >8 </td> 
        <td class="t2" align="left"> <b> Heure de départ</b> </td>
        <td class="t3" align="left" style="padding-left:5px;"><input type="text" name="depart" id="depart"></td>
    </tr>
    <tr>
        <td class="t1" >9 </td> 
        <td class="t2" align="left"><b> Nécessite un accompagnant</b> </td>
        <td class="t3" align="center"> 
          <input type="radio" name="cadre"> 
            oui
            <input name="cadre" type="radio" checked="checked" style="margin-left:50px;"> 
            Non</td>
    </tr>
    <tr>
        <td class="t1" >10 </td> 
        <td class="t2" align="left"> <b> Date de retour</b></td>
        <td class="t3" align="left" style="padding-left:5px;"> <?php if ($date_ER!='') {echo $date_ER;} else {?> <input type="text" name="Dur" id="Dur" value="<?php echo $date_R;?>"><?php } ?></td>
    </tr>
    <tr>
        <td class="t1" >11 </td> 
        <td class="t2" align="left"> <b> Heure de retour</b></td>
        <td class="t3" align="left" style="padding-left:5px;"><input type="text" name="retour" id="retour"></td>
    </tr>
    <tr>
        <td class="t1" >12 </td> 
        <td class="t2" align="left"> <b> Autre renseignements</b>  </td>
        <td class="t3" align="left" style="padding-left:5px;"><input type="text" name="autre" id="autre" style="width:260px;"></td>
    </tr>
    </table> 
    <br>
    <br>
    <br>
    <br>
    <table>
        <tr>
            <td style="width:50%"> </td>
            <td  style="width:75%"><b>Oued-Smar, le: </b><?php echo date('d/m/Y')?> </td>
        </tr> 
        <tr>
            <td style="width:50%"> </td>
            <td style="width:50%">  <b><br><br><br>Signature</b></td>
        </tr>
    </table>                                                            
                                                                    
</page> 
<?php 

$content = ob_get_clean() ;  
 require('./html2pdf/html2pdf.class.php') ; 
 $pdf = new HTML2PDF('P','A4','fr', true,  'UTF-8' ,  array(5, 5, 5, 8) );
 $pdf->writeHTML($content, isset($_GET['vuehtml']));   
 $pdf->Output('Billet_'.$nom.'_'.$prenom.'.pdf') ;  
 ?>
