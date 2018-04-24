<?php 
require('includes/config.php'); 
//if not logged in redirect to login page
if(!$user->is_logged_in() ){ header('Location: login.php'); }

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
        <link rel="stylesheet" type="text/css" href="assets/demo.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style2.css" />
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
        .ca-menu li h2 {
             margin-top:0px;
        }
        .ca-menu li h3 {
            margin-top:-8px;
        }
        .inner {
            min-height: 600px;
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
      ********************************************************************************************************************************************** -->
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
                      <a href="javascript:;" >
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
                          <li><a  href="canvas.php">Canevas</a></li>
                      </ul>

                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;"  class="active">
                          <i class="fa fa-th"></i>
                          <span><h4>Base de donnée</h4></span>
                      </a>
                      <ul class="sub">
                           <li><a href="base table.php">Tables de la BDD</a></li>
                          <li><a style="color:white;" href="sauvgard base.php">Sauvegarder la BDD</a></li>
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
                            Sauvegarder la Base de Donnée
                        </div>
                        <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="box">
                            <header>
                                <div class="icons"><i class="icon-book"></i></div>
                                <h5>Document d'EXCEL</h5>
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
                            <div id="collapseOne" class="accordion-body collapse in body" style="margin-top:30px;">
                                <form action="sauv.php" class="form-horizontal block-validate" method="post" id="form1">         <input type="hidden" name="oran" id="oran"/> 
                <ul class="ca-menu" style="margin-top:-10px;">
                    <li>
                        <a href="#" data id="submit1">
                            <span class="ca-icon">U</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Chercheur</h2>
                                <h3 class="ca-sub">Sauvegarder les chercheurs</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"  data id="submit2">
                            <span class="ca-icon">F</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Stage</h2>
                                <h3 class="ca-sub">Sauvegarder les stages</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"  data id="submit3">
                            <span class="ca-icon">Z</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Université</h2>
                                <h3 class="ca-sub">Sauvegarder les universités</h3>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#"  data id="submit4">
                            <span class="ca-icon">L</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Laboratoire</h2>
                                <h3 class="ca-sub">Sauvegarder les laboratoires</h3>
                            </div>
                        </a>
                    </li>
                </ul>
                                </form>
                            </div>
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
        $(function () { formValidation();});
        $(function () { formInit(); });
        var form = $('#form1');
        $('a[data]').on('click', function(e) {
                 $('#oran').attr('name',$(this).attr('id'));
                return form.submit();
            });
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            title: 'Bonjour ADPGR!',
            text: 'Bounjour monsieur, si vous vouler consulter l\'aide de l\'application <a href="PRO/HTML/sauvgarde.htm" target="_blank" style="color:#ffd777"><h7>help!</h7></a>',
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
