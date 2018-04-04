<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8"/>
    <title>Accueil</title>
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" href="../js/script.js"></script>

</head>
<body>

<?php include('./include/menu.php'); ?>




<div id="page">


    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img class="image" src="../im/tatoo.jpg" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img class="image" src="../im/affiche_tatoo.png" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img class="image" src="../im/shopp.jpg" style="width:100%">
            <div class="text"></div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div>





    <div id="textindex">
        <h2>
            Welcome
        </h2>

        <p id="textacc">
            Le duo de Pited Skin, composée de Clélia et Margaux, est installée depuis Septembre 2005 dans l'hyper centre de Bordeaux après avoir acquis deux ans d'expériences auprès de pierceurs reconnus à Barcelone,
            les filles ont préférées revenir dans leur ville natale pour ouvrir à l' année leur studio de piercing.
        </p>
    </div>
</div>
<?php include('./include/footer.php'); ?>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
