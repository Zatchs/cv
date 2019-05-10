<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Realisateur</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" media="screen" href="css/realisateur.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
		integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
	
	<?php include('header.php');?>

       <!--//////////////////////////////  CONNECTION  BDD \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

       <?php include('Database.php');

if(isset($_GET['id'])){

$repond = $bdd->query('SELECT * FROM personnage WHERE id_personne='.$_GET['id'].' LIMIT 1');

while ($donnees2 = $repond->fetch()){
    
    ?>


	<!----------------------- NOM DU REALISATEUR ----------------------->
	<div class="espace"></div>


	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <p class="nom"> <?php echo $donnees2['personne']; echo ' ' .$donnees2['nom'];?> </p>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
			</div>
		</div>
	</div>
    <div class="espace"></div>
<!----------------------- IMAGE DU REALISATEUR ----------------------->
    <div class="container-fluid text-center">
		<div class="row">
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <img class="realisateur" src="<?php echo $donnees2['photo']; ?>">
			</div>
			<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
			</div>
		</div>
	</div>
    <div class="espace"></div>
    <div class="espace"></div>
<!----------------------- DESCRIPTION DU REALISATEUR ----------------------->

<div class="container-fluid text-center">
		<div class="row">
			<div class="col-xl-1 col-lg-2=1 col-md-1 col-sm-12 col-12">
			</div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                <p class="infos"> <?php echo $donnees2['infos']; ?> </p>
			</div>
			<div class="col-xl-1 col-lg-2=1 col-md-1 col-sm-12 col-12">
			</div>
		</div>
	</div>
    <div class="espace"></div>
<!----------------------- BIOGRAPHIE  DU REALISATEUR ----------------------->
    <div class="container-fluid text-center">
		<div class="row">
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                <p class="nom"> Biographie </p>
			</div>
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
			</div>
		</div>
	</div>
    <div class="espace"></div>

    <div class="container-fluid text-center">
		<div class="row">
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12">
			</div>
			<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-12">
                <p class="infos"> <?php echo $donnees2['bibliographie']; ?> </p>
			</div>
			<div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12">
			</div>
		</div>
	</div>
    <div class="espace"></div>
    <div class="espace"></div>


    <!--//////////////////////////////  FERMETURE PHP  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php }}
        $repond->closeCursor(); // Termine le traitement de la requête
        ?>
<!----------------------------- FOOTER ----------------------->

<?php include('footer1.php');?>
<?php include('footer2.php');?>

	<!----------------------------- SCRIPT ----------------------->
	<script src="js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
	<script src="java/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>

</body>

</html>
