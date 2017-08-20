<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Algosphère - Connexion</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/pages/signin.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet">

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/signin.js"></script>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body>
<?php
$error = false;
if(!empty($_POST)) {
	$user = wp_signon($_POST);
	if(is_wp_error($user)) {
		$error = $user->get_error_message();
	}
	
	else {
		die('Succès');
	}
}
?>
	<div class="navbar navbar-fixed-top">
	  <div class="navbar-inner">
		<div class="container">
			<a class="brand">Algosphère - Plateforme collaborative</a>
		  <div class="nav-collapse">
			<ul class="nav pull-right">
			
			</ul>
		  </div>
		  <!--/.nav-collapse --> 
		</div>
		<!-- /container --> 
	  </div>
	  <!-- /navbar-inner --> 
	</div>
	<!-- /navbar -->
			
		<!-- <div class="alert alert-success" style="text-align: center;">
		  <button type="button" class="close" data-dismiss="alert">&times;</button>
		  <p><strong>Inscription réussie !</strong><br />
		  Votre mot de passe vous a été envoyé par mail.</p>
		</div> -->
		<br>
		
		<?php if($error) : ?>
			<div class="alert alert-error" style="text-align: center;">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <p><strong>Erreur</strong><br />
			  <?php echo $error; ?></p>
			</div>
			<br>
		<?php endif ?>
		 
		<div class="alert alert-info" style="text-align: center;">
		  <button type="button" class="close" data-dismiss="alert"></button>
		  <p><strong>Vous n'êtes pas encore inscrit ?</strong><br><br>
		  <a class="btn btn-success" href="inscription.php" tabindex="6">Inscription</a></p>
		</div>


<div class="account-container">
	
	<div class="content clearfix">
		
		<form action="" method="post">
		<!-- action = <?php echo $_SERVER['$REQUEST_URI']; ?> -->
			<h1>Connexion</h1>		
			
			<div class="login-fields">
				
				<p>Veuillez renseigner vos informations</p>
				
				<div class="field">
					<label for="user_login">Identifiant</label>
					<input type="text" id="user_login" name="user_login" value="" placeholder="Identifiant" class="login username-field" tabindex="1"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="user_password">Mot de passe</label>
					<input type="password" id="user_password" name="user_password" value="" placeholder="Mot de passe" class="login password-field" tabindex="2"/>
				</div> <!-- /password -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<span class="login-checkbox">
					<input id="remember" name="remember" type="checkbox" class="field login-checkbox" value="First Choice" tabindex="3"/>
					<label class="choice" for="remember">Rester connecté(e)</label>
				</span>
				<br /><br /><br />
					
				<div style="text-align: center;">
					<input class="btn btn-large btn-info" type="submit" name="pseudo" value="Connexion" tabindex="4">
				</div>
				
			</div> <!-- .actions -->
		</form>
	</div> <!-- /content -->
</div> <!-- /account-container -->


<div class="login-extra">
	<a href="#" tabindex="5">Mot de passe oublié</a>
</div> <!-- /login-extra -->

<!-- Le javascript
================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="js/jquery-1.7.2.min.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/bootstrap.js"></script>
 
<script src="js/base.js"></script> 

</body>
</html>
