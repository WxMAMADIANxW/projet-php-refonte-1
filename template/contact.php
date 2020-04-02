
<section>
	<h2>Contact</h2>
		<form action="" method="post">
			<label for="nom">Votre Nom</label>
			<input type="text" name"nom" id="nom" placeholder="nom" required aria-required="true" autofocus="true">

			<label for="prenom">Votre Prénom</label>
			<input type="text" name"nom" id="prenom" placeholder="prénom" required aria-required="true">

			<label for="prenom">Votre Mail</label>
			<input type="email" name"mail" id="prenom" placeholder="mail" required aria-required="true">
			
			<label for="phone">Votre Numero de téléphone</label>
			<input type="number" name"phone" id="phone" placeholder="Numéro de téléphone" required aria-required="true" autofocus="true">

			<label for="etudes">Vos études</label>
			<input type="text" name"etudes" id="etudes" placeholder="etudes" required aria-required="true" autofocus="true">


			<label for="cursus">Le cursus de votre choix</label>
			<input type="text" name"cursus" id="cursus" placeholder="cursus" required aria-required="true" autofocus="true">

			<label for="campus">Le campus de votre choix</label>
			<input type="text" name"campus" id="campus" placeholder="campus" required aria-required="true" autofocus="true">

			<label for="formation">La formation de votre choix</label>
			<input type="text" name"formation" id="formation" placeholder="formation" required aria-required="true" autofocus="true">

			<label for="niveau">Le niveau de votre choix</label>
			<input type="text" name"niveau" id="niveau" placeholder="niveau" required aria-required="true" autofocus="true">

			
			
			
			<label for="message">Votre message de Motivation</label>
			<textarea name="message" id="" cols="30" rows="10" placeholder="Rédiger ici votre message de motivation"></textarea>
			<input type="submit" value="Envoyer">
			
		</form>
		<?php
			include_once('./src/footer.php');
		?>
</section>