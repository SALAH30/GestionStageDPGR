<?php require('includes/config.php');

//logout
$username = isset($_SESSION['username']) ? $_SESSION['username'] : null;
//$user->logout(); 
$_SESSION['loggedin'] = false ;
?>
<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>DPGR| Vérrouillage</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style13.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	  <script type = "text/javascript" >
	function changeHashOnLoad() {
	     window.location.href += "#";
	     setTimeout("changeHashAgain()", "50"); 
	}

	function changeHashAgain() {
	  window.location.href += "1";
	}

	var storedHash = window.location.hash;
	window.setInterval(function () {
	    if (window.location.hash != storedHash) {
	         window.location.hash = storedHash;
	    }
	}, 50);


	</script>
  </head>

  <body  onload="changeHashOnLoad();getTime() ">


      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  	<div class="container">
	  	
	  		<div id="showtime"></div>
	  			<div class="col-lg-4 col-lg-offset-4">
	  				<div class="lock-screen">
		  				<h2><a data-toggle="modal" href="#myModal"><i class="fa fa-lock"></i></a></h2>
		  				<p style="font-size:30px;text-color:white;">Déverrouiller</p>

				          <!-- Modal -->
                        <form  method="post">
				          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				              <div class="modal-dialog">
				                  <div class="modal-content">
				                      <div class="modal-header">
				                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                          <h4 class="modal-title">Bienvenue</h4>
				                      </div>
				                      <div class="modal-body">
				                          <p class="centered"><img class="img-circle" width="80" src="assets/img/personnage/bossDG01.png"></p>
				                          <input type="password" name="password" placeholder="Mot de Passe" autocomplete="off" class="form-control placeholder-no-fix">
				
				                      </div>
				                      <div class="modal-footer centered">
				                          <button data-dismiss="modal" class="btn btn-theme04" type="button" name="quitter">Quitter</button>
				                          <button class="btn btn-theme03" type="submit" name="connexion">Connexion</button>
				                      </div>
				                  </div>
				              </div>
				          </div>
                        </form>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top:100px;">  
                    <div class="modal-header" style="background: #f25e5e;">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="exampleModalLabel">Message d'erreur</h4>
                    </div>
                    <div class="modal-body">
                        <p style="font-family:Calibri;text-align:center;font-size:22px;margin-bottom:10px;">
                            Votre mot de passe n'est pas correct</p>
                        <button type="button" class="btn btn-default btn-lg" data-dismiss="modal" id="recipient-name"> OK </button>
                    </div>
                </div>
            </div>
        </div>
				          <!-- modal -->
		  				
		  				
	  				</div><!--/lock-screen -->
	  			</div><!-- /col-lg-4 -->
	  	
	  	</div><!-- /container -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $("body").backstretch(["assets/img/nature/nature.jpg","assets/img/nature/nature1.jpg","assets/img/nature/nature2.jpg","assets/img/nature/nature3.jpg"], {speed: 500});
    </script>
    <?php
           if(isset($_POST['connexion'])){
                $password = $_POST['password'];
                
                $rep = $user->login($username , $password) ;
                if ($rep[0]){
               	   $_SESSION['username'] = $username ;
                   header("Location: accueil.php");
                }
                else{
                    ?>
                    <script>$('#exampleModal').modal('show');</script>
      <?php 
                }
            }
    ?>
    
    <script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtime').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>

  </body >
</html>
