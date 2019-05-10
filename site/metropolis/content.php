<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Content</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Animate CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <!--  pour la police des titres  -->
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <!-- pour les autres textes -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <!--mon CSS -->
    <link rel="stylesheet" href="css/content.css">

</head>

<body>
<!--//////////////////////////////  MySQL  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

<?php include('Database.php');

if(isset($_GET['id'])){
$reponse = $bdd->query('SELECT * FROM film, genre, personnage WHERE id_film='.$_GET['id'].' and film.id_genre= genre.id_genre and film.id_personne= personnage.id_personne ');


while ($donnees = $reponse->fetch()){
    
    ?>

<!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
    
    <?php include('header.php');?>
    
<!--//////////////////////////////  CONTENU  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <main id="content">

<!--//////////////////////////////  TITRE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="hoofd">
            <h1 class="text-uppercase"><?php echo $donnees['titre']; ?></h1>
            <div class="fleches_2">
                <img class="fleche_g animated fadeInLeft" src="images/ligne_g.png">
                <img class="fleche_d animated fadeInRight" src="images/ligne_d.png">
            </div>
        </div>

        <!-- pour l'image du film -->
        <div class="media shadow-lg p-3 mb-5 bg-light rounded">
            <img class="film" src="<?php echo $donnees['image']; ?>" class="mr-3" alt="...">
        </div>

<!--////////////////////////////// DESCRIPTION DU FILM \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <p class="text-center bg-light texteR"><?php echo $donnees['description'];?>
        </p>

<!--//////////////////////////////  pour la partie récap d'infos et la bande annonce \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="row">
            <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1"></div>
            <div class="col-10 col-sm-10 col-md-10 col-lg-4 col-xl-5">

                <div class="list-group">
                    <a href="realisateur.php?id=<?php echo $donnees['id_film'];?>" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="mb-1">Réalisateur</h4>
                        </div>
                        <p class="mb-1"><?php echo $donnees['personne']; echo ' ' .$donnees['nom'];?></p> <!-- On change le réalisateur -->
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h4 class="mb-1">Genre</h4>
                        </div>
                        <p class="mb-1"><?php echo $donnees['Description'];?>.</p>
                        <small class="text-muted"></small>
                    </a>
                </div>
            </div>

            <div class="col-1 col-sm-3 col-md-3 col-lg-1 col-xl-1"></div>
            <div class="col-8 col-sm-8 col-md-8 col-lg-4 col-xl-4">
            <h3>Bande annonce</h3>
                <div class="shadow-lg p-3 mb-5 bg-light rounded" src="" height="250px" width="450px"> <?php echo $donnees['video'];?>
            </div>

            <div class="col-2 col-sm-2 col-md-2 col-lg-1 col-xl-1"></div>

        </div>

    </main>

    <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>

<!--//////////////////////////////  SCRIPT \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    <script>
        $('.m-nav-toggle').click(function (e) {
            e.preventDefault();
            $('#Navbar').toggleClass('is-open');
        })

        document.addEventListener('DOMContentLoaded', function () {
            window.onscroll = function (ev) {
                document.getElementById("cRetour").className = (window.pageYOffset > 100) ? "cVisible" :
                    "cInvisible";
            };
        });

        $('#sidebarCollapse').click(function (e) {
            e.preventDefault();
            $('#sidebar').toggleClass('active');
        })

        function openModal() {
            document.getElementById("modal").style.top = "0px";
        }

        function closeModal() {
            document.getElementById("modal").style.top = "-780px";
        }
    </script>

<!--//////////////////////////////  FERMETURE PHP  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php }}
        $reponse->closeCursor(); // Termine le traitement de la requête
        ?>

<!--//////////////////////////////  FOOTER \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('footer1.php');?>
    <?php include('footer2.php');?>
</body>

</html>