<?php
session_start();
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
            <a href="accueil.php" class="logo"><b>DPGR ADMIN</b></a>
            <!--logo end-->
            
            
            <div class="top-menu">
            	<ul class="pull-right top-menu">
                    <!--<li><a class="logout" href="login.html">Logout</a></li>-->
                    <li><a href="logout.php" style="padding:18px 10px 28px;"><button class="exit-btn exit-btn-3">Déconnecter</button></a></li>
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
                      <a  href="accueil.php">
                          <i class="fa fa-dashboard"></i>
                          <span><h4>Accueil</h4></span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="active" >
                          <i class="fa fa-desktop"></i>
                          <span><h4>Recherche</h4></span>
                      </a>
                      <ul class="sub">
                          <li><a style="color:white;" href="simple.php">Simple</a></li>
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
                          <li><a  href="lock_screen.php">Verrouiller le site</a></li>
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
          <section class="wrapper" style="background-color:#F2F2F2;">
             <header>
			
				<h1><strong>Les recherches</strong> pour ADPGR</h1>
				<p>Exécution des requêtes simples dans la BDD</p>
				
			</header>
              <div class="clearfix" style="margin-bottom:50px;">
              <nav  class="nav" style="margin:50px 0 50px 200px ;">					
					<ul>
                        <li>
							<a href="#"data-modal data-toggle="tab" data-target="#menux">
								<span class="icon">
									<i aria-hidden="true" class="icon-team"></i>
								</span>
								<span>Chercheur</span>
							</a>
						</li>
                        <li>
							<a href="#" data-modal data-toggle="tab" data-target="#menux0">
								<span class="icon">
									<i aria-hidden="true" class="icon-blog"></i>
								</span>
								<span>Stage</span>
							</a>
						</li>
						<li>
							<a href="#" data-modal data-toggle="tab" data-target="#menux2">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span>Université</span>
							</a>
						</li>
						<li>
							<a href="#" data-modal data-toggle="tab" data-target="#menux1">
								<span class="icon"> 
									<i aria-hidden="true" class="icon-services"></i>
								</span>
								<span>Laboratoire</span>
							</a>
						</li>

					</ul>
				</nav>
                <div class="demo-5" id="liste">	
			    <!-- Codrops top bar -->
					
		</div><!-- /container -->
      </div>
            <div id="table">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading" style="text-align:center;font-size:20px;text-weight:bold;">
                            Tableau des résultats
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                   <thead id="oran"><tr id="aissa"><th></th></tr>
                                            <?php
// Recherch Simple dans 
include_once("function.php");
$db = data_base_connect ();    
$var = array();
$fields=array();
////////////////////////////////////////////////////// Chercheur ///////////////////////////////////////////////////////////////////////////
if(isset($_POST["requis3"]))
{
        $fields[]="requis3";
        $var[] = "Doctorant.Diplome_Base=?";
        $st = Select_query_Doc($db,$var,$fields,"Chercheur","Doctorant"); 
}
//////////////////////////////////////////
if(isset($_POST["required4"])&&isset($_POST['required5']))
{
        $fields[]="required4";
        $var[] = "Nom_Ar=?";
        $fields[]="required5";
        $var[] = "Prénom_Ar=?";
        $st = Select_query_Trv($db,$var,$fields,"Chercheur"); 
}
//////////////////////////////////////////
if(isset($_POST["required1"])&&isset($_POST['required2']))
{
        $fields[]="required1";
        $var[] = "Nom_Fr=?";
        $fields[]="required2";
        $var[] = "Prénom_Fr=?";
        $st = Select_query_Trv($db,$var,$fields,"Chercheur"); 
}
///////////////////////////////////////////
if(isset($_POST["Civil"]))
{
        $fields[]="Civil";
        $var[] = "Etat_Civil=?";
        $st = Select_query_Trv($db,$var,$fields,"Chercheur");
}
///////////////////////////////////////////
if(isset($_POST["r3"]))
{
        $fields[]="r3";
        $var[] = "Sexe=?";
        $st = Select_query_Trv($db,$var,$fields,"Chercheur");
}
///////////////////////////////////////////
if(isset($_POST["req"]))
{

        $fields[]="req";
        $var[] = "Enseignant.Grade=?";
        $st = Select_query_Ens($db,$var,$fields,"Chercheur","Enseignant"); 
}
///////////////////////////////////////////
if(isset($_POST["requis4"]))
{
        $fields[]="requis4";
        $var[] = "Doctorant.Diplome_Préparé=?";
        $st = Select_query_Doc($db,$var,$fields,"Chercheur","Doctorant"); 
}
///////////////////////////////////////////
if(isset($_POST["dp1"]))
{
        $fields[]="dp1";
        $var[] = "Doctorant.Date_Inscription=?";
        $st = Select_query_Doc($db,$var,$fields,"Chercheur","Doctorant"); 
}
///////////////////////////////////////////
if(isset($_POST["sport"]))
{
        $fields[]="sport";
        $var[] = "Enseignant.Nature=?";
        $st = Select_query_Ens($db,$var,$fields,"Chercheur","Enseignant");
}
///////////////////////////////////////////
if(isset($_POST["req1"]))
{
        $fields[]="req1";
        $var[] = "Enseignant.Spécialité=?";
        $st = Select_query_Ens($db,$var,$fields,"Chercheur","Enseignant"); 
}
////////////////////////////////////////////////////////////// Laboratoire ///////////////////////////////////////////////////////////////////
if(isset($_POST["nom_dir"])&&isset($_POST["prenom_dir"]))
{
        $fields[]="nom_dir";
        $var[] = "Nom_Directeur=?";
        $fields[]="prenom_dir";
        $var[] = "Prénom_Directeur=?";
        $st = Select_query($db,$var,$fields,"Laboratoire"); 
}
///////////////////////////////////////////
if(isset($_POST["require2"]))
{
        $fields[]="require2";
        $var[] = "Désignation=?";
        $st = Select_query($db,$var,$fields,"Laboratoire"); 
}
/////////////////////////////////////////////////////////////// Université //////////////////////////////////////////////////////////////////
if(isset($_POST["required10"]))
{
        $fields[]="required10";
        $var[] = "Nom_Ar=?";
        $st = Select_query($db,$var,$fields,"Université"); 
}
///////////////////////////////////////////
if(isset($_POST["req12"]))
{
        $fields[]="req12";
        $var[] = "Nom_Fr=?";
        $st = Select_query($db,$var,$fields,"Université"); 
}
/////////////////////////////////////////////////////////////// Stage ///////////////////////////////////////////////////////////////////////
if(isset($_POST["requi4"]))
{
        $fields[]="requi4";
        $var[] = "Manifestation.Acronyme=?";
        $st = Select_query_Manifestation($db,$var,$fields,"Stage","Manifestation"); 
}

if(isset($_POST["codpv"]))
{
        $fields[]="codpv";
        $var[] = "Code_PV=?";
        $st = Select_query($db,$var,$fields,"Stage"); 
}
///////////////////////////////////////////
if(isset($_POST["vill"]))
{
        $fields[]="vill";
        $var[] = "Ville=?";
        $st = Select_query($db,$var,$fields,"Stage"); 
}
///////////////////////////////////////////
if(isset($_POST["Pays"]))
{
        $fields[]="Pays";
        $var[] = "Pays=?";
        $st = Select_query($db,$var,$fields,"Stage");
}
///////////////////////////////////////////
if(isset($_POST["requird2"]))
{
        $fields[]="requird2";
        $var[] = "Moyen_Transport=?";
        $st = Select_query($db,$var,$fields,"Stage"); 
}
///////////////////////////////////////////
if(isset($_POST["Stot"]))
{
        $fields[]="Stot";
        $var[] = "Etat_Stage=?";
        $st = Select_query($db,$var,$fields,"Stage"); 
}
///////////////////////////////////////////
if(isset($_POST["required"]))
{
        $fields[]="required";
        $var[] = "Etablissement=?";
        $st = Select_query($db,$var,$fields,"Stage"); 
}
///////////////////////////////////////////
if(isset($_POST["requi3"]))
{
        $fields[]="requi3";
        $var[] = "Manifestation.Désignation=?";
        $st = Select_query_Manifestation($db,$var,$fields,"Stage","Manifestation"); 
}
///////////////////////////////////////////

if(isset($_POST["datP"]))
{
        $aller=substr($_POST["datP"],0,10);    
        $retour=substr($_POST["datP"],13,10);
        $st = $db->prepare("SELECT * FROM Stage WHERE Date_Prévue_Départ>? AND Date_Prévue_Retour<?");
        $var[]=$aller;
        $var[]=$retour;
        $st->execute($var);
}

///////////////////////////////////////////

if(isset($_POST["datE"]))
{
    
        $aller=substr($_POST["datE"],0,10);    
        $retour=substr($_POST["datE"],13,10);
        $st = $db->prepare("SELECT * FROM Stage WHERE Date_Effective_Départ>? AND Date_Effective_Retour<?");
        $var[]=$aller;
        $var[]=$retour;
        $st->execute($var); 
}
///////////////////////////////////////////
if((isset($_POST["required1"])&&isset($_POST['required2']))||isset($_POST['requis3'])||isset($_POST['required4'])||isset($_POST["Civil"])||isset($_POST["r3"])||isset($_POST["req"])||isset($_POST["dp1"])||isset($_POST["requis4"])||isset($_POST['sport'])||isset($_POST["req1"]))
                                { ?>
                            
                                        <tr>
                                      <th>Nom </th>
                                      <th>Prénom </th>
                                      <th>اللقب</th>
                                      <th>الإسم </th>
                                      <th>Etat Civile </th>
                                      <th>Sexe </th>
                                      <th>Date Naissance</th>
                                       <?php if( $_SESSION['type'] != 'CS'){?>                                      
                                      <th>Autre</th>
                                 <?php
                               }?> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    while ($row = $st->fetch ())
                                 {?>
                                    <tr>
                                        
                                        <td><?php echo $row['Nom_Fr'] ?></td>
                                        <td><?php echo $row['Prénom_Fr'] ?></td>
                                        <td><?php echo $row['Nom_Ar'] ?></td>
                                        <td><?php echo $row['Prénom_Ar'] ?></td>
                                        <td><?php echo $row['Etat_Civil'] ?></td>
                                        <td><?php echo $row['Sexe'] ?></td>
                                        <td><?php echo $row['Date_Naissance'] ?></td>
                                         <?php if( $_SESSION['type'] != 'CS'){?>
                                        <td><a href=<?php echo 'search-form3.php?cherch_code='.$row['Code'];?>>Modifier</a></td>
                                        <?php } ?>
                                    </tr>
                          <?php }
                                }  ?>
                                     
                     <?php   
                                if((isset($_POST["nom_dir"])&&isset($_POST['prenom_dir']))||isset($_POST['require2']))
                                { ?> <tr>
                              <th>Désignation</th>
                                      <th>Nom Directeur</th>
                                      <th>Prénom Directeur</th>
                                      <th>Téléphone</th>
                                      <th>Fax</th>
                                      <th>Site Web </th>
                                      <th>Université</th>
                                       <?php if( $_SESSION['type'] != 'CS'){?>                                      
                                      <th>Autre</th>

                                 <?php
                               } ?>
                                      </tr>
                                    </thead>
                                     <tbody>
                                 <?php
                                    while ($row = $st->fetch ())
                                 {?>
                                    <tr>
                                        
                                        <td><?php echo $row['Désignation'] ?></td>
                                        <td><?php echo $row['Nom_Directeur'] ?></td>
                                        <td><?php echo $row['Prénom_Directeur'] ?></td>
                                        <td><?php echo $row['Tél'] ?></td>
                                        <td><?php echo $row['Fax'] ?></td>
                                        <td><?php echo $row['Site_Web'] ?></td>
                                        <td><?php 
                                        $statement = $db->prepare('SELECT Nom_Fr FROM Université WHERE Code='.$row['Université_Code']);
                                        $statement->execute();
                                        while($option = $statement->fetch())
                                        {  echo $option['Nom_Fr']; }?>
                                        </td>
                                        <?php if( $_SESSION['type'] != 'CS'){?>
                                        <td><a href=<?php echo 'labo-form.php?code='.$row['Code'];?>>Modifier</a></td> <?php } ?>
                                    </tr>
                          <?php }
                                } ?>
                        <?php  if(isset($_POST["required10"])||isset($_POST['req12']))
                                { ?><tr>
                                        <th>Nom Université</th>
                                        <th>إسم الجامعة </th>
                                        <th>Adresse</th>
                                        <th>Téléphone</th>
                                        <th>Fax</th>
                                        <th>Site Web </th>
                                        <?php if( $_SESSION['type'] != 'CS'){?>
                                        <th>Autre</th>
                                    <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                 <?php
                                    while ($row = $st->fetch ())
                                 {?>
                                    <tr>  
                                        <td><?php echo $row['Nom_Fr'] ?></td>
                                        <td><?php echo $row['Nom_Ar'] ?></td>
                                        <td><?php echo $row['Adresse'] ?></td>
                                        <td><?php echo $row['Tél'] ?></td>
                                        <td><?php echo $row['Fax'] ?></td>
                                        <td><?php echo $row['Site_Web'] ?></td>
                                        <?php if( $_SESSION['type'] != 'CS'){?>
                                        <td><a href=<?php echo 'univer-form.php?code='.$row['Code'];?>>Modifier</a></td>      
                                        <?php } ?>     
                                    </tr>
                          <?php }
                                } ?>
                                        <?php  if(isset($_POST["datE"])||isset($_POST["datP"])||isset($_POST["requi4"])||isset($_POST['codpv'])||isset($_POST['vill'])||isset($_POST['Pays'])||isset($_POST["requird2"])||isset($_POST['Stot'])||isset($_POST['required'])||isset($_POST['requi3']))
                                { ?>   <tr>
                                        <th>Numéro de PVCS </th>                                        
                                        <th>Pays</th>
                                        <th>Ville</th>
                                        <th>Etablissement</th>
                                        <th>Téléphone Etablissement</th>
                                        <th>Adresse Etablissement</th>
                                        <th>Email Etablissement</th>
                                        <th>Site Web Etablissement</th>
                                        <th>Date Prévue De Départ</th>
                                        <th>Date Prévue De Retour</th>
                                        <?php if( $_SESSION['type'] != 'CS'){?>
                                        <th>Autre</th>
                                    <?php } ?>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    while ($row = $st->fetch ())
                                 { ?>
                                    <tr>
                                        
                                        <td><?php echo $row['Code_PV'] ?></td>
                                        <td><?php echo $row['Pays'] ?></td>
                                        <td><?php echo $row['Ville'] ?></td> 
                                        <td><?php echo $row['Etablissement'] ?></td>
                                        <td><?php echo $row['Tél_Etablissement'] ?></td>
                                        <td><?php echo $row['Adr_Etablissement'] ?></td>
                                        <td><?php echo $row['Email_Etablissement'] ?></td>
                                        <td><?php echo $row['Site_Web_Etablissement'] ?></td>
                                        <td><?php echo $row['Date_Prévue_Départ'] ?></td>
                                        <td><?php echo $row['Date_Prévue_Retour'] ?></td>
                                        <?php if( $_SESSION['type'] != 'CS'){?>
                                        <td><a href=<?php echo 'stage-form2.php?stage_code='.$row['Code'];?>>Modifier</a></td>      
                                        <?php } ?>
                                    </tr>
                          <?php }
                                }?>        
                                </tbody>
                                </table>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

                <div class="modal fade" id="menux" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modal1" style="                                                   
    margin-top:213px; 
    box-shadow:0 0 0;
    border:0px;
    margin-left:96px;                                                     
    background-color: transparent;
">
                          <div class="container demo-5">	
                            <div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="#">Enseignant</a>
                                    <ul class="dl-submenu">
                                        <li><a href="#" data-modal data-toggle="modal" data-target="#grade">Grade</a></li>
                                        <li><a href="#" data-modal data-toggle="modal" data-target="#specialite">Spécialité</a></li>
                                        <li><a href="#" data-modal data-toggle="modal" data-target="#nature">Nature</a></li>
                                    </ul>
							</li>
							<li>
								<a href="#">Doctorant</a>
									<ul class="dl-submenu">
											<li><a href="#" data-modal data-toggle="modal" data-target="#base">Diplôme de Base</a></li>
											<li><a href="#" data-modal data-toggle="modal" data-target="#preparer">Diplôme à Préparer</a></li>
											<li><a href="#" data-modal data-toggle="modal" data-target="#inscription">Date d'inscription</a></li>
								    </ul>
							</li>
                           <li><a href="#" data-modal data-toggle="modal" data-target="#nom_fr">Nom et Prénom</a></li>
				           <li><a href="#" data-modal data-toggle="modal" data-target="#nom_ar" style="font-family: Calibri;">الاسم واللقب</a></li>
                           <li><a href="#" data-modal data-toggle="modal" data-target="#civile">Etat Civile</a></li>
				           <li><a href="#" data-modal data-toggle="modal" data-target="#sexe">Sexe</a></li>
						</ul>
					</div><!-- /dl-menuwrapper -->	
                        </div>
                        </div>
                    </div>
                </div>  
              
                <div class="modal fade" id="menux0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modal2" style="                                                   
    margin-top:213px; 
    box-shadow:0 0 0;
    border:0px;
    margin-left:247px;                                                     
    background-color: transparent;
">
                          <div class="container demo-5">	
                            <div id="dl-menu2" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
                            <li><a href="#">Manifestation</a>
                                <ul class="dl-submenu">
								    <li><a href="#" data-modal data-toggle="modal" data-target="#designation1">Désignation</a></li>
								    <li><a href="#" data-modal data-toggle="modal" data-target="#acronyme">Acronyme</a></li>
								</ul></li>
                                    <li><a href="#" data-modal data-toggle="modal" data-target="#codepv">Code PV</a></li>
                                    <li><a href="#" data-modal data-toggle="modal" data-target="#pays">Pays</a></li>
                                    <li><a href="#" data-modal data-toggle="modal" data-target="#ville">Ville</a></li>
                                    <li><a href="#" data-modal data-toggle="modal" data-target="#etablissement">Etablissement</a></li>
                                    <li><a href="#" data-modal data-toggle="modal" data-target="#prevue">Date Prévue</a></li>
                                    <li><a href="#" data-modal data-toggle="modal" data-target="#effective">Date Effective</a></li>
                                    <li><a href="#" data-modal data-toggle="modal" data-target="#transport">Moyen de Transport</a></li>
                                    <li><a href="#" data-modal data-toggle="modal" data-target="#stage">Etat de Stage</a></li>
						</ul>
					</div><!-- /dl-menuwrapper -->	
                        </div>
                        </div>
                    </div>
                </div>  
                    <div class="modal fade" id="menux1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modal3" style="                                                   
    width:300px;
    margin-top:213px; 
    box-shadow:0 0 0;
    border:0px;
    margin-left:549px;                                                     
    background-color: transparent;
">
                          <div class="container demo-5">	
                            <div id="dl-menu3" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li><a href="#" data-modal data-toggle="modal" data-target="#designation">Désignation</a></li>
				            <li><a href="#" data-modal data-toggle="modal" data-target="#directeur">Nom et Prénom du Directeur</a></li>
						</ul>
					</div><!-- /dl-menuwrapper -->	
                        </div>
                        </div>
                    </div>
                </div> 
              
                    <div class="modal fade" id="menux2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" id="modal4" style="                                                   
     width:150px;
    margin-top:213px; 
    box-shadow:0 0 0;
    border:0px; 
    margin-left:397px;                                                                   
    background-color: transparent;
">
                          <div class="container demo-5">	
                            <div id="dl-menu4" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li><a href="#" data-modal data-toggle="modal" data-target="#nom">Nom</a></li>
				            <li><a href="#" style="font-family: Calibri;" data-modal data-toggle="modal" data-target="#prenom">الاسم</a></li>
						</ul>
					</div><!-- /dl-menuwrapper -->	
                        </div>
                        </div>
                    </div>
                </div> 

<!---------------------------------------------------------- Nom & prénom(ar) ------------------------------------------------------------------>
<div class="col-lg-12">
    <div class="modal fade" id="nom_ar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" style="float:left;" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="H2" style="text-align:right;">الاسم واللقب</h4>
                </div>
                <form action="simple.php"  method="post" class="formulaire block-validate popup-validation inline-validate">
                <div class="modal-body">
                    <div class="arab form-group">
                        <label for="required4"style="font-size: 20px;width:535px;text-align:right;" class="control-label">اللقب</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i style="width:15px;" class="fa fa-user"></i></span>
                            <input dir="rtl" lang="ar" type="text" id="required4" name="required4" class="form-control"/>
                        </div> 
                    </div>
                    <div class="arab form-group">
                        <label for="required5"style="font-size: 20px;width:535px;text-align:right;" class="control-label">الاسم</label> 
                        <div class="input-group">
                            <span class="input-group-addon"><i style="width:15px;" class="fa fa-user"></i></span>
                            <input dir="rtl" lang="ar" autocomplete="off" type="text" id="required5" name="required5" class="form-control" data-provide="typeahead" data-items="8" data-source='["صلاح الدين","فضيل","خليل","وليد","عبد الحق","إبراهيم","أحمد","إدريس","إسحاق","إسماعيل","أيوب","يعقوب","عيسى","يونس","هارون","جبريل","داوود","رزق","رضوان","زكرياء","يحيى","إلياس","زيد","سليمان","صالح","عمران","لقمان","محمد","موسى","نوح","هارون","هود","ياسين","يعقوب","يوسف","يونس","آصال","آلاء","آيات","إيمان","بشرى","بهجة","تمام","حياة","دانية","دعاء","زكية","زهرة","سبأ","ضحى","ضياء","عالية","فداء","فرات","فردوس","كاملة","كوثر","هاجر","هدى", "يسرى","سجى","سلسبيل" ,"شهد","جنى","أمل","آمال","إيناس","أفكار","ابتهال","إنصاف","أضواء","أرجوان","أبرار","أهداب","إسراء","أسرار","إبتهاج","أروى","أريج","أفراح","أحلام","أفنان","ألطاف","إيلاف","أسمهان","إنتصار","إنشراح","أشواق","إشراق","أنهار","إبهار"]'/>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <div style="margin-right:400px;">
                    <input type="submit" style="font:20px bold;" value="بحث" class="btn btn-primary sub"></input>
                    <button type="button" style="font:20px bold;" class="btn btn-default" data-dismiss="modal">إلغاء</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!----------------------------------------------------------------------------------------------------------------------------------------------->
          
<!---------------------------------------------------------- Nom & prénom(fr)-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="nom_fr" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Nom et Prénom</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="required1" class="control-label">Le nom</label>
                                        <div class="input-group">
                                         <input type="text" id="required1" name="required1" class="form-control validate[required,custom[name]]"/>
                                         <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="required2" class="control-label">Le prénom</label>
                                        <div class="input-group">
 <input type="text" id="required2" name="required2" class="form-control validate[required,custom[name]]" autocomplete="off" data-provide="typeahead" data-items="8" data-source='["Abdelwaheb","Abbès","abdallah","Abdechahid","Abdelaziz","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour", "Abdelghani","Abdelhadi","Abdelhak","Abdelhakim","Abdelhalim","Abdelkader","Abdelkarim","Abdellatif","Abdelmadjid","Abdelmalik","Abdelmoumen","Abdenour","Abderrahim","Abderrazek", "Abdessalem","Abdessatar","Abed","Abid","Abou Bakr", "Achik","Achir","Achour","Achraf","Adam","Adel","Adib","Adil","Adnane","Afdal","Ahmed", "Aissa", "Akli","Akmar","Alaeddine","Ali","Allal","Allaoua","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi", "Abdelhak", "Abdelhakim","Abdelhalim","Abdelkader","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi","Abdelhak", "Abdelhakim", "Abdelhalim","Abdelkader","Amar","Amine","Amir","Amjad","Anas","Anis","Anouar","Antar","Arsalane","Araslane","Assim","Assad","Atmane", "Ayachi", "Ayoub","Azhar","Azzam","Azziz","Azzouz","Abla","Abida","Achika","Achwak","Adiba","Adila","Adra","Afaf","Afia","Afifa","Afnane","Ahlem", "Aïcha","Aïda","Akila","Alia","Aliya","Amana", "Amaria","Amber","Amel","Amina","Amira","Amra","Anane","Angham","Anika","Anissa","Aouatif", "Awatif","Ariba","Asma","Asrar","Assia","Atefa", "Atifa", "Atika","Aya","Azhar","Aziza","Azza","Bachir","Badreddine","Bahi","Bakir", "Baligh", "Basile","Bassim","Belkacem","Bilal", "Boualem","Boubaker", "Boudjemaa","Boumedienne","Bouziane","Bouzid","Bachira","Bachra","Badia", "Badira","Badra","Bahia","Bahidja","Bahdja","Bakhta","Bariza","Basma","Baya","Bouchra","Bouthaïna","Chabane","Chafik","Chahid", "Chahine","Chaker", "Chakib","Chamseddine","Chawki","Chedli","Cheikh", "Cherif","Chokri","Camila","Kamila","Calaa","Cantara","Chadia","Chafia","Chafika", "Chahéra","Chahida","Chahinez","Chahra","Chahrazad","Chaïma","Chakira","Chakiba","Chama","Chérifa","Chirine","Chaza","Chourouk", "Daoud","Djafar","Djallel","Djallil","Djamel","Djamil","Djelloul","Djillali","Driss","Dalal","Dalia","Dalila","Deloula","Dawiya","Dehbia","Djamila","Djawida","Djohar","Dhohra","Dora","Douha","Douja","Dounia","Drifa","Elias","Emna","Esma","Fadel","Fadi","Fahd","Fahim","Fahmi","Fares","Farid", "Farouk","Fathi","Foudil","Fawzi","Fayçal","Ferhat","Fouad","Fadila","Fadia","Fahima","Fahmia","Faïha","Fairouz","Faiza","Farah","Farida","Faroudja","Faten","Fathia","Fatiha","Fatima","Fattouma","Fella","Feryel","Fitna","Fouzia","Gebril","Ghalib","Ghanem","Ghani","Ghazi","Gamra","Garmia","Ghada","Ghalia","Ghania","Gh&#39;zala","Ghizlène","Habib","Hachem","Hadi","Hadj", "Hafid","Hafs","Haider","Hakim","Halim","Hamdane","Hamid", "Hamza","Hani", "Haroun","Hassen","Hatim","Hichem","Hikmet","Hilal","Hocine", "Houari","Houd","Habiba","Hacina","Hadda","Hadia","Hadja","Hadjar", "Hadjira","Hafida","Hafsa","Hakima","Hala","Halima","Hamida","Hanane","Hania","Hanifa","Hanna","Hasna","Hassiba","Hayet","Hawa","Haoua","Hébara","Hiba","Hind","Hosnia","Houda","Houria", "Ibrahim","Idriss","Ikhlas","Ilian","Ilyes","Ishak","Islem","Ismaïl","Ismet","Ismahen","Ibtissem", "Ihcène", "Iklil","Ilhem","Imane","Ines","Insaf","Intisar","Izdihar","Ikram","Jabar","Jaber","Jahid","Djahid","Jawed","Joudi","Jounaidi","Jahida","Djahida","Jalila","Jawed","Jawida","Jazia","Djazia","Johar","Joumana","Kamel", "Kaci", "Kader","Karim","Khaldoun","Khaled","Khalil","Kheireddine", "Kamir", "Kahina","Kamar","Kamelia","Kamila","Karima","Kawtar","Keltoum","Kenza","Kewkeb","Khadidja","Khadra","Khalida","Kheira","Kinda", "Lamine", "Lakhdar","Larbi", "Lotfi","Lounès","Lout","Lilya","Lamia","Lalla","Lebiba","Latifa","Leila","Lilia","Lina","Linda","Loubna","Louisa", "Loundja", "Loutfia","Maamar","Maarouf","Mabrouk", "Madani", "Mahboub","Mahfoud","Mahmoud","Makhlouf","Malek", "Malik","Marouane","Marwan", "Mehdi","Mekki", "Messaoud","Mohamed","Mokhtar","Moncef","Mouley","Mounir","Mourad","Moussa","Mustapha","Mabrouka","Madiha","Maha","Mahbouba","Mahdia","Mahera","Maïssa","Majda","Majida","Malika","Manel","Mansoura","Mansouria","Maria","Maya","M&#39;Barka","Mellina","Meimouna","Meriem","Messaouda","Mordjane","Mordjana","Moufida","Mouna","Mounia","Mounira","Nabil","Nacer", "Nacer-Eddine","Nadim","Nadir","Nadji","Nadjib","Nahil","Naïm","Nassim","Nazim", "Nazir","Nouh", "Nourredine","Nabiha","Nabila","Nachida","Nacira","Nadia","Nadira","Nadjia","Nadjiba","Nadra","Nafissa","Nahla", "Naïla","Neïla", "Naïma","Najet","Nariman","Narjes","Nawel","Naziha","Nedjma","Nedjwa","Nezha","Nesrine","Nora","Noria","Noujoud","Nour","Nouzha","Omar","Okacha","Osmane","Othmane","Oussama","Ouardia","Oum El Kheir","Rabah","Rachid","Rafik","Rahal","Raïd","Rami","Ramzi","Raouf","Rayan","Razi", "Réda", "Redouane","Riad","Rochdi","Rostom","Rabia","Rabha","Racha","Rachida","Radia","Rafika","Rahima","Rahma","Rahifa","Raïda","Raihane","Raïssa", "Raja","Ratiba","Rawda","Razika","Riheb","Rima","Ryma","Rita","Rokia","Rosa","Sabri","Said","Salah","Salah Eddine","Salih","Salim","Sami","Samy", "Samir","Sayed","Seddik","Sofiane","Sabah","Sabiha","Sabrina","Sabriya","Sadika","Sadjia","Safa","Safia","Saïda","Sajida","Sakina","Saliha","Salima","Saloua","Samar","Samia","Samiha","Samira","Samra","Sana","Sania","Sara","Sarah","Sawsene","Siham","Selma","Sihame","Sofia","Soltana","Sonia","Soraya","Souad","Souhila","Soumia","Tahar","Tarek","Tarik","Tayeb","Tijani","Toufik","Tahani","Tahira","Tamara","Taous","Thania","Tania","Tlidja","Torkia","Tounes","Touraya","Walid","Wahid","Wassim","Wafa","Wahiba","Wahida","Walida","Warda","Wassila","Widad","Wissel","Yacine","Yassine","Yacoub","Yamine","Yanis","Yazid","Youcef","Younes","Yamina","Yasmina","Yasmine","Youmna","Yousra","Yakout","Zahir", "Zahid","Zahi","Zaïm","Zakaria","Zaki", "Ziad","Zine-Eddine","Zoubir","Zoheir","Zahia","Zahida","Zahra","Zahira","Zakia","Zanouba","Zayane","Zehouania","Zeïna","Zineb", "Zohra","Zoubida", "Zoulikha"]'/>
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->     
    
<!---------------------------------------------------------- L'état civile ---------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="civile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Etat Civile</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                     <div class="form-group">
                                        <label class="control-label">Veuillez choisir l'état civile?</label>
                                            <select name="Civil" class="validate[required] form-control">
                                            <option value="Marié">Marié</option>
                                            <option value="Célébataire" selected>Célébataire</option>
                                            <option value="Veuf">Veuf</option>
                                            <option value="Divorcé">Divorcé</option></select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------- L'état du stage ---------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="stage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Etat du Stage</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                     <div class="form-group">
                                        <label class="control-label">Veuillez choisir l'état du stage?</label>
                                            <select name="Stot" class="validate[required] form-control">
                                                <option value="En Cours" selected>En Cours</option>
                                                <option value="Cloture">Cloturé</option>
                                                <option value="Annule">Annulé</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------- Le Pays ---------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="pays" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Pays du stagiaire</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                     <div class="form-group">
                                        <label class="control-label col-lg-12">Veuillez choisir le pays?</label>
                                        <select class="form-control validate[required] chzn-select" tabindex="-1" name ="Pays">
                                        <optgroup label="Afrique">
                                <option value="Afrique Du Sud">Afrique Du Sud</option>
                                <option value="Algérie" selected>Algérie</option>
                                <option value="Angola">Angola</option>
                                <option value="Bénin">Bénin</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
                                <option value="Cameroun">Cameroun</option>
                                <option value="Cap-Vert">Cap-Vert</option>
                                <option value="République Centre-Africaine">République Centre-Africaine</option>
                                <option value="Comores">Comores</option>
                                <option value="République Démocratique Du Congo">République Démocratique Du Congo</option>
                                <option value="Congo">Congo</option>
                                <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Égypte">Égypte</option>
                                <option value="Éthiopie">Éthiopie</option>
                                <option value="Érythrée">Érythrée</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambie">Gambie</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Guinée">Guinée</option>
                                <option value="Guinée-Bisseau">Guinée-Bisseau</option>
                                <option value="Guinee Équatoriale">Guinée Équatoriale</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libye">Libye</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Mali">Mali</option>
                                <option value="Maroc">Maroc</option>
                                <option value="Maurice">Maurice</option>
                                <option value="Mauritanie">Mauritanie</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Namibie">Namibie</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="Ouganda">Ouganda</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Sao Tomé-et-Principe">Sao Tomé-et-Principe</option>
                                <option value="Sénégal">Sénégal</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra">Sierra</option>
                                <option value="Somalie">Somalie</option>
                                <option value="Soudan">Soudan</option>
                                <option value="Swaziland">Swaziland</option>
                                <option value="Tanzanie">Tanzanie</option>
                                <option value="Tchad">Tchad</option>
                                <option value="Togo">Togo</option>
                                <option value="Tunisie">Tunisie</option>
                                <option value="Zambie">Zambie</option>
                                <option value="Zimbabwe">Zimbabwe</option>
                            </optgroup>
                            <optgroup label="Amérique">
                                <option value="Antigua-et-Barbuda">Antigua-et-Barbuda</option>
                                <option value="Argentine">Argentine</option>
                                <option value="Bahamas">Bahamas</option>
                                <option value="Barbade">Barbade</option>
                                <option value="Belize">Belize</option>
                                <option value="Bolivie">Bolivie</option>
                                <option value="Brésil">Brésil</option>
                                <option value="Canada">Canada</option>
                                <option value="Chili">Chili</option>
                                <option value="Colombie">Colombie</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Cuba">Cuba</option>
                                <option value="République Dominicaine">République Dominicaine</option>
                                <option value="Dominique">Dominique</option>
                                <option value="Équateur">Équateur</option>
                                <option value="États Unis">États Unis</option>
                                <option value="Grenade">Grenade</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haïti">Haïti</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Jamaïque">Jamaïque</option>
                                <option value="Mexique">Mexique</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Panama">Panama</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Pérou">Pérou</option>
                                <option value="Saint-Cristophe-et-Niévès">Saint-Cristophe-et-Niévès</option>
                                <option value="Sainte-Lucie">Sainte-Lucie</option>
                                <option value="Saint-Vincent-et-les-Grenadines">Saint-Vincent-et-les-Grenadines</option>
                                <option value="Salvador">Salvador</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Trinité-et-Tobago">Trinité-et-Tobago</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Venezuela">Venezuela</option>
                            </optgroup>
                            <optgroup label="Asie">
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Arabie Saoudite">Arabie Saoudite</option>
                                <option value="Arménie">Arménie</option>
                                <option value="Azerbaïdjan">Azerbaïdjan</option>
                                <option value="Bahreïn">Bahreïn</option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Bhoutan">Bhoutan</option>
                                <option value="Birmanie">Birmanie</option>
                                <option value="Brunéi">Brunéi</option>
                                <option value="Cambodge">Cambodge</option>
                                <option value="Chine">Chine</option>
                                <option value="Corée Du Sud">Corée Du Sud</option>
                                <option value="Corée Du Nord">Corée Du Nord</option>
                                <option value="Emirats Arabe Unis">Émirats Arabe Unis</option>
                                <option value="Géorgie">Géorgie</option>
                                <option value="Inde">Inde</option>
                                <option value="Indonésie">Indonésie</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Iran">Iran</option>
                                <option value="Israël">Israël</option>
                                <option value="Japon">Japon</option>
                                <option value="Jordanie">Jordanie</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kirghistan">Kirghistan</option>
                                <option value="koweït">Koweït</option>
                                <option value="Laos">Laos</option>
                                <option value="Liban">Liban</option>
                                <option value="Malaisie">Malaisie</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mongolie">Mongolie</option>
                                <option value="Népal">Népal</option>
                                <option value="Oman">Oman</option>
                                <option value="Ouzbékistan">Ouzbékistan</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Singapour">Singapour</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Syrie">Syrie</option>
                                <option value="Tadjikistan">Tadjikistan</option>
                                <option value="Taiwan">Taïwan</option>
                                <option value="Thaïlande">Thaïlande</option>
                                <option value="Timor Oriental">Timor oriental</option>
                                <option value="Turkménistan">Turkménistan</option>
                                <option value="Turquie">Turquie</option>
                                <option value="Viêt Nam">Viêt Nam</option>
                                <option value="Yemen">Yemen</option>
                            </optgroup>
                            <optgroup label="Europe">
                                <option value="Allemagne">Allemagne</option>
                                <option value="Albanie">Albanie</option>
                                <option value="Andorre">Andorre</option>
                                <option value="Autriche">Autriche</option>
                                <option value="Biélorussie">Biélorussie</option>
                                <option value="Belgique">Belgique</option>
                                <option value="Bosnie-Herzégovine">Bosnie-Herzégovine</option>
                                <option value="Bulgarie">Bulgarie</option>
                                <option value="Croatie">Croatie</option>
                                <option value="Danemark">Danemark</option>
                                <option value="Espagne">Espagne</option>
                                <option value="Estonie">Estonie</option>
                                <option value="Finlande">Finlande</option>
                                <option value="France">France</option>
                                <option value="Grèce">Grèce</option>
                                <option value="Hongrie">Hongrie</option>
                                <option value="Irlande">Irlande</option>
                                <option value="Islande">Islande</option>
                                <option value="Italie">Italie</option>
                                <option value="Lettonie">Lettonie</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lituanie">Lituanie</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Ex-République Yougoslave de Macédoine">Ex-République Yougoslave de Macédoine</option>
                                <option value="Malte">Malte</option>
                                <option value="Moldavie">Moldavie</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Norvège">Norvège</option>
                                <option value="Pays-Bas">Pays-Bas</option>
                                <option value="Pologne">Pologne</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Roumanie">Roumanie</option>
                                <option value="Royaume-Uni">Royaume-Uni</option>
                                <option value="Russie">Russie</option>
                                <option value="Saint-Marin">Saint-Marin</option>
                                <option value="Serbie-et-Monténégro">Serbie-et-Monténégro</option>
                                <option value="Slovaquie">Slovaquie</option>
                                <option value="Slovénie">Slovénie</option>
                                <option value="Suède">Suède</option>
                                <option value="Suisse">Suisse</option>
                                <option value="République Tchèque">République Tchèque</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="Vatican">Vatican</option>
                            </optgroup>
                            <optgroup label="Océanie">
                                <option value="Australie">Australie</option>
                                <option value="Fidji">Fidji</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Marshall">Marshall</option>
                                <option value="Micronésie">Micronésie</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nouvelle-Zélande">Nouvelle-Zélande</option>
                                <option value="Palaos">Palaos</option>
                                <option value="Papouasie-Nouvelle-Guinée">Papouasie-Nouvelle-Guinée</option>
                                <option value="Salomon">Salomon</option>
                                <option value="Samoa">Samoa</option>
                                <option value="tonga">Tonga</option>
                                <option value="tuvalu">Tuvalu</option>
                                <option value="vanuatu">Vanuatu</option>
                            </optgroup>
                                    </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->
     
<!---------------------------------------------------------- Sexe ---------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="sexe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Sexe</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                     <div class="form-group">
                                        <label class="control-label">Veuillez choisir le sexe:</label>
                                             <label>
                                              <input type="radio" name="r3" value="Masculin" class="flat-red form-control" />
                                                Masculin
                                            </label>
                                            <label>
                                              <input   type="radio" name="r3" value="Féminin" class="flat-red form-control"/>
                                                Féminin
                                            </label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------- Le grade-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="grade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Grade du chercheur</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="req" class="control-label">Le grade</label>
                                            <input type="text" class="validate[required] form-control" name="req" id="req">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------- Code pv-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="codepv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Code de PV </h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="codpv" class="control-label">code pv</label>
                                            <input type="text" class="validate[required] form-control" name="codpv" id="codpv">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> 
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------- Acronyme-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="acronyme" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Acronyme du stage</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="requi4" class="control-label">L'acronyme</label>
                                            <input type="text" class="validate[required] form-control" name="requi4" id="requi4">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------- Ville-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="ville" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Ville du stagiaire</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="requi4" class="control-label">La Ville</label>   
                                            <div class="input-group">
                                                <input type="text" id="vill" name="vill" class="validate[required] form-control" />
                                                <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------- Etablissement-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="etablissement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">L'établissement du stagiaire</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                          <label for="required" class="control-label">Etablissement</label>
                                            <div class="input-group">   
                                                <input type="text" id="required" name="required" class="validate[required] form-control" />
                                                <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                           </div> 
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------- Moyen de transport-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="transport" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2"> Moyen de transport</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="requird2" class="control-label">Moyen de transport</label>
                                              <select id="requird2" name="requird2" class="form-control">
                                <option value="Avion">Avion</option>
                                <option value="Train">Train</option>
                                <option value="Voiture">Voiture</option>
                                <option value="Bateau">Bateau</option>
                            </select>
                    </div>                               </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------- Date prévue-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="prevue" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Date Prévue du stage</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="reservation1" class="control-label">Date Prévue</label>
                                            <div class="input-group">
                                                <input type="text" class="validate[required] form-control" id="reservation1" name="datP" required/>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------- Date effective-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="effective" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Date Effective du stage</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="reservation" class="control-label">Date Effective</label>
                                            <div class="input-group">
                                                <input type="text" class="validate[required] form-control" id="reservation" name="datE" required/>
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------- La spécialité-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="specialite" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Spécialité du chercheur</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="req1" class="control-label">La spécialité</label>
                                            <input type="text" class="validate[required] form-control" name="req1" id="req1">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------- La nature ---------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="nature" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Nature du chercheur</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                     <div class="form-group">
                                        <label class="control-label">Veuillez choisir la nature du chercheur?</label>
                                            <select name="sport" id="sport" class="validate[required] form-control">
                                                <option value="Permanent">Permanent</option>
                                                <option value="Vacataire">Vacataire</option>
                                                <option value="Associé">Associé</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------------- Diplôme de Base-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="base" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Diplôme de Base du chercheur</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="requis3" class="control-label">Diplôme de Base</label>
                                            <input type="text" class="validate[required] form-control" name="requis3" id="requis3">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->


<!-------------------------------------------------------- Diplôme à Préparer-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="preparer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Diplôme à préparer du chercheur</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="requis4" class="control-label">Diplôme à préparer</label>
                                            <input type="text" class="validate[required] form-control" name="requis4" id="requis4">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------- Date d'inscription-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="inscription" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Date d'inscription du chercheur</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="dp1" class="control-label">Date d'inscription</label>
                                            <input type="text" class="form-control" value="11/02/2012" name="dp1" id="dp1" />
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!------------------------------------------------------ Désignation du stage-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="designation1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Désignation du stage</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="requi3" class="control-label">Désignation</label>
                                            <input type="text" class="validate[required] form-control" name="requi3" id="requi3">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------- Désignation-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="designation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Désignation du laboratoire</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="require2" class="control-label">Désignation</label>
                                            <input type="text" class="validate[required] form-control" name="require2" id="require2">
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!---------------------------------------------------- Directeur(nom + prénom)------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="directeur" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Nom et Prénom du Directeur</h4>
                            </div>
                            <form action="#" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="nom_dir" class="control-label">Nom du directeur</label>
                                                <div class="input-group">
                                                    <input type="text" id="nom_dir" name="nom_dir" class="validate[required,custom[name]] form-control"/>
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            </div>
                                        </div>
                                            <div class="form-group">
                                            <label for="prenom_dir" class="control-label">Prénom du directeur</label>
                                            <div class="input-group">
 <input type="text" id="prenom_dir" name="prenom_dir" class="validate[required,custom[name]] form-control" autocomplete="off" data-provide="typeahead" data-items="8" data-source='["Abdelwaheb","Abbès","abdallah","Abdechahid","Abdelaziz","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour", "Abdelghani","Abdelhadi","Abdelhak","Abdelhakim","Abdelhalim","Abdelkader","Abdelkarim","Abdellatif","Abdelmadjid","Abdelmalik","Abdelmoumen","Abdenour","Abderrahim","Abderrazek", "Abdessalem","Abdessatar","Abed","Abid","Abou Bakr", "Achik","Achir","Achour","Achraf","Adam","Adel","Adib","Adil","Adnane","Afdal","Ahmed", "Aissa", "Akli","Akmar","Alaeddine","Ali","Allal","Allaoua","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi", "Abdelhak", "Abdelhakim","Abdelhalim","Abdelkader","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi","Abdelhak", "Abdelhakim", "Abdelhalim","Abdelkader","Amar","Amine","Amir","Amjad","Anas","Anis","Anouar","Antar","Arsalane","Araslane","Assim","Assad","Atmane", "Ayachi", "Ayoub","Azhar","Azzam","Azziz","Azzouz","Abla","Abida","Achika","Achwak","Adiba","Adila","Adra","Afaf","Afia","Afifa","Afnane","Ahlem", "Aïcha","Aïda","Akila","Alia","Aliya","Amana", "Amaria","Amber","Amel","Amina","Amira","Amra","Anane","Angham","Anika","Anissa","Aouatif", "Awatif","Ariba","Asma","Asrar","Assia","Atefa", "Atifa", "Atika","Aya","Azhar","Aziza","Azza","Bachir","Badreddine","Bahi","Bakir", "Baligh", "Basile","Bassim","Belkacem","Bilal", "Boualem","Boubaker", "Boudjemaa","Boumedienne","Bouziane","Bouzid","Bachira","Bachra","Badia", "Badira","Badra","Bahia","Bahidja","Bahdja","Bakhta","Bariza","Basma","Baya","Bouchra","Bouthaïna","Chabane","Chafik","Chahid", "Chahine","Chaker", "Chakib","Chamseddine","Chawki","Chedli","Cheikh", "Cherif","Chokri","Camila","Kamila","Calaa","Cantara","Chadia","Chafia","Chafika", "Chahéra","Chahida","Chahinez","Chahra","Chahrazad","Chaïma","Chakira","Chakiba","Chama","Chérifa","Chirine","Chaza","Chourouk", "Daoud","Djafar","Djallel","Djallil","Djamel","Djamil","Djelloul","Djillali","Driss","Dalal","Dalia","Dalila","Deloula","Dawiya","Dehbia","Djamila","Djawida","Djohar","Dhohra","Dora","Douha","Douja","Dounia","Drifa","Elias","Emna","Esma","Fadel","Fadi","Fahd","Fahim","Fahmi","Fares","Farid", "Farouk","Fathi","Foudil","Fawzi","Fayçal","Ferhat","Fouad","Fadila","Fadia","Fahima","Fahmia","Faïha","Fairouz","Faiza","Farah","Farida","Faroudja","Faten","Fathia","Fatiha","Fatima","Fattouma","Fella","Feryel","Fitna","Fouzia","Gebril","Ghalib","Ghanem","Ghani","Ghazi","Gamra","Garmia","Ghada","Ghalia","Ghania","Gh&#39;zala","Ghizlène","Habib","Hachem","Hadi","Hadj", "Hafid","Hafs","Haider","Hakim","Halim","Hamdane","Hamid", "Hamza","Hani", "Haroun","Hassen","Hatim","Hichem","Hikmet","Hilal","Hocine", "Houari","Houd","Habiba","Hacina","Hadda","Hadia","Hadja","Hadjar", "Hadjira","Hafida","Hafsa","Hakima","Hala","Halima","Hamida","Hanane","Hania","Hanifa","Hanna","Hasna","Hassiba","Hayet","Hawa","Haoua","Hébara","Hiba","Hind","Hosnia","Houda","Houria", "Ibrahim","Idriss","Ikhlas","Ilian","Ilyes","Ishak","Islem","Ismaïl","Ismet","Ismahen","Ibtissem", "Ihcène", "Iklil","Ilhem","Imane","Ines","Insaf","Intisar","Izdihar","Ikram","Jabar","Jaber","Jahid","Djahid","Jawed","Joudi","Jounaidi","Jahida","Djahida","Jalila","Jawed","Jawida","Jazia","Djazia","Johar","Joumana","Kamel", "Kaci", "Kader","Karim","Khaldoun","Khaled","Khalil","Kheireddine", "Kamir", "Kahina","Kamar","Kamelia","Kamila","Karima","Kawtar","Keltoum","Kenza","Kewkeb","Khadidja","Khadra","Khalida","Kheira","Kinda", "Lamine", "Lakhdar","Larbi", "Lotfi","Lounès","Lout","Lilya","Lamia","Lalla","Lebiba","Latifa","Leila","Lilia","Lina","Linda","Loubna","Louisa", "Loundja", "Loutfia","Maamar","Maarouf","Mabrouk", "Madani", "Mahboub","Mahfoud","Mahmoud","Makhlouf","Malek", "Malik","Marouane","Marwan", "Mehdi","Mekki", "Messaoud","Mohamed","Mokhtar","Moncef","Mouley","Mounir","Mourad","Moussa","Mustapha","Mabrouka","Madiha","Maha","Mahbouba","Mahdia","Mahera","Maïssa","Majda","Majida","Malika","Manel","Mansoura","Mansouria","Maria","Maya","M&#39;Barka","Mellina","Meimouna","Meriem","Messaouda","Mordjane","Mordjana","Moufida","Mouna","Mounia","Mounira","Nabil","Nacer", "Nacer-Eddine","Nadim","Nadir","Nadji","Nadjib","Nahil","Naïm","Nassim","Nazim", "Nazir","Nouh", "Nourredine","Nabiha","Nabila","Nachida","Nacira","Nadia","Nadira","Nadjia","Nadjiba","Nadra","Nafissa","Nahla", "Naïla","Neïla", "Naïma","Najet","Nariman","Narjes","Nawel","Naziha","Nedjma","Nedjwa","Nezha","Nesrine","Nora","Noria","Noujoud","Nour","Nouzha","Omar","Okacha","Osmane","Othmane","Oussama","Ouardia","Oum El Kheir","Rabah","Rachid","Rafik","Rahal","Raïd","Rami","Ramzi","Raouf","Rayan","Razi", "Réda", "Redouane","Riad","Rochdi","Rostom","Rabia","Rabha","Racha","Rachida","Radia","Rafika","Rahima","Rahma","Rahifa","Raïda","Raihane","Raïssa", "Raja","Ratiba","Rawda","Razika","Riheb","Rima","Ryma","Rita","Rokia","Rosa","Sabri","Said","Salah","Salah Eddine","Salih","Salim","Sami","Samy", "Samir","Sayed","Seddik","Sofiane","Sabah","Sabiha","Sabrina","Sabriya","Sadika","Sadjia","Safa","Safia","Saïda","Sajida","Sakina","Saliha","Salima","Saloua","Samar","Samia","Samiha","Samira","Samra","Sana","Sania","Sara","Sarah","Sawsene","Siham","Selma","Sihame","Sofia","Soltana","Sonia","Soraya","Souad","Souhila","Soumia","Tahar","Tarek","Tarik","Tayeb","Tijani","Toufik","Tahani","Tahira","Tamara","Taous","Thania","Tania","Tlidja","Torkia","Tounes","Touraya","Walid","Wahid","Wassim","Wafa","Wahiba","Wahida","Walida","Warda","Wassila","Widad","Wissel","Yacine","Yassine","Yacoub","Yamine","Yanis","Yazid","Youcef","Younes","Yamina","Yasmina","Yasmine","Youmna","Yousra","Yakout","Zahir", "Zahid","Zahi","Zaïm","Zakaria","Zaki", "Ziad","Zine-Eddine","Zoubir","Zoheir","Zahia","Zahida","Zahra","Zahira","Zakia","Zanouba","Zayane","Zehouania","Zeïna","Zineb", "Zohra","Zoubida", "Zoulikha"]'/>
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->

<!-------------------------------------------------------- Nom de l'univesité-------------------------------------------------------------------->
              <div class="col-lg-12">
                <div class="modal fade" id="nom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title" id="H2">Nom de l'univesité</h4>
                            </div>
                            <form action="simple.php" method="post" class="formulaire block-validate popup-validation inline-validate">
                                <div class="modal-body">
                                      <div class="form-group">
                                            <label for="req12" class="control-label">Le nom</label>
                                                <div class="input-group">
                                                    <input type="text" id="req12" name="req12" class="validate[required] form-control"/>
                                                    <span class="input-group-addon"><i class="fa fa-building"></i></span>
                                            </div>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                                    <input type="submit" value="Rechercher" class="btn btn-primary sub"></input>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
<!---------------------------------------------------------------------------------------------------------------------------------------------->


<!---------------------------------------------------------- اسم الجامعة ------------------------------------------------------------------>
<div class="col-lg-12">
    <div class="modal fade" id="prenom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" style="float:left;" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="H2" style="text-align:right;">اسم الجامعة</h4>
                </div>
                <form  method="post" action="simple.php" class="formulaire block-validate popup-validation inline-validate">
                <div class="modal-body">
                    <div class="arab form-group">
                        <label for="required10" style="font-size: 20px;width:535px;text-align:right;" class="control-label">الاسم</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i style="width:15px;" class="fa fa-building"></i></span>
                            <input dir="rtl" lang="ar" type="text" id="required10" name="required10" class="form-control"/>
                        </div> 
                    </div>
                </div>
                <div class="modal-footer">
                    <div style="margin-right:400px;">
                    <input type="submit" style="font:20px bold;" value="بحث" class="btn btn-primary sub"></input>
                    <button type="button" style="font:20px bold;" class="btn btn-default" data-dismiss="modal">إلغاء</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!----------------------------------------------------------------------------------------------------------------------------------------------->

          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer" style="margin-top:38px;">
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
var div = document.getElementById('oran');
if (div.innerHTML!='<tr id="aissa"><th></th></tr>') document.getElementById('aissa').style.display='none';
</script>
		<script>
         //   document.getElementById('table').style.display='none';
            $('a[data-modal]').on('click', function(e) {
                e.preventDefault();
                //$('.modal').modal('show');
                var target = $($(this).data('target'));
                target.modal('show');
            });
            $('.sub').on('click', function(e) {
                    if ($('.formulaire').isValid) {
                    $('#liste').css("display","none");
                    $('#table').css("display","block");
                    $('#button').css("display","block"); 
                    $("[data-dismiss=modal]").trigger({ type: "click" });}
            });
			$(function() {
				$( '#dl-menu' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-4', classout : 'dl-animate-out-4' }
				});
			});
            $(function() {
				$( '#dl-menu2' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-4', classout : 'dl-animate-out-4' }
				});
			});
            $(function() {
				$( '#dl-menu3' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-4', classout : 'dl-animate-out-4' }
				});
			});
            $(function() {
				$( '#dl-menu4' ).dlmenu({
					animationClasses : { classin : 'dl-animate-in-4', classout : 'dl-animate-out-4' }
				});
			});
           $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
		</script>
        		<script>
			//  The function to change the class
			var changeClass = function (r,className1,className2) {
				var regex = new RegExp("(?:^|\\s+)" + className1 + "(?:\\s+|$)");
				if( regex.test(r.className) ) {
					r.className = r.className.replace(regex,' '+className2+' ');
			    }
			    else{
					r.className = r.className.replace(new RegExp("(?:^|\\s+)" + className2 + "(?:\\s+|$)"),' '+className1+' ');
			    }
			    return r.className;
			};	

			//  Creating our button in JS for smaller screens
			var menuElements = document.getElementById('menu');
			menuElements.insertAdjacentHTML('afterBegin','<button type="button" id="menutoggle" class="navtoogle" aria-hidden="true"><i aria-hidden="true" class="icon-menu"> </i> Menu</button>');

			//  Toggle the class on click to show / hide the menu
			document.getElementById('menutoggle').onclick = function() {
				changeClass(this, 'navtoogle active', 'navtoogle');
			}

			// http://tympanus.net/codrops/2013/05/08/responsive-retina-ready-menu/comment-page-2/#comment-438918
			document.onclick = function(e) {
				var mobileButton = document.getElementById('menutoggle'),
					buttonStyle =  mobileButton.currentStyle ? mobileButton.currentStyle.display : getComputedStyle(mobileButton, null).display;

				if(buttonStyle === 'block' && e.target !== mobileButton && new RegExp(' ' + 'active' + ' ').test(' ' + mobileButton.className + ' ')) {
					changeClass(mobileButton, 'navtoogle active', 'navtoogle');
				}
			}
		</script>
         <script>  
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
   <!--Fonction d'aficher la notice en bulle-->
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bonjour ADPGR!',
            // (string | mandatory) the text inside the notification
            text: 'Bounjour monsieur, si vous vouler consulter l\'aide de l\'application <a href="PRO/HTML/simple.htm" target="_blank" style="color:#ffd777"><h7>help!</h7></a>',
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
