<?php
  if (isset($_POST['prenom']) && isset($_POST['nom']) && isset($_POST['numcb']) && isset($_POST['crypto']))
	{
		echo '<h2> Cordonnées bancaire: </h2>';
		echo '<p>' . $_POST['nom'] . ' ' . $_POST['prenom'] . ', votre numéro de carte est: ' . $_POST['numcb'] . 'et le crypto est : ' . $_POST['crypto'] . '.';
		
		setcookie('nom', $_POST['nom'], time() + 10 * 60);
		setcookie('prenom', $_POST['prenom'], time() + 10 * 60);
		setcookie('numcb', $_POST['numcb'], time() + 10 * 60);
		setcookie('crypto', $_POST['crypto'], time() + 10 * 60);
	} else {
		if (isset($_COOKIE['prenom']) && isset($_COOKIE['nom']) && isset($_COOKIE['numcb']) && isset($_COOKIE['crypto']))
		{
			echo '<h2> Cordonnées bancaire: </h2>';
			echo '<p>' . $_COOKIE['nom'] . ' ' . $_COOKIE['prenom'] . ', votre numéro de carte est: ' . $_COOKIE['numcb'] . 'et le crypto est : ' . $_COOKIE['crypto'] . '.';
		} else {
			echo 'cordonnées inconnues';
		}
	}
?>
<form action="" method="post">
	<input type="text" name="nom">
	<input type="text" name="prenom">
	<input type="text" name="numcb">
	<input type="text" name="crypto">
	<input type="submit" value="Envoyer">
</form>
