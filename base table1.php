<?php 
require('includes/config.php'); 
//if not logged in redirect to login page
if(!$user->is_logged_in() ){ header('Location: login.php'); }

 ?>
 
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
      <link rel="shortcut icon" type="image/x-icon" href="images/logo01.ico" />
    <title>DPGR - Direction de la Post-Graduation et de la Recherche</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/fonts/icomoon/font-awesome-4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/tooltip-line.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/component.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/default.css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">      

    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />
     <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style7.css" />
    <script src="assets/js/modernizr.custom.js"></script>
    <link rel="stylesheet" href="assets/css/jquery-ui.css"/>
    <link rel="stylesheet" href="assets/plugins/uniform/themes/default/css/uniform.default.css" />
    <link rel="stylesheet" href="assets/plugins/inputlimiter/jquery.inputlimiter.1.0.css" />
    <link rel="stylesheet" href="assets/plugins/chosen/chosen.min.css" />
    <link rel="stylesheet" href="assets/plugins/colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="assets/plugins/tagsinput/jquery.tagsinput.css" />
    <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" href="assets/plugins/datepicker/css/datepicker.css" />
    <link rel="stylesheet" href="assets/plugins/timepicker/css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="assets/plugins/switch/static/stylesheets/bootstrap-switch.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style13.css" media="screen"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
       <style>
        .modal-backdrop.in {
            filter: alpha(opacity=50);
            opacity: 0.1;
        }
        .chosen-container-single .chosen-single {
            width: 540px;          
        }
        .chosen-container-single .chosen-drop {
            width: 540px;          
        }
      </style>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
	
            
            <div class="sidebar-toggle-box">
                   <div class="fa fa-bars tooltips" data-placement="right" id="afficher" onclick="if (this.id=='afficher') {$('#modal1').css('margin-left','-108px');$('#modal2').css('margin-left','81px');$('#modal3').css('margin-left','455px');$('#modal4').css('margin-left','268px');this.id='cacher';} else {$('#modal1').css('margin-left','96px');$('#modal2').css('margin-left','247px');$('#modal3').css('margin-left','549px');$('#modal4').css('margin-left','397px');this.id='afficher';}" data-original-title="Afficher/Cacher Menu"></div>
              </div>
            
            
            <!--logo start-->
            <a href="index.html" class="logo"><b>DPGR ADMIN</b></a>
            <!--logo end-->
            
            
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <!--<li><a class="logout" href="login.html">Logout</a></li>-->
                    <li><button class="exit-btn exit-btn-3">LOGOUT</button></li>
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
                          <span><h4>Acceuil</h4></span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-desktop"></i>
                          <span><h4>Consultation</h4></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="simple.php">SIMPLE</a></li>
                          <li><a  href="buttons.php">AVANCER</a></li>
                         <!-- <li><a  href="panels.html">COMPLET</a></li>-->
                      </ul>
                  </li>
				<?php if( $_SESSION['type'] != 'CS'){?>
                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span><h4>Mettre à jours</h4></span>
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
                          <li><a  href="documentt.php">STAGIERE</a></li>
                      </ul>
                      <ul class="sub">
                          <li><a  href="canvas.php">CONVAS</a></li>
                      </ul>

                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="active">
                          <i class="fa fa-th"></i>
                          <span><h4>Base de donnée</h4></span>
                      </a>
                      <ul class="sub">
                          <li><a  href="base table.php">TABLE DE BASE</a></li>
                          <li><a  href="sauvgard base.php">SAUVGARDE BD</a></li>
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
                       <?php if( $_SESSION['type'] == 'AD'){?>  <li><a  href="delete.php">SUPPRIMER COMPTE</a></li> <?php }?>
                          <li><a  href="lock_screen.php">VEROUILLER</a></li>
                      </ul>
                  </li>
 
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper"  style="background-color:#F2F2F2;">
             <header>
			
				<h1><strong>Les tableaux de la</strong> BDD</h1>
				<p>Afficher tous les tableaux de la base de donnée</p>
				
			</header>
  <?php

  function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 

            $db = data_base_connect ();
            $tables = array('Stage','Perfectionnement','Manifestation','Chercheur','Enseignant','Doctorant','Université','Laboratoire');
            foreach($tables as $table)
     
            {
            $statement = $db->prepare('SELECT * FROM '.$table);
            $statement->execute();
/////////*///////////////////////////////////
                        if($table=='Chercheur')
                                { ?>
            <div id="table">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="font-size:20px;">
                            Tableau des chercheurs
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                   <thead>
                                       <tr>
                                            <th></th>
                                        </tr>
                                      <th>Nom </th>
                                      <th>Prénom </th>
                                      <th>اللقب</th>
                                      <th>الإسم </th>
                                      <th>Etat Civile </th>
                                      <th>Sexe </th>
                                      <th>Date Naissance</th>
                                      <th>Autre</th>
                                 <?php
                                    while ($row = $statement->fetch ())
                                 {?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        
                                        <td><?php echo $row['Nom_Fr'] ?></td>
                                        <td><?php echo $row['Prénom_Fr'] ?></td>
                                        <td><?php echo $row['Nom_Ar'] ?></td>
                                        <td><?php echo $row['Prénom_Ar'] ?></td>
                                        <td><?php echo $row['Etat_Civil'] ?></td>
                                        <td><?php echo $row['Sexe'] ?></td>
                                        <td><?php echo $row['Date_Naissance'] ?></td>
                    <td><a href=<?php echo 'http://127.0.0.1/New/Theme1%20-%20ADADGPR/doc.php?code='.$row['Code'];?>>Plus d'information</a></td>
                                    </tr>
                                        <?php 
                                } 
            ?>
                                   </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
         
                 <?php 
                                } 
            ?>
                    
 <?php  if($table=='Stage')
                                { ?> 
            <div id="table">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="font-size:20px;">
                            Tableau des Stage
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                   <thead>
                                       <tr>
                                            <th></th>
                                        </tr>
                                       
                            
                                        <th>Numero de PVCS </th>                                        
                                        <th>Pays</th>
                                        <th>Ville</th>
                                        <th>Etablissement</th>
                                        <th>Téléphone Etablissement</th>
                                        <th>Adresse Etablissement</th>
                                        <th>Email Etablissement</th>
                                        <th>Site Web Etablissement</th>
                                        <th>Date Prévue De Départ</th>
                                        <th>Date Prévue De Retour</th>
                                        <th>Autre</th>
                                 <?php
                                    while ($row = $statement->fetch ())
                                 {?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        
                                        <td><?php echo $row['Code'] ?></td>
                                        <td><?php echo $row['Pays'] ?></td>
                                        <td><?php echo $row['Ville'] ?></td> 
                                        <td><?php echo $row['Etablissement'] ?></td>
                                        <td><?php echo $row['Tél_Etablissement'] ?></td>
                                        <td><?php echo $row['Adr_Etablissement'] ?></td>
                                        <td><?php echo $row['Email_Etablissement'] ?></td>
                                        <td><?php echo $row['Site_Web_Etablissement'] ?></td>
                                        <td><?php echo $row['Date_Prévue_Départ'] ?></td>
                                        <td><?php echo $row['Date_Prévue_Retour'] ?></td>
                                        <td><a href='#'>Plus d'information</a></td>
                                    </tr>
                       <?php 
                                } 
            ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
    
      
   <?php 
                                }
            
            ?>
                  <?php
            if($table=='Laboratoire')
                                { ?>
<div id="table">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="font-size:20px;">
                            Tableau des Laboratoire
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                   <thead>
                                       <tr>
                                            <th></th>
                                        </tr>
                                      <th>Désignation</th>
                                      <th>Nom Directeur</th>
                                      <th>Prénom Directeur</th>
                                      <th>Téléphone</th>
                                      <th>Fax</th>
                                      <th>Site Web </th>
                                      <th>Université</th>
                                      <th>Autre</th>
                                 <?php
                                    while ($row = $statement->fetch ())
                                 {?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        
                                        <td><?php echo $row['Désignation'] ?></td>
                                        <td><?php echo $row['Nom_Directeur'] ?></td>
                                        <td><?php echo $row['Prénom_Directeur'] ?></td>
                                        <td><?php echo $row['Tél'] ?></td>
                                        <td><?php echo $row['Fax'] ?></td>
                                        <td><?php echo $row['Site_Web'] ?></td>
                                        <td><?php echo $row['Université_Code'] ?></td>
                                        <td><a href='#'>Plus d'information</a></td>
                                    </tr>
                         <?php 
                                } 
            ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>


 <?php 
                                }
            ?>
      <?php
                       if($table=='Université')
                                { ?>
<div id="table">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="font-size:20px;">
                            Tableau des Universités
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example">
                                   <thead>
                                       <tr>
                                            <th></th>
                                        </tr>

  
                                        <th>Nom Université</th>
                                        <th>إسم الجامعة </th>
                                        <th>Adresse</th>
                                        <th>Téléphone</th>
                                        <th>Fax</th>
                                        <th>Site Web </th>
                                        <th>Autre</th>
                                 <?php
                                    while ($row = $statement->fetch ())
                                 {?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        
                                        <td><?php echo $row['Nom_Fr'] ?></td>
                                        <td><?php echo $row['Nom_Ar'] ?></td>
                                        <td><?php echo $row['Adresse'] ?></td>
                                        <td><?php echo $row['Tél'] ?></td>
                                        <td><?php echo $row['Fax'] ?></td>
                                        <td><?php echo $row['Site_Web'] ?></td>
                                        <td><a href='#'>Plus d'information</a></td>
                                    </tr>
                                        <?php 
                                } 
            ?>
                  
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
    
           

        <?php }
                                
        }
            ?>
<!----------------------------------------------------------------------------------------------------------------------------------------------->

          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:10px;">
          <div class="text-center">
              &copy;  GoldenMinds &nbsp;2015 &nbsp;
              <a href="base%20table.php#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

  
  
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->

     <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-fr.js"></script>
    <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.js"></script>
    <script src="assets/js/validationInit.js"></script>

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
       <script src="assets/js/formsInit.js"></script>
      
    <!--script for this page-->
    <script src="assets/js/jquery.dlmenu.js"></script>
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/uisearch.js"></script>
		<script>
           $(document).ready(function () {
             $('.dataTables-example').dataTable();
         });
		</script>
   <!--Fonction d'aficher la notice en bulle-->
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bonjour ADADPGR!',
            // (string | mandatory) the text inside the notification
            text: 'Bounjour monsieur, si vous vouler consulter l\'aide de l\'application <a href="PRO/HTML/" target="_blank" style="color:#ffd777"><h7>help!</h7></a>',
            // (string | optional) the image to display on the left
            image: 'assets/img/Help-File.png',
            //image: 'assets/img/help.png',
            ///image: 'assets/img/help-button   .png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 3000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
  

  </body>
</html>
