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
                      <a href="morris.php" class="active">
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
      <section id="main-content">
          <section class="wrapper"  style="background-color:#F2F2F2;">
              <header>
      
        <h1><strong>Les statistiques</strong> pour ADPGR</h1>
        <p>Génération des graphes pour visualiser les données</p>
        
      </header>

        <!-- Main content -->
        <section class="content">
          <div class="row" style="margin:0 20px;">
              <!-- AREA CHART -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title"  style="font-family:'Andalus';font-weight:bold;font-size:30px;">Les frais des stages<br></h3>
                </div>
                <div class="box-body">
                  <canvas id="areaChart" height="450"></canvas>
                </div><!-- /.box-body -->

              <!-- DONUT CHART -->
              <!-- <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Nombre de Stage Par Année</h3>
                </div>
                <div class="box-body">
                  <canvas id="barChart" height="230"></canvas>
                </div> --><!-- /.box-body -->
              </div>

            </div><!-- /.col (LEFT) -->

        
              <!-- LINE CHART -->
              
              


               <!-- /.box -->
              <!-- BAR CHART -->
             <!-- <div class="box box-danger">
                 <div class="box-header">
                  <h3 class="box-title">Nombre des Chercheur Par Sexe</h3> 
                </div>
                <div class="box-body">
                  <div class="chart-responsive">
                    <canvas id="pieChart" height="250"></canvas>    
                  </div>
                </div> <!-- /.box-body 
              </div> /.box -->
            <!-- /.col (RIGHT) -->
          </div><!-- /.row -->
          <br><br>
          <button style="margin-left:45%;" id="button" onclick="window.location='morris.php';" class="btn btn-primary btn-lg btn-round btn-line">Retour</button>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <!-- Bootstrap 3.3.2 JS -->
    <!-- ChartJS 1.0.1 -->
      </section>

          </section>
      </section>

      <!--main content end-->
  </section>                <!--footer start-->
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
              $Frais_Assurance=0;
              $Frais_Transport=0;
              $Frais_Visa=0;
              $Frais_de_Séjour=0;
              $db = data_base_connect();
              $st2 = $db->prepare("SELECT Date_Prévue_Départ FROM Stage");      
              $st4 = $db->prepare("SELECT Stage.Frais_de_Séjour,Stage.Frais_Transport,Stage.Frais_Visa,Stage.Frais_Assurance FROM 
                Stage ");
             
              $st4->execute();

              while($row4 = $st4->fetch())
              {
                $Frais_Assurance=+$row4['Frais_Assurance'];
                $Frais_Visa=+$row4['Frais_Visa'];
                $Frais_Transport=+$row4['Frais_Transport'];
                $Frais_de_Séjour=+$row4['Frais_de_Séjour'];
              }

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


?>
        // Get context with jQuery - using jQuery's .get() method.
        var areaChartCanvas = $("#areaChart").get(0).getContext("2d");
        // This will get the first returned node in the jQuery collection.
        var areaChart = new Chart(areaChartCanvas);

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

        var areaChartDataF = {
          labels: ["Frais de visa", "Frais de transport", "Frais d'assurance", "Frais de séjour"],
          datasets: [
            {
              label: "Frais",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)",
              data: [<?php echo $Frais_Visa; ?>, <?php echo $Frais_Transport; ?>,<?php echo $Frais_Assurance; ?>,<?php echo $Frais_de_Séjour; ?>]
            },
            {
              label: "Digital Goods",
              fillColor: "rgba(60,141,188,0.9)",
              strokeColor: "rgba(60,141,188,0.8)",
              pointColor: "#3b8bba",
              pointStrokeColor: "rgba(60,141,188,1)",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(60,141,188,1)"
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
        areaChart.Line(areaChartDataF, areaChartOptions);

        //-------------
        //- LINE CHART -
        //--------------

        //-------------
        //- PIE CHART -
        //-------------
        // Get context with jQuery - using jQuery's .get() method.
        
      });
    </script>
  

  </body>
</html>
