<?php 
require('includes/config.php'); 
//if not logged in redirect to login page
if($user->is_logged_in() ){ 
   if (isset($_SESSION['type']) && $_SESSION['type'] == 'CS')  header('Location: login.php');
   }
else header('Location: login.php');

 ?>
 
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="fr"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>DPGR | Formulaire de stage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta content="" name="description" />
    <link rel="shortcut icon" type="image/x-icon" href="images/logo01.ico" />
  <meta content="Belkaid Aissa" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">  
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style13.css" media="screen"/>
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />
    <!--END GLOBAL STYLES --> 

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/plugins/jquery-steps-master/demo/css/wizardMain.css" rel="stylesheet" />
    <link href="assets/plugins/jquery-steps-master/demo/css/jquery.steps.css" rel="stylesheet" /> 
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />  
    <link href="assets/css/jquery-ui.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
    <link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
    <link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
    <link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
    <link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
    <!-- END PAGE LEVEL  STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->

     <!-- BEGIN BODY -->
<body class="padTop53">
        <style>
        .inner {
            min-height: 800px;
        }
        .wizard > .steps .error a, .wizard > .steps .error a:hover, .wizard > .steps .error a:active{
            outline: none;
        }
      </style>
    <section id="container" >
      <!-- **************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS    **************************************************************************************************************************************************       -->
      <!--header start-->
      <header class="header black-bg">
            
            <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Afficher/Cacher Menu" id="afficher" onclick="if (this.id=='afficher') {document.querySelector('.chosen-container-single .chosen-single').style.width='690px';document.querySelector('.chosen-container-single .chosen-drop').style.width='690px';this.id='cacher';} else {$('#main-content').css('margin-left','232px');document.querySelector('.chosen-container-single .chosen-single').style.width='635px';document.querySelector('.chosen-container-single .chosen-drop').style.width='635px';this.id='afficher';}"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DPGR ADMIN</b></a>
            <!--logo end-->  
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <!--<li><a class="logout" href="login.html">Logout</a></li>-->
                    <li><button class="exit-btn exit-btn-3">Déconnecter</button></li>
              </ul>
            </div>
        </header>
      <!--header end--> 
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
            <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              <?php if($_SESSION['type'] == 'DG'){ ?>
        
                  <p class="centered"><a href="accueil.php"><img src="assets/img/personnage/bossDG01.png" class="img-circle" width="100"></a></p>
                  <h5 class="centered">ADADGPR</h5>
          
          <?php }else if($_SESSION['type'] == 'CS'){ ?>
          
          <p class="centered"><a href="accueil.php"><img src="assets/img/personnage/bossDG01.png" class="img-circle" width="100"></a></p>
                  <h5 class="centered">Conseil Scientifique</h5>
          
          <?php } else if($_SESSION['type'] == 'AD'){ ?>
          
          <p class="centered"><a href="accueil.php"><img src="assets/img/personnage/bossDG01.png" class="img-circle" width="100"></a></p>
                  <h5 class="centered">Directeur</h5>
          
                  <?php }?>
          
          
                  <li class="mt">
                      <a  href="accueil.php">
                          <i class="fa fa-dashboard"></i>
                          <span><h4>Accueil</h4></span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span><h4>Recherche</h4></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="simple.php">Simple</a></li>
                          <li><a  href="buttons.php">Avancée</a></li>
                         <!-- <li><a  href="panels.html">COMPLET</a></li>-->
                      </ul>
                  </li>
        <?php if( $_SESSION['type'] != 'CS'){?>
                  <li class="sub-menu">
                      <a href="javascript:;" class="active" >
                          <i class="fa fa-book"></i>
                          <span><h4>Mettre à jour</h4></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="search-form2.php">Chercheur</a></li>
                          <li><a  href="stage-form.php">Stage</a></li>
                          <li><a  href="univer-form.php">Université</a></li>
                          <li><a  href="labo-form.php">Laboratoire</a></li>
                      </ul>
                  </li>
          <?php } ?>
          

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tasks"></i>
                          <span><h4>Documents</h4></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="documentt.php">Stagiaire</a></li>
                      </ul>
                      <ul class="sub">
                          <li><a  href="canvas.php">Canevas</a></li>
                      </ul>

                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span><h4>Base de donnée</h4></span>
                      </a>
                      <ul class="sub">
                           <li><a  href="base table.php">Table de la BDD</a></li>
                          <li><a  href="sauvgard base.php">Sauvegarder la BDD</a></li>
                      </ul>
                  </li>
                 
                      <a href="javascript:;" >
                          <a  href="morris.php"><li class="sub-menu">
              <i class=" fa fa-bar-chart-o"></i>
                          <span><h4>Statistiques</h4></span>
              </a>
            </a>
                     
                  </li>
                 <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-cogs"></i>
                          <span><h4>Options</h4></span>
                      </a>
                      <ul class="sub">
                       <?php if( $_SESSION['type'] == 'AD'){?>  <li><a  href="delete.php">Supprimer un compte</a></li> <?php }?>
                          <li><a  href="lock_screen.php">Verouiller le site</a></li>
                      </ul>
                  </li>
 
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <?php 
  function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 
            $db = data_base_connect ();
            ?>
        <!--PAGE CONTENT -->
<section id="main-content">
    <section class="wrapper">
        <div id="content">
            <div class="inner"  style="background-color:#F2F2F2;">
                <form method="post" action="Stage_modif.php" id="form1" class="form-horizontal block-validate popup-validation">
                    <hr />
                    <div class="row">
                        <div class="panel panel-primary" style="margin:0 70px 0 30px;">
                            <div class="panel-heading" style="font-size:28px;text-align:center;">
                                Les Stages
                            </div>
                        <div class="panel-body">
                            <div id="wizardV" >
                            <?php 
                            $st=$db->prepare("SELECT * FROM Stage WHERE Code=".$_GET['stage_code']);
                            $st->execute();
                            while($row=$st->fetch()){
                            ?>
                <h2>Les Informations de Stage</h2>
                <section>
                     <div class="form-group">
                     <input type="hidden" value="<?php echo $_GET['stage_code']; ?>" hidden class="form-control validate[required]" title=" " name="stage_code" id="stage_code">
                        <label for="digit" class="control-label">Code PV</label>
                        <div class="input-group">
                            <input type="text" value="<?php echo $row['Code_PV']?>" id="digit" name="digit" class="validate[required,custom[onlyNumberSp]] form-control" title=" " autofocus/>
                            <span class="input-group-addon"><i class="fa fa-code"></i></span>
                        </div>
                        <span class="help-block">Le code de stage</span>
                    </div>
                     <div class="form-group">
                        <label for="number_stg" class="control-label">Nom et Prénom de Stagiére</label>
                        <select class="form-control chzn-select" tabindex="2" name ="cherchcod">
    <?php
            $statement = $db->prepare('SELECT * FROM Chercheur');
            $statement->execute();
            while($option = $statement->fetch()){ ?>
        
<option value='<?php echo $option['Code'] ?>'  <?php if($option['Code']==$row['Chercheur_Code']) { ?> selected <?php } ?>><?php echo $option['Nom_Fr'].' '.$option['Prénom_Fr']; ?></option>
                 <?php } ?>
                          </select>   
                    </div> 
                    <div class="form-group">
                        <label class="control-label" for="reservation1">Date Prévue (Aller/Retour)</label>
                        <div class="input-group">
                            <input type="text" value="<?php echo $row['Date_Prévue_Départ'].' - '.$row['Date_Prévue_Retour'];?>" class="form-control" id="reservation1" name="reservation1" required/>
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        </div>
                    </div>
                    <div class="form-group">  
                        <label for="Dure" class="control-label">Durée</label>
                        <div class="input-group">
                            <input type="number" value="<?php echo $row['Durée']?>" min="1" max="1000" class="form-control validate[required,custom[onlyNumberSp]]" name="Dure" id="Dure" value="30" title=" " style="width:80px;">  
                            <span class="input-group-addon" style="height:20px;width:180%;">
                            <input type="range" value="<?php echo $row['Durée']?>" min="1" max="1000" style="color:#868686;width:100%;height:5px;margin-left:5px;" value="30" step="1" name="pow" id="pow" list="powers">
                            </span>
                            <datalist id="powers" >
                                <option value="250">
                                <option value="500">
                                <option value="750">
                            </datalist>
                        </div>
                    </div>
                </section>
                <h2>A savoir</h2>
                <section>
                    <div class="form-group">
                        <label for="Pays" class="control-label">Ville</label>
                        <div class="input-group">
                            <input type="text" value="<?php echo $row['Pays']; ?>" id="Pays" name="Pays" class="form-control" />
                            <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="required1" class="control-label">Ville</label>
                        <div class="input-group">
                            <input type="text" value="<?php echo $row['Ville']; ?>" id="required1" name="required1" class="form-control" />
                            <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="required" class="control-label">Etablissement</label>
                        <div class="input-group">   
                            <input type="text" value="<?php echo $row['Etablissement']; ?>" id="required" name="required" class="form-control" />
                            <span class="input-group-addon"><i class="fa fa-building"></i></span>
                        </div>   
                    </div>
                    <div class="form-group">
                        <label for="requird2" class="control-label">Moyen de transport</label>
                            <select id="requird2" name="requird2" class="form-control">
                                <option value="Avion" <?php if($row['Moyen_Transport']=='Avion'){?> selected <?php } ?>>Avion</option>
                                <option value="Train" <?php if($row['Moyen_Transport']=='Train'){?> selected <?php } ?>>Train</option>
                                <option value="Voiture" <?php if($row['Moyen_Transport']=='Voiture'){?> selected <?php } ?>>Voiture</option>
                                <option value="Bateau" <?php if($row['Moyen_Transport']=='Bateau'){?> selected <?php } ?>>Bateau</option>
                            </select>
                    </div>
                </section>
                <h2>L'Etablissement</h2>
                <section>
                    <br>
                     <div class="form-group">
                        <label for="require22" class="control-label">Adresse de l'Etablissement</label>
                        <div class="input-group">
                            <input type="text" value="<?php echo $row['Adr_Etablissement']; ?>" id="require22" name="require22" class="form-control" />
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="required9" class="control-label">Téléphone de l'Etablissement</label>
                        <div class="input-group">
                            <input class="form-control" value="<?php echo $row['Tél_Etablissement']; ?>" type="text" id="required9" name="required9"/>
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email2" class="control-label">Email de l'Etablissement</label>
                        <div class="input-group">
                            <input type="email" value="<?php echo $row['Email_Etablissement']; ?>" id="email2" name="email2" class="form-control" />
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="url2" class="control-label">Site de l'Etablissement</label>
                        <div class="input-group">    
                            <input type="url" value="<?php echo $row['Site_Web_Etablissement']; ?>" id="url2" name="url2" class="form-control" />
                            <span class="input-group-addon"><i class="fa fa-site"></i></span>
                        </div>
                    </div>
                </section>
                <h2>Les Frais</h2>
                <section>
                    <div class="form-group">
                        <label for="digits0" class="control-label">Frais Séjour</label>
                        <div class="input-group">
                            <input type="text" value="<?php echo $row['Frais_de_Séjour']; ?>" id="digits0" name="digits0" class="form-control"/>
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="digits1" class="control-label">Frais Transport</label>
                        <div class="input-group">
                            <input type="text" value="<?php echo $row['Frais_Transport']; ?>" id="digits1" name="digits1" class="form-control validate[required,custom[number]]" title=" "/>
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="digits2" class="control-label">Frais Visa</label>
                        <div class="input-group">
                            <input type="text" value="<?php echo $row['Frais_Visa']; ?>" id="digits2" name="digits2" class="form-control validate[required,custom[number]]" title=" "/>
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="digits3" class="control-label">Frais Assurance</label>
                        <div class="input-group">
                            <input type="text" value="<?php echo $row['Frais_Assurance']; ?>" id="digits3" name="digits3" class="form-control validate[required,custom[number]]" title=" "/>
                            <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                        </div>          
                    </div>
                </section>
                <?php } 
$perf=$db->prepare("SELECT * FROM Stage JOIN Perfectionnement WHERE Perfectionnement.Stage_Code=Stage.Code AND Stage.Code=".$_GET['stage_code']);
$perf->execute();
while($res=$perf->fetch()){                ?>
                <h2>Perfectionnement</h2>
                <section>
<div class="form-group">
<label for="req" class="control-label">Objectif</label>
<div class="input-group">
<textarea style="min-height:130px;" value="<?php echo $res['Objectif']; ?>" class="form-control" name="req" id="req"></textarea>
<span class="input-group-addon">
<i class="fa fa-text"></i>
</span>
</div>
</div>
<div class="form-group">
<label for="req1" class="control-label">Missions</label>
<div class="input-group">
<textarea style="min-height:130px;" value="<?php echo $res['Missions']; ?>" class="form-control" name="req1" id="req1"></textarea>
<span class="input-group-addon">
<i class="fa fa-text"></i>
</span>
</div>
</div> 
                </section>
                <h2>Resultat</h2>
                <section>
<div class="form-group">
<label for="resu" class="control-label">Resultat</label>
<div class="input-group">
<textarea style="min-height:130px;" value="<?php echo $res['Résultat']; ?>" class="form-control" name="resu" id="resu"></textarea>
<span class="input-group-addon">
<i class="fa fa-text"></i>
</span>
</div>
</div> 
                </section>
                <?php }

$man=$db->prepare("SELECT * FROM Stage JOIN Manifestation WHERE Manifestation.Stage_Code=Stage.Code AND Stage.Code=".$_GET['stage_code']);
$man->execute();
while($mn=$man->fetch()){                
                ?>
                <h2>Manifestation</h2>
                <section>
<div class="form-group">
<label for="requi3" class="control-label">Désignation</label>
<input type="text" value="<?php echo $mn['Désignation']; ?>" class="form-control" name="requi3" id="requi3">
</div>
<div class="form-group">
<label for="requi4" class="control-label">Acronyme</label>
<input type="text"value="<?php echo $mn['Acronyme']; ?>"  class="form-control" name="requi4" id="requi4">
</div>
<div class="form-group">
<label for="req9" class="control-label">Titre d'article</label>
<div class="input-group">
<input type="text" value="<?php echo $mn['Titre_Article']; ?>" class="form-control validate[required]" name="req9" id="req9" title=" ">
<span class="input-group-addon">
<i class="fa fa-pencil"></i>
</span>
</div>
</div>
<div class="form-group">
<label for="digits4" class="control-label">Frais d'inscription</label>
<div class="input-group">
<input type="text" value="<?php echo $mn['Frais_Inscription']; ?>" id="digits4" name="digits4" class="form-control validate[required,custom[number]]" title=" "/>
<span class="input-group-addon">
<i class="fa fa-dollar"></i>
</span>
</div>
</div>    
                </section>
                <h2>Extra</h2>
                <section><br><br><br>
<div class="form-group">
<label for="requi5" class="control-label">Téléphone</label>
<div class="input-group">
<input class="form-control" value="<?php echo $mn['Tél_Manifestation']; ?>" type="text" id="requi5" name="requi5"/>
<span class="input-group-addon">
<i class="fa fa-phone"></i>
</span>
</div>
</div>
<div class="form-group">
<label for="email4" class="control-label">Email</label>
<div class="input-group">
<input type="email" value="<?php echo $mn['Email_Manifestation']; ?>" id="email4" name="email4" class="form-control" />
<span class="input-group-addon">
<i class="fa fa-envelope"></i>
</span>
</div>
</div>
<div class="form-group">
<label for="url" class="control-label">Site Web</label>
<div class="input-group">
<input type="url" value="<?php echo $mn['Site_Web_Manifestation']; ?>" id="url" name="url" class="form-control" />
<span class="input-group-addon">
<i class="fa fa-site"></i>
</span>
</div>
</div>
                </section>
                <?php } ?> 
            </div>           
        </div>
    </div> 
</div>              
</form>
</div>
          <!--END PAGE CONTENT -->
        </div>
    </section></section>
         <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top:70px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Demande de Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p style="font-family:Calibri;text-align:center;font-size:18px;margin-bottom:10px;">
                            Voulez vous Confirmer les informations ou Envoyer le formulaire ?</p>
                        <button type="button" style="margin-left:90px;" onclick='wizard.steps("previous");wizard.steps("previous");wizard.steps("previous");wizard.steps("previous");wizard.steps("previous");' class="btn btn-primary btn-lg" data-dismiss="modal" id="recipient-name"> Confirmer </button>
                        <button style="margin-left:100px;" type="button" onclick="document.getElementById('form1').submit();" data-dismiss="modal" class="btn btn-primary btn-lg" id="message-text"> Envoyer </button>
                    </div>
                </div>
            </div>
        </div>
     <!--END MAIN WRAPPER -->
    <!--footer start-->
          <footer class="site-footer">
              <div class="text-center">
                  &copy;  GoldenMinds &nbsp;2015 &nbsp;
                  <a href="#" class="go-top">
                      <i class="fa fa-angle-up"></i>
                  </a>
              </div>
          </footer>
          <!--footer end-->
      </section>

     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->

     <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-fr.js"></script>
    <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.js"></script>
    <script src="assets/js/validationInit.js"></script>
     <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script> 
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>
    <script src="assets/plugins/iCheck/icheck.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/plugins/uniform/jquery.uniform.min.js"></script>
    <script src="assets/plugins/inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
    <script src="assets/plugins/chosen/chosen.jquery.js"></script>
    <script src="assets/plugins/colorpicker/js/bootstrap-colorpicker.js"></script>
    <script src="assets/plugins/tagsinput/jquery.tagsinput.min.js"></script>
    <script src="assets/plugins/validVal/js/jquery.validVal.min.js"></script>
    <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/daterangepicker/moment.min.js"></script>
    <script src="assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
    <script src="assets/plugins/switch/static/js/bootstrap-switch.min.js"></script>
    <script src="assets/plugins/jquery.dualListbox-1.3/jquery.dualListBox-1.3.min.js"></script>
    <script src="assets/plugins/autosize/jquery.autosize.min.js"></script>
    <script src="assets/plugins/jasny/js/bootstrap-inputmask.js"></script>
    <script src="assets/plugins/jasny/js/bootstrap-button.js"></script>    
    <script src="assets/js/formsInit.js"></script>
    <script src="assets/plugins/jquery-steps-master/lib/jquery.cookie-1.3.1.js"></script>
    <script src="assets/plugins/jquery-steps-master/build/jquery.steps.js"></script> 
    <script>
        $(function () { formValidation(); });
        $(function () { formInit();});
        var form = $('#form1');
        var wizard=  $("#wizardV").steps({
            headerTag: "h2",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            stepsOrientation: "vertical",
            onStepChanging: function (event, currentIndex, newIndex) {
                return form.valid();
            },
            onFinishing: function (event, currentIndex) {
                return form.valid();
            },
            onFinished: function (event, currentIndex) {
                $('.modal').modal('show');
            }
        });
    </script>
    <script>
        $(function () { formValidation();});
        $(function () { formInit();});
          var day= new Date(),mois1,mois2,jour1,jour2,
            month= new Date(day.getTime() + 2592000000);
        
        if (day.getDate()<10) jour1 = "0" + (day.getDate());
        else jour1 = "" + (day.getDate());
        if (month.getDate()<10) jour2 = "0" + (month.getDate());
        else jour2 = "" + (month.getDate());
        
        if (day.getMonth()<9) mois1 = "0" + (day.getMonth()+1);
        else mois1 = "" + (day.getMonth()+1);
        if (month.getMonth()<9) mois2 = "0" + (month.getMonth()+1);
        else mois2 = "" + (month.getMonth()+1);
        
        document.getElementById("reservation1").value = jour1 + "/" + mois1 + "/" + day.getFullYear()+ " - " + jour2 + "/" + mois2 + "/" + month.getFullYear();
        $("#pow").on ( 'change', function () {
            document.getElementById("Dure").value = this.value;
            var myString= document.getElementById("reservation1"),jour,mois,
                date= myString.value,
                aller = date.substring(0, date.indexOf('-')-1),
                retour = aller.replace(/^(\d{2})\/(\d{2})\/(\d{4})$/, '$2/$1/$3');
            var changer = new Date(Date.parse(retour)+ ( this.value * 86400000));
            if (changer.getDate()<10) jour = "0" + (changer.getDate());
            else jour = "" + (changer.getDate());
            if (changer.getMonth()<9) mois = "0" + (changer.getMonth()+1);
            else mois = "" + (changer.getMonth()+1);
            document.getElementById("reservation1").value= aller + " - " + jour + "/" + mois + "/" + changer.getFullYear();
        });
        $("#Dure").on('change', function () {
            document.getElementById("pow").value = this.value;
            var myString= document.getElementById("reservation1"),jour,mois,
                date= myString.value,
                aller = date.substring(0, date.indexOf('-')-1),
                retour = aller.replace(/^(\d{2})\/(\d{2})\/(\d{4})$/, '$2/$1/$3');
            var changer = new Date(Date.parse(retour)+ ( this.value * 86400000));
            if (changer.getDate()<10) jour = "0" + (changer.getDate());
            else jour = "" + (changer.getDate());
            if (changer.getMonth()<9) mois = "0" + (changer.getMonth()+1);
            else mois = "" + (changer.getMonth()+1);
            document.getElementById("reservation1").value= aller + " - " + jour + "/" + mois + "/" + changer.getFullYear();
        });
        var myString= document.getElementById("reservation1");
        myString.addEventListener('focus',function() {
        document.querySelector(".ranges").addEventListener('click',function() {
            if (myString.value!= "") {
                var date= myString.value,
                    aller = date.substring(0, date.indexOf('-')-1),
                    retour = date.substring(date.lastIndexOf('-') + 2);
                aller = aller.replace(/^(\d{2})\/(\d{2})\/(\d{4})$/, '$2/$1/$3');
                retour = retour.replace(/^(\d{2})\/(\d{2})\/(\d{4})$/, '$2/$1/$3');
                var duree = (Date.parse(retour) - Date.parse(aller))/86400000;
                document.getElementById("Dure").value= duree;
                document.getElementById("pow").value= duree;
            }
        }, false);},false);
        var Typeahead = function (element, options) {
            this.$element = $(element)
            this.options = $.extend({}, $.fn.typeahead.defaults, options)
            this.matcher = this.options.matcher || this.matcher
            this.sorter = this.options.sorter || this.sorter
            this.highlighter = this.options.highlighter || this.highlighter
            this.updater = this.options.updater || this.updater
            this.source = this.options.source
            this.$menu = $(this.options.menu)
            this.shown = false
            this.listen()
        }

  Typeahead.prototype = {

    constructor: Typeahead

  , select: function () {
      var val = this.$menu.find('.active').attr('data-value')
      this.$element
        .val(this.updater(val))
        .change()
      return this.hide()
    }
 , updater: function (item) {
      return item
    }

  , show: function () {
      var pos = $.extend({}, this.$element.position(), {
        height: this.$element[0].offsetHeight
      })

      this.$menu
        .insertAfter(this.$element)
        .css({
          top: pos.top + pos.height
        , left: pos.left
        })
        .show()

      this.shown = true
      return this
    }

  , hide: function () {
      this.$menu.hide()
      this.shown = false
      return this
    }

  , lookup: function (event) {
      var items

      this.query = this.$element.val()

      if (!this.query || this.query.length < this.options.minLength) {
        return this.shown ? this.hide() : this
      }

      items = $.isFunction(this.source) ? this.source(this.query, $.proxy(this.process, this)) : this.source

      return items ? this.process(items) : this
    }

  , process: function (items) {
      var that = this

      items = $.grep(items, function (item) {
        return that.matcher(item)
      })

      items = this.sorter(items)

      if (!items.length) {
        return this.shown ? this.hide() : this
      }

      return this.render(items.slice(0, this.options.items)).show()
    }

  , matcher: function (item) {
      return ~item.toLowerCase().indexOf(this.query.toLowerCase())
    }

  , sorter: function (items) {
      var beginswith = []
        , caseSensitive = []
        , caseInsensitive = []
        , item

      while (item = items.shift()) {
        if (!item.toLowerCase().indexOf(this.query.toLowerCase())) beginswith.push(item)
        else if (~item.indexOf(this.query)) caseSensitive.push(item)
        else caseInsensitive.push(item)
      }

      return beginswith.concat(caseSensitive, caseInsensitive)
    }

  , highlighter: function (item) {
      var query = this.query.replace(/[\-\[\]{}()*+?.,\\\^$|#\s]/g, '\\$&')
      return item.replace(new RegExp('(' + query + ')', 'ig'), function ($1, match) {
        return '<strong>' + match + '</strong>'
      })
    }

  , render: function (items) {
      var that = this

      items = $(items).map(function (i, item) {
        i = $(that.options.item).attr('data-value', item)
        i.find('a').html(that.highlighter(item))
        return i[0]
      })

      items.first().addClass('active')
      this.$menu.html(items)
      return this
    }

  , next: function (event) {
      var active = this.$menu.find('.active').removeClass('active')
        , next = active.next()

      if (!next.length) {
        next = $(this.$menu.find('li')[0])
      }

      next.addClass('active')
    }

  , prev: function (event) {
      var active = this.$menu.find('.active').removeClass('active')
        , prev = active.prev()

      if (!prev.length) {
        prev = this.$menu.find('li').last()
      }

      prev.addClass('active')
    }

  , listen: function () {
      this.$element
        .on('focus',    $.proxy(this.focus, this))
        .on('blur',     $.proxy(this.blur, this))
        .on('keypress', $.proxy(this.keypress, this))
        .on('keyup',    $.proxy(this.keyup, this))

      if (this.eventSupported('keydown')) {
        this.$element.on('keydown', $.proxy(this.keydown, this))
      }

      this.$menu
        .on('click', $.proxy(this.click, this))
        .on('mouseenter', 'li', $.proxy(this.mouseenter, this))
        .on('mouseleave', 'li', $.proxy(this.mouseleave, this))
    }

  , eventSupported: function(eventName) {
      var isSupported = eventName in this.$element
      if (!isSupported) {
        this.$element.setAttribute(eventName, 'return;')
        isSupported = typeof this.$element[eventName] === 'function'
      }
      return isSupported
    }

  , move: function (e) {
      if (!this.shown) return

      switch(e.keyCode) {
        case 9: // tab
        case 13: // enter
        case 27: // escape
          e.preventDefault()
          break

        case 38: // up arrow
          e.preventDefault()
          this.prev()
          break

        case 40: // down arrow
          e.preventDefault()
          this.next()
          break
      }

      e.stopPropagation()
    }

  , keydown: function (e) {
      this.suppressKeyPressRepeat = ~$.inArray(e.keyCode, [40,38,9,13,27])
      this.move(e)
    }

  , keypress: function (e) {
      if (this.suppressKeyPressRepeat) return
      this.move(e)
    }

  , keyup: function (e) {
      switch(e.keyCode) {
        case 40: // down arrow
        case 38: // up arrow
        case 16: // shift
        case 17: // ctrl
        case 18: // alt
          break

        case 9: // tab
        case 13: // enter
          if (!this.shown) return
          this.select()
          break

        case 27: // escape
          if (!this.shown) return
          this.hide()
          break

        default:
          this.lookup()
      }

      e.stopPropagation()
      e.preventDefault()
  }

  , focus: function (e) {
      this.focused = true
    }

  , blur: function (e) {
      this.focused = false
      if (!this.mousedover && this.shown) this.hide()
    }

  , click: function (e) {
      e.stopPropagation()
      e.preventDefault()
      this.select()
      this.$element.focus()
    }

  , mouseenter: function (e) {
      this.mousedover = true
      this.$menu.find('.active').removeClass('active')
      $(e.currentTarget).addClass('active')
    }

  , mouseleave: function (e) {
      this.mousedover = false
      if (!this.focused && this.shown) this.hide()
    }

  }
         var old = $.fn.typeahead

  $.fn.typeahead = function (option) {
    return this.each(function () {
      var $this = $(this)
        , data = $this.data('typeahead')
        , options = typeof option == 'object' && option
      if (!data) $this.data('typeahead', (data = new Typeahead(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  $.fn.typeahead.defaults = {
    source: []
  , items: 8
  , menu: '<ul class="typeahead dropdown-menu"></ul>'
  , item: '<li><a href="#"></a></li>'
  , minLength: 1
  }
  
  $.fn.typeahead.Constructor = Typeahead
   $.fn.typeahead.noConflict = function () {
    $.fn.typeahead = old
    return this
  }


 /* TYPEAHEAD DATA-API
  * ================== */

  $(document).on('focus.typeahead.data-api', '[data-provide="typeahead"]', function (e) {
    var $this = $(this)
    if ($this.data('typeahead')) return
    $this.typeahead($this.data())
  })
        $(function () { formValidation(); });
         $(function () { formInit(); });
        $(function () {$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });});
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            title: 'Bonjour ADADPGR!',
            text: 'Bounjour monsieur, si vous vouler consulter l\'aide de l\'application <a href="PRO/HTML/ajouter_un_stage.htm" target="_blank" style="color:#ffd777"><h7>help!</h7></a>',
            image: 'assets/img/Help-File.png',
            sticky: false,
            time: 3000,
            class_name: 'my-sticky-class'
        });
        return false;
        });
  </script>
     <!--END PAGE LEVEL SCRIPTS -->
     
</body>
     <!-- END BODY -->
</html>
