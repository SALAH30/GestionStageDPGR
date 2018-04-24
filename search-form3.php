<?php 
require('includes/config.php'); 
//if not logged in redirect to login page
if(!$user->is_logged_in() ){ header('Location: login.php'); }

//include_once("Database.php"); 
   function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   }

//-- -----------------------------------------------------
//-- INSERTION TABLE `Chercheur`.
//-- -----------------------------------------------------
            $db = data_base_connect ();
            
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="fr"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
      <meta charset="UTF-8" />
    <title>DPGR | Formulaire de chercheur</title>
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
        .wizard > .steps .error a, .wizard > .steps .error a:hover, .wizard > .steps .error a:active{
            outline: none;
        }
      </style>
      <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
            <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Afficher/Cacher Menu" id="afficher" onclick="if (this.id=='afficher') {document.querySelector('.chosen-container-single .chosen-single').style.width='690px';document.querySelector('.chosen-container-single .chosen-drop').style.width='690px';this.id='cacher';} else {$('#main-content').css('margin-left','232px');document.querySelector('.chosen-container-single .chosen-single').style.width='635px';document.querySelector('.chosen-container-single .chosen-drop').style.width='635px';this.id='afficher';}"></div>
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
                      <a href="accueil.php">
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
                          <li><a style="color:white;" href="search-form2.php#">Chercheur</a></li>
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
      
        <!--PAGE CONTENT -->

          <section id="main-content">
          <section class="wrapper">
        <div id="content">
           
                <div class="inner"  style="background-color:#F2F2F2;">
                 <?php $st=$db->prepare("SELECT * FROM Chercheur WHERE Code=".$_GET['cherch_code']);
            $st->execute();
            while($row=$st->fetch())
            { ?>
 <form method="post" action="chercheur_modif.php" id="form1" class="form-horizontal block-validate popup-validation">
                          <hr />
                    <div class="row">
                <div class="panel panel-primary" style="margin:0 70px 0 30px;">
                        <div class="panel-heading" style="font-size:28px;text-align:center;">
                            Le Chercheur
                        </div>
                        <div class="panel-body">
                            <div id="wizardV" >
                <h2>Personnel (Fr) </h2>
                <section>
                                        <input type="hidden" value="<?php echo $_GET['cherch_code']; ?>" class="form-control validate[required]" title=" " name="cherch_code" id="cherch_code">
                                        <div class="form-group">
                                            <label for="required1" class="control-label">Le nom</label>
                                                <div class="input-group">
                    <input type="text" id="required1" title=" " value="<?php echo $row['Nom_Fr']; ?>" name="required11" class="form-control" autofocus/>
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                </div>
                                        </div>
                               <div class="form-group">
                                            <label for="required2" class="control-label">Le prénom</label>
                                            <div class="input-group">
 <input type="text" id="required2" value="<?php echo $row['Prénom_Fr']; ?>" name="required21" class="validate[required,custom[name]] form-control" title=" " autocomplete="off" data-provide="typeahead" data-items="8" data-source='["Abdelwaheb","Abbès","abdallah","Abdechahid","Abdelaziz","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour", "Abdelghani","Abdelhadi","Abdelhak","Abdelhakim","Abdelhalim","Abdelkader","Abdelkarim","Abdellatif","Abdelmadjid","Abdelmalik","Abdelmoumen","Abdenour","Abderrahim","Abderrazek", "Abdessalem","Abdessatar","Abed","Abid","Abou Bakr", "Achik","Achir","Achour","Achraf","Adam","Adel","Adib","Adil","Adnane","Afdal","Ahmed", "Aissa", "Akli","Akmar","Alaeddine","Ali","Allal","Allaoua","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi", "Abdelhak", "Abdelhakim","Abdelhalim","Abdelkader","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi","Abdelhak", "Abdelhakim", "Abdelhalim","Abdelkader","Amar","Amine","Amir","Amjad","Anas","Anis","Anouar","Antar","Arsalane","Araslane","Assim","Assad","Atmane", "Ayachi", "Ayoub","Azhar","Azzam","Azziz","Azzouz","Abla","Abida","Achika","Achwak","Adiba","Adila","Adra","Afaf","Afia","Afifa","Afnane","Ahlem", "Aïcha","Aïda","Akila","Alia","Aliya","Amana", "Amaria","Amber","Amel","Amina","Amira","Amra","Anane","Angham","Anika","Anissa","Aouatif", "Awatif","Ariba","Asma","Asrar","Assia","Atefa", "Atifa", "Atika","Aya","Azhar","Aziza","Azza","Bachir","Badreddine","Bahi","Bakir", "Baligh", "Basile","Bassim","Belkacem","Bilal", "Boualem","Boubaker", "Boudjemaa","Boumedienne","Bouziane","Bouzid","Bachira","Bachra","Badia", "Badira","Badra","Bahia","Bahidja","Bahdja","Bakhta","Bariza","Basma","Baya","Bouchra","Bouthaïna","Chabane","Chafik","Chahid", "Chahine","Chaker", "Chakib","Chamseddine","Chawki","Chedli","Cheikh", "Cherif","Chokri","Camila","Kamila","Calaa","Cantara","Chadia","Chafia","Chafika", "Chahéra","Chahida","Chahinez","Chahra","Chahrazad","Chaïma","Chakira","Chakiba","Chama","Chérifa","Chirine","Chaza","Chourouk", "Daoud","Djafar","Djallel","Djallil","Djamel","Djamil","Djelloul","Djillali","Driss","Dalal","Dalia","Dalila","Deloula","Dawiya","Dehbia","Djamila","Djawida","Djohar","Dhohra","Dora","Douha","Douja","Dounia","Drifa","Elias","Emna","Esma","Fadel","Fadi","Fahd","Fahim","Fahmi","Fares","Farid", "Farouk","Fathi","Foudil","Fawzi","Fayçal","Ferhat","Fouad","Fadila","Fadia","Fahima","Fahmia","Faïha","Fairouz","Faiza","Farah","Farida","Faroudja","Faten","Fathia","Fatiha","Fatima","Fattouma","Fella","Feryel","Fitna","Fouzia","Gebril","Ghalib","Ghanem","Ghani","Ghazi","Gamra","Garmia","Ghada","Ghalia","Ghania","Gh&#39;zala","Ghizlène","Habib","Hachem","Hadi","Hadj", "Hafid","Hafs","Haider","Hakim","Halim","Hamdane","Hamid", "Hamza","Hani", "Haroun","Hassen","Hatim","Hichem","Hikmet","Hilal","Hocine", "Houari","Houd","Habiba","Hacina","Hadda","Hadia","Hadja","Hadjar", "Hadjira","Hafida","Hafsa","Hakima","Hala","Halima","Hamida","Hanane","Hania","Hanifa","Hanna","Hasna","Hassiba","Hayet","Hawa","Haoua","Hébara","Hiba","Hind","Hosnia","Houda","Houria", "Ibrahim","Idriss","Ikhlas","Ilian","Ilyes","Ishak","Islem","Ismaïl","Ismet","Ismahen","Ibtissem", "Ihcène", "Iklil","Ilhem","Imane","Ines","Insaf","Intisar","Izdihar","Ikram","Jabar","Jaber","Jahid","Djahid","Jawed","Joudi","Jounaidi","Jahida","Djahida","Jalila","Jawed","Jawida","Jazia","Djazia","Johar","Joumana","Kamel", "Kaci", "Kader","Karim","Khaldoun","Khaled","Khalil","Kheireddine", "Kamir", "Kahina","Kamar","Kamelia","Kamila","Karima","Kawtar","Keltoum","Kenza","Kewkeb","Khadidja","Khadra","Khalida","Kheira","Kinda", "Lamine", "Lakhdar","Larbi", "Lotfi","Lounès","Lout","Lilya","Lamia","Lalla","Lebiba","Latifa","Leila","Lilia","Lina","Linda","Loubna","Louisa", "Loundja", "Loutfia","Maamar","Maarouf","Mabrouk", "Madani", "Mahboub","Mahfoud","Mahmoud","Makhlouf","Malek", "Malik","Marouane","Marwan", "Mehdi","Mekki", "Messaoud","Mohamed","Mokhtar","Moncef","Mouley","Mounir","Mourad","Moussa","Mustapha","Mabrouka","Madiha","Maha","Mahbouba","Mahdia","Mahera","Maïssa","Majda","Majida","Malika","Manel","Mansoura","Mansouria","Maria","Maya","M&#39;Barka","Mellina","Meimouna","Meriem","Messaouda","Mordjane","Mordjana","Moufida","Mouna","Mounia","Mounira","Nabil","Nacer", "Nacer-Eddine","Nadim","Nadir","Nadji","Nadjib","Nahil","Naïm","Nassim","Nazim", "Nazir","Nouh", "Nourredine","Nabiha","Nabila","Nachida","Nacira","Nadia","Nadira","Nadjia","Nadjiba","Nadra","Nafissa","Nahla", "Naïla","Neïla", "Naïma","Najet","Nariman","Narjes","Nawel","Naziha","Nedjma","Nedjwa","Nezha","Nesrine","Nora","Noria","Noujoud","Nour","Nouzha","Omar","Okacha","Osmane","Othmane","Oussama","Ouardia","Oum El Kheir","Rabah","Rachid","Rafik","Rahal","Raïd","Rami","Ramzi","Raouf","Rayan","Razi", "Réda", "Redouane","Riad","Rochdi","Rostom","Rabia","Rabha","Racha","Rachida","Radia","Rafika","Rahima","Rahma","Rahifa","Raïda","Raihane","Raïssa", "Raja","Ratiba","Rawda","Razika","Riheb","Rima","Ryma","Rita","Rokia","Rosa","Sabri","Said","Salah","Salah Eddine","Salih","Salim","Sami","Samy", "Samir","Sayed","Seddik","Sofiane","Sabah","Sabiha","Sabrina","Sabriya","Sadika","Sadjia","Safa","Safia","Saïda","Sajida","Sakina","Saliha","Salima","Saloua","Samar","Samia","Samiha","Samira","Samra","Sana","Sania","Sara","Sarah","Sawsene","Siham","Selma","Sihame","Sofia","Soltana","Sonia","Soraya","Souad","Souhila","Soumia","Tahar","Tarek","Tarik","Tayeb","Tijani","Toufik","Tahani","Tahira","Tamara","Taous","Thania","Tania","Tlidja","Torkia","Tounes","Touraya","Walid","Wahid","Wassim","Wafa","Wahiba","Wahida","Walida","Warda","Wassila","Widad","Wissel","Yacine","Yassine","Yacoub","Yamine","Yanis","Yazid","Youcef","Younes","Yamina","Yasmina","Yasmine","Youmna","Yousra","Yakout","Zahir", "Zahid","Zahi","Zaïm","Zakaria","Zaki", "Ziad","Zine-Eddine","Zoubir","Zoheir","Zahia","Zahida","Zahra","Zahira","Zakia","Zanouba","Zayane","Zehouania","Zeïna","Zineb", "Zohra","Zoubida", "Zoulikha"]'/>
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                </div>
                                        </div>
                                <div class="form-group">
                                            <label for="required6" class="control-label">Prénom du père</label>
                                            <div class="input-group">
 <input type="text" id="required6" value="<?php echo $row['Prénom_Père_Fr']; ?>" autocomplete="off" name="required61" class="form-control" data-provide="typeahead" data-items="8" data-source='["Abdelwaheb","Abbès","abdallah","Abdechahid","Abdelaziz","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour", "Abdelghani","Abdelhadi","Abdelhak","Abdelhakim","Abdelhalim","Abdelkader","Abdelkarim","Abdellatif","Abdelmadjid","Abdelmalik","Abdelmoumen","Abdenour","Abderrahim","Abderrazek", "Abdessalem","Abdessatar","Abed","Abid","Abou Bakr", "Achik","Achir","Achour","Achraf","Adam","Adel","Adib","Adil","Adnane","Afdal","Ahmed", "Aissa", "Akli","Akmar","Alaeddine","Ali","Allal","Allaoua","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi", "Abdelhak", "Abdelhakim","Abdelhalim","Abdelkader","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi","Abdelhak", "Abdelhakim", "Abdelhalim","Abdelkader","Amar","Amine","Amir","Amjad","Anas","Anis","Anouar","Antar","Arsalane","Araslane","Assim","Assad","Atmane", "Ayachi", "Ayoub","Azhar","Azzam","Azziz","Azzouz","Bachir","Badreddine","Bahi","Bakir", "Baligh", "Basile","Bassim","Belkacem","Bilal", "Boualem","Boubaker", "Boudjemaa","Boumedienne","Bouziane","Bouzid","Chabane","Chafik","Chahid", "Chahine","Chaker", "Chakib","Chamseddine","Chawki","Chedli","Cheikh", "Cherif","Chokri", "Daoud","Djafar","Djallel","Djallil","Djamel","Djamil","Djelloul","Djillali","Driss","Elias","Fadel","Fadi","Fahd","Fahim","Fahmi","Fares","Farid", "Farouk","Fathi","Foudil","Fawzi","Fayçal","Ferhat","Fouad","Gebril","Ghalib","Ghanem","Ghani","Ghazi","Habib","Hachem","Hadi","Hadj", "Hafid","Hafs","Haider","Hakim","Halim","Hamdane","Hamid", "Hamza","Hani", "Haroun","Hassen","Hatim","Hichem","Hikmet","Hilal","Hocine", "Houari","Houd", "Ibrahim","Idriss","Ikhlas","Ilian","Ilyes","Ishak","Islem","Ismaïl","Ismet","Jabar","Jaber","Jahid","Djahid","Jawed","Kamel", "Kaci", "Kader","Karim","Khaldoun","Khaled","Khalil","Kheireddine", "Kamir", "Lamine", "Lakhdar","Larbi", "Lotfi","Lounès","Lout","Maamar","Maarouf","Mabrouk", "Madani", "Mahboub","Mahfoud","Mahmoud","Makhlouf","Malek", "Malik","Marouane","Marwan", "Mehdi","Mekki", "Messaoud","Mohamed","Mokhtar","Moncef","Mouley","Mounir","Mourad","Moussa","Mustapha","Nabil","Nacer", "Nacer-Eddine","Nadim","Nadir","Nadji","Nadjib","Nahil","Naïm","Nassim","Nazim", "Nazir","Nouh", "Nourredine","Omar","Okacha","Osmane","Othmane","Oussama","Rabah","Rachid","Rafik","Rahal","Raïd","Rami","Ramzi","Raouf","Rayan","Razi", "Réda", "Redouane","Riad","Rochdi","Rostom","Rabia","Rabha","Racha","Rachida","Radia","Sabri","Said","Salah","Salah Eddine","Salih","Salim","Sami","Samy", "Samir","Sayed","Seddik","Sofiane","Tahar","Tarek","Tarik","Tayeb","Tijani","Toufik","Walid","Wahid","Wassim","Yacine","Yassine","Yacoub","Yamine","Yanis","Yazid","Youcef","Younes","Zahir", "Zahid","Zahi","Zaïm","Zakaria","Zaki", "Ziad","Zine-Eddine","Zoubir","Zoheir"]'/>
                                            <span class="input-group-addon"><i class="fa fa-user-d"></i></span>
                                                </div>
                                        </div>  
                    <div class="form-group">
                        <label for="required8" class="control-label">Date de naissance</label>
                            <div class="input-group">
                                <input class="form-control" value="<?php echo $row['Date_Naissance']; ?>" type="text" data-mask="99/99/9999" id="required8" name="required81"/>
                                <div class="input-group-addon">10/10/2010</div>
                            </div>
                    </div>
                    
                </section>

                <h2>Personnel (Ar)</h2>
                <section>
                                        <div class="form-group">
                                    <label for="required4"style="font-size: 20px;" class="control-label col-lg-12">اللقب</label>
                                            <div class="arab">
                                                <div class="input-group">
                                                <span class="input-group-addon"><i style="width:15px;" class="fa fa-user"></i></span>
                     <input dir="rtl" lang="ar" value="<?php echo $row['Nom_Ar']; ?>" type="text" title=" " id="required4" name="required41" class="form-control"/>
                                                </div>
                                             </div> 
                                         </div>
                                         <div class="form-group">
                                        <div class="arab">
                                        <label for="required5"style="font-size: 20px;" class="control-label col-lg-12">الاسم</label> 
                                        <div class="input-group">
                                            <span class="input-group-addon"><i style="width:15px;" class="fa fa-user"></i></span>
                                            <input dir="rtl" lang="ar" value="<?php echo $row['Prénom_Ar']; ?>" autocomplete="off" type="text" id="required5" name="required51" class="form-control" title=" " data-provide="typeahead" data-items="8" data-source='["صلاح الدين","فضيل","خليل","وليد","عبد الحق","إبراهيم","أحمد","إدريس","إسحاق","إسماعيل","أيوب","يعقوب","عيسى","يونس","هارون","جبريل","داوود","رزق","رضوان","زكرياء","يحيى","إلياس","زيد","سليمان","صالح","عمران","لقمان","محمد","موسى","نوح","هارون","هود","ياسين","يعقوب","يوسف","يونس","آصال","آلاء","آيات","إيمان","بشرى","بهجة","تمام","حياة","دانية","دعاء","زكية","زهرة","سبأ","ضحى","ضياء","عالية","فداء","فرات","فردوس","كاملة","كوثر","هاجر","هدى", "يسرى","سجى","سلسبيل" ,"شهد","جنى","أمل","آمال","إيناس","أفكار","ابتهال","إنصاف","أضواء","أرجوان","أبرار","أهداب","إسراء","أسرار","إبتهاج","أروى","أريج","أفراح","أحلام","أفنان","ألطاف","إيلاف","أسمهان","إنتصار","إنشراح","أشواق","إشراق","أنهار","إبهار"]'/>
                                             </div>
                                             </div>
                                        </div>
                                    <div class="form-group">
                                         <label for="required7"style="font-size: 20px;" class="control-label col-lg-12">اسم الأب</label> 
                                            <div class="arab">
                                            <div class="input-group">
                                                <span class="input-group-addon"><i style="width:15px;" class="fa fa-user-d"></i></span>
 <input dir="rtl" lang="ar" value="<?php echo $row['Prénom_Père_Ar']; ?>" autocomplete="off" type="text" id="required7" name="required71" class="form-control" data-provide="typeahead" data-items="3" data-source='["صلاح الدين","فضيل","خليل","وليد","عبد الحق","إبراهيم","أحمد","إدريس","إسحاق","إسماعيل","أيوب","يعقوب","عيسى","يونس","هارون","جبريل","داوود","رزق","رضوان","زكرياء","يحيى","إلياس","زيد","سليمان","صالح","عمران","لقمان","محمد","موسى","نوح","هارون","هود","ياسين","يعقوب","يوسف","يونس"]'/>
                                            </div>
                                            </div>
                                        </div></br>
                                        <div class="form-group">
                                            <input type="hidden" name="r31" value="Masculin" id="btn-input"/>
                                            <div class="btn-group" data-toggle="buttons">
                                            <label style="margin-left:170px;font-size: 20px;" class="btn btn-primary">
                                              <input type="radio" name="r31" value="Féminin" id="option2" <?php if($row['Sexe']=="Féminin") {?> checked <?php } ?>/>
                                                أنثى
                                            </label>
                                            <label style="margin-left:170px;font-size: 20px;" class="btn btn-primary active">
                                              <input type="radio" name="r31" value="Masculin" id="option1" <?php if($row['Sexe']=="Masculin") {?> checked <?php } ?>/>
                                                ذكر
                                            </label>
                                            <label style="margin-left:120px;font-size: 20px;" class="control-label col-lg-1">الجنس</label>
                                            </div>
                                        </div>
                 </section>
                <h2>Extra</h2>
                <section>
                        <div class="form-group">
                            <label class="control-label">Etat civile</label>
                                <select name="Civil1" class="validate[required] form-control">
                                <option value="Marié" <?php if($row['Etat_Civil']=="Marié") {?> selected <?php } ?>>Marié</option>
                                <option value="Célébataire" <?php if($row['Etat_Civil']=="Célébataire") {?> selected <?php } ?> >Célébataire</option>
                                <option value="Veuf" <?php if($row['Etat_Civil']=="Veuf") {?> selected <?php } ?>>Veuf</option>
                                <option value="Divorcé" <?php if($row['Etat_Civil']=="Divorcé") {?> selected <?php } ?>>Divorcé</option></select>
                        </div>
                           <div class="form-group">
                        <label for="required9" class="control-label">Téléphone</label>
                            <div class="input-group">
                                <input class="form-control" value="<?php echo $row['Tél']; ?>" type="text" id="required9" name="required91"/>
                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            </div>
                    </div>
                                        <div class="form-group">
                                            <label for="email2" class="control-label">Email</label>
                                            <div class="input-group">
                                                <input type="email" value="<?php echo $row['Email']; ?>" id="email2" name="email21" class="form-control" />
                                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            </div>
                                        </div>  
                                         <div class="form-group">
                                            <label for="digits" class="control-label">Laboratoire Désignation</label>
                                                <div class="input-group">  
                                                  <select class='form-control chzn-select' tabindex='2' name ='Laboratoire_Code1'><?php $statement = $db->prepare('SELECT * FROM Laboratoire');$statement->execute();while($option = $statement->fetch()){ ?><option value='<?php echo $option['Code'] ?>' <?php if($option['Code']==$row['Laboratoire_Code']){ ?> selected <?php } ?> ><?php echo $option['Désignation'];?></option><?php } ?></select>
                                                </div>
                                             <!--    <span class="help-block">Le code de laboratoire</span>-->
                                            </div>                                      
                </section>
  <?php } ?>
                
                <?php $st=$db->prepare("SELECT * FROM Chercheur JOIN Enseignant WHERE Enseignant.Chercheur_Code=Chercheur.Code AND Chercheur.Code=".$_GET['cherch_code']);
            $st->execute();
            while($row=$st->fetch())
            { ?>
<h2>Les Informations de l'Enseignant </h2>
<section>
<div class='form-group'>
<label class='control-label'>L'université</label>
<select class='form-control chzn-select' tabindex='2' name ='Pays1'><?php $statement = $db->prepare('SELECT * FROM Université');$statement->execute();while($option = $statement->fetch()){ ?>
<option value='<?php echo $option['Code'] ?>'> <?php echo $option['Nom_Fr'];?></option><?php } ?>
</select>
</div>
<div class='form-group'>
<label for='req' class='control-label'>Le grade</label>
<input type='text' class='form-control' value="<?php echo $row['Grade']; ?>" name='req1111' id='req'  data-source= '["Vacataire","Professeur","Maître de conférence A","Maître assistant A","Maître de conférence B","Maître assistant B"]' autocomplete='off' data-provide='typeahead' data-items='5'>
</div>
<div class='form-group'>
<label for='req1' class='control-label'>La spécialité</label>
<input type='text' value="<?php echo $row['Spécialité']; ?>" class='form-control validate[required]' title=' ' name='req111' id='req1' data-source= '["Analyse","Algébre","Eléctronique","Mécanique","Informatique","Economie","Bureautique","Assembleur","Eléctricité","Architecture","Anglais","Français","Logique mathématique","Optique","Programmation orientée objet","Système d&acute;information","Système d&acute;exploitation","Réseau","Sécurité","Propabilité et statistique"]' autocomplete='off' data-provide='typeahead' data-items='5'>
</div>
<div class='form-group'>
<label for='sport' class='control-label'>Nature</label>
<select name='sport1' id='sport' class='validate[required] form-control'>
<option value='Permanent' <?php if($row['Nature']=='Permanent') { ?> selected <?php } ?>>Permanent</option>
<option value='Vacataire' <?php if($row['Nature']=='Vacataire') { ?> selected <?php } ?>>Vacataire</option>
<option value='Associé' <?php if($row['Nature']=='Associé') { ?> selected <?php } ?>>Associé</option>
</select>
</div>
               </section>
                <h2>Les Dates Appropriées</h2>
                <section><br /> <br /><br />
<div class='form-group'>
<label class='control-label' for='dp3'>Date de recrutement</label>
<div class='input-group'>
<input type='text' value="<?php echo $row['Date_Recrutement']; ?>" class='validate[required,custom[date]] form-control' value='14/03/2012' name='dp31' id='dp3' />
<span class='input-group-addon'>
<i class='fa fa-calendar'></i>
</span>
</div>
</div>
<br /> <br /> <br />
<div class='form-group'>
<label class='control-label' for='dp2'>Date de nomination</label>
<div class='input-group'>
<input type='text' value="<?php echo $row['Date_Nomination']; ?>" class='validate[required,custom[date]] form-control' value='24/05/2013' name='dp21' id='dp2'/>
<span class='input-group-addon'>
<i class='fa fa-calendar'></i>
</span>
</div>
</div>
  </section>                                       
                    <?php } ?>
                
  <?php $st=$db->prepare("SELECT * FROM Chercheur JOIN Doctorant WHERE Doctorant.Chercheur_Code=Chercheur.Code AND Chercheur.Code=".$_GET['cherch_code']);
            $st->execute();
            while($row=$st->fetch())
            { ?>
          <h2>Les Informations de Doctorant</h2>
                <section>
 <div class="form-group">
 <label for="requis3" class="control-label">Diplôme de base</label>
 <input type="text" value="<?php echo $row['Diplome_Base']; ?>" class="form-control validate[required]" title=" " name="requis31" required id="requis3">
 </div>
 <div class="form-group">
 <label for="requis4" class="control-label">Diplôme à préparer</label>
 <input type="text" value="<?php echo $row['Diplome_Préparé']; ?>" class="form-control validate[required]" title=" " name="requis41" required id="requis4">
 </div>
 <div class="form-group">
 <label class="control-label" for="dp1">Date d'inscription</label>
 <div class="input-group">
 <input type="text" value="<?php echo $row['Date_Inscription']; ?>" class="form-control" value="11/02/2012" name="dp11" id="dp1"/>
 <span class="input-group-addon">
 <i class="fa fa-calendar"></i>
 </span>
 </div>
 </div>
 <div class="form-group">
 <label for="req5" class="control-label">Sujet de Thèse</label>
 <input type="text" value="<?php echo $row['Sujet_Thèse']; ?>" class="form-control"  name="req51" id="req5">
 </div>
               </section>
                <h2>Encadreur</h2>
                <section>
<div class="form-group">
<label for="req6" class="control-label">Nom de l'Encadreur</label>
<div class="input-group">
<input type="text" value="<?php echo $row['Nom_Encadreur']; ?>" class="form-control validate[custom[name]]" title=" " name="req61" id="req6">
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
</div>
</div>
<div class="form-group">
<label for="req7" class="control-label">Prénom de l'Encadreur</label>
<div class="input-group">
<input type="text" value="<?php echo $row['Prénom_Encadreur']; ?>" autocomplete="off" class="form-control validate[custom[name]]" title=" " name="req71" id="req7" data-provide="typeahead" data-items="8" data-source=\'["Abdelwaheb","Abbès","abdallah","Abdechahid","Abdelaziz","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour", "Abdelghani","Abdelhadi","Abdelhak","Abdelhakim","Abdelhalim","Abdelkader","Abdelkarim","Abdellatif","Abdelmadjid","Abdelmalik","Abdelmoumen","Abdenour","Abderrahim","Abderrazek", "Abdessalem","Abdessatar","Abed","Abid","Abou Bakr", "Achik","Achir","Achour","Achraf","Adam","Adel","Adib","Adil","Adnane","Afdal","Ahmed", "Aissa", "Akli","Akmar","Alaeddine","Ali","Allal","Allaoua","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi", "Abdelhak", "Abdelhakim","Abdelhalim","Abdelkader","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi","Abdelhak", "Abdelhakim", "Abdelhalim","Abdelkader","Amar","Amine","Amir","Amjad","Anas","Anis","Anouar","Antar","Arsalane","Araslane","Assim","Assad","Atmane", "Ayachi", "Ayoub","Azhar","Azzam","Azziz","Azzouz","Abla","Abida","Achika","Achwak","Adiba","Adila","Adra","Afaf","Afia","Afifa","Afnane","Ahlem", "Aïcha","Aïda","Akila","Alia","Aliya","Amana", "Amaria","Amber","Amel","Amina","Amira","Amra","Anane","Angham","Anika","Anissa","Aouatif", "Awatif","Ariba","Asma","Asrar","Assia","Atefa", "Atifa", "Atika","Aya","Azhar","Aziza","Azza","Bachir","Badreddine","Bahi","Bakir", "Baligh", "Basile","Bassim","Belkacem","Bilal", "Boualem","Boubaker", "Boudjemaa","Boumedienne","Bouziane","Bouzid","Bachira","Bachra","Badia", "Badira","Badra","Bahia","Bahidja","Bahdja","Bakhta","Bariza","Basma","Baya","Bouchra","Bouthaïna","Chabane","Chafik","Chahid", "Chahine","Chaker", "Chakib","Chamseddine","Chawki","Chedli","Cheikh", "Cherif","Chokri","Camila","Kamila","Calaa","Cantara","Chadia","Chafia","Chafika", "Chahéra","Chahida","Chahinez","Chahra","Chahrazad","Chaïma","Chakira","Chakiba","Chama","Chérifa","Chirine","Chaza","Chourouk", "Daoud","Djafar","Djallel","Djallil","Djamel","Djamil","Djelloul","Djillali","Driss","Dalal","Dalia","Dalila","Deloula","Dawiya","Dehbia","Djamila","Djawida","Djohar","Dhohra","Dora","Douha","Douja","Dounia","Drifa","Elias","Emna","Esma","Fadel","Fadi","Fahd","Fahim","Fahmi","Fares","Farid", "Farouk","Fathi","Foudil","Fawzi","Fayçal","Ferhat","Fouad","Fadila","Fadia","Fahima","Fahmia","Faïha","Fairouz","Faiza","Farah","Farida","Faroudja","Faten","Fathia","Fatiha","Fatima","Fattouma","Fella","Feryel","Fitna","Fouzia","Gebril","Ghalib","Ghanem","Ghani","Ghazi","Gamra","Garmia","Ghada","Ghalia","Ghania","Gh&#39;zala","Ghizlène","Habib","Hachem","Hadi","Hadj", "Hafid","Hafs","Haider","Hakim","Halim","Hamdane","Hamid", "Hamza","Hani", "Haroun","Hassen","Hatim","Hichem","Hikmet","Hilal","Hocine", "Houari","Houd","Habiba","Hacina","Hadda","Hadia","Hadja","Hadjar", "Hadjira","Hafida","Hafsa","Hakima","Hala","Halima","Hamida","Hanane","Hania","Hanifa","Hanna","Hasna","Hassiba","Hayet","Hawa","Haoua","Hébara","Hiba","Hind","Hosnia","Houda","Houria", "Ibrahim","Idriss","Ikhlas","Ilian","Ilyes","Ishak","Islem","Ismaïl","Ismet","Ismahen","Ibtissem", "Ihcène", "Iklil","Ilhem","Imane","Ines","Insaf","Intisar","Izdihar","Ikram","Jabar","Jaber","Jahid","Djahid","Jawed","Joudi","Jounaidi","Jahida","Djahida","Jalila","Jawed","Jawida","Jazia","Djazia","Johar","Joumana","Kamel", "Kaci", "Kader","Karim","Khaldoun","Khaled","Khalil","Kheireddine", "Kamir", "Kahina","Kamar","Kamelia","Kamila","Karima","Kawtar","Keltoum","Kenza","Kewkeb","Khadidja","Khadra","Khalida","Kheira","Kinda", "Lamine", "Lakhdar","Larbi", "Lotfi","Lounès","Lout","Lilya","Lamia","Lalla","Lebiba","Latifa","Leila","Lilia","Lina","Linda","Loubna","Louisa", "Loundja", "Loutfia","Maamar","Maarouf","Mabrouk", "Madani", "Mahboub","Mahfoud","Mahmoud","Makhlouf","Malek", "Malik","Marouane","Marwan", "Mehdi","Mekki", "Messaoud","Mohamed","Mokhtar","Moncef","Mouley","Mounir","Mourad","Moussa","Mustapha","Mabrouka","Madiha","Maha","Mahbouba","Mahdia","Mahera","Maïssa","Majda","Majida","Malika","Manel","Mansoura","Mansouria","Maria","Maya","M&#39;Barka","Mellina","Meimouna","Meriem","Messaouda","Mordjane","Mordjana","Moufida","Mouna","Mounia","Mounira","Nabil","Nacer", "Nacer-Eddine","Nadim","Nadir","Nadji","Nadjib","Nahil","Naïm","Nassim","Nazim", "Nazir","Nouh", "Nourredine","Nabiha","Nabila","Nachida","Nacira","Nadia","Nadira","Nadjia","Nadjiba","Nadra","Nafissa","Nahla", "Naïla","Neïla", "Naïma","Najet","Nariman","Narjes","Nawel","Naziha","Nedjma","Nedjwa","Nezha","Nesrine","Nora","Noria","Noujoud","Nour","Nouzha","Omar","Okacha","Osmane","Othmane","Oussama","Ouardia","Oum El Kheir","Rabah","Rachid","Rafik","Rahal","Raïd","Rami","Ramzi","Raouf","Rayan","Razi", "Réda", "Redouane","Riad","Rochdi","Rostom","Rabia","Rabha","Racha","Rachida","Radia","Rafika","Rahima","Rahma","Rahifa","Raïda","Raihane","Raïssa", "Raja","Ratiba","Rawda","Razika","Riheb","Rima","Ryma","Rita","Rokia","Rosa","Sabri","Said","Salah","Salah Eddine","Salih","Salim","Sami","Samy", "Samir","Sayed","Seddik","Sofiane","Sabah","Sabiha","Sabrina","Sabriya","Sadika","Sadjia","Safa","Safia","Saïda","Sajida","Sakina","Saliha","Salima","Saloua","Samar","Samia","Samiha","Samira","Samra","Sana","Sania","Sara","Sarah","Sawsene","Siham","Selma","Sihame","Sofia","Soltana","Sonia","Soraya","Souad","Souhila","Soumia","Tahar","Tarek","Tarik","Tayeb","Tijani","Toufik","Tahani","Tahira","Tamara","Taous","Thania","Tania","Tlidja","Torkia","Tounes","Touraya","Walid","Wahid","Wassim","Wafa","Wahiba","Wahida","Walida","Warda","Wassila","Widad","Wissel","Yacine","Yassine","Yacoub","Yamine","Yanis","Yazid","Youcef","Younes","Yamina","Yasmina","Yasmine","Youmna","Yousra","Yakout","Zahir", "Zahid","Zahi","Zaïm","Zakaria","Zaki", "Ziad","Zine-Eddine","Zoubir","Zoheir","Zahia","Zahida","Zahra","Zahira","Zakia","Zanouba","Zayane","Zehouania","Zeïna","Zineb", "Zohra","Zoubida", "Zoulikha"]\'>
<span class="input-group-addon">
<i class="fa fa-user"></i>
</span>
</div>
</div>
<div class="form-group">
<label for="req81" class="control-label">Grade de l'Encadreur</label>
<input type="text" value="<?php echo $row['Grade_Encadreur']; ?>" class="form-control" title=" " name="req81" id="req81" data-source= '["Vacataire","Professeur","Maître de conférence A","Maître assistant A","Maître de conférence B","Maître assistant B"]' autocomplete="off" data-provide="typeahead" data-items="3">
</div>
<div class="form-group">
<label for="req91" class="control-label">Etablissement de l'Encadreur</label>
<div class="input-group">
<input type="text" value="<?php echo $row['Etablissement_Encadreur']; ?>" class="form-control" title=" " name="req91" id="req91">
<span class="input-group-addon">
<i class="fa fa-building"></i>
</span>
</div>
</div> 
               </section>
          <h2>Co Encadreur</h2>
                <section>
 <div class="form-group">
 <label for="req101" class="control-label">Nom de Co Encadreur</label>
 <div class="input-group">
 <input type="text" value="<?php echo $row['Nom_Co_Encadreur']; ?>" class="form-control" name="req101" id="req101">
 <span class="input-group-addon">
 <i class="fa fa-user"></i>
 </span>
 </div>
 </div>
 <div class="form-group">
 <label for="req11" class="control-label">Prénom de Co Encadreur</label>
 <div class="input-group">
 <input type="text" value="<?php echo $row['Prénom_Co_Encadreur']; ?>" autocomplete="off" class="form-control" name="req11" id="req11" data-provide="typeahead" data-items="8" data-source=\'["Abdelwaheb","Abbès","abdallah","Abdechahid","Abdelaziz","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour", "Abdelghani","Abdelhadi","Abdelhak","Abdelhakim","Abdelhalim","Abdelkader","Abdelkarim","Abdellatif","Abdelmadjid","Abdelmalik","Abdelmoumen","Abdenour","Abderrahim","Abderrazek", "Abdessalem","Abdessatar","Abed","Abid","Abou Bakr", "Achik","Achir","Achour","Achraf","Adam","Adel","Adib","Adil","Adnane","Afdal","Ahmed", "Aissa", "Akli","Akmar","Alaeddine","Ali","Allal","Allaoua","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi", "Abdelhak", "Abdelhakim","Abdelhalim","Abdelkader","Abdelbassir","Abdeldjalil","Abdelfettah","Abdelghafour","Abdelghani","Abdelhadi","Abdelhak", "Abdelhakim", "Abdelhalim","Abdelkader","Amar","Amine","Amir","Amjad","Anas","Anis","Anouar","Antar","Arsalane","Araslane","Assim","Assad","Atmane", "Ayachi", "Ayoub","Azhar","Azzam","Azziz","Azzouz","Abla","Abida","Achika","Achwak","Adiba","Adila","Adra","Afaf","Afia","Afifa","Afnane","Ahlem", "Aïcha","Aïda","Akila","Alia","Aliya","Amana", "Amaria","Amber","Amel","Amina","Amira","Amra","Anane","Angham","Anika","Anissa","Aouatif", "Awatif","Ariba","Asma","Asrar","Assia","Atefa", "Atifa", "Atika","Aya","Azhar","Aziza","Azza","Bachir","Badreddine","Bahi","Bakir", "Baligh", "Basile","Bassim","Belkacem","Bilal", "Boualem","Boubaker", "Boudjemaa","Boumedienne","Bouziane","Bouzid","Bachira","Bachra","Badia", "Badira","Badra","Bahia","Bahidja","Bahdja","Bakhta","Bariza","Basma","Baya","Bouchra","Bouthaïna","Chabane","Chafik","Chahid", "Chahine","Chaker", "Chakib","Chamseddine","Chawki","Chedli","Cheikh", "Cherif","Chokri","Camila","Kamila","Calaa","Cantara","Chadia","Chafia","Chafika", "Chahéra","Chahida","Chahinez","Chahra","Chahrazad","Chaïma","Chakira","Chakiba","Chama","Chérifa","Chirine","Chaza","Chourouk", "Daoud","Djafar","Djallel","Djallil","Djamel","Djamil","Djelloul","Djillali","Driss","Dalal","Dalia","Dalila","Deloula","Dawiya","Dehbia","Djamila","Djawida","Djohar","Dhohra","Dora","Douha","Douja","Dounia","Drifa","Elias","Emna","Esma","Fadel","Fadi","Fahd","Fahim","Fahmi","Fares","Farid", "Farouk","Fathi","Foudil","Fawzi","Fayçal","Ferhat","Fouad","Fadila","Fadia","Fahima","Fahmia","Faïha","Fairouz","Faiza","Farah","Farida","Faroudja","Faten","Fathia","Fatiha","Fatima","Fattouma","Fella","Feryel","Fitna","Fouzia","Gebril","Ghalib","Ghanem","Ghani","Ghazi","Gamra","Garmia","Ghada","Ghalia","Ghania","Gh&#39;zala","Ghizlène","Habib","Hachem","Hadi","Hadj", "Hafid","Hafs","Haider","Hakim","Halim","Hamdane","Hamid", "Hamza","Hani", "Haroun","Hassen","Hatim","Hichem","Hikmet","Hilal","Hocine", "Houari","Houd","Habiba","Hacina","Hadda","Hadia","Hadja","Hadjar", "Hadjira","Hafida","Hafsa","Hakima","Hala","Halima","Hamida","Hanane","Hania","Hanifa","Hanna","Hasna","Hassiba","Hayet","Hawa","Haoua","Hébara","Hiba","Hind","Hosnia","Houda","Houria", "Ibrahim","Idriss","Ikhlas","Ilian","Ilyes","Ishak","Islem","Ismaïl","Ismet","Ismahen","Ibtissem", "Ihcène", "Iklil","Ilhem","Imane","Ines","Insaf","Intisar","Izdihar","Ikram","Jabar","Jaber","Jahid","Djahid","Jawed","Joudi","Jounaidi","Jahida","Djahida","Jalila","Jawed","Jawida","Jazia","Djazia","Johar","Joumana","Kamel", "Kaci", "Kader","Karim","Khaldoun","Khaled","Khalil","Kheireddine", "Kamir", "Kahina","Kamar","Kamelia","Kamila","Karima","Kawtar","Keltoum","Kenza","Kewkeb","Khadidja","Khadra","Khalida","Kheira","Kinda", "Lamine", "Lakhdar","Larbi", "Lotfi","Lounès","Lout","Lilya","Lamia","Lalla","Lebiba","Latifa","Leila","Lilia","Lina","Linda","Loubna","Louisa", "Loundja", "Loutfia","Maamar","Maarouf","Mabrouk", "Madani", "Mahboub","Mahfoud","Mahmoud","Makhlouf","Malek", "Malik","Marouane","Marwan", "Mehdi","Mekki", "Messaoud","Mohamed","Mokhtar","Moncef","Mouley","Mounir","Mourad","Moussa","Mustapha","Mabrouka","Madiha","Maha","Mahbouba","Mahdia","Mahera","Maïssa","Majda","Majida","Malika","Manel","Mansoura","Mansouria","Maria","Maya","M&#39;Barka","Mellina","Meimouna","Meriem","Messaouda","Mordjane","Mordjana","Moufida","Mouna","Mounia","Mounira","Nabil","Nacer", "Nacer-Eddine","Nadim","Nadir","Nadji","Nadjib","Nahil","Naïm","Nassim","Nazim", "Nazir","Nouh", "Nourredine","Nabiha","Nabila","Nachida","Nacira","Nadia","Nadira","Nadjia","Nadjiba","Nadra","Nafissa","Nahla", "Naïla","Neïla", "Naïma","Najet","Nariman","Narjes","Nawel","Naziha","Nedjma","Nedjwa","Nezha","Nesrine","Nora","Noria","Noujoud","Nour","Nouzha","Omar","Okacha","Osmane","Othmane","Oussama","Ouardia","Oum El Kheir","Rabah","Rachid","Rafik","Rahal","Raïd","Rami","Ramzi","Raouf","Rayan","Razi", "Réda", "Redouane","Riad","Rochdi","Rostom","Rabia","Rabha","Racha","Rachida","Radia","Rafika","Rahima","Rahma","Rahifa","Raïda","Raihane","Raïssa", "Raja","Ratiba","Rawda","Razika","Riheb","Rima","Ryma","Rita","Rokia","Rosa","Sabri","Said","Salah","Salah Eddine","Salih","Salim","Sami","Samy", "Samir","Sayed","Seddik","Sofiane","Sabah","Sabiha","Sabrina","Sabriya","Sadika","Sadjia","Safa","Safia","Saïda","Sajida","Sakina","Saliha","Salima","Saloua","Samar","Samia","Samiha","Samira","Samra","Sana","Sania","Sara","Sarah","Sawsene","Siham","Selma","Sihame","Sofia","Soltana","Sonia","Soraya","Souad","Souhila","Soumia","Tahar","Tarek","Tarik","Tayeb","Tijani","Toufik","Tahani","Tahira","Tamara","Taous","Thania","Tania","Tlidja","Torkia","Tounes","Touraya","Walid","Wahid","Wassim","Wafa","Wahiba","Wahida","Walida","Warda","Wassila","Widad","Wissel","Yacine","Yassine","Yacoub","Yamine","Yanis","Yazid","Youcef","Younes","Yamina","Yasmina","Yasmine","Youmna","Yousra","Yakout","Zahir", "Zahid","Zahi","Zaïm","Zakaria","Zaki", "Ziad","Zine-Eddine","Zoubir","Zoheir","Zahia","Zahida","Zahra","Zahira","Zakia","Zanouba","Zayane","Zehouania","Zeïna","Zineb", "Zohra","Zoubida", "Zoulikha"]\'>
 <span class="input-group-addon">
 <i class="fa fa-user"></i>
 </span>
 </div>
 </div>
 <div class="form-group">
 <label for="req121" class="control-label">Grade de Co Encadreur</label>
 <input type="text" value="<?php echo $row['Grade_Co_Encadreur']; ?>" class="form-control" name="req121" id="req121" data-source= \'[\"Chargé de TD\",\"Professeur\",\"Maître de conférence\",\"Maître assistant\"]\' autocomplete="off" data-provide="typeahead" data-items="3">
 </div>
 <div class="form-group">
 <label for="req131" class="control-label">Etablissement de Co Encadreur</label>
 <div class="input-group">
 <input type="text" value="<?php echo $row['Etablissement_Co_Encadreur']; ?>" class="form-control" name="req131" id="req131">
 <span class="input-group-addon">
 <i class="fa fa-building"></i>
 </span>
 </div>
 </div>
               </section>
                <h2>Fonction</h2>
                <section>
<div class="form-group" style="margin-top:-15px;">
<label for="req141" class="control-label">Fonction</label>
<input type="text" value="<?php echo $row['Fonction']; ?>" class="form-control" name="req141" id="req141">
</div>
<div class="form-group">
<label for="req151" class="control-label">Etablissement de travail</label>
<div class="input-group">
<input type="text" value="<?php echo $row['Etablissement_Fonction']; ?>" class="form-control" name="req151" id="req151">
<span class="input-group-addon">
<i class="fa fa-building"></i>
</span>
</div>
</div>
<div class="form-group">
<label for="req161" class="control-label">Lieu de travail</label>
<div class="input-group">
<input type="text" value="<?php echo $row['Lieu_Etablissement']; ?>" class="form-control" name="req161" id="req161">
<span class="input-group-addon">
<i class="fa fa-home"></i>
</span>
</div>
</div>
<div class="form-group">
<label for="req171" class="control-label">Etablissement Cotutelle</label>
<input type="text" value="<?php echo $row['Etablissement_Cotutelle']; ?>" class="form-control" title=" " name="req171" id="req171">
</div>
<div class="form-group">
<label for="req181" class="control-label">Laboratoire Cotutelle</label>
<input type="text" value="<?php echo $row['Laboratoire_Cotutelle']; ?>" class="form-control" title=" " name="req181" id="req181">
</div>
</section>
    <?php } ?>

                      </div>           
                        </div>
                    </div> 
                </div>              
            </form>
          </div>
      </div>
          </section></section>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top:70px;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="exampleModalLabel">Demande de Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p style="font-family:Calibri;text-align:center;font-size:18px;margin-bottom:10px;">
                            Voulez vous Confirmer les informations ou Envoyer le formulaire ?</p>
                        <button type="button" style="margin-left:90px;" onclick='wizard.steps("previous");wizard.steps("previous");wizard.steps("previous");wizard.steps("previous");wizard.steps("previous");wizard.steps("previous");wizard.steps("previous");wizard.steps("previous");' class="btn btn-primary btn-lg" data-dismiss="modal" id="recipient-name"> Confirmer </button>
                        <input style="margin-left:100px;" type="submit" name="submit" onclick="document.getElementById('form1').submit();" data-dismiss="modal" class="btn btn-primary btn-lg" id="message-text" value="Envoyer" >
                    </div>
                </div>
            </div>
        </div>
          <!--END PAGE CONTENT -->
        </div>
    
     <!--END MAIN WRAPPER -->
     <!--footer start-->
     <footer class="site-footer">
          <div class="text-center">
              &copy;  GoldenMinds &nbsp;2015 &nbsp;
              <a href="search-form2.php#" class="go-top">
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
    <script src="assets/plugins/jquery-steps-master/lib/jquery.cookie-1.3.1.js"></script>
    <script src="assets/plugins/jquery-steps-master/build/jquery.steps.js"></script> 
    <script>
        var form = $('#form1');
        $(function () { formValidation(); });
        $(function () { formInit();});
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
        <script>  
   /* $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Type de ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })*/
        </script>
        <script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            title: 'Bonjour ADPGR!',
            text: 'Bounjour monsieur, si vous vouler consulter l\'aide de l\'application <a href="PRO/HTML/" target="_blank" style="color:#ffd777"><h7>help!</h7></a>',
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
