<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php
//include config
require_once('includes/config.php');
//process login form if submitted
if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$password = $_POST['password'];
	$rep = $user->login($username,$password);
	if( $rep[0]){ 
		$_SESSION['username'] = $username;
		$_SESSION['type'] = $rep[1];
	 header('Location: accueil.php');
		exit;
	
	} else {
		$error[] = 'Nom d\'utilisateur ou mot de passe erron&eacute; ou votre compte n\' est pas encore activ&eacute;.';
	}

}//end if submit

//define page title
$title = 'Page des comptes ';

//include header template
//require('layout/header.php'); 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title><?php if(isset($title)){ echo $title; }?></title>
         <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="shortcut icon" type="image/x-icon" href="images/logo01.ico" />
</head>
<body>
<h1>Page de la connexion</h1>
	<div class="newsletter-message">
		<h2><a href="index.php">Retour &agrave; la page de la connexion</a></h2>
			<p class="newsl-letter">			
				<?php
					//check for any errors
					if(isset($error)){
						foreach($error as $error){
							echo '<p class="bg-danger">'.$error.'</p>';
						}
					}
					if(isset($_GET['action'])){
					//check the action
						switch ($_GET['action']) {
							case 'active':
								echo "<h2 class='bg-success'>Votre compte est activé maintenant, vous pouvez l'utiliser.</h2>";
								break;
							case 'reset':
								echo "<h2 class='bg-success'>SVP, vérifiez votre boite e-mail pour réinitialiser votre Compte.</h2>";
								break;
							case 'resetAccount':
								echo "<h2 class='bg-success'>Mot de passe a changé, vous pouvez l'utiliser.</h2>";
								break;
						}
					}
				?>
			</p>
			<form role="form" method="post" action="" autocomplete="off" style="width:389px;">
				<input type="text" placeholder="Nom " name="username" required="" style="width:155px;" />
				<input type="password" placeholder="Mot de passe " name="password" required="" style="width:155px;" />
					<div class="button-bottom">
					
						<div class="button">
							<span class="tick"> </span>
							<input type="submit" name="submit" value="Connecter" style="margin-right:30px;" />					
						</div>
					
						
							<div class="clear"> </div>
					</div>
					<div ><p><br><a href="reset.php">Mot de passe oubli&eacute; ?</a></p></div>			
			</form>
	<div class="newsletter-image">
		<img src="images/responsive.png" alt="" />
	</div>
</div>

</body>
</html>