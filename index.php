<?php
	if(isset($_GET['error'])){
		$errors = $_GET['error'];
		if ($errors == 0) {
			echo 'Enregistre avec succes ... ✅';
		}
		else if ($errors == 1) {
			echo '⚠️ Informations incompletes, veillez les completer et reessayer ... ';
		} 
		else if ($errors == 3) {
			echo '⚠️ Mot de passe ou nom d\'utilisateur incorrect, veillez reessayer ... ';
		}
		else if ($errors == 2) {
			echo '⚠️ Erreur systeme, veillez reessayer ou attendre ulterieurement ... ';
		}  
		else echo '⚠️ Erreur inconnue hhhh ';
	}
	if (isset($_SESSION['u_id'])) {
		header('Location: index2.php');
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/css/style.css">
    <title>E-Learning</title>
</head>
<body>
    <h2>Plateforme E-learning</h2>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action= "actions/enregistrement.php" enctype="multipart/form-data" method="post">
            <h1>Create Account</h1>
			<div class="social-container">
			</div>
			<input type="text" name="nom" placeholder="Nom" required/>
			<input type="text" name="prenom" placeholder="Prénom" required/>
			<input type="password" name="mdp" placeholder="Mot de passe"required />
			<input type="text" name="cne" placeholder="CNE" required/>
			<input type="text" name="adrss" placeholder="Adrèsse" required/>
			<input type="text" name="ville" placeholder="Ville" required/>
			<input type="email" name="mail" placeholder="Email" required/>
			<input type="file" name="photo"  accept=".jpg, .jpeg, .png" required/>
			<button>Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="actions/connexion.php" method="post">
			<h1>Sign in</h1>
			<div class="social-container">
			</div>
			<input type="text" name="nom" placeholder="Nom d'ulisateur" required />
			<input type="password" name="mdp" placeholder="Mot de passe" required/>

			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Vous avez deja un compte!</h1>
				<p>Veillez juste vous authentifier</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Vous n'avez pas de compte!</h1>
				<p>Veillez vous enregistrer</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer>
<script src="styles/js/script.js"></script>
</body>
</html>