<?php session_start() ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Metropolis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css">
    <script src="javascript/js.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
</head>

<body>

<?php  include('Database.php');

$reponse = $bdd->query('SELECT * FROM film');
$repond = $bdd->query('SELECT * FROM personnage');

?>
    <!------------------------- NAVBAR -------------------------------------------->
    <?php include('header.php');?>
    <!------------------------- SLIDER -------------------------------------------->
    <main>
        <div id="slider">
            <figure>
                <img src="images/avengers.jpeg" alt=''>
                <img src="images/roilion.jpg" alt=''>
                <img src="images/dieu.jpg" alt=''>
                <img src="images/captain.jpeg" alt=''>
                <img src="images/50nuances.jpg" alt=''>
            </figure>
        </div>
        <!-------------------- FIN SLIDER ------------------------------------->

        <div class="espace"></div>
        <h3> Nos films actuels </h3>
        <div class="espace"></div>

        <div class="siema">

            <?php  $reponse = $bdd->query('SELECT * FROM film'); $repond = $bdd->query('SELECT * FROM personnage');
             while ($donnees = $reponse->fetch() and $donnees2 = $repond->fetch()){?>

            <a target="_blank" href="content.php?id=<?php echo $donnees['id_film'];?>"><img class="effect "
                    src="<?php echo $donnees['miniature'];?>"></a>
           
           
           <?php }
        $reponse->closeCursor();
        $repond->closeCursor(); // Termine le traitement de la requête
        ?>
        </div>



        <!------------------------ FIN SECTION AFFICHE CAROUSSEL ----------------------->

        <div class="espace"></div>

        <!---------------------------------- PARRALAX ----------------------------------->

        <div class="parallax-window" data-parallax="scroll" data-image-src="images/metropolis.jpg" alt=""></div>

        <!-------------------------------- FIN PARRALAX --------------------------------->

        <div class="espace"></div>

        <!------------------------------ DEBUT ALLOLINEMET --------------------------------->
        <div class="allolinemet">
            <img class="alloImg" src="images/cinemachezvous.jpg">
            <p class="alloTxt"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere voluptas, error quis
                laborum tenetur, ducimus dolorem perferendis architecto, quod minus incidunt harum maiores aspernatur
                fuga
                animi expedita ab. Veniam, reprehenderit? Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
                eveniet architecto reprehenderit doloremque adipisci corrupti recusandae ipsam in nam alias. Expedita
                eaque
                quod similique repudiandae totam excepturi fuga quam quis! Lorem ipsum dolor sit amet consectetur
                adipisicing elit. Minus ipsa tempora, vel tempore quas modi consectetur porro pariatur, perferendis
                libero
                maiores eius adipisci totam necessitatibus dolorum, iure architecto repellat omnis? Lorem ipsum dolor
                sit
                amet consectetur, adipisicing elit. Soluta, enim placeat? Soluta hic quisquam iste quo deserunt!
                Accusantium
                quisquam porro aperiam cum, voluptate maxime, quis soluta neque, similique expedita nisi.</p>
        </div>
        <!------------------------------------ FIN ALLOLINEMET ------------------------------->

        <div class="espace"></div>
        <div class="espace"></div>
        <!------------------------- FOOTER -------------------------------------------->
        <?php include('footer1.php');?>
        <?php include('footer2.php');?>
    </main>

    <!------------------------- SCRIPT -------------------------------------------->
    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
    <script src="js/siema.min.js"></script>
    <script src="js/film.js"></script>
</body>

</html>