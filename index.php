<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?php require('includes/config.php'); 
	  require 'PHPMailer/PHPMailerAutoload.php';
error_reporting(E_ALL);
ini_set('display_errors', '1');

//if form has been submitted process it
if(isset($_POST['submit'])){

	//very basic validation
	if(strlen($_POST['username']) < 3){
		$error[] = 'Nom d\'utilisateur est trop court.';
	} else {
		$stmt = $db->prepare('SELECT username FROM members WHERE username = :username');
		$stmt->execute(array(':username' => $_POST['username']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['username'])){
			$error[] = 'Nom d\'utilisateur fourni est d&eacute;j&agrave; utilis&eacute;.';
		}
			
	}

	if(strlen($_POST['password']) < 3){
		$error[] = 'Mot de passe est trop court.';
	}

	if(strlen($_POST['passwordConfirm']) < 3){
		$error[] = 'Mot de passe de Confirmation est trop court.';
	}

	if($_POST['password'] != $_POST['passwordConfirm']){
		$error[] = 'Les deux mots de passe ne correspondent pas.';
	}

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'S\'il vous pla&icirc;t entrer une adresse email valide';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(!empty($row['email'])){
			$error[] = 'email fourni est d&eacute;j&agrave; utilisé.';
		}
			
	}


	//if no errors have been created carry on
	if(!isset($error)){

		//hash the password
		$hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

		//create the activasion code
		$activasion = md5(uniqid(rand(),true));

		try {

			//insert into database with a prepared statement
			$stmt = $db->prepare('INSERT INTO members (username,password,email,active , Type) VALUES (:username, :password, :email, :active , :type)');
			$stmt->execute(array(
				':username' => $_POST['username'],
				':password' => $hashedpassword,
				':email' => $_POST['email'],
				':active' => $activasion,
				':type' => $_POST['CS']
			));
			$id = $db->lastInsertId('memberID');

			//send email
			$to = "da_belkaid@esi.dz";
			$subject = "Comfirmer l'inscription";
			$body = "Merci pour votre enregistrement &agrave; notre application.\n\n Pour activer votre compte, s.v.p cliquer sur le lien:\n\n ".DIR."activate.php?x=$id&y=$activasion\n\n Cordialement Site de DPGR \n\n";
			$additionalheaders = "De: <".SITEEMAIL.">\r\n";
			$additionalheaders .= "A: ".SITEEMAIL."";
			$mail = new PHPMailer;
			$mail->Host = 'tls://smtp.gmail.com:587';
			$mail->isSMTP();                                    
			$mail->Host = 'smtp.gmail.com'; 
			$mail->SMTPAuth = true;                               
			$mail->Username = 'da_belkaid@esi.dz';                            
			$mail->Password = 'Aissa1994';                        
			$mail->SMTPSecure = 'tls';  
			$mail->Port  =  25;
			$mail->From = SITEEMAIL;
			$mail->FromName = 'Raj Amal';
			$mail->addAddress($to, 'Raj Amal W');  
			 
			$mail->addReplyTo($to, 'Raj Amal W');
			 
			$mail->WordWrap = 50;                                
			$mail->isHTML(true);                                  
			 
			$mail->Subject = $subject;
			$mail->Body    = $body;
			if(!$mail->send()) {
			   echo 'Le message n\'a pas pu &ecic;tre envoy&eacute;.';
			   echo "Erreur d'email " . $mail->ErrorInfo;
			}
			else echo 'Message Envoyé.';
			//mail($to, $subject, $body, $additionalheaders);

			//redirect to index page
			header('Location: index.php?action=joined');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Page de la connexion';

//include header template
require('layout/header.php'); 
?>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<meta name="keywords" content="Minimal Newsletter Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
<link rel="shortcut icon" type="image/x-icon" href="images/logo01.ico" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,600,400' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />
</head>
<body>

<h1>DPGR D'ESI</h1>
		<div class="login"  style="margin-top:-25px;">
			<form role="form" method="post" action="" autocomplete="off">
				<ul>
					<li>
						<a class=" icon user"></a><input type="text" class="text" value="Nom d'utilisateur" name="username"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Nom d\'utilisateur';}" >
					</li>
					<li>
						<a  class=" icon mail"></a><input type="text" class="text" value="Email" name="email"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" >
					</li>
					<div class="dumy">
					<li class="psw">
						<a  class=" icon key"></a><input type="text" value="Mot de passe" name="password" onfocus="this.value = '';this.type='password';" onblur="if (this.value == '') {this.value = 'Mot de passe';this.type='text';}">
					</li>
					<li class="psw two">
						<a  class=" icon key"></a><input type="text" value="Confirmation" name="passwordConfirm" onfocus="this.value = '';this.type='password';" onblur="if (this.value == '') {this.value = 'Confirmation';this.type='text';}">
					</li>
					<div class="clear"></div>
				</div>
						<div class="form-group">
							<p> <input type="radio" name="CS" value="CS"  class="flat-red"> Consultation
							 <input style="margin-left:400px;padding-right:20px;" type="radio" name="CS" value="DG"  class="flat-red"> Modification<br></p>
						</div>
					
						
					<div class="submit">
							<input type="submit" name="submit" value="Créer nouveau compte" >
							<?php
								//check for any errors
								if(isset($error)){
									foreach($error as $error){
										echo '<p class="bg-danger">'.$error.'</p>';
									}
								}

								//if action is joined show sucess
								if(isset($_GET['action']) && $_GET['action'] == 'joined'){
									echo "<h2 class='bg-success'>Inscription réussi, s.v.p vérifier votre email pour activer votre compte.</h2>";
								}
							?>
							<div class="strip">OU</div>
			       </div>
			       		
			      	<div class="dropbox"> <a class="drop" href="login.php" style="text-decoration:none;">Connexion</a></div>
				</ul>
			</form>
			
		</div>
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
	<!--<div class="newsletter-message">
		<h2>Subscribe to our newsletter</h2>
			<p class="newsl-letter">Join our newsletter and we will send you a link to download our free photoshop template, as well as other free resources.</p>
			<form>
				<input type="text" placeholder="Name" required=""/>
				<input type="text" placeholder="Email address" required=""/>
					<div class="button-bottom">
						<div class="check-box">
							<input type="checkbox">
							<p class="news">Daily Newsletter</p>
						</div>
						<div class="button">
							<span class="tick"> </span>
							<input type="submit" value="Subscribe"/>					
						</div>
							<div class="clear"> </div>
					</div>	
			</form>
	<div class="newsletter-image">
		<img src="images/responsive.png" alt="" />
	</div>
</div>-->
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
     $(function () { formValidation(); });
         $(function () { formInit(); });
    $(function () {$('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });});
        </script>
</body>
</html>