<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <title>Inscription / Connection </title>
  <link rel="stylesheet" href="../style/reset.css">
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/script.js"></script>
</head>

<body>

<header><
    <?php include('./include/menu.php'); ?>
</header>


<div id="form">


<!-- formulaire d'inscription -->
<form id="forminsc" action="inscription.php" method="post" style="border: 1px solid black; width: 120px; text-align: center;">
    <h2> Inscription </h2>
    <div>
        <label style="font-size: small ; font-family: "verdana" ; , sans-serif;">Pseudo :</label>
        <input type="text" name="pseudo" />
    </div>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Mail :</label>
        <input type="email" name="mail" />
    </div>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Password :</label>
        <input type="password" name="password"/>
    </div>
    <br/>
    <div>
        <input type="submit" name="envoyer" value="S'inscrire"/>
    </div>
</form>

<br/>

<!-- formulaire de connection -->
<form id="formcon" action="connection.php" method="post" style="border: 1px solid black; width: 120px; text-align: center;">
    <h2> Connexion </h2>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Pseudo :</label>
        <input type="text" name="pseudo" />
    </div>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Mail :</label>
        <input type="email" name="mail" />
    </div>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Password :</label>
        <input type="password" name="password"/>
    </div>
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
