<?php session_start() ?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Index</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/connexion.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
	
	<?php include('header.php');
	
	include('Database.php');
	if (!$SESSION['admin']) {
		header('location:login.php');
	}
	$req = $db->query('SELECT * FROM users');
	$user = $req->fetch();

	?>
	

<div class="container-fluid">
	
		<div class="row titreG">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" id="1">
				<h2> Connexion au compte </h2>
			</div>
		</div>
	</div>
	<div class="espace"></div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"> </div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<form action="login.php" methid="POST">	
					<div class="form-group">
						<label for="texte">Nom de compte : </label>
						<input id="texte" type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label for="texte">Mot de passe: </label>
						<input id="texte" class="form-control" name="password">
					</div>
				</form>
				<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"> </div>
			</div>

		</div>
	</div>
    <!--------- BOUTON GESTION DE COMPTE ---------->
	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"> </div>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
				<button type="submit" class="btn btn-primary btn-lg ">Se connecter</button>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"></div>
		</div>
	</div>
	<div class="espace"></div>

    <?php include('footer.php');?>

    <!----------------------------- SCRIPT ----------------------->
	<script src="js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
	<script src="java/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
    
</body>
</html>