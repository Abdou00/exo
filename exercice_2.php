<?php
	if (isset($_POST['login']) && isset($_POST['mdp'])){
		if (empty($_POST['login'])) echo "<p>Login non renseigné dans le formulaire !</p>\n";
		else {
			// Recherche dans la base de données
			include('connexion.inc.php');
			
			/* // Méthode de parcours de table en php.... Compliqué pour rien !!!
			$req = "SELECT * FROM authentification;";
			$result=mysqli_query($link,$req);
			$trouve=FALSE;
			$mdp=FALSE;
			while(($ligne=mysqli_fetch_array($result)) && (! $trouve)){
			if ($ligne[0]==$_POST['login']){
			$trouve=TRUE;
			if ($ligne[1]==md5($_POST['mdp'])){
			$mdp=TRUE;
			}
			}
			}
			if ($trouve && $mdp){
			$authentifie=TRUE;
			}
			*/
			
			// Méthode de recherche du login grâce à SQL
			$req = "SELECT * FROM authentification WHERE login='".$_POST['login']."' AND motDePasse='".md5($_POST['mdp'])."';";
			$result=mysqli_query($link,$req);
			if (mysqli_num_rows($result)==1){
				// if ($trouve && $mdp) echo "<p>Authentification r&eacute;ussie</p>\n";
				// else{
				// if ($trouve) echo "<p>Mot de passe incorrect.</p>\n";
				// else echo "<p>Login inconnu dans notre base de données.</p>\n";
			}
		}
	} else {
		echo "<p>Vous devez passser par le formulaire de saisie !!!</p>\n";
	}
?>
<form action="" method="post">
	<input type="text" name="login">
	<input type="text" name="mdp">
</form>
