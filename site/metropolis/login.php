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
	
<?php 
	$_POST['username'];
    include('header.php');
    include('Database.php');
    
	if(isset($_POST) AND !empty($_POST)) {
		if (!empty(htmlspecialchars($_POST['username'])) AND !empty(htmlspecialchars($_POST['password']))) {

	        $req = $db->prepare('SELECT * FROM users WHERE username = :username AND password = :password');
	        $req->execute([
                'username' => $_POST['username'],
                'password' => $_POST['password']
    ]);
    $user = $req->fetchObject();
    if ($user) {
        $_SESSION['admin'] = $_POST['username'];
        header('location:index.php');
    }
    else{
        $error = 'Identifiant incorrect';
    }
}else {
		$error = 'Veuillez remplir tous les champs !';
	}
}
if (isset($error)){
    echo '<div class="error">'. $error .'</div>';
}

	?>
	
<div class='error'></div>
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
                <form action="login.php" method="POST">
					<div class="form-group">
						<label for="texte">Nom de compte : </label>
						<input id="texte" type="text" class="form-control" name="username"/>
					</div>
					<div class="form-group">
						<label for="texte">Mot de passe: </label>
						<input id="texte" type="password" class="form-control" name="password"/>
					</div>
				<center><div class="col-xl-4 col-lg-4 col-md-3 col-sm-12 col-12"> 
                <button type="submit" class="btn btn-primary btn-lg ">Se connecter</button>
                </div></center>
                </form>
			</div>

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