<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"><a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a><a class="brand">Algosphère - Plateforme collaborative</a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
	
			<!-- boutons droite -->
		  
				<a class="<?php if($menucourant!='portail'){echo 'btn btn-info hide';} else{echo 'btn btn-info';}?>"  href="javascript:void(0);" style="margin-right: 10px;" onclick="javascript:introJs().setOption('showBullets', false).start();">Visite guidée</a>
				
				<a data-step="7" data-intro="Cliquez ici pour retourner sur le <b>site public</b> pour consulter la communication officielle publique de l'Alliance." data-position='left' class="btn btn-success" href="../" style="margin-right: 10px;">Site public</a>
				
				<a class="btn btn-danger" href="../">Déconnexion</a>
   
        </ul>
				<form class="navbar-search pull-right">
					<input id="recherche" type="text" class="search-query" style="width: 150px; margin-right: 5px;" placeholder="Recherche" tabindex=1>
				</form>
				
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->