<?php 
ob_start(); 
function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 
?>

<style type="text/css"> 
table  
    { border-collapse:collapse;
     direction:rtl; 
    text-align:center; }
#tab td{ width:8.5% ; } 

td 
    { text-align:center;  }
page{ font-size:12;  }
#tab2 td{text-align:left;}

</style>
<?php
class chiffreEnLettre {
public function ConvNumberLetter($Nombre, $Devise, $Langue) {
$dblEnt=''; $byDec='';
$bNegatif='';
$strDev = '';
$strCentimes = '';
if( $Nombre < 0 ) {
$bNegatif = true;
$Nombre = abs($Nombre);
}
$dblEnt = intval($Nombre) ;
$byDec = round(($Nombre - $dblEnt) * 100) ;
if( $byDec == 0 ) {
if ($dblEnt > 999999999999999) {
return "#TropGrand" ;
}
}
else {
if ($dblEnt > 9999999999999.99) {
return "#TropGrand" ;
}
}
switch($Devise) {
case 0 :
if ($byDec > 0) $strDev = " virgule" ;
break;
case 1 :
$strDev = " Dinar" ;
if ($byDec > 0) $strCentimes = $strCentimes . " Centimes" ;
break;
case 2 :
$strDev = " Dollar" ;
if ($byDec > 0) $strCentimes = $strCentimes . " Cent" ;
break;
}
if (($dblEnt > 1) && ($Devise != 0)) $strDev = $strDev . "s" ;
$NumberLetter = $this->ConvNumEnt(floatval($dblEnt), $Langue) . $strDev . " " . $this->ConvNumDizaine($byDec, $Langue) . $strCentimes ;
return $NumberLetter;
}
private function ConvNumEnt($Nombre, $Langue) {
$byNum=$iTmp=$dblReste='' ;
$StrTmp = '';
$NumEnt='' ;
$iTmp = $Nombre - (intval($Nombre / 1000) * 1000) ;
$NumEnt = $this->ConvNumCent(intval($iTmp), $Langue) ;
$dblReste = intval($Nombre / 1000) ;
$iTmp = $dblReste - (intval($dblReste / 1000) * 1000) ;
$StrTmp = $this->ConvNumCent(intval($iTmp), $Langue) ;
switch($iTmp) {
case 0 :
break;
case 1 :
$StrTmp = "mille " ;
break;
default :
$StrTmp = $StrTmp . " mille " ;
}
$NumEnt = $StrTmp . $NumEnt ;
$dblReste = intval($dblReste / 1000) ;
$iTmp = $dblReste - (intval($dblReste / 1000) * 1000) ;
$StrTmp = $this->ConvNumCent(intval($iTmp), $Langue) ;
switch($iTmp) {
case 0 :
break;
case 1 :
$StrTmp = $StrTmp . " million " ;
break;
default :
$StrTmp = $StrTmp . " millions " ;
}
$NumEnt = $StrTmp . $NumEnt ;
$dblReste = intval($dblReste / 1000) ;
$iTmp = $dblReste - (intval($dblReste / 1000) * 1000) ;
$StrTmp = $this->ConvNumCent(intval($iTmp), $Langue) ;
switch($iTmp) {
case 0 :
break;
case 1 :
$StrTmp = $StrTmp . " milliard " ;
break;
default :
$StrTmp = $StrTmp . " milliards " ;
}
$NumEnt = $StrTmp . $NumEnt ;
$dblReste = intval($dblReste / 1000) ;
$iTmp = $dblReste - (intval($dblReste / 1000) * 1000) ;
$StrTmp = $this->ConvNumCent(intval($iTmp), $Langue) ;
switch($iTmp) {
case 0 :
break;
case 1 :
$StrTmp = $StrTmp . " billion " ;
break;
default :
$StrTmp = $StrTmp . " billions " ;
}
$NumEnt = $StrTmp . $NumEnt ;
return $NumEnt;
}
private function ConvNumDizaine($Nombre, $Langue) {
$TabUnit=$TabDiz='';
$byUnit=$byDiz='' ;
$strLiaison = '' ;
$TabUnit = array("", "un", "deux", "trois", "quatre", "cinq", "six", "sept","huit", "neuf", "dix", "onze", "douze", "treize", "quatorze", "quinze","seize", "dix-sept", "dix-huit", "dix-neuf") ;
$TabDiz = array("", "", "vingt", "trente", "quarante", "cinquante","soixante", "soixante", "quatre-vingt", "quatre-vingt") ;
if ($Langue == 1) {
$TabDiz[7] = "septante" ;
$TabDiz[9] = "nonante" ;
}
else if ($Langue == 2) {
$TabDiz[7] = "septante" ;
$TabDiz[8] = "huitante" ;
$TabDiz[9] = "nonante" ;
}
$byDiz = intval($Nombre / 10) ;
$byUnit = $Nombre - ($byDiz * 10) ;
$strLiaison = "-" ;
if ($byUnit == 1) $strLiaison = " et " ;
switch($byDiz) {
case 0 :
$strLiaison = "" ;
break;
case 1 :
$byUnit = $byUnit + 10 ;
$strLiaison = "" ;
break;
case 7 :
if ($Langue == 0) $byUnit = $byUnit + 10 ;
break;
case 8 :
if ($Langue != 2) $strLiaison = "-" ;
break;
case 9 :
if ($Langue == 0) {
$byUnit = $byUnit + 10 ;
$strLiaison = "-" ;
}
break;
}
$NumDizaine = $TabDiz[$byDiz] ;
if ($byDiz == 8 && $Langue != 2 && $byUnit == 0) $NumDizaine = $NumDizaine . "s" ;
if ($TabUnit[$byUnit] != "") {
$NumDizaine = $NumDizaine . $strLiaison . $TabUnit[$byUnit] ;
}
else {
$NumDizaine = $NumDizaine ;
}
return $NumDizaine;
}
private function ConvNumCent($Nombre, $Langue) {
$TabUnit='' ;
$byCent=$byReste='' ;
$strReste = '' ;
$NumCent='';
$TabUnit = array("", "un", "deux", "trois", "quatre", "cinq", "six", "sept","huit", "neuf", "dix") ;
$byCent = intval($Nombre / 100) ;
$byReste = $Nombre - ($byCent * 100) ;
$strReste = $this->ConvNumDizaine($byReste, $Langue);
switch($byCent) {
case 0 :
$NumCent = $strReste ;
break;
case 1 :
if ($byReste == 0)
$NumCent = "cent" ;
else
$NumCent = "cent " . $strReste ;
break;
default :
if ($byReste == 0)
$NumCent = $TabUnit[$byCent] . " cents" ;
else
$NumCent = $TabUnit[$byCent] . " cent " . $strReste ;
}
return $NumCent;
}
}
?>


<?php   

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
                $pv=0;
                $pv1=0;
                $pv2=0;
                $taux=107;
                $dure=0;

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
                $etat_civil=$code['Etat_Civil'];
                $sexe=$code['Sexe'];
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
                $date_EA = $code3['Date_Effective_Départ'];
                $date_ER = $code3['Date_Effective_Retour'];
                $date_A = $code3['Date_Prévue_Départ'];
                $date_R = $code3['Date_Prévue_Retour'];
                $Mtrans = $code3['Moyen_Transport'];
                $etabliss = $code3['Etablissement'];
                $Mtrans = $code3['Moyen_Transport'];
                $Frais_sejour = $code3['Frais_de_Séjour'];
                $dure= $code3['Durée'];
                $pv=$code3['Code_PV'];
            }
$Manifestation->execute();
while ($code4 = $Manifestation->fetch())
            {
                $Frais = $code4['Frais_Inscription'];
            }

?> 
<?php
if ($date_EA!='') {$date_A=$date_EA;$date_R=$date_ER;}
 ?> 
<page backtop="20mm" backleft="10mm" backright="10mm" backbottom="10mm">
    <table  algin=center > 
        <tr> 
            <td style="width:50%;" ><b> MINISTERE DE L’ENSEIGNEMENT </b> </td> 
            <td style="width:50%;" ><b> REPUBLIQUE ALGERIENNE </b> </td>
        </tr> 
         <tr>
            <td style="width:50%;"> <br> <b>SUPERIEURE</b>  </td> 
            <td style="width:50%;"> <br> <b>DEMOCRATIQUE ET POPULAIRE</b> </td>
        </tr> 
    </table> 

    <table aling=center>
         <tr>
            <td style="width:100%;" ><br><br>                                                              <b> ANNEXE (IV)</b>   </td>
        </tr> 
        <tr>
            <td style="width:1%;text-align:left;" ><br><b> N° 003/<?php echo date('Y');?></b></td>
        </tr> 
        <tr>
            <td style="width:100%;" ><br>                                                           <b><u>A T T E S T A T I O N</u></b>    </td>
        </tr> 
        <tr> 
            <td style="width:100%;"  ><br>                                             <b>Formation d’une durée égale ou inférieure</b>  </td>
        </tr> 
        <tr>
            <td style="width:100%;"  ><br>                                                           <b> &agrave; 6 mois</b>                   </td> 
        </tr>
    </table> <br><br><br>
    
    <b>Le Directeur de l’ESI (ex : INI)</b> <br><br>
    <b>Certifie que :</b> <?php echo $nom.' '.$prenom.'.';?><br><br>
    <b>Né<?php if($sexe=='Féminin') echo 'e';?> : </b>  <?php echo $dat;?>.<br><br>  
    <b>A été retenu par le conseil scientifique de son établissement.</b> <br><br>
    <b>Etat N° 003/15	  Code M.E.S.</b> <br><br>
    <b>Pour un stage d’une durée de : </b><?php echo $dure;?> jour<?php if ($dure>1) echo 's'; ?>.<br><br>
    <b>Pays :</b> 	<?php echo $pays.' - '.$ville;   ?>. <br><br>
    <b>Etablissement :</b> <?php echo $etabliss;?>.  <br><br>
    <b>A compter :</b> du <?php echo $date_A;?> au  <?php echo $date_R;?>.<br><br>
    <b>A cet effet, </b> 
    <?php
        if($sexe=='Féminin')
        {
            if($etat_civil=='Célébataire')
            {
                echo 'mademoiselle';
            }else echo 'madame';
        }else{
            echo 'monsieur';
        }
    echo ' '.$nom.' '.$prenom.';';
    ?><br><br>
    
    <b>Bénéficiera d’une allocation d’études, sous forme d’indemnités journalières d’un montant global de :</b> <?php if ($Frais_sejour==0) {echo 'zéro';}$abc = new chiffreEnLettre();
echo $abc->ConvNumberLetter($Frais_sejour,1,0);echo '('.$Frais_sejour;?> DA). <br><br>
    <b><?php
if($Frais!=0){
    echo 'Ainsi que de frais d’inscription d’un montant de : ';?></b>   <?php if ($Frais==0) {echo 'zéro';}$abcd = new chiffreEnLettre();
echo $abcd->ConvNumberLetter($Frais,1,0); echo '('.$Frais.' DA).<br>';}else {echo '</b>';}?><br>
    <b>Pris en charge par l’ESI.</b> <br>
    
    <?php 
    if ($pv>10000000) {$pv1=$pv%10000;$pv/=10000;$pv2=$pv%100;$pv/=100;$pv=$pv%100;}
    else {
        if ($pv<1000000) {$pv1=$pv%10000;$pv/=10000;$pv2=$pv%10;$pv/=10;$pv='0'.$pv%10;}
        else {$pv1=$pv%10000;$pv/=10000;$pv2=$pv%100;$pv/=100;$pv='0'.$pv%10;}
    }
?>
   <br><br><br><br><br><br><br><br><div style="text-align:right;"><b>Fait &agrave; Alger le: </b><?php if ($pv2<10) {echo $pv.'/0'.$pv2.'/'.$pv1;} else {echo $pv.'/'.$pv2.'/'.$pv1;}?></div>


</page>

<?php 

$content = ob_get_clean() ;  
 require('./html2pdf/html2pdf.class.php') ; 
 $pdf = new HTML2PDF('P','A4','fr', true,  'UTF-8' ,  array(5, 5, 5, 8));
 //$pdf->pdf->IncludeJS("print(true);");
  $pdf->writeHTML($content, isset($_GET['vuehtml']));   
 $pdf->Output('Attestation_'.$nom.'_'.$prenom.'.pdf') ;  
 ?>
