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
    <link rel="stylesheet" href="css/film2.css">
    <link rel="stylesheet" href="css/animate.css">

</head>

<body>

    <!--//////////////////////////////  CONNECTION  BDD \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('Database.php');

$reponse = $bdd->query('SELECT * FROM film');
$repond = $bdd->query('SELECT * FROM personnage');
$repondez = $bdd->query('SELECT * FROM genre');

?>

    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('header.php');?>

    <!--//////////////////////////////  HEADER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


    <?php $req = "SELECT Description,id_genre FROM genre WHERE id_genre=".$_GET['id']."";
          $reponse = $bdd->query($req);
                    
        while ($donnees = $reponse->fetch())
        {
         ?>


    <div class="header_films">
        <h1>NOS FILMS</h1>
        <h2> Catégorie : <?php echo $donnees['Description']; ?></h2>
        <div class="ligne">
            <img class="ligne_g fadeInLeft animated" src="images/ligne_g.png">
            <img class="ligne_d fadeInRight animated" src="images/ligne_d.png">
        </div>
    </div>

    <?php }
    $reponse->closeCursor(); // Termine le traitement de la requête
    ?>

    <!--//////////////////////////////  MINIATURES FILMS DROITE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


    <div class="row nopadding" id="liste_films">

        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="liens_films fadeInUp animated">

                <?php

                $id = $_GET['id'];
                    $req2 = "SELECT * FROM genre,film WHERE genre.id_genre=$id AND film.id_genre = genre.id_genre";
                $reponse2 = $bdd->query($req2);

                    while ($donnees = $reponse2->fetch())
                 {?>


                <a target="_blank" href="content.php?id=<?php echo $donnees['id_film'];?>"><img class="effect "
                        src="<?php echo $donnees['miniature'];?>"></a>


                <?php }
        
        $repondez->closeCursor();
        $reponse2->closeCursor();
        $repond->closeCursor(); // Termine le traitement de la requête
        ?>
            </div>
        </div>
    </div>

    <div class="header_films">
        <a href="film.php">
            <h1>NOUVELLE RECHERCHE</h1><a>
                <div class="ligne">
                    <img class="ligne_g fadeInLeft animated" src="images/ligne_g.png">
                    <img class="ligne_d fadeInRight animated" src="images/ligne_d.png">
                </div>
    </div>


    <div class="espace"></div>
    <!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('footer2.php');?>

    <!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div><a id="cRetour" class="cInvisible" href="#"></a></div>



    <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
    <script src="js/siema.min.js"></script>
    <script src="js/film.js"></script>

</body>

</html>