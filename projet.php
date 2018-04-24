<?php 
require('includes/config.php'); 
//if not logged in redirect to login page
if(!$user->is_logged_in() ){ header('Location: login.php'); }

 ?>
 
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
                $dure = $code3['Durée'];
                $date_A = $code3['Date_Prévue_Départ'];
                $date_R = $code3['Date_Prévue_Retour'];
                $Mtrans = $code3['Moyen_Transport'];
                $etabliss = $code3['Etablissement'];
                $Mtrans = $code3['Moyen_Transport'];
                $Frais_sejour = $code3['Frais_de_Séjour'];
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
    text-align:center; }
#tab td{ width:8.5% ; } 

td 
    { text-align:center;  }
page{ font-size:12;  }
#tab2 td{text-align:left;}

</style>
 


<page backtop="20mm" backleft="10mm" backright="10mm" backbottom="10mm">

    <table  algin=center > 
        <tr> 
            <td style="width:50%;" ><b> MINISTERE DE L’ENSEIGNEMENT </b> </td> 
            <td style="width:50%;" ><b> REPUBLIQUE ALGERIENNE </b> </td>
        </tr> 
         <tr>
            <td style="width:50%;"> <br> <b>SUPERIEUR</b>  </td> 
            <td style="width:50%;"> <br> <b>DEMOCRATIQUE ET POPULAIRE</b> </td>
        </tr> 
    </table> 
    <table aling=center>
         <tr>
            <td style="width:100%;" ><br>                                                                  <b> ANNEXE (IV)</b>   </td>
        </tr> 
        <tr>
            <td style="width:1%;" ><br><b> N° 003/2015</b></td>
        </tr> 
        <tr>
            <td style="width:100%;" ><br>                                                           <b><u>A T T E S T A T I O N</u></b>    </td>
        </tr> 
        <tr> 
            <td style="width:100%;"  ><br>                                             <b>FORMATION d’une DUREE EGALE ou INFERIEURE</b>  </td>
        </tr> 
        <tr>
            <td style="width:100%;"  ><br>                                                           <b> à 6 MOIS</b>                   </td> 
        </tr>
    </table> <br><br>
    
    <b>Le Directeur de l’ESI (ex : INI)</b> <br><br>
    <b>Certifie que :</b> <?php echo $nom.' '.$prenom;?><br><br>
    <b> Née : </b>  <?php echo $dat; ?>   <br><br>                     à   
    <b>A été retenu par le conseil scientifique de son établissement.</b> <br><br>
   <b> Etat N°	003/15	  Code M.E.S.</b> <br><br>
    <b>Pour un stage d’une durée de : </b><?php echo $dure;?> <br><br>
    <b>Pays :</b> 	<?php echo $pays.' - '.$ville;   ?> <br><br>
    <b>Etablissement :</b> <?php echo $etabliss;?>  <br><br>
    <b>A compter :</b> du <?php echo $date_A;?> au  <?php echo $date_R;?><br><br>
    <b>A cet effet, </b> 
    <?php
        if($sexe=='Féminin')
        {
            if($etat_civil=='Cilibataire')
            {
                echo 'mademoiselle';
            }else echo 'madame';
        }else{
            echo 'monsieur';
        }
    ?><br><br>
    <b>Bénéficiera d’une allocation d’études, sous forme d’indemnités journalières1 d’un montant global de :</b>   calcule(<?php echo $Frais_sejour;?>) <br>     (<?php echo $Frais_sejour;?> DA). <br><br>
    <b><?php 
if($Frais!=0){
    echo 'Ainsi que de frais d’inscription d’un montant de :';?></b> <?php echo 'Quarante Quatre Mille Neuf Cent Quatre Vingt Dix Sept Dinars Algériens et Six centimes';?><br>   <?php  echo $Frais; }else {echo '</b>';}?>  DA)<br><br>
    <b>Pris en charge par2 l’ESI.</b> <br>
    
    
   <div style="text-align:right;"><b>Fait à Alger le :</b><?php echo date('Y-m-d');?></div>


</page>

<?php 

$content = ob_get_clean() ;  
 require('./html2pdf/html2pdf.class.php') ; 
 $pdf = new HTML2PDF('L','A4','fr', true,  'UTF-8' ,  array(5, 5, 5, 8) );
 $pdf->writeHTML($content) ;   
 $pdf->Output('doc.pdf') ;  
 ?>
        <script type="text/javascript">
  
var res, plus, diz, s, un, mil, mil2, ent, deci, centi, pl, pl2, conj;
  
var t=["","Un","Deux","Trois","Quatre","Cinq","Six","Sept","Huit","Neuf"];
var t2=["Dix","Onze","Douze","Treize","Quatorze","Quinze","Seize","Dix-sept","Dix-huit","Dix-neuf"];
var t3=["","","Vingt","Trente","Quarante","Cinquante","Soixante","Soixante","Quatre-vingt","Quatre-vingt"];
  
  
  
window.onload=calcule
  
function calcule(m){
    return trans(m);
}
  
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// traitement des deux parties du nombre;
function decint(n){
  
    switch(n.length){
        case 1 : return dix(n);
        case 2 : return dix(n);
        case 3 : return cent(n.charAt(0)) + " " + decint(n.substring(1));
        default: mil=n.substring(0,n.length-3);
            if(mil.length<4){
                un= (mil==1) ? "" : decint(mil);
                return un + mille(mil)+ " " + decint(n.substring(mil.length));
            }
            else{  
                mil2=mil.substring(0,mil.length-3);
                return decint(mil2) + million(mil2) + " " + decint(n.substring(mil2.length));
            }
    }
}
  
  
  
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// traitement des nombres entre 0 et 99, pour chaque tranche de 3 chiffres;
function dix(n){
    if(n<10){
        return t[parseInt(n)]
    }
    else if(n>9 && n<20){
        return t2[n.charAt(1)]
    }
    else {
        plus= n.charAt(1)==0 && n.charAt(0)!=7 && n.charAt(0)!=9 ? "" : (n.charAt(1)==1 && n.charAt(0)<8) ? " et " : "-";
        diz= n.charAt(0)==7 || n.charAt(0)==9 ? t2[n.charAt(1)] : t[n.charAt(1)];
        s= n==80 ? "s" : "";
  
        return t3[n.charAt(0)] + s + plus + diz;
    }
}
  
  
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// traitement des mots "cent", "mille" et "million"
function cent(n){
return n>1 ? t[n]+ " Cents" : (n==1) ? " Cent" : "";
}
  
function mille(n){
return n>=1 ? " Mille" : "";
}
  
function million(n){
return n>=1 ? " Millions" : " Million";
}
  
  
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// conversion du nombre
function trans(n){
  
    // vérification de la valeur saisie
    if(!/^\d+[.,]?\d*$/.test(n)){
        return "L'expression entrée n'est pas un nombre."
    }
  
    // séparation entier + décimales
    n=n.replace(/(^0+)|(\.0+$)/g,"");
    n=n.replace(/([.,]\d{2})\d+/,"$1");
    n1=n.replace(/[,.]\d*/,"");
    n2= n1!=n ? n.replace(/\d*[,.]/,"") : false;
  
    // variables de mise en forme
    ent= !n1 ? "" : decint(n1);
    deci= !n2 ? "" : decint(n2);
    if(!n1 && !n2){
        return  "Zéro"
    }
    conj= !n2 || !n1 ? "" : "  et ";
    euro= !n1 ? "" : !/[23456789]00$/.test(n1) ? " Dinar": " Dinar";
    centi= !n2 ? "" : " centime";
    pl=  n1>1 ? "s" : "";
    pl2= n2>1 ? "s" : "";
  
    // expression complète en toutes lettres
    return ("" + ent + euro + pl + conj + deci + centi + pl2).replace(/\s+/g," ").replace("cents E","cents E") ;
  
}
</script>