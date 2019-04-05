<?php
include("header.php");

?>        
		
		<?php
		
			if(isset($_POST['achat_1']))
			{
				header('Location:amazon.php?achat_1=Acheter');
			}
		?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="JS/javascropt.js"></script>
	
		<div class="corps">
			<div class="centreage">
				<div class="Presentation">
					<label id="nomprenom">Leuh Miney</label>
					<br>
					<label id="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.</label>
					<br>
					
				</div>
				<div class="OeuvresTitle">
					<h1><center>Mes oeuvres</center></h1>
				</div>
				<div class="groscontainer">
					<div class="containergauche">
					
						<div id="Filters">
							<p>Filtrer par :</p>
						</div>
						
						<div class="Annees">
							<label id="anne">Annee</label>
							<?php
								$ann = $bdd->query('SELECT * FROM Annee');
								while ($annf = $ann->fetch())
								{?>
									<div id="<?php echo $annf['valannee']; ?>">
										<label id="labelcoche<?php echo $annf['idAnnee']; ?>"><?php echo $annf['valannee']; ?></label>
										<input type="checkbox" class="checkannee" id="<?php echo $annf['valannee']; ?>"/>
									</div><?php
								}?>
						</div>
						
						<div class="Theme">
							<label id="them">Theme</label>
							<?php
								$tem = $bdd->query('SELECT * FROM Theme');
								while ($temf = $tem->fetch())
								{?>
									<div id="<?php echo $temf['valtheme']; ?>">
										<label id="labeltheme<?php echo $temf['idTheme']; ?>"><?php echo $temf['valtheme']; ?></label>
										<input type="checkbox" class="checktheme" id="<?php echo $temf['valtheme']; ?>"/>
									</div><?php
								}?>
							
						</div>
					</div>
					
					<div class="containercentre">
						<div class="Produit">
							<form method="POST" id="chosepintur">
								
								<label>Test d'une image.</label>
								<br>
								<label>Ceci est un test d'une description d'une oeuvre</label>
								<br>
								<input type="submit" name="achat_1" value="Acheter"/>
								
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
<?php
include("footer.php");
?>