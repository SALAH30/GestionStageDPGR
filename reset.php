    <!-- Bootstrap core CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--external css-->

<?php require('includes/config.php'); 
require('PHPMailer/PHPMailerAutoload.php');

//if form has been submitted process it
if(isset($_POST['submit'])){

	//email validation
	if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	    $error[] = 'S\'il vous plaît entrer une adresse email valide';
	} else {
		$stmt = $db->prepare('SELECT email FROM members WHERE email = :email');
		$stmt->execute(array(':email' => $_POST['email']));
		$row = $stmt->fetch(PDO::FETCH_ASSOC);

		if(empty($row['email'])){
			$error[] = 'E-mail fournie n\'est pas reconnu.';
		}
			
	}

	//if no errors have been created carry on
	if(!isset($error)){

		//create the activasion code
		$token = md5(uniqid(rand(),true));

		try {

			$stmt = $db->prepare("UPDATE members SET resetToken = :token, resetComplete='No' WHERE email = :email");
			$stmt->execute(array(
				':email' => $row['email'],
				':token' => $token
			));

			//send email
			$to = $row['email'];
			$subject = "Password Reset";
			$body = "Someone requested that the password be reset. \n\nIf this was a mistake, just ignore this email and nothing will happen.\n\nTo reset your password, visit the following address: ".DIR."resetPassword.php?key=$token";
			$additionalheaders = "From: <".SITEEMAIL.">\r\n";
			$additionalheaders .= "Reply-To: $".SITEEMAIL."";
			$mail = new PHPMailer;
			$mail->Host = 'tls://smtp.gmail.com:587';
			$mail->isSMTP();                                    
			$mail->Host = 'smtp.gmail.com'; 
			$mail->SMTPAuth = true;                               
			$mail->Username = 'da_djedaini@esi.dz';                            
			$mail->Password = 'djedaini02';                        
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
			mail($to, $subject, $body, $additionalheaders);

			//redirect to index page
			header('Location: login.php?action=reset');
			exit;

		//else catch the exception and show the error.
		} catch(PDOException $e) {
		    $error[] = $e->getMessage();
		}

	}

}

//define page title
$title = 'Reset Account';

//include header template
require('layout/header.php'); 
?>


<div class="container">

	<div class="row">

	    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
			<form role="form" method="post" action="" autocomplete="off">
				<h2>Page de Reset de Mot de Passe</h2>
				<p><a href='login.php'>Retour &agrave; la Page de Login</a></p>
				<hr>
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
							echo "<h2 class='bg-success'>Votre compte est maintenant actif, vous pouvez maintenant vous connecter.</h2>";
							break;
						case 'reset':
							echo "<h2 class='bg-success'>S'il vous plaît vérifier votre boîte E-main pour un lien de réinitialisation.</h2>";
							break;
					}
				}
				?>

				<div class="form-group">
					<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email" value="" tabindex="1">
				</div>
				
				<hr>
				<div class="row">
					<div class="col-xs-6 col-md-6"><input type="submit" name="submit" value="Envoyer le lien" class="btn btn-primary btn-block btn-lg" tabindex="2"></div>
				</div>
			</form>
		</div>
	</div>


</div>
<?php 
//include header template
require('layout/footer.php'); 
?>