<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
    <title>Accueil</title>
</head>

<body>
    <?php include('header.php'); ?>
    <!-- PREMIERE PAGE -->
    <div class="espace"></div>
    <div class="espace"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <img class="grandlogo" src="img/grandlogo1.png">
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slogan1">
                    <h1 class="ml4">
                        <span class="letters letters-1">L'avenir appartient à ceux qui codent tôt</span>
                        <span class="letters letters-2">My code academy</span>
                        <span class="letters letters-3">Le café c'est la vie !</span>
                    </h1>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="https://www.youtube.com/embed/UGtKGX8B9hU" target="_blank"><img class="iconevideo"
                        src="img/iconevideo.png"></a>
            </div>
        </div>
    </div>

    <!-- DEUXIEME PAGE -->
    <div class="container-fluid">
    <div class="jumbotron paral paralsec">
        <div class="page2rouge">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    </div>
                </div>
                <div class="display-3">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="display-3">IN CODE WE TRUST</h1>
                    </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">Découvrez nos talents d'aujourd'hui et de demain</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="lead">
                            <a class="btn btn-dark" href="https://talents.simplon.co/simploniens" role="button">Voir les profils</a>
                        </p>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TROISIEME PAGE -->
    <div class="container-fluid">
        <div class="row tableau">
            <div class="col-md-4">
                <div class="programme">
                    <h2>PROGRAMME</h2>
                    <a href="programme.php" class="btn btn-danger" role="button" aria-pressed="true">Cliquez ici</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="candidater">
                    <h2>CANDIDATER</h2>
                    <a href="candidater.php" class="btn btn-danger" role="button" aria-pressed="true">Cliquez ici</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="infos">
                    <h2>INFOS ET CONTACT</h2>
                    <a href="infos.php" class="btn btn btn-danger" role="button" aria-pressed="true">Cliquez ici</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="actualites">
                    <a href="actualites.php">
                        <h1>ACTUALITES</h1>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- QUATRIEME PAGE -->
    <div class="page4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="nous">
                        <img class="imageactu" src="img/nous.jpg">
                        <h4>Un homme code chez Simplon</h4>
                        <p>Un homme apprend à coder chez Simplon.. Il est difficile de concevoir qu'un homme ou une
                            femme normalement constitué puisse supporter les exigences de Romain, un formateur tyranique
                            qui n'hésite pas à torturer les élèves.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nous">
                        <img class="imageactu" src="img/cafe.jpg">
                        <h4>Le café</h4>
                        <p>Le café.. Outil indispensible d'un Simplonien. Ca se boit, ça se mange, ça se mastique. Bref,
                            n'hésitez jamais à en abuser pour votre santé physique et mentale..</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="nous">
                        <img class="imageactu" src="img/tombe.jpg">
                        <h4>La carrière d'un codeur chez Simplon</h4>
                        <p>L'image d'un Homme parmi d'autres. Le destin des hommes et des femmes qui décident de coder à
                            Simplon Charleville-Mézières..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>
    <script type="text/javascript" src="java.js"></script>
</body>

</html>
