<fieldset>
		<legend>Ajouter un produit</legend>
			<form method="POST" action="index.php?page=recupProduit">
  	    		<p>
				<label for="designation"> Désignation : </label>
				<input type="text" name="designation" id="designation" maxlength="30" required>
				<br>
            	<label for="description"> Description : </label>
				<input type="text-area" id="description" name="description" rows='10' cols='60' placeholder="Description du produit">
				<br>
                <label for="prixHTT"> PrixHTT : </label>
				<input type="text" id="prixHTT" name="prixHTT">
                <br>
            	<input type="submit" value="Ajouter" name="btAjouter"/>
				</p>
			</form>
</fieldset>