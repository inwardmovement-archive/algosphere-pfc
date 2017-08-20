<!DOCTYPE html>
<html>
<head>
	<title>Algosphère - Centres d'intérêt</title>
	<?php include("head.php"); ?>
</head>

<body>

	<?php $menucourant = 'centresdinteret'; ?>
	<?php include("header.php"); ?>
	<?php include("menuprincipal.php"); ?>
	
		<div class="main">
		  <div class="main-inner">
			<div class="container">
			  <div class="row">
	 		
 <div class="span3">

		  <div class="widget widget-table action-table">
            <div class="widget-header">
			<h3>Liste</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
 					<ul class="blocklist">
						<li><a href="">CI 1</a></li>
						<li><a href="">CI 2</a></li>
						<li><a href="">CI 3</a></li>
						<li><a href="">.</a></li>
						<li><a href="">.</a></li>
						<li><a href="">.</a></li>

					</ul>
            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->
		  
</div>
        <!-- /span6 -->
		
<div class="span6">
			
			    <!-- /widget -->
          <div class="widget">
            <div class="widget-header">
			<h3>Diagramme</h3>
            </div>
            <!-- /widget-header -->
			<div class="widget-content">
              <canvas id="area-chart" class="chart-holder" height="250" width="538"> </canvas>
              <!-- /area-chart --> 
            </div>
			
            <!-- /widget-content --> 
          </div>
          <!-- /widget --> 
			
			
</div>
		
<div class="span3">
		
		<div class="widget widget-table action-table">
            <div class="widget-header">
			<h3>Nouveau</h3>
            </div>
            <!-- /widget-header -->
            <div class="widget-content">
				 <h6 class="bigstats2">Pour créer un centre d'intérêt, utiliser le modèle ci-dessous.</h6>
				 
				 	<ul class="blocklist">
						<li><a href="https://docs.google.com/document/d/1vofY4Dnsg_2lAkrAv0G-CeNy2K-LGv89ohFJab_rFh8/edit" target="_blank" style="text-align: center;"><i class="fa fa-fw fa-file-o"></i> Centre d'intérêt (modèle)</a></li>
					</ul>

            </div>
            <!-- /widget-content --> 
          </div>
          <!-- /widget -->

</div>
        <!-- /span3 --> 
		
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
