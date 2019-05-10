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
    <link rel="stylesheet" href="css/film.css">
    <link rel="stylesheet" href="css/animate.css">

</head>

<body>

    <!--//////////////////////////////  CONNECTION  BDD \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('Database.php');


$reponse = $bdd->query('SELECT * FROM film');
$repond = $bdd->query('SELECT * FROM personnage');
$req = "SELECT * FROM film, genre WHERE 'Description'='Action' and film.id_genre = genre.id_genre ";


?>

    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('header.php');?>

    <!--//////////////////////////////  HEADER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="header_films">
        <h1>NOS FILMS</h1>
        <div class="ligne">
            <img class="ligne_g fadeInLeft animated" src="images/ligne_g.png">
            <img class="ligne_d fadeInRight animated" src="images/ligne_d.png">
        </div>
    </div>

    <!--//////////////////////////////  LISTE GAUCHE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="row nopadding" id="liste_films">
        <div class="col-lg-3 col-md-4 col-sm-12 col-12">
            <div class="menu_films">
                <ul id="menu-accordeon">
                    <!--/////////////// FONCTION RECHERCHE\\\\\\\\\\\\\\\\-->
                    <form action="verif-form.php" method="get">
                        <input type="search" name="terme">
                        <input target="_blank" type="submit" name="s" value="Rechercher">
                    </form>
                    <!--/////////////// FIN FONCTION RECHERCHE\\\\\\\\\\\\\\\\-->

                    <?php

                     $req = "SELECT Description,id_genre FROM genre";
                     $reponse = $bdd->query($req);


                     while ($donnees = $reponse->fetch())
                    {
                    ?>

                    <li><a target="_blank" href="film2.php?id=<?php echo $donnees['id_genre']; ?>"
                            class="collapsible"><?php echo $donnees['Description']; ?></a>
                    </li>

                    <?php
                    }
                    $reponse->closeCursor(); // Termine le traitement de la requête
                    ?>
            </div>
        </div>

        <!--//////////////////////////////  MINIATURES FILMS DROITE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="col-lg-9 col-md-8 col-sm-12 col-12">
            <div class="liens_films fadeInUp animated">
                <div class="titre"> Nouveautés </div><br />

                <?php

            $reponse = $bdd->query('SELECT * FROM film');
            $repond = $bdd->query('SELECT * FROM personnage');

               while ($donnees = $reponse->fetch() and $donnees2 = $repond->fetch()){?>


                <a target="_blank" href="content.php?id=<?php echo $donnees['id_film'];?>"><img class="effect "
                        src="<?php echo $donnees['miniature'];?>">
                    <p class="jaquette"><?php echo $donnees['titre']; ?></p>
                </a>


                <?php }
        $reponse->closeCursor();
        $repond->closeCursor(); // Termine le traitement de la requête
        ?>
            </div>
        </div>

    </div>

    <!--//////////////////////////////  CAROUSEL SIEMA  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


    <!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('footer1.php');?>
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