<?php require('includes/config.php'); 

//if not logged in redirect to login page
if(!$user->is_logged_in()){ header('Location: login.php'); } 
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
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
  
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
         <link rel="stylesheet" href="assets/plugins/validationengine/css/validationEngine.jquery.css" />
     <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style7.css" />
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
    <link rel="stylesheet" type="text/css" href="assets/css/cs-select.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/cs-skin-slide.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style12.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
    

 <!----Calender -------->
  <link rel="stylesheet" href="assets/css/clndr.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="assets/css/style13.css" media="screen"/>
  <!----End Calender -------->
    
    
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
        .big div.cs-skin-slide::before {
            width:51%;
        }
        div.cs-skin-slide::before {
            width:43%;
        }
        .cs-select span {
            padding-left: 20px;
        }
        #menus div.cs-skin-slide::before,#menus2 div.cs-skin-slide::before,#menus3 div.cs-skin-slide::before {
           max-height:40px !important;
        }
        #menus .cs-select span,#menus2 .cs-select span,#menus3 .cs-select span {
             padding-top: 5px;
            padding-left: 30px;
        }
        #scroll {
            max-height: 350px;
            overflow-y: auto;
        }
        .msg_thumb_wrapper a {
            width:55px;
            height:55px;
        }
          .desc:not[id='sans'] {
              cursor: pointer;
          }
          .table-condensed thead {
              background: white;
          }
          .desc {
            cursor: pointer;
          }
      </style>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
	
            
            <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Afficher/Cacher Menu" id="afficher" onclick="if (this.id=='afficher') {$('#modal3').css('margin-left','-75px');$('#modal4').css('margin-left','265px');$('#modal1').css('margin-left','435px');$('#modal').css('margin-left','-246px');$('#modal').addClass('big');$('#modal3').addClass('big');$('#modal4').addClass('big');$('#modal1').addClass('big');this.id='cacher';} else {$('#modal1').removeClass('big');$('#modal3').removeClass('big');$('#modal4').removeClass('big');$('#modal').removeClass('big');$('#modal3').css('margin-left','95px');$('#modal').css('margin-left','-45px');$('#modal4').css('margin-left','381px');$('#modal1').css('margin-left','523px');this.id='afficher';}"></div>
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
                      <a class="active" href="accueil.php">
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
                          <li><a  href="lock_screen.php">Verouiller le site</a></li>
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
          <section class="wrapper">

              <div class="row">
              <div class="row">
                  <div class="col-lg-9 main-chart" style="margin-top:-100px;">
                  
                   	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                        <a href="#" data-modal data-toggle="tab" data-target="#menus">
                  			<div class="box1">
					  			<span class="li_search"></span>
					  			<h3>Consulter</br> &
                        </br>Rechercher</h3>
                  			</div>
					  			<p><!--Consulter et rechercher votre données rapide !--> </p>
                        </a>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                            <a href="#" data-modal data-toggle="tab" data-target="#menus2">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3>Document</br> & </br>Archivage</br> </h3>
                  			</div>
					  			<p><!--Stocker ou retirer vos documents !!!--></p>
                            </a>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                           <a href="morris.php"> 
                  			<div class="box1">
					  			<span class="li_news"></span>
					  			<h3>Statistique</br> & </br> Mésure</h3>
                  			</div>
					  			<p><!--Simulier l'evolution de vos données--></p>
                             </a>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                            <a href="#" data-modal data-toggle="tab" data-target="#menus3">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>Base </br>de </br> Donnée</h3>
                  			</div>
					  			<p><!--Contacter le schéma et la structure de votre BD--></p>
                            </a>
                  		</div>
                        <?php if($_SESSION['type'] != 'CS'){ ?> <div class="col-md-2 col-sm-2 box0">
                        <a href="#" data-modal data-toggle="tab" data-target="#menux">
                  			<div class="box1">
					  			<span class="li_params"></span>
					  			<h3>Mettre</br> à </br>Jour</h3>
                  			</div>
					  			<p><!--Ajouter ou modifier vos données !!--></p>
                        </a>
                  		</div> <?php } ?>
                  	
                  	</div>  
                <div class="fade modal" id="menus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modal" style="
                            width: 1px; height:1px;
                            outline:none; 
                            margin-top:257px;                                        
                            margin-left:-46px;                                         
                            background-color: transparent;
                        ">
                            <select class="cs-select cs-skin-slide">
                                <option value="simple" data-link="simple.php">Simple</option>
                                <option value="avancée" data-link="buttons.php">Avancée</option>
                            </select>   
                        </div>
                    </div>
                </div>
                <div class="fade modal" id="menus2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modal3" style="
                            width: 1px; height:1px;
                            outline:none; 
                            margin-top:257px;                                         
                            margin-left:97px;                                         
                            background-color: transparent;
                        ">
                            <select class="cs-select cs-skin-slide">
                                <option value="stagiaire" data-link="documentt.php">Stagiaire</option>
                                <option value="canevas" data-link="canvas.php">Canevas</option>
                            </select>   
                        </div>
                    </div>
                </div>
                <div class="fade modal" id="menus3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modal4" style="
                            width: 1px; height:1px;
                            outline:none; 
                            margin-top:257px;                                        
                            margin-left:381px;                                         
                            background-color: transparent;
                        ">
                            <select class="cs-select cs-skin-slide">
                                <option value="table" data-link="base%20table.php">Les tableaux</option>
                                <option value="sauvegarder" data-link="sauvgard%20base.php">Sauvegarder</option>
                            </select>   
                        </div>
                    </div>
                </div>
                     <div class="fade modal" id="menux" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modal1" style="
                            width: 1px;             
                            margin-top:257px;  
                            margin-left:525px;                                                    
                            background-color: transparent;
                        ">
                            <select class="cs-select cs-skin-slide">
                                <option value="chercheur" data-link="search-form2.php">Chercheur</option>
                                <option value="stage" data-link="stage-form.php">Stage</option>       
                                <option value="universite" data-link="univer-form.php">Université</option>
                                <option value="laboratoire" data-link="labo-form.php">Laboratoire</option>
                            </select>   
                        </div>
                    </div>
                </div>
            		<div id="msg_slideshow" class="msg_slideshow">
                        <div id="msg_wrapper" class="msg_wrapper">
                            </div>
                        <div id="msg_controls" class="msg_controls"><!-- right has to animate to 15px, default -110px -->
                            <a href="#" id="msg_grid" class="msg_grid"></a>
                            <a href="#" id="msg_prev" class="msg_prev"></a>
                            <a href="#" id="msg_pause_play" class="msg_pause"></a><!-- has to change to msg_play if paused-->
                            <a href="#" id="msg_next" class="msg_next"></a>
                        </div>
                        <div id="msg_thumbs" class="msg_thumbs"><!-- top has to animate to 0px, default -230px -->
                                <div class="msg_thumb_wrapper">
                                <a href="#"><img src="images/esi/thumbs/1.jpg" alt="images/esi/1.jpg"/></a>
                                <a href="#"><img src="images/esi/thumbs/2.jpg" alt="images/esi/2.jpg"/></a>
                                <a href="#"><img src="images/esi/thumbs/3.jpg" alt="images/esi/3.jpg"/></a>
                                <a href="#"><img src="images/esi/thumbs/4.jpg" alt="images/esi/4.jpg"/></a>
                                <a href="#"><img src="images/esi/thumbs/5.jpg" alt="images/esi/5.jpg"/></a>
                                <a href="#"><img src="images/esi/thumbs/6.jpg" alt="images/esi/6.jpg"/></a>
                                </div>
                                <div class="msg_thumb_wrapper" style="display:none;">
                                <a href="#"><img src="images/esi/thumbs/7.jpg" alt="images/esi/7.jpg"/></a>
                                <a href="#"><img src="images/esi/thumbs/8.jpg" alt="images/esi/8.jpg"/></a>
                                <a href="#"><img src="images/esi/thumbs/9.jpg" alt="images/esi/9.jpg"/></a>
                                <a href="#"><img src="images/esi/thumbs/10.jpg" alt="images/esi/10.jpg"/></a>
                                <a href="#"><img src="images/esi/thumbs/11.jpg" alt="images/esi/11.jpg"/></a>
                                <a href="#"><img src="images/esi/thumbs/12.jpg" alt="images/esi/12.jpg"/></a>
                            </div>
                            <a href="#" id="msg_thumb_next" class="msg_thumb_next"></a>
                            <a href="#" id="msg_thumb_prev" class="msg_thumb_prev"></a>
                            <a href="#" id="msg_thumb_close" class="msg_thumb_close"></a>
                            <span class="msg_loading"></span><!-- show when next thumb wrapper loading -->
                            </div>
                        </div>

         <div class="col-lg-12">
                <div class="modal fade" id="notification" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Retour du stage</h4>
                            </div>
                             <form action="Update.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                <div class="col-lg-12" style="margin-bottom:-50px;">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <ul class="nav nav-pills">
                                <li class="active"><a href="#home-pills" data-toggle="tab">Résultat du Stage</a>
                                </li>
                                <li><a href="#profile-pills" data-toggle="tab">Document du Stage</a>
                                </li>
                            </ul>
                            <div class="tab-content" style="text-align:left;">
                                <div class="tab-pane fade in active" id="home-pills">
                                <p>
                                    <div class="form-group">
                                        <input type="hidden" name="Bechar" value="" id="Bechar" />
                             <label for="reservation1" style="margin-bottom:10px;font-size: 18px;">Date Effective</label>
                                        <div class="input-group">
                                            <input type="text" id="reservation1" class="form-control" name="reservation1"/>
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden" name="Suivi" value="Retour" id="btn-input"/>
                                        <label style="margin-bottom:10px;font-size: 18px;" class="control-label">Les documents</label>
                                        <div class="btn-group" data-toggle="buttons">
                                            <label style="margin-left:90px;font-size: 18px;" class="btn btn-primary  active">
                                              <input type="radio" name="Suivi" value="Retour" id="option2"  checked/>Retour
                                            </label>
                                            <label style="margin-left:70px;font-size: 18px;" class="btn btn-primary">
                                              <input  type="radio" name="Suivi" value="Annulation" id="option1"/>Annulation
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label  style="font-size: 18px;">L'Etat du Stage</label>
                                            <select name="Stage" class="form-control">
                                                <option value="Annulé">Annulé</option>
                                                <option value="Cloturé" selected>Cloturé</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="req" style="font-size: 18px;" class="control-label">Résultat</label>
                                        <div class="input-group">
                                            <textarea style="min-height:130px;" class="form-control" name="result" id="result"></textarea>
                                            <span class="input-group-addon"><i class="fa fa-text"></i></span>
                                        </div>
                                    </div>
                                    </p>
                                </div>
                                <div class="tab-pane fade" id="profile-pills">
                                    <h4>Document:</h4>
                                    <p>
                                        <div class="form-group">
                       <label style="margin:10px 100px 20px 20px;font-size: 20px;" for="ch1">
                      <input type="checkbox"id="ch1" name="Attestaion" value="true" class="flat-red form-control" />
                        Attestation de Stage
                    </label>
                    <label style="margin:10px 100px 20px 20px;font-size: 20px;" for="ch2">
                      <input   type="checkbox" id="ch2" name="Frais" value="true" class="flat-red form-control"/>
                        Tableau de Frais
                    </label>
                     <label style="margin: 10px 100px 20px 20px;font-size: 20px;" for="ch3">
                      <input   type="checkbox" id="ch3" name="BandeTransport" class="flat-red form-control"/>
                        Bande de transport
                    </label>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 
                                </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                        <input type="submit" value="Modifier" class="btn btn-primary sub"></input>
                                    </div>
                                               </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                                                  <?php
       
                     function data_base_connect ()
                        {
                              $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
                       
                              $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                       
                              return ($dbh);
                        } 
                     

                        $db= data_base_connect ();
                        
                       
                        $EtatStage='En Cours'; 
                    
                        $st = $db->prepare(" SELECT * FROM suivi_stage JOIN Stage JOIN Chercheur WHERE suivi_stage.Code_Stage=Stage.Code AND Chercheur.Code=Stage.Chercheur_Code AND Etat = ? ");

                        // Execute once
                        $st->execute(array($EtatStage));
                     
                        $result = $st->fetchAll();
  
      ?>       
                  
                  <div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
                      <div id="scroll">
            <h3>NOTIFICATIONS</h3>
                     <?php
                          
                          $oo=0;
                         foreach ( $result  as $row) 
                           {         
                             $oo++;        
                     ?>
                                        
                      <!-- First Action -->
                      <div class="desc" data-modal data-toggle="modal" data-target="#notification" id=<?php echo $row['Code_Stage'] ?> >
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><muted>Stage  </muted><?php
                             echo $row['Nom_Fr']." ".$row['Prénom_Fr'] ." <br/>\n";
                     ?>  <br/> 
                             <a href="#">Code de PV:</a> <?php echo $row['Code_PV']; ?> <br/>
                             
                          </p>
                        </div>
                      </div>
                     <?php
                           } 
                           if ($oo==0) {?>
                            <div class="desc" id="sans">
                        <div class="thumb">
                          <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                        </div>
                        <div class="details">
                          <p><i style="font-weight:bold;font-size:14px;">Suivi des stages</i><br/>
                             <a href="#" style="text-decoration:underline;font-weight:bold;">Note:</a> Il y a aucun stage pour le moment.<br/>
                          </p>
                        </div>
                      </div>
                           <?php } ?>
    
                        </div>
						<h3>CALENDRIER</h3>  
         			<!-- start calender  ---->
			<div class="column_right_grid calender">
                      <div class="cal1"><div class="clndr"><div class="clndr-controls"><div class="clndr-control-button"><p class="clndr-previous-button">previous</p></div><div class="month">Avril 2015</div><div class="clndr-control-button rightalign"><p class="clndr-next-button">next</p></div></div><table class="clndr-table" border="0" cellspacing="0" cellpadding="0"><thead><tr class="header-days"><td class="header-day">Di</td><td class="header-day">Lu</td><td class="header-day">Ma</td><td class="header-day">Me</td><td class="header-day">Je</td><td class="header-day">Ve</td><td class="header-day">Sa</td></tr></thead><tbody><tr><td class="day past adjacent-month last-month calendar-day-2013-10-27"><div class="day-contents">27</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-28"><div class="day-contents">28</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-29"><div class="day-contents">29</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-30"><div class="day-contents">30</div></td><td class="day past adjacent-month last-month calendar-day-2013-10-31"><div class="day-contents">31</div></td><td class="day past calendar-day-2013-11-01"><div class="day-contents">1</div></td><td class="day past calendar-day-2013-11-02"><div class="day-contents">2</div></td></tr><tr><td class="day past calendar-day-2013-11-03"><div class="day-contents">3</div></td><td class="day past calendar-day-2013-11-04"><div class="day-contents">4</div></td><td class="day past calendar-day-2013-11-05"><div class="day-contents">5</div></td><td class="day past calendar-day-2013-11-06"><div class="day-contents">6</div></td><td class="day past calendar-day-2013-11-07"><div class="day-contents">7</div></td><td class="day past calendar-day-2013-11-08"><div class="day-contents">8</div></td><td class="day past calendar-day-2013-11-09"><div class="day-contents">9</div></td></tr><tr><td class="day past event calendar-day-2013-11-10"><div class="day-contents">10</div></td><td class="day past event calendar-day-2013-11-11"><div class="day-contents">11</div></td><td class="day past event calendar-day-2013-11-12"><div class="day-contents">12</div></td><td class="day past event calendar-day-2013-11-13"><div class="day-contents">13</div></td><td class="day past event calendar-day-2013-11-14"><div class="day-contents">14</div></td><td class="day past calendar-day-2013-11-15"><div class="day-contents">15</div></td><td class="day past calendar-day-2013-11-16"><div class="day-contents">16</div></td></tr><tr><td class="day past calendar-day-2013-11-17"><div class="day-contents">17</div></td><td class="day past calendar-day-2013-11-18"><div class="day-contents">18</div></td><td class="day past calendar-day-2013-11-19"><div class="day-contents">19</div></td><td class="day past calendar-day-2013-11-20"><div class="day-contents">20</div></td><td class="day past event calendar-day-2013-11-21"><div class="day-contents">21</div></td><td class="day past event calendar-day-2013-11-22"><div class="day-contents">22</div></td><td class="day today event calendar-day-2013-11-23"><div class="day-contents">23</div></td></tr><tr><td class="day calendar-day-2013-11-24"><div class="day-contents">24</div></td><td class="day calendar-day-2013-11-25"><div class="day-contents">25</div></td><td class="day calendar-day-2013-11-26"><div class="day-contents">26</div></td><td class="day calendar-day-2013-11-27"><div class="day-contents">27</div></td><td class="day calendar-day-2013-11-28"><div class="day-contents">28</div></td><td class="day calendar-day-2013-11-29"><div class="day-contents">29</div></td><td class="day calendar-day-2013-11-30"><div class="day-contents">30</div></td></tr></tbody></table></div></div>
				   </div>
			<!-- end calender  ---->
                    
         
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
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

  
  
    <!-- js placed at the end of the document so the pages load faster -->


    <!-- END GLOBAL SCRIPTS -->

    <!-- PAGE LEVEL SCRIPTS -->


    <!--common script for all pages-->
    

      
    <!--script for this page-->

   <script src="assets/js/jquery.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="assets/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="assets/plugins/validationengine/js/languages/jquery.validationEngine-fr.js"></script>
    <script src="assets/plugins/jquery-validation-1.11.1/dist/jquery.validate.js"></script>
    <script src="assets/js/validationInit.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/selectFx.js"></script>
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
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
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
    <script src="assets/js/uisearch.js"></script>

    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
    <script src="assets/js/underscore-min.js"></script>
    <script src="assets/js/clndr.js"></script>
    <script src="assets/js/site.js"></script>
   
   <!--Fonction d'aficher la notice en bulle-->
	<script type="text/javascript">
            (function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
        $('a[data-modal]').on('click', function(e) {
                e.preventDefault();
                var target = $($(this).data('target'));
                target.modal('show');
            });
                $('div[data-modal]').on('click', function(e) {
                $('#Bechar').attr('value',$(this).attr('id'));
                e.preventDefault();
                var target = $($(this).data('target'));
                target.modal('show');
            });  

        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bonjour ADPGR!',
            // (string | mandatory) the text inside the notification
            text: 'Bounjour monsieur, si vous vouler consulter l\'aide de l\'application <a href="PRO/HTML/retour_de_satage.htm" target="_blank" style="color:#ffd777"><h7>help!</h7></a>',
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
    <script>
         $(function () { formValidation(); });
         $(function () { formInit(); });
                $(function () {$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });});
    </script>
	<!--Fonction d'aficher Calendrier-->
	
   <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
            $('.sub').on('click', function(e) {
                    if ($('.formulaire').isValid) {
                    $("[data-dismiss=modal]").trigger({ type: "click" });}
            });
    </script>
  <script type="text/javascript">
            $(function() {
				/**
				* interval : time between the display of images
				* playtime : the timeout for the setInterval function
				* current  : number to control the current image
				* current_thumb : the index of the current thumbs wrapper
				* nmb_thumb_wrappers : total number	of thumbs wrappers
				* nmb_images_wrapper : the number of images inside of each wrapper
				*/
				var interval			= 4000;
				var playtime;
				var current 			= 0;
				var current_thumb 		= 0;
				var nmb_thumb_wrappers	= $('#msg_thumbs .msg_thumb_wrapper').length;
				var nmb_images_wrapper  = 6;
				/**
				* start the slideshow
				*/
				play();
				
				/**
				* show the controls when 
				* mouseover the main container
				*/
				slideshowMouseEvent();
				function slideshowMouseEvent(){
					$('#msg_slideshow').unbind('mouseenter')
									   .bind('mouseenter',showControls)
									   .andSelf()
									   .unbind('mouseleave')
									   .bind('mouseleave',hideControls);
					}
				
				/**
				* clicking the grid icon,
				* shows the thumbs view, pauses the slideshow, and hides the controls
				*/
				$('#msg_grid').bind('click',function(e){
					hideControls();
					$('#msg_slideshow').unbind('mouseenter').unbind('mouseleave');
					pause();
					$('#msg_thumbs').stop().animate({'top':'0px'},500);
					e.preventDefault();
				});
				
				/**
				* closing the thumbs view,
				* shows the controls
				*/
				$('#msg_thumb_close').bind('click',function(e){
					showControls();
					slideshowMouseEvent();
					$('#msg_thumbs').stop().animate({'top':'-230px'},500);
					e.preventDefault();
				});
				
				/**
				* pause or play icons
				*/
				$('#msg_pause_play').bind('click',function(e){
					var $this = $(this);
					if($this.hasClass('msg_play'))
						play();
					else
						pause();
					e.preventDefault();	
				});
				
				/**
				* click controls next or prev,
				* pauses the slideshow, 
				* and displays the next or prevoius image
				*/
				$('#msg_next').bind('click',function(e){
					pause();
					next();
					e.preventDefault();
				});
				$('#msg_prev').bind('click',function(e){
					pause();
					prev();
					e.preventDefault();
				});
				
				/**
				* show and hide controls functions
				*/
				function showControls(){
					$('#msg_controls').stop().animate({'right':'15px'},500);
				}
				function hideControls(){
					$('#msg_controls').stop().animate({'right':'-110px'},500);
				}
				
				/**
				* start the slideshow
				*/
				function play(){
					next();
					$('#msg_pause_play').addClass('msg_pause').removeClass('msg_play');
					playtime = setInterval(next,interval)
				}
				
				/**
				* stops the slideshow
				*/
				function pause(){
					$('#msg_pause_play').addClass('msg_play').removeClass('msg_pause');
					clearTimeout(playtime);
				}
				
				/**
				* show the next image
				*/
				function next(){
					++current;
					showImage('r');
				}
				
				/**
				* shows the previous image
				*/
				function prev(){
					--current;
					showImage('l');
				}
				
				/**
				* shows an image
				* dir : right or left
				*/
				function showImage(dir){
					/**
					* the thumbs wrapper being shown, is always 
					* the one containing the current image
					*/
					alternateThumbs();
					
					/**
					* the thumb that will be displayed in full mode
					*/
					var $thumb = $('#msg_thumbs .msg_thumb_wrapper:nth-child('+current_thumb+')')
								.find('a:nth-child('+ parseInt(current - nmb_images_wrapper*(current_thumb -1)) +')')
								.find('img');
					if($thumb.length){
						var source = $thumb.attr('alt');
						var $currentImage = $('#msg_wrapper').find('img');
						if($currentImage.length){
							$currentImage.fadeOut(function(){
								$(this).remove();
								$('<img />').load(function(){
									var $image = $(this);
									resize($image);
									$image.hide();
									$('#msg_wrapper').empty().append($image.fadeIn());
								}).attr('src',source);
							});
						}
						else{
							$('<img />').load(function(){
									var $image = $(this);
									resize($image);
									$image.hide();
									$('#msg_wrapper').empty().append($image.fadeIn());
							}).attr('src',source);
						}
								
					}
					else{ //this is actually not necessary since we have a circular slideshow
						if(dir == 'r')
							--current;
						else if(dir == 'l')
							++current;	
						alternateThumbs();
						return;
					}
				}
				
				/**
				* the thumbs wrapper being shown, is always 
				* the one containing the current image
				*/
				function alternateThumbs(){
					$('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+current_thumb+')')
									.hide();
					current_thumb = Math.ceil(current/nmb_images_wrapper);
					/**
					* if we reach the end, start from the beggining
					*/
					if(current_thumb > nmb_thumb_wrappers){
						current_thumb 	= 1;
						current 		= 1;
					}	
					/**
					* if we are at the beggining, go to the end
					*/					
					else if(current_thumb == 0){
						current_thumb 	= nmb_thumb_wrappers;
						current 		= current_thumb*nmb_images_wrapper;
					}
					
					$('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+current_thumb+')')
									.show();	
				}
				
				/**
				* click next or previous on the thumbs wrapper
				*/
				$('#msg_thumb_next').bind('click',function(e){
					next_thumb();
					e.preventDefault();
				});
				$('#msg_thumb_prev').bind('click',function(e){
					prev_thumb();
					e.preventDefault();
				});
				function next_thumb(){
					var $next_wrapper = $('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+parseInt(current_thumb+1)+')');
					if($next_wrapper.length){
						$('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+current_thumb+')')
										.fadeOut(function(){
											++current_thumb;
											$next_wrapper.fadeIn();									
										});
					}
				}
				function prev_thumb(){
					var $prev_wrapper = $('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+parseInt(current_thumb-1)+')');
					if($prev_wrapper.length){
						$('#msg_thumbs').find('.msg_thumb_wrapper:nth-child('+current_thumb+')')
										.fadeOut(function(){
											--current_thumb;
											$prev_wrapper.fadeIn();									
										});
					}				
				}
				
				/**
				* clicking on a thumb, displays the image (alt attribute of the thumb)
				*/
				$('#msg_thumbs .msg_thumb_wrapper > a').bind('click',function(e){
					var $this 		= $(this);
					$('#msg_thumb_close').trigger('click');
					var idx			= $this.index();
					var p_idx		= $this.parent().index();
					current			= parseInt(p_idx*nmb_images_wrapper + idx + 1);
					showImage();
					e.preventDefault();
				}).bind('mouseenter',function(){
					var $this 		= $(this);
					$this.stop().animate({'opacity':1});
				}).bind('mouseleave',function(){
					var $this 		= $(this);	
					$this.stop().animate({'opacity':0.5});
				});
				
				/**
				* resize the image to fit in the container (400 x 400)
				*/
				function resize($image){
					var theImage 	= new Image();
					theImage.src 	= $image.attr("src");
					var imgwidth 	= theImage.width;
					var imgheight 	= theImage.height;
					
					var containerwidth  = 400;
					var containerheight = 400;
                
					if(imgwidth	> containerwidth){
						var newwidth = containerwidth;
						var ratio = imgwidth / containerwidth;
						var newheight = imgheight / ratio;
						if(newheight > containerheight){
							var newnewheight = containerheight;
							var newratio = newheight/containerheight;
							var newnewwidth =newwidth/newratio;
							theImage.width = newnewwidth;
							theImage.height= newnewheight;
						}
						else{
							theImage.width = newwidth;
							theImage.height= newheight;
						}
					}
					else if(imgheight > containerheight){
						var newheight = containerheight;
						var ratio = imgheight / containerheight;
						var newwidth = imgwidth / ratio;
						if(newwidth > containerwidth){
							var newnewwidth = containerwidth;
							var newratio = newwidth/containerwidth;
							var newnewheight =newheight/newratio;
							theImage.height = newnewheight;
							theImage.width= newnewwidth;
						}
						else{
							theImage.width = newwidth;
							theImage.height= newheight;
						}
					}
					$image.css({
						'width'	:theImage.width,
						'height':theImage.height
					});
				}
            });
        </script>

  </body>
</html>
