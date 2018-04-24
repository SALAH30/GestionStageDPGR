<!DOCTYPE html>
<?php 
require('includes/config.php'); 
//if not logged in redirect to login page
if(!$user->is_logged_in() ){ header('Location: login.php'); }
 ?>

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
    <link rel="stylesheet" type="text/css" href="assets/css/cs-select.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/cs-skin-slide.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style1.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/stimenu.css" />
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    <!-- Custom styles for this template -->
    <link href="assets/css/style-responsive.css" rel="stylesheet">
    <script src="assets/js/chart-master/Chart.js"></script>
     <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style13.css" media="screen"/>
    <!--<link href='http://fonts.googleapis.com/css?family=Lato:300,700' rel='stylesheet' type='text/css' />-->
    <script type="text/javascript" src="assets/js/modernizr.custom.79639.js"></script> 
    <!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->	
    <script src="assets/js/D3.js"></script>
    
    
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
            opacity: 0.3;
        }
      </style>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
	
            
            <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" id="afficher" onclick="if (this.id=='afficher') {$('#modal1').css('margin-left','-260px');$('#modal2').css('margin-left','150px');this.id='cacher';} else {$('#modal1').css('margin-left','-53px');$('#modal2').css('margin-left','356px');this.id='afficher';}" data-original-title="Afficher/Cacher Menu"></div>
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
                      <a href="javascript:;">
                          <i class="fa fa-th"></i>
                          <span><h4>Base de donnée</h4></span>
                      </a>
                      <ul class="sub">
                           <li><a href="base table.php">Tables de la BDD</a></li>
                          <li><a href="sauvgard base.php">Sauvegarder la BDD</a></li>
                      </ul>
                  </li>
                 <li class="sub-menu">
                      <a href="morris1.php" class="active">
                          <i class=" fa fa-bar-chart-o"></i>
                          <span><h4>Statistiques</h4></span>
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
          <section class="wrapper"  style="background-color:#F2F2F2;">
              <header>
			
				<h1><strong>Les statistiques</strong> pour ADPGR</h1>
				<p>Génération des graphes pour visualiser les données</p>
				
			</header>
			
			<section class="main">
                <div class="container" id="conteneur" style="margin-left:9%;">
                <ul id="sti-menu" class="sti-menu">
                    <li data-hovercolor="#37c5e9">
                        <a href="morristage.php">
                            <h2 data-type="mText" class="sti-item">Stage et Personne</h2>
                            <h3 data-type="sText" class="sti-item">Etat, Année, Nature</h3>
                            <span data-type="icon" class="sti-icon sti-icon-care sti-item"></span>
                        </a>
                    </li>
                    <li data-hovercolor="#37c5e9" style="margin-left:9%;">
                        <a href="morrisfrais.php">
                            <h2 data-type="mText" class="sti-item">Statistique du frais de stage</h2>
                            <h3 data-type="sText" class="sti-item">Frais des stages par année</h3>
                            <span data-type="icon" class="sti-icon sti-icon-alternative sti-item"></span>
                        </a>
                    </li>
                    <li data-hovercolor="#37c5e9" style="margin-left:9%;">
                        <a href="morrispersonn.php">
                            <h2 data-type="mText" class="sti-item">Statistique des personnes</h2>
                            <h3 data-type="sText" class="sti-item">Enseignants, Doctorant...</h3>
                            <span data-type="icon" class="sti-icon sti-icon-info sti-item"></span>
                        </a>
                    </li>
                </ul>
            </div> 

        <div id="chart-container">
        <section class="content">
          <div class="row">
            <div class="col-md-6">
              <!-- AREA CHART -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Nombre de Stage Par Etat</h3>
                </div>
                <div class="box-body">
                  <canvas id="areaChart" height="250"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- DONUT CHART -->
              <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title">Nombre d'Enseignant Par Nature</h3>
                </div>
                <div class="box-body">
                  <canvas id="lineChart" height="250"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->


            </div><!-- /.col (LEFT) -->

            <div class="col-md-6">
              <!-- LINE CHART -->
              
               <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Nombre de Stage Par Année</h3>
                </div>
                <div class="box-body">
                  <canvas id="barChart" height="230"></canvas>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <!-- BAR CHART -->
             <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Nombre des Chercheur Par Sexe</h3>
                </div>
                <div class="box-body">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="250"></canvas>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
				 <button style="margin-left:45%;" id="button" onclick="document.getElementById('chart-container').style.display = 'none'; document.getElementById('sti-menu').style.display = 'block';window.location='#';" class="btn btn-primary btn-lg btn-round btn-line">Retour</button>
			</div>
      </section>

          </section>
      </section>

      <!--main content end-->
  </section>
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
  
  
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/classie.js"></script>
    <script src="assets/js/selectFx.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="assets/js/jquery.iconmenu.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>    
	<script src="assets/js/zabuto_calendar.js"></script>	
    <script src="assets/js/underscore-min.js"></script>
    <script src= "assets/js/moment-2.2.1.js"></script>
    <script src="assets/js/clndr.js"></script>
    <script src="assets/js/site.js"></script>
	<script type="text/javascript">
      document.getElementById('chart-container').style.display="none";
        $(function() {
				$('#sti-menu').iconmenu();
			});
         $('a[data-modal]').on('click', function(e) {
                e.preventDefault();
                //$('.modal').modal('show');
                var target = $($(this).data('target'));
                target.modal('show');
            });
        (function() {
				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx(el);
				} );
			})();
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
     <script src="js/Chart.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='js/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- page script -->
    <script>
      $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */

        //--------------
        //- AREA CHART -
        //--------------
<?php
    function data_base_connect ()
   {
     $dbh = new PDO("mysql:host=localhost;dbname=projet;charset=utf8", "root", "");
     
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
     return ($dbh);
   } 
              $vacatair=0;
              $associe=0;
              $permanant=0;
              $cloture=0;
              $encour=0;
              $Annule=0;
              $a7=0;
              $a8=0;
              $a9=0;
              $a10=0;
              $a11=0;
              $a12=0;        
              $a13=0;        
              $a14=0;
              $a15=0;
              $a16=0;
              $Homme=0;
              $Femme=0;
              $db = data_base_connect();
              $st = $db->prepare("SELECT Nature FROM Chercheur JOIN Enseignant WHERE Chercheur.Code=Enseignant.Chercheur_Code");
              $st1 = $db->prepare("SELECT suivi_stage.Etat FROM Stage JOIN Suivi_Stage WHERE Stage.Code=suivi_stage.Code_Stage");
              $st2 = $db->prepare("SELECT Date_Prévue_Départ FROM Stage");
              $st3 = $db->prepare("SELECT Sexe FROM Chercheur");
              

              $st2->execute();

              while($row2 = $st2->fetch())
              {
                  switch (substr($row2['Date_Prévue_Départ'],6,4)) {
                    case '2007':
                      $a7++;
                      break;
                    case '2008':
                      $a8++;
                      break;
                    case '2009':
                      $a9++;
                      break;
                    case '2010':
                      $a10++;
                      break;
                    case '2011':
                      $a11++;
                      break;
                    case '2012':
                      $a12++;
                      break;
                    case '2013':
                      $a13++;
                      break;
                    case '2014':
                      $a14++;
                      break;
                    case '2015':
                      $a15++;
                      break;
                    case '2016':
                      $a16++;
                      break;
                    
                    default:
                      # code...
                      break;
                  
                }

              }




              $st3->execute();

              while($row3 = $st3->fetch())
              {
                if($row3['Sexe']=='Masculin'){
                  $Homme++;
                }
                  if($row3['Sexe']=='Féminin'){
                    $Femme++;
                  }
              }


              $st1->execute();

              while($row1 = $st1->fetch())
              {
                if($row1['Etat']=='En Cours'){
                  $encour++;
                }
                  if($row1['Etat']=='Cloturé'){
                    $cloture++;
                  }
                    if($row1['Etat']=='Annulé'){
                      $Annule++;
                    }
              }
              $st->execute();
              while($row = $st->fetch())
              {
                if($row['Nature']=='Vacataire')
                {
                  $vacatair++;
                }
                if($row['Nature']=='Associé')
                {
                  $associe++;
                }
                if($row['Nature']=='Permanent')
                {
                  $permanant++;
                }
              }
?>
        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas);

        var areaChartDataVAP = {
          labels: ["Vacataire", "Associé", "Permanent"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [<?php echo $vacatair; ?>, <?php echo $associe; ?>,<?php echo $permanant; ?>]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
             
            }
          ]
        };
        
        var areaChartDataSA = {
          labels: ["2007", "2008", "2009", "2010", "2011", "2012", "2013", "2014", "2015", "2016"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [<?php echo $a7; ?>, <?php echo $a8; ?>,<?php echo $a9; ?>,<?php echo $a10; ?>,<?php echo $a11; ?>,<?php echo $a12; ?>,<?php echo $a13; ?>,<?php echo $a14; ?>,<?php echo $a15; ?>,<?php echo $a16; ?>]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
             
            }
          ]
        };
        var areaChartDataACE = {
          labels: ["Annulé", "Cloturé", "En Cours"],
          datasets: [
            {
              label: "Electronics",
              fillColor: "rgba(210, 214, 222, 1)",
              strokeColor: "rgba(210, 214, 222, 1)",
              pointColor: "rgba(210, 214, 222, 1)",
              pointStrokeColor: "#c1c7d1",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: [<?php echo $Annule; ?>, <?php echo $cloture; ?>,<?php echo $encour; ?>]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
             
            }
          ]
        };

        var areaChartOptions = {
          //Boolean - If we should show the scale at all
          showScale: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: false,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - Whether the line is curved between points
          bezierCurve: true,
          //Number - Tension of the bezier curve between points
          bezierCurveTension: 0.3,
          //Boolean - Whether to show a dot for each point
          pointDot: false,
          //Number - Radius of each point dot in pixels
          pointDotRadius: 4,
          //Number - Pixel width of point dot stroke
          pointDotStrokeWidth: 1,
          //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
          pointHitDetectionRadius: 20,
          //Boolean - Whether to show a stroke for datasets
          datasetStroke: true,
          //Number - Pixel width of dataset stroke
          datasetStrokeWidth: 2,
          //Boolean - Whether to fill the dataset with a color
          datasetFill: true,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].lineColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true
        };

        //Create the line chart
        areaChart.Line(areaChartDataACE, areaChartOptions);

        //-------------
        //- LINE CHART -
        //--------------
        var lineChartCanvas = $("#lineChart").get(0).getContext("2d");
        var lineChart = new Chart(lineChartCanvas);
        var lineChartOptions = areaChartOptions;
        lineChartOptions.datasetFill = false;
        lineChart.Line(areaChartDataVAP, lineChartOptions);

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas);
        var PieData = [
          {
            value: <?php echo $Homme; ?>,
            color: "#314EC2",
            highlight: "#f56954",
            label: "Masculin"
          },
          {
            value: <?php echo $Femme; ?>,
            color: "#D52AAC",
            highlight: "#d2d6de",
            label: "Féminin"
          }
        ];
        var pieOptions = {
          //Boolean - Whether we should show a stroke on each segment
          segmentShowStroke: true,
          //String - The colour of each segment stroke
          segmentStrokeColor: "#fff",
          //Number - The width of each segment stroke
          segmentStrokeWidth: 2,
          //Number - The percentage of the chart that we cut out of the middle
          percentageInnerCutout: 50, // This is 0 for Pie charts
          //Number - Amount of animation steps
          animationSteps: 100,
          //String - Animation easing effect
          animationEasing: "easeOutBounce",
          //Boolean - Whether we animate the rotation of the Doughnut
          animateRotate: true,
          //Boolean - Whether we animate scaling the Doughnut from the centre
          animateScale: false,
          //Boolean - whether to make the chart responsive to window resizing
          responsive: true,
          // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
          maintainAspectRatio: false,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
        };
        //Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas = $("#barChart").get(0).getContext("2d");
        var barChart = new Chart(barChartCanvas);
        var barChartData = areaChartDataSA;
        barChartData.datasets[1].fillColor = "#00a65a";
        barChartData.datasets[1].strokeColor = "#00a65a";
        barChartData.datasets[1].pointColor = "#00a65a";
        var barChartOptions = {
          //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
          scaleBeginAtZero: true,
          //Boolean - Whether grid lines are shown across the chart
          scaleShowGridLines: true,
          //String - Colour of the grid lines
          scaleGridLineColor: "rgba(0,0,0,.05)",
          //Number - Width of the grid lines
          scaleGridLineWidth: 1,
          //Boolean - Whether to show horizontal lines (except X axis)
          scaleShowHorizontalLines: true,
          //Boolean - Whether to show vertical lines (except Y axis)
          scaleShowVerticalLines: true,
          //Boolean - If there is a stroke on each bar
          barShowStroke: true,
          //Number - Pixel width of the bar stroke
          barStrokeWidth: 2,
          //Number - Spacing between each of the X value sets
          barValueSpacing: 5,
          //Number - Spacing between data sets within X values
          barDatasetSpacing: 1,
          //String - A legend template
          legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].fillColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>",
          //Boolean - whether to make the chart responsive
          responsive: true,
          maintainAspectRatio: false
        };

        barChartOptions.datasetFill = false;
        barChart.Bar(barChartData, barChartOptions);
      });
    </script>
  

  </body>
</html>
