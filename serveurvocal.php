<!DOCTYPE html>
<html>
<head>
	<title>Algosphère - Serveur vocal</title>
	<?php include("head.php"); ?>
</head>

<body>

	<?php $menucourant = ''; ?>
	<?php include("header.php"); ?>
	<?php include("menuprincipal.php"); ?>
	
		<div class="main">
		  <div class="main-inner">
			<div class="container">
			  <div class="row">
	 		
 <div class="span3">
		  
		<div class="widget widget-table action-table">
            <div class="widget-header">
			<h3>Serveur vocal</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
				 <h6 class="bigstats2" style="margin-bottom: 0px;">
					
					<b>Adresse</b>
					<p style="color: ForestGreen">algosphere.mumble.vg</p>
					
					<b>Port</b>
					<p style="color: ForestGreen">50086</p></h6>					

            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
		  
		  
</div>
        <!-- /span3 -->
		
<div class="span6">
			
			    <!-- /widget -->
          <div class="widget">
            <div class="widget-header">
			<h3>Installation / Configuration</h3>
            </div>
            <!-- /widget-header -->
			<div class="widget-content">
			
			<div style="float: left; margin-right: 20px; margin-left: 5px;"><img src="img/mumble.png" width="100" alt="logo Mumble" />
			</div>
			
		<div style="margin-left: 125px;">
			<b>1. </b>Téléchargez et installez <a href="http://sourceforge.net/projects/mumble/" target="_blank">Mumble</a><br /><br />
			
			<b>2. </b>Suivez l’assistant audio pour configurer Mumble. A l’étape « Détection de l’Activité Vocale » choisissez « Appuyez pour parler » et assignez une touche de votre clavier pour l’ouverture du micro (par exemple: F2) ou choisissez une autre option et ajustez vos paramètres. Ignorez les étapes «&nbsp;Position Audio » et « Authentification ».<br /><br />

			<b>3. </b>Dans la fenêtre de connexion faites « ajouter nouveau... », complétez les champs avec les informations suivantes et cliquez sur «&nbsp;Ok&nbsp;»&nbsp;:
			
			<br /><br />
					
				<table class="table tableau">
                <tbody>
                  <tr>
                    <td><b>Nom</b></td>
                    <td>Algosphere - Accueil</td>
                  </tr>
                  <tr>
                    <td><b>Adresse</b></td>
                    <td>algosphere.mumble.vg</td>
                  </tr>
                  <tr>
                    <td><b>Port</b></td>
                    <td>50086</td>
                  </tr>
                  <tr>
                    <td><b>Nom d’utilisateur</b></td>
                    <td>votre identifiant Algosphère</td>
                  </tr>
                
                </tbody>
              </table>
			  
		
				<br />
				
			<p>Dans la fenêtre qui s'affiche cliquez sur "Oui".<br />
			Vous voilà sur le serveur vocal de l'Alliance :)
			<br />Survolez les différents salons de discussion avec votre souris pour voir leur description.</p>
   
        </div>
	</div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
			
			
</div>

<div class="span3">

	<div class="widget widget-table action-table">
				<div class="widget-header">
				<h3>Viewer</h3>
				</div>
				<!-- /widget-header -->
				<div class="widget-content">
					<iframe src="https://panel.verygames.net/viewer/mumble?service=2665&color=000000&font-size=14&font-family=Helvetica" style="border:0px solid; background-color:#ffffff; background-image: url(); margin: 10px;" name="tsViewer" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="300px" width="250px"></iframe>
				</div>
				<!-- /widget-content --> 
	</div>
			  <!-- /widget -->
		
		</div>
		
			  </div>
			  <!-- /row --> 
			</div>
			<!-- /container --> 
		  </div>
		  <!-- /main-inner --> 
		</div>
		<!-- /main -->

	<?php include("footer.php"); ?>
</body>
</html>
