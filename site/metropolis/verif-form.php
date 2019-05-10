<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link src="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/verif-form.css">
    <link rel="stylesheet" href="css/animate.css">

</head>

<?php include('header.php');?>

<?php

include('Database.php');

if (isset($_GET["s"]) AND $_GET["s"] == "Rechercher")
{
 $_GET["terme"] = htmlspecialchars($_GET['terme']); //pour sécuriser le formulaire contre les failles html
 $terme = $_GET['terme'];
 $terme = trim($terme); //pour supprimer les espaces dans la requête de l'internaute
 $terme = strip_tags($terme); //pour supprimer les balises html dans la requête
}

if (isset($terme))
{
 $terme = strtolower($terme);
 $select_terme = $bdd->query('SELECT * FROM film WHERE titre LIKE "'.$terme.'"');
 $select_terme->execute(array("%".$terme."%", "%".$terme."%"));
}
else
{
 $message = "Vous devez entrer votre requete dans la barre de recherche";
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Les résultats de recherche</title>
</head>

<body>
<div class="espace"></div>
<div class="espace"></div>
    <?php
  while($terme_trouve = $select_terme->fetch()) {
      ?>
    <h2> <?php echo $terme_trouve['titre'];?> </h2>
    <div class="espace"></div>
    <img class="imgFilm" src="<?php echo $terme_trouve['image'];?>">
    <div class="espace"></div>
    <div class="espace"></div>
    <p class="textFilm"> <?php echo $terme_trouve['description'];?> </p>
    <?php }
$select_terme->closeCursor();
?>
<div class="espace"></div>
<div class="espace"></div>

    <?php include('footer1.php');?>
    <?php include('footer2.php');?>
</body>

</html>