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
             INTO laboratoire ( Désignation , Nom_Directeur , Prénom_Directeur , Tél , Fax , Site_Web , Université_Code )
                                          
                       VALUES ( :Designation , :NomDirecteur , :PrenomDirecteur , :Tel , :Fax , :SiteWeb , :CodeUniv )');
                                
$clean['Pays'] = (isset( $_POST['Pays'] )?  $_POST['Pays'] : '');    
$statement->bindParam(':CodeUniv', $clean['Pays']);

$clean['require2'] = (isset( $_POST['require2'] )?  $_POST['require2'] : '');  
$statement->bindParam(':Designation', $clean['require2']);

$clean['required1'] = (isset($_POST['required1'])?  $_POST['required1'] : '');  
$statement->bindParam(':NomDirecteur', $clean['required1']);

$clean['required2'] = (isset($_POST['required2'] )?  $_POST['required2'] : '');  
$statement->bindParam(':PrenomDirecteur', $clean['required2']);

$clean['required9'] = (isset($_POST['required9'] )?  $_POST['required9']: ''); 
$statement->bindParam(':Tel',$clean['required9']);

$clean['require9'] = (isset($_POST['require9'] )?  $_POST['require9'] : '');  
$statement->bindParam(':Fax',$clean['require9']);

$clean['url2'] = (isset($_POST['url2'] )?  $_POST['url2'] : '');
$statement->bindParam (':SiteWeb',$clean['url2']);

if(isset($_POST['Pays'])||isset($_POST['require2'])||isset($_POST['required1'])||isset($_POST['required2'])||isset($_POST['required9'])||isset($_POST['require9'])||isset($_POST['url2']))
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
    <title>DPGR | Formulaire des laboratoires</title>
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
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
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
                          <li><a  href="univer-form.php">Université</a></li>
                          <li><a  style="color:white;" href="labo-form.php#">Laboratoire</a></li>
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
      
        <!--PAGE CONTENT -->
              <section id="main-content">
          <section class="wrapper">
        <div id="content">
                <div class="inner" style="background-color:#F2F2F2;">
                    <hr />
                    <div class="row">
                <div class="panel panel-primary" style="margin:0 70px 0 30px;">
                        <div class="panel-heading" style="font-size:28px;text-align:center;">
                           Les Laboratoires
                        </div>
                        <div class="panel-body">
                        <div class="col-lg-12">
                            <div class="box">
                                <header>
                                    <div class="icons"><i class="icon-zoom-in"></i></div>
                                    <h5>Laboratoire</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                        href="#collapseOne">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
<?php   if(isset($_GET['code']))
{
    $stat = $db->prepare('SELECT * FROM Laboratoire WHERE Code='.$_GET['code']);      
    $stat->execute();
    while($row = $stat->fetch())
    {                       ?>
                                </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="modif_labo.php" class="form-horizontal block-validate" method="post">
                                         <div class="form-group" style="margin-top:30px;">
              <input type="hidden" value="<?php echo $_GET['code']; ?>" class="form-control" name="cd" id="cd" autofocus>
                                            <label for="require2" class="control-label col-lg-4">Désignation</label>
                                            <div class="col-lg-4">
                                                <input type="text" value="<?php echo $row['Désignation']; ?>" class="form-control" name="require2" id="require2" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="required1" class="control-label col-lg-4">Nom du directeur</label>
                                            <div class="col-lg-4">
                                            <div class="input-group">
                                                <input type="text" value="<?php echo $row['Nom_Directeur']; ?>" class="form-control" name="required1" id="required1">
                                                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="required2" class="control-label col-lg-4">Prénom du directeur</label>
                                            <div class="col-lg-4">
                                            <div class="input-group">
 <input value="<?php echo $row['Prénom_Directeur']; ?>" type="text" id="required2" name="required2" class="form-control"  autocomplete="off" data-provide="typeahead" data-items="8" data-source='["Abdelwaheb","Abbès","abdallah","Abdechahid","Abdelaziz","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour", "Abdelghani","Abdelhadi","Abdelhak","Abdelhakim","Abdelhalim","Abdelkader","Abdelkarim","Abdellatif","Abdelmadjid","Abdelmalik","Abdelmoumen","Abdenour","Abderrahim","Abderrazek", "Abdessalem","Abdessatar","Abed","Abid","Abou Bakr", "Achik","Achir","Achour","Achraf","Adam","Adel","Adib","Adil","Adnane","Afdal","Ahmed", "Aissa", "Akli","Akmar","Alaeddine","Ali","Allal","Allaoua","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi", "Abdelhak", "Abdelhakim","Abdelhalim","Abdelkader","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi","Abdelhak", "Abdelhakim", "Abdelhalim","Abdelkader","Amar","Amine","Amir","Amjad","Anas","Anis","Anouar","Antar","Arsalane","Araslane","Assim","Assad","Atmane", "Ayachi", "Ayoub","Azhar","Azzam","Azziz","Azzouz","Abla","Abida","Achika","Achwak","Adiba","Adila","Adra","Afaf","Afia","Afifa","Afnane","Ahlem", "Aïcha","Aïda","Akila","Alia","Aliya","Amana", "Amaria","Amber","Amel","Amina","Amira","Amra","Anane","Angham","Anika","Anissa","Aouatif", "Awatif","Ariba","Asma","Asrar","Assia","Atefa", "Atifa", "Atika","Aya","Azhar","Aziza","Azza","Bachir","Badreddine","Bahi","Bakir", "Baligh", "Basile","Bassim","Belkacem","Bilal", "Boualem","Boubaker", "Boudjemaa","Boumedienne","Bouziane","Bouzid","Bachira","Bachra","Badia", "Badira","Badra","Bahia","Bahidja","Bahdja","Bakhta","Bariza","Basma","Baya","Bouchra","Bouthaïna","Chabane","Chafik","Chahid", "Chahine","Chaker", "Chakib","Chamseddine","Chawki","Chedli","Cheikh", "Cherif","Chokri","Camila","Kamila","Calaa","Cantara","Chadia","Chafia","Chafika", "Chahéra","Chahida","Chahinez","Chahra","Chahrazad","Chaïma","Chakira","Chakiba","Chama","Chérifa","Chirine","Chaza","Chourouk", "Daoud","Djafar","Djallel","Djallil","Djamel","Djamil","Djelloul","Djillali","Driss","Dalal","Dalia","Dalila","Deloula","Dawiya","Dehbia","Djamila","Djawida","Djohar","Dhohra","Dora","Douha","Douja","Dounia","Drifa","Elias","Emna","Esma","Fadel","Fadi","Fahd","Fahim","Fahmi","Fares","Farid", "Farouk","Fathi","Foudil","Fawzi","Fayçal","Ferhat","Fouad","Fadila","Fadia","Fahima","Fahmia","Faïha","Fairouz","Faiza","Farah","Farida","Faroudja","Faten","Fathia","Fatiha","Fatima","Fattouma","Fella","Feryel","Fitna","Fouzia","Gebril","Ghalib","Ghanem","Ghani","Ghazi","Gamra","Garmia","Ghada","Ghalia","Ghania","Gh&#39;zala","Ghizlène","Habib","Hachem","Hadi","Hadj", "Hafid","Hafs","Haider","Hakim","Halim","Hamdane","Hamid", "Hamza","Hani", "Haroun","Hassen","Hatim","Hichem","Hikmet","Hilal","Hocine", "Houari","Houd","Habiba","Hacina","Hadda","Hadia","Hadja","Hadjar", "Hadjira","Hafida","Hafsa","Hakima","Hala","Halima","Hamida","Hanane","Hania","Hanifa","Hanna","Hasna","Hassiba","Hayet","Hawa","Haoua","Hébara","Hiba","Hind","Hosnia","Houda","Houria", "Ibrahim","Idriss","Ikhlas","Ilian","Ilyes","Ishak","Islem","Ismaïl","Ismet","Ismahen","Ibtissem", "Ihcène", "Iklil","Ilhem","Imane","Ines","Insaf","Intisar","Izdihar","Ikram","Jabar","Jaber","Jahid","Djahid","Jawed","Joudi","Jounaidi","Jahida","Djahida","Jalila","Jawed","Jawida","Jazia","Djazia","Johar","Joumana","Kamel", "Kaci", "Kader","Karim","Khaldoun","Khaled","Khalil","Kheireddine", "Kamir", "Kahina","Kamar","Kamelia","Kamila","Karima","Kawtar","Keltoum","Kenza","Kewkeb","Khadidja","Khadra","Khalida","Kheira","Kinda", "Lamine", "Lakhdar","Larbi", "Lotfi","Lounès","Lout","Lilya","Lamia","Lalla","Lebiba","Latifa","Leila","Lilia","Lina","Linda","Loubna","Louisa", "Loundja", "Loutfia","Maamar","Maarouf","Mabrouk", "Madani", "Mahboub","Mahfoud","Mahmoud","Makhlouf","Malek", "Malik","Marouane","Marwan", "Mehdi","Mekki", "Messaoud","Mohamed","Mokhtar","Moncef","Mouley","Mounir","Mourad","Moussa","Mustapha","Mabrouka","Madiha","Maha","Mahbouba","Mahdia","Mahera","Maïssa","Majda","Majida","Malika","Manel","Mansoura","Mansouria","Maria","Maya","M&#39;Barka","Mellina","Meimouna","Meriem","Messaouda","Mordjane","Mordjana","Moufida","Mouna","Mounia","Mounira","Nabil","Nacer", "Nacer-Eddine","Nadim","Nadir","Nadji","Nadjib","Nahil","Naïm","Nassim","Nazim", "Nazir","Nouh", "Nourredine","Nabiha","Nabila","Nachida","Nacira","Nadia","Nadira","Nadjia","Nadjiba","Nadra","Nafissa","Nahla", "Naïla","Neïla", "Naïma","Najet","Nariman","Narjes","Nawel","Naziha","Nedjma","Nedjwa","Nezha","Nesrine","Nora","Noria","Noujoud","Nour","Nouzha","Omar","Okacha","Osmane","Othmane","Oussama","Ouardia","Oum El Kheir","Rabah","Rachid","Rafik","Rahal","Raïd","Rami","Ramzi","Raouf","Rayan","Razi", "Réda", "Redouane","Riad","Rochdi","Rostom","Rabia","Rabha","Racha","Rachida","Radia","Rafika","Rahima","Rahma","Rahifa","Raïda","Raihane","Raïssa", "Raja","Ratiba","Rawda","Razika","Riheb","Rima","Ryma","Rita","Rokia","Rosa","Sabri","Said","Salah","Salah Eddine","Salih","Salim","Sami","Samy", "Samir","Sayed","Seddik","Sofiane","Sabah","Sabiha","Sabrina","Sabriya","Sadika","Sadjia","Safa","Safia","Saïda","Sajida","Sakina","Saliha","Salima","Saloua","Samar","Samia","Samiha","Samira","Samra","Sana","Sania","Sara","Sarah","Sawsene","Siham","Selma","Sihame","Sofia","Soltana","Sonia","Soraya","Souad","Souhila","Soumia","Tahar","Tarek","Tarik","Tayeb","Tijani","Toufik","Tahani","Tahira","Tamara","Taous","Thania","Tania","Tlidja","Torkia","Tounes","Touraya","Walid","Wahid","Wassim","Wafa","Wahiba","Wahida","Walida","Warda","Wassila","Widad","Wissel","Yacine","Yassine","Yacoub","Yamine","Yanis","Yazid","Youcef","Younes","Yamina","Yasmina","Yasmine","Youmna","Yousra","Yakout","Zahir", "Zahid","Zahi","Zaïm","Zakaria","Zaki", "Ziad","Zine-Eddine","Zoubir","Zoheir","Zahia","Zahida","Zahra","Zahira","Zakia","Zanouba","Zayane","Zehouania","Zeïna","Zineb", "Zohra","Zoubida", "Zoulikha"]'/>
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
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
                                            <input class="form-control" value="<?php echo $row['Fax']; ?>" type="text" id="require9" name="require9"/>
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="url2" class="control-label col-lg-4">Site Web</label>
                                            <div class=" col-lg-4">
                                                <div class="input-group">
                                                    <input value="<?php echo $row['Site_Web']; ?>" class="form-control" type="text" name="url2" id="url2" />
                                                    <span class="input-group-addon"><i class="fa fa-site"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="number_stg" class="control-label col-lg-4">Université</label>
                                            <div class=" col-lg-4">
                                            <select class="form-control chzn-select" tabindex="2" name ="Pays">
    
                                            <?php            
                                                $statement = $db->prepare('SELECT * FROM Université');
                                                $statement->execute();
                                                while($option = $statement->fetch()){ ?>
                                            <option value='<?php echo $option['Code'] ?>' ><?php echo $option['Nom_Fr']; if($option['Code']==$row['Université_Code']){} ?></option>
                                                     <?php } }}else {?>                       </header>
                                <div id="collapseOne" class="accordion-body collapse in body">
                                    <form action="labo-form .php" class="form-horizontal block-validate" method="post">
                                         <div class="form-group" style="margin-top:30px;">
                                            <label for="require2" class="control-label col-lg-4">Désignation</label>
                                            <div class="col-lg-4">
                                                <input type="text" class="form-control" name="require2" id="require2" autofocus>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="required1" class="control-label col-lg-4">Nom du directeur</label>
                                            <div class="col-lg-4">
                                            <div class="input-group">
                                                <input type="text" class="form-control" name="required1" id="required1">
                                                 <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="required2" class="control-label col-lg-4">Prénom du directeur</label>
                                            <div class="col-lg-4">
                                            <div class="input-group">
 <input type="text" id="required2" name="required2" class="form-control"  autocomplete="off" data-provide="typeahead" data-items="8" data-source='["Abdelwaheb","Abbès","abdallah","Abdechahid","Abdelaziz","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour", "Abdelghani","Abdelhadi","Abdelhak","Abdelhakim","Abdelhalim","Abdelkader","Abdelkarim","Abdellatif","Abdelmadjid","Abdelmalik","Abdelmoumen","Abdenour","Abderrahim","Abderrazek", "Abdessalem","Abdessatar","Abed","Abid","Abou Bakr", "Achik","Achir","Achour","Achraf","Adam","Adel","Adib","Adil","Adnane","Afdal","Ahmed", "Aissa", "Akli","Akmar","Alaeddine","Ali","Allal","Allaoua","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi", "Abdelhak", "Abdelhakim","Abdelhalim","Abdelkader","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi","Abdelhak", "Abdelhakim", "Abdelhalim","Abdelkader","Amar","Amine","Amir","Amjad","Anas","Anis","Anouar","Antar","Arsalane","Araslane","Assim","Assad","Atmane", "Ayachi", "Ayoub","Azhar","Azzam","Azziz","Azzouz","Abla","Abida","Achika","Achwak","Adiba","Adila","Adra","Afaf","Afia","Afifa","Afnane","Ahlem", "Aïcha","Aïda","Akila","Alia","Aliya","Amana", "Amaria","Amber","Amel","Amina","Amira","Amra","Anane","Angham","Anika","Anissa","Aouatif", "Awatif","Ariba","Asma","Asrar","Assia","Atefa", "Atifa", "Atika","Aya","Azhar","Aziza","Azza","Bachir","Badreddine","Bahi","Bakir", "Baligh", "Basile","Bassim","Belkacem","Bilal", "Boualem","Boubaker", "Boudjemaa","Boumedienne","Bouziane","Bouzid","Bachira","Bachra","Badia", "Badira","Badra","Bahia","Bahidja","Bahdja","Bakhta","Bariza","Basma","Baya","Bouchra","Bouthaïna","Chabane","Chafik","Chahid", "Chahine","Chaker", "Chakib","Chamseddine","Chawki","Chedli","Cheikh", "Cherif","Chokri","Camila","Kamila","Calaa","Cantara","Chadia","Chafia","Chafika", "Chahéra","Chahida","Chahinez","Chahra","Chahrazad","Chaïma","Chakira","Chakiba","Chama","Chérifa","Chirine","Chaza","Chourouk", "Daoud","Djafar","Djallel","Djallil","Djamel","Djamil","Djelloul","Djillali","Driss","Dalal","Dalia","Dalila","Deloula","Dawiya","Dehbia","Djamila","Djawida","Djohar","Dhohra","Dora","Douha","Douja","Dounia","Drifa","Elias","Emna","Esma","Fadel","Fadi","Fahd","Fahim","Fahmi","Fares","Farid", "Farouk","Fathi","Foudil","Fawzi","Fayçal","Ferhat","Fouad","Fadila","Fadia","Fahima","Fahmia","Faïha","Fairouz","Faiza","Farah","Farida","Faroudja","Faten","Fathia","Fatiha","Fatima","Fattouma","Fella","Feryel","Fitna","Fouzia","Gebril","Ghalib","Ghanem","Ghani","Ghazi","Gamra","Garmia","Ghada","Ghalia","Ghania","Gh&#39;zala","Ghizlène","Habib","Hachem","Hadi","Hadj", "Hafid","Hafs","Haider","Hakim","Halim","Hamdane","Hamid", "Hamza","Hani", "Haroun","Hassen","Hatim","Hichem","Hikmet","Hilal","Hocine", "Houari","Houd","Habiba","Hacina","Hadda","Hadia","Hadja","Hadjar", "Hadjira","Hafida","Hafsa","Hakima","Hala","Halima","Hamida","Hanane","Hania","Hanifa","Hanna","Hasna","Hassiba","Hayet","Hawa","Haoua","Hébara","Hiba","Hind","Hosnia","Houda","Houria", "Ibrahim","Idriss","Ikhlas","Ilian","Ilyes","Ishak","Islem","Ismaïl","Ismet","Ismahen","Ibtissem", "Ihcène", "Iklil","Ilhem","Imane","Ines","Insaf","Intisar","Izdihar","Ikram","Jabar","Jaber","Jahid","Djahid","Jawed","Joudi","Jounaidi","Jahida","Djahida","Jalila","Jawed","Jawida","Jazia","Djazia","Johar","Joumana","Kamel", "Kaci", "Kader","Karim","Khaldoun","Khaled","Khalil","Kheireddine", "Kamir", "Kahina","Kamar","Kamelia","Kamila","Karima","Kawtar","Keltoum","Kenza","Kewkeb","Khadidja","Khadra","Khalida","Kheira","Kinda", "Lamine", "Lakhdar","Larbi", "Lotfi","Lounès","Lout","Lilya","Lamia","Lalla","Lebiba","Latifa","Leila","Lilia","Lina","Linda","Loubna","Louisa", "Loundja", "Loutfia","Maamar","Maarouf","Mabrouk", "Madani", "Mahboub","Mahfoud","Mahmoud","Makhlouf","Malek", "Malik","Marouane","Marwan", "Mehdi","Mekki", "Messaoud","Mohamed","Mokhtar","Moncef","Mouley","Mounir","Mourad","Moussa","Mustapha","Mabrouka","Madiha","Maha","Mahbouba","Mahdia","Mahera","Maïssa","Majda","Majida","Malika","Manel","Mansoura","Mansouria","Maria","Maya","M&#39;Barka","Mellina","Meimouna","Meriem","Messaouda","Mordjane","Mordjana","Moufida","Mouna","Mounia","Mounira","Nabil","Nacer", "Nacer-Eddine","Nadim","Nadir","Nadji","Nadjib","Nahil","Naïm","Nassim","Nazim", "Nazir","Nouh", "Nourredine","Nabiha","Nabila","Nachida","Nacira","Nadia","Nadira","Nadjia","Nadjiba","Nadra","Nafissa","Nahla", "Naïla","Neïla", "Naïma","Najet","Nariman","Narjes","Nawel","Naziha","Nedjma","Nedjwa","Nezha","Nesrine","Nora","Noria","Noujoud","Nour","Nouzha","Omar","Okacha","Osmane","Othmane","Oussama","Ouardia","Oum El Kheir","Rabah","Rachid","Rafik","Rahal","Raïd","Rami","Ramzi","Raouf","Rayan","Razi", "Réda", "Redouane","Riad","Rochdi","Rostom","Rabia","Rabha","Racha","Rachida","Radia","Rafika","Rahima","Rahma","Rahifa","Raïda","Raihane","Raïssa", "Raja","Ratiba","Rawda","Razika","Riheb","Rima","Ryma","Rita","Rokia","Rosa","Sabri","Said","Salah","Salah Eddine","Salih","Salim","Sami","Samy", "Samir","Sayed","Seddik","Sofiane","Sabah","Sabiha","Sabrina","Sabriya","Sadika","Sadjia","Safa","Safia","Saïda","Sajida","Sakina","Saliha","Salima","Saloua","Samar","Samia","Samiha","Samira","Samra","Sana","Sania","Sara","Sarah","Sawsene","Siham","Selma","Sihame","Sofia","Soltana","Sonia","Soraya","Souad","Souhila","Soumia","Tahar","Tarek","Tarik","Tayeb","Tijani","Toufik","Tahani","Tahira","Tamara","Taous","Thania","Tania","Tlidja","Torkia","Tounes","Touraya","Walid","Wahid","Wassim","Wafa","Wahiba","Wahida","Walida","Warda","Wassila","Widad","Wissel","Yacine","Yassine","Yacoub","Yamine","Yanis","Yazid","Youcef","Younes","Yamina","Yasmina","Yasmine","Youmna","Yousra","Yakout","Zahir", "Zahid","Zahi","Zaïm","Zakaria","Zaki", "Ziad","Zine-Eddine","Zoubir","Zoheir","Zahia","Zahida","Zahra","Zahira","Zakia","Zanouba","Zayane","Zehouania","Zeïna","Zineb", "Zohra","Zoubida", "Zoulikha"]'/>
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
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
                                            <input class="form-control" type="text" id="require9" name="require9"/>
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="url2" class="control-label col-lg-4">Site Web</label>
                                            <div class=" col-lg-4">
                                                <div class="input-group">
                                                    <input value="http://" class="form-control" type="text" name="url2" id="url2" />
                                                    <span class="input-group-addon"><i class="fa fa-site"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label for="number_stg" class="control-label col-lg-4">Université</label>
                                            <div class=" col-lg-4">
                                            <select class="form-control chzn-select" tabindex="2" name ="Pays">
    
                                            <?php            
                                                $statement = $db->prepare('SELECT * FROM Université');
                                                $statement->execute();
                                                while($option = $statement->fetch()){ ?>
                                            <option value='<?php echo $option['Code'] ?>' ><?php echo $option['Nom_Fr']; ?></option>
                                                     <?php } }?>
                                                   
                                                   
                                            </select>
                                            </div>
                                        </div>                                      
                                        <div class="form-actions no-margin-bottom" style="text-align:center;">
                                 <input class="accordion-toggle minimize-box btn btn-primary btn-lg" type="submit" name="submit" value="Valider"/>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> </div></div>   
            </div></div>
                </section>
          <!--END PAGE CONTENT -->
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
    <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Bonjour ADPGR!',
            // (string | mandatory) the text inside the notification
            text: 'Bounjour monsieur, si vous vouler consulter l\'aide de l\'application <a href="PRO/HTML/ajouter_un_laboratoire.htm" target="_blank" style="color:#ffd777"><h7>help!</h7></a>',
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
     <!--END PAGE LEVEL SCRIPTS -->
     
</body>
     <!-- END BODY -->
</html>
