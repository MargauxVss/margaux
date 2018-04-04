<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Inscription / Connection </title>
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script type="text/javascript" src="../js/script.js"></script>

</head>

<body>


    <?php include('./include/menu.php'); ?>



<div id="form">


    <!-- formulaire d'inscription -->
    <form id="forminsc" action="./include/inscription.php" method="post"  >
        <h2> Inscription </h2>
        <div>
            <label style="font-size: small ; font-family: "verdana" ; , sans-serif;">Pseudo :</label>
            <input type="text" name="pseudo" placeholder="ex : Théo" maxlength="12" />
        </div>
        <div>
            <label style="font-size: small ; font-family: "verdana", sans-serif;">Mail :</label>
            <input type="email" name="mail" placeholder="ex : Théo.Jean@ynov.com" maxlength="25"/>
        </div>
        <div>
            <label style="font-size: small ; font-family: "verdana", sans-serif;">Password :</label>
            <input type="password" name="password" placeholder="*********" maxlength="12"/>
        </div>
        <div>
            <label style="font-size: small ; font-family: "verdana", sans-serif;">Confirm Password :</label>
            <input type="password" name="confirmPassword" placeholder="*********" maxlength="12" size />
        </div>
        <br/>
        <div>
            <input type="submit" name="envoyer" value="S'inscrire"/>
        </div>
    </form>

    <br/>



    <!-- formulaire de connection -->
    <form id="formcon" action="./include/connection.php" method="post" style="border: 1px solid black; height: 150px; width: 400px; text-align: center;">
        <h2> Connexion </h2>
        <div>
            <label style="font-size: small ; font-family: "verdana", sans-serif;">Pseudo :</label>
            <input type="text" name="pseudo" placeholder="ex : Théo" />
        </div>
        <div>
            <label style="font-size: small ; font-family: "verdana", sans-serif;">Password :</label>
            <input type="password" name="password" placeholder="*********"/>
        </div>

        <?php if (isset($_GET["message"])) {
            if ( $_GET["message"] == '1') {
                ?>
                <div class="alert alert-danger" role="alert">
                    Mot de passe ou identifiant incorrect !
                </div>

                <?php

            }
        }

        ?>

        <br/>
        <div>
            <input type="submit" name="envoyer" value="Se connecter"/>
        </div>
    </form>

</div>

<div id="foot">

    <?php include('./include/footer.php'); ?>

</div>



</body>

</html>
