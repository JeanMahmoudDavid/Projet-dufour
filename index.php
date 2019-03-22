<?php
include("header.php");
?>        
		
		<?php
		
			if(isset($_POST['achat_1']))
			{
				header('Location:amazon.php?achat_1=Acheter');
			}
		?>
		
		<div class="teute">
		
		
		</div>
	
		<div class="corps">
			<div class="centreage">
				<div class="Presentation">
					<label id="nomprenom">Leuh Miney</label>
					<br>
					<label id="lorem">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus tortor, dignissim sit amet, adipiscing nec, ultricies sed, dolor. Cras elementum ultrices diam. Maecenas ligula massa, varius a, semper congue, euismod non, mi. Proin porttitor, orci nec nonummy molestie, enim est eleifend mi, non fermentum diam nisl sit amet erat. Duis semper. Duis arcu massa, scelerisque vitae, consequat in, pretium a, enim. Pellentesque congue. Ut in risus volutpat libero pharetra tempor. Cras vestibulum bibendum augue. Praesent egestas leo in pede. Praesent blandit odio eu enim. Pellentesque sed dui ut augue blandit sodales. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aliquam nibh. Mauris ac mauris sed pede pellentesque fermentum. Maecenas adipiscing ante non diam sodales hendrerit.</label>
				</div>
				
				<div class="OeuvresTitle">
					<h1><center>Mes oeuvres</center></h1>
				</div>
				
				
				<div id="Filters">
					
					<p>Filtrer par :</p>
				</div>
				
				
				<div class="Annees">
					<label id="anne">Annee</label>
					<br>
				
					<label name="coche">2017</label>
					<input type="checkbox" name="coche"/>
					
					<label name="coche1">2018</label>
					<input type="checkbox" name="coche1"/>
					
					<label name="coche2">2019</label>
					<input type="checkbox" name="coche2"/>
				</div>
				
				<br>
				
				<div class="Theme">
					<label id="them">Theme</label>
					<br>
					
					<label name="cochethem">Animaux</label>
					<input type="checkbox" name="cochethem"/>
					
					<label name="cochethem1">Abstrait</label>
					<input type="checkbox" name="cochethem1"/>
					
					<label name="cochethem2">Figurines</label>
					<input type="checkbox" name="cochethem2"/>
				</div>
				
				<div class="Produit">
				<form method="POST" id="chosepintur">
					
					<label>Test image</label>
					<br>
					<label>Test text oeuvre</label>
					<br>
					<input type="submit" name="achat_1" value="Acheter"/>
					
				</form>
			</div>
			
		</div>
		
		
<?php
include("footer.php");
?>