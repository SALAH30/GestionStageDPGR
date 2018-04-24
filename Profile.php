<?php 
require('includes/config.php'); 
//if not logged in redirect to login page
if(!$user->is_logged_in() ){ header('Location: login.php'); }

 ?>
 
<?php
include_once("function.php");
$db = data_base_connect (); 
$st=$db->prepare('SELECT * FROM Chercheur JOIN Enseignant JOIN Doctorant JOIN Laboratoire WHERE Chercheur.Laboratoire_Code=Laboratoire.Code AND Chercheur.Code=Enseignant.Chercheur_Code AND  Chercheur.Code=Doctorant.Chercheur_Code AND Chercheur.Code='.$_GET['code']);
$st->execute();
while($row=$st->fetch())
{
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

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

<link rel="stylesheet" type="text/css" href="style_profile.css" />
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
      <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">

            
            
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
                      <a href="javascript:;" class="active" >
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
                      <a href="javascript:;">
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
                      <a href="javascript:;" >
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
      
        <!--PAGE CONTENT -->
        <div id="content">
           
                <div class="inner"  style="background-color:#F2F2F2;">
                <form method="post" action="Search.php" class="form-horizontal block-validate popup-validation inline-validate">
                    <div class="row">
                    <div class="col-lg-12">
                                    <h1 > Les chercheurs </h1>
                                    <a name="stage1"></a>
                                
                                
                            </div>
                    </div>
                          <hr />
                       

                    <div class="row">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            Le Chercheur
                        </div>
                        <div class="panel-body">
                            <div id="wizardV" >
                <h2>Informations Générals </h2>
                <section>
                   
                           <form role="form">
                                        
                                       <div class="form-group">
                                            <label for="required1" class="control-label">Le nom : <?php echo $row['Nom_Fr']; ?><!--.varPhpNom--></label><label for="required2" class="control-label arabe1">   Ar : <?php echo $row['Nom_Ar']; ?></label>
                                                <div class="input-group">
                                                    <!--<input type="text" id="required1" name="required1" class="form-control" autofocus/>
                                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>-->
                                                </div>
                                        </div>
                                       <!--<div class="form-group">
                                            <label>Last Name</label>
                                            <input class="form-control" />
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>-->
                               <div class="form-group">
                                            <label for="required2" class="control-label">Le prénom : <?php echo $row['Prénom_Fr']; ?></label><label for="required2" class="control-label arabe2">Ar : <?php echo $row['Prénom_Ar']; ?></label>
                                 </div>
                                <div class="form-group">
                                    











                                            <label for="required6" class="control-label">Prénom du père : <?php echo $row['Prénom_Père_Fr']; ?></label><label for="required2" class="control-label arabe3">Ar : <?php echo $row['Prénom_Père_Ar']; ?></label>
                                 </div>  
                                
                                <div class="form-group">
                                    <label for="required8" class="control-label">Sexe : <?php echo $row['Sexe']; ?></label>
                                </div>                                 
                                <div class="form-group">
                                    <label for="required8" class="control-label">Etat civile : <?php echo $row['Etat_Civil']; ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="required8" class="control-label">Date de naissance : <?php echo $row['Date_Naissance']; ?></label>
                                </div> 

                                <div class="form-group">
                                    <label for="required8" class="control-label">Téléphone : <?php echo $row['Tél']; ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="required8" class="control-label">E-mail : <?php echo $row['Email']; ?></label>
                                </div>
                                <div class="form-group">
                                    <label for="required8" class="control-label">Laboratoire : <?php echo $row['Désignation'];
/*$st=$db->prepare('SELECT * FROM Chercheur JOIN Laboratoire WHERE Chercheur.Laboratoire_Code=Laboratoire.Code AND Laboratoire_Code='.$row['Laboratoire_Code']);
$st->execute();
while($row1=$st->fetch())
{
      echo $row1['Désignation']; 
}*/?>
</label>
                                </div>
                                <div class="form-group">
                                    <label for="digits" class="control-label">Stage : <?php echo $row['Nom_Ar']; ?></label>
                                </div>           
                                    
                                    </form>
                    
                </section>

                <h2>Donctorant</h2>
                <section>
                       <form role="form">
                                             <div class="form-group">
                                                 <label class="control-label">Diplome de base : <?php echo $row['Nom_Ar']; ?></label> 
                                             </div>                                          
                                             <div class="form-group">
                                                 <label for="required9" class="control-label">Diplome préparé :<?php echo $row['Nom_Ar']; ?></label>
                                             </div>

                                            <div class="form-group">
                                                <label for="email2" class="control-label">Date d'inscription :<?php echo $row['Nom_Ar']; ?></label>
                                             </div>  
                                             
                                             <div class="form-group">
                                                <label for="digits" class="control-label">Sujet de thèse :<?php echo $row['Nom_Ar']; ?></label>
                                            </div>                                      
                                            
                                            
                                            <div class="form-group">
                                                <label for="digits" class="control-label">Nom/Prénom d'encadreur :<?php echo $row['Nom_Ar']; ?></label>
                                            </div>    

                                            <div class="form-group">
                                                <label for="digits" class="control-label">Grade d'encadreur :<?php echo $row['Nom_Ar']; ?></label> <label for="digits" class="contr2">Etablissement d'encadreur :</label>
                                            </div>    
                                      

                                            <div class="form-group">
                                            <label for="digits" class="control-label">Nom/Prénom de co-encadreur :<?php echo $row['Nom_Ar']; ?></label>
                                            </div>    
 

                                            <div class="form-group">
                                                <label for="digits" class="control-label">Grade de co-encadreur :<?php echo $row['Nom_Ar']; ?></label> <label for="digits" class="contr3">Etablissement de co-encadreur :</label>
                                            </div>    
                          
                                              <div class="form-group">
                                                <label for="digits" class="control-label">Fonction :<?php echo $row['Nom_Ar']; ?></label>
                                            </div>    
                                              <div class="form-group">
                                                <label for="digits" class="control-label">Etablissement de Fonction :<?php echo $row['Nom_Ar']; ?></label><label for="digits" class="contr4">Etablissement cotutelle :</label>
                                            </div>    
                                           
                                           
                                    </form>
      
        
          </section>

                <h2>Enseignant</h2>
                <section>
                         <form role="form">
                                           <div class="form-group">
                                                <label for="digits" class="control-label">Grade :<?php echo $row['Nom_Ar']; ?></label>
                                            </div>    
                                            <div class="form-group">
                                                <label for="email2" class="control-label">Date de Recrutement :<?php echo $row['Nom_Ar']; ?></label>
                                             </div>  
                                            <div class="form-group">
                                                <label for="digits" class="control-label">Nature :<?php echo $row['Nom_Ar']; ?></label>
                                            </div>    
                                            <div class="form-group">
                                                <label for="email2" class="control-label">Date de Nomination :<?php echo $row['Nom_Ar']; ?></label>
                                             </div>  
                                            <div class="form-group">
                                                <label for="digits" class="control-label">Université :<?php echo $row['Nom_Ar']; ?></label>
                                            </div>    
                                            <div class="form-group">
                                                <label for="digits" class="control-label">Date d'inscription :<?php echo $row['Nom_Ar']; ?></label>
                                            </div>    
                                         </form>
            
            </section>

     
      </div>
                          <?php } ?>   
                        </div>
                    </div>
                   
                   </div>
  
  
            </form>
         </div>
         
         </div>
    <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015 - GoldenMinds
              <a href="search-form.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
         <!--END PAGE CONTENT -->
        </div>
    
     <!--END MAIN WRAPPER -->

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
    
    
    <!--<script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>-->


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
    <script src="assets/plugins/jquery-steps-master/lib/jquery.cookie-1.3.1.js"></script>
    <script src="assets/plugins/jquery-steps-master/build/jquery.steps.js"></script>   
    <script src="assets/js/WizardInit.js"></script>
    <script>  
    document.getElementById('d3').style.display = 'none';
    document.getElementById('d2').style.display = 'none';
    $('#exampleModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('whatever') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        modal.find('.modal-title').text('Type de ' + recipient)
        modal.find('.modal-body input').val(recipient)
    })
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
     <!--END PAGE LEVEL SCRIPTS -->
     
</body>
     <!-- END BODY -->
</html>
