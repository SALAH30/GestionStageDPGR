<?php 
require('includes/config.php'); 
//if not logged in redirect to login page
if($user->is_logged_in() ){ 
   if (isset($_SESSION['type']) && $_SESSION['type'] == 'CS')  header('Location: login.php');
   }
else header('Location: login.php');

 ?>
 
<?php
  function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 
            $db = data_base_connect ();

            $statement = $db->prepare('INSERT
             INTO université ( Nom_Fr , Nom_Ar , Adresse , Tél , Fax , Site_Web )
                                          
                       VALUES ( :NomFr , :NomAr , :Adresse , :Tel , :Fax , :SiteWeb )');
                if(isset($_POST['req9']))
                {
                    $clean['req9'] = $_POST['req9'];  
                    $statement->bindParam(':NomFr', $clean['req9']);
                }
                if(isset($_POST['required10']))
                {
                    $clean['required10'] = $_POST['required10'];  
                    $statement->bindParam(':NomAr', $clean['required10']);
                }
                if(isset($_POST['require22']))
                {
                    $clean['require22'] = $_POST['require22'];  
                    $statement->bindParam(':Adresse', $clean['require22']);
                }
                if(isset($_POST['required9']))
                {
                    $clean['required9'] = $_POST['required9']; 
                    $statement->bindParam(':Tel',$clean['required9']);
                }
                if(isset($_POST['require9']))
                {
                    $clean['require9'] = $_POST['require9'];  
                    $statement->bindParam(':Fax',$clean['require9']);
                }
                if(isset($_POST['url2']))
                {
                    $clean['url2'] = $_POST['url2'];
                    $statement->bindParam (':SiteWeb',$clean['url2']);
                }                 
if(isset($_POST['req9'])||isset($_POST['required10'])||isset($_POST['require22'])||isset($_POST['required9'])||isset($_POST['require9'])||isset($_POST['url2']))
                {
                    $statement->execute();
                }

?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8" />
    <title>DPGR | Formulaire d'université</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
    <link rel="shortcut icon" type="image/x-icon" href="images/logo01.ico" />
	<meta content="Belkaid Aissa" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
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
<body class="padTop53 ">
    <style>
        .inner {
            min-height: 800px;
        }
      </style>
  <section id="container" >
<!-- *********************************************************************************************************************************************
                                                    TOP BAR CONTENT & NOTIFICATIONS
      ********************************************************************************************************************************************** -->
      <!--header start-->
        <header class="header black-bg">
             <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Afficher/Cacher Menu" id="afficher"></div>
              </div>
            <!--logo start-->
            <a href="accueil.php" class="logo"><b>DPGR ADMIN</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <!--<li><a class="logout" href="login.html">Logout</a></li>-->
                    <li><a href="logout.php"><button class="exit-btn exit-btn-3">Déconnecter</button></a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
<!--*********************************************************************************************************************************************
                                                            MAIN SIDEBAR MENU
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
              	  <h5 class="centered">ADPGR</h5>
				  
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
                          <li><a style="color:white;" href="univer-form.php#">Université</a></li>
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
                          <li><a  href="canvas.php">Canevas</a></li>
                      </ul>

                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-th"></i>
                          <span><h4>Base de donnée</h4></span>
                      </a>
                      <ul class="sub">
                           <li><a  href="base table.php">Tables de la BDD</a></li>
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
                          <li><a  href="lock_screen.php">Verrouiller le site</a></li>
                      </ul>
                  </li>
 
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--PAGE CONTENT -->
<section id="main-content">
    <section class="wrapper">
      <div id="content" >
            <div class="inner" style="background-color:#F2F2F2;">
                <hr />
                    <div class="row">
                <div class="panel panel-primary" style="margin:0 70px 0 30px;">
                        <div class="panel-heading" style="font-size:28px;text-align:center;">
                            Les Universités
                        </div>
                        <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="box">
                            <header>
                                <div class="icons"><i class="icon-home"></i></div>
                                <h5>Université</h5>
                                <div class="toolbar">
                                    <ul class="nav">
                                        <li>
                                            <div class="btn-group">
                                               <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse" href="#collapseOne">
                                                    <i class="icon-chevron-up"></i>
                                               </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </header>
<?php   
if(isset($_GET['code']))
{
    $stat = $db->prepare('SELECT * FROM Université WHERE Code='.$_GET['code']);      
    $stat->execute();
    while($row = $stat->fetch())
    {                       ?>
                            <div id="collapseOne" class="accordion-body collapse in body" style="margin-top:30px;">
                
                                <form method="post" action="modif_univ.php" class="form-horizontal block-validate" >
                                <div class="form-group">
                                    <label for="req9" class="control-label col-lg-4">Le nom</label>
    <input type="hidden" value="<?php echo $_GET['code']; ?>" class="form-control" name="cd" id="cd" autofocus>
                                    <div class="col-lg-4">
                                     <div class="input-group">
                                        <input type="text" value="<?php echo $row['Nom_Fr']; ?>" class="form-control" name="req9" id="req9" autofocus>
                                        <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group">
                                     <label class="col-lg-4"></label>
                                     <div class="arab col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i style="width:15px;" class="fa fa-user"></i></span>
                                            <input dir="rtl" value="<?php echo $row['Nom_Ar']; ?>" lang="ar" type="text" id="required10" name="required10" class="form-control"/>
                                        </div>
                                    </div>
                                    <label for="required10"style="font-size: 20px;" class="control-label">الاسم</label> 
                                 </div>
                                 <div class="form-group">
                                    <label for="require22" class="control-label col-lg-4">L'adresse</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" value="<?php echo $row['Adresse']; ?>" class="form-control" id="require22" name="require22" >
                                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="required9" class="control-label col-lg-4">Téléphone</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                        <input class="form-control" value="<?php echo $row['Tél']; ?>" type="text" id="required9" name="required9"/>
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        </div>
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="require9" class="control-label col-lg-4">Fax</label>
                                    <div class="col-lg-4"> 
                                        <div class="input-group">
                                            <input class="form-control" value="<?php echo $row['Fax']; ?>" type="text"  id="require9" name="require9"/>
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="url2" class="control-label col-lg-4">Site Web</label>
                                    <div class=" col-lg-4">
                                        <div class="input-group">
                                            <input  class="form-control" value="<?php echo $row['Site_Web']; ?>" type="text" value="http://" name="url2" id="url2"/>
                                            <span class="input-group-addon"><i class="fa fa-site"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions no-margin-bottom" style="text-align:center;">
                             <input class="accordion-toggle minimize-box btn btn-primary btn-lg" type="submit" value="Valider" name="submit"/>
                                </div>
                            </form>
                        </div>
                            <?php }}else { ?>
                            <div id="collapseOne" class="accordion-body collapse in body" style="margin-top:30px;">
                
                                <form method="post" action="univer-form.php" class="form-horizontal block-validate" >
                                <div class="form-group">
                                    <label for="req9" class="control-label col-lg-4">Le nom</label>
                                    <div class="col-lg-4">
                                     <div class="input-group">
                                        <input type="text" class="form-control" name="req9" id="req9" autofocus>
                                        <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                        </div>
                                    </div>
                                </div>
                                 <div class="form-group">
                                     <label class="col-lg-4"></label>
                                     <div class="arab col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i style="width:15px;" class="fa fa-user"></i></span>
                                            <input dir="rtl" lang="ar" type="text" id="required10" name="required10" class="form-control"/>
                                        </div>
                                    </div>
                                    <label for="required10"style="font-size: 20px;" class="control-label">الاسم</label> 
                                 </div>
                                 <div class="form-group">
                                    <label for="require22" class="control-label col-lg-4">L'adresse</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="require22" name="require22" >
                                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="required9" class="control-label col-lg-4">Téléphone</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                        <input class="form-control" type="text" id="required9" name="required9"/>
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        </div>
                                    </div>
                                </div>      
                                <div class="form-group">
                                    <label for="require9" class="control-label col-lg-4">Fax</label>
                                    <div class="col-lg-4"> 
                                        <div class="input-group">
                                            <input class="form-control" type="text"  id="require9" name="require9"/>
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="url2" class="control-label col-lg-4">Site Web</label>
                                    <div class=" col-lg-4">
                                        <div class="input-group">
                                            <input  class="form-control" type="text" value="http://" name="url2" id="url2"/>
                                            <span class="input-group-addon"><i class="fa fa-site"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions no-margin-bottom" style="text-align:center;">
                             <input class="accordion-toggle minimize-box btn btn-primary btn-lg" type="submit" value="Valider" name="submit"/>
                                </div>
                            </form>
                        </div> <?php } ?>
                            
                    </div>
                </div>
            </div> 
        </div>
    <!--END PAGE CONTENT -->
    </div>
          </div></div>
  </section>
</section>
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
    <script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
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
    <script src="assets/js/formsInit.js"></script>
    <script type="text/javascript">
        $(function () { formValidation(); });
        $(function () { formInit(); });
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            title: 'Bonjour ADPGR!',
            text: 'Bounjour monsieur, si vous vouler consulter l\'aide de l\'application <a href="PRO/HTML/ajouter_une_universite.htm" target="_blank" style="color:#ffd777"><h7>help!</h7></a>',
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
