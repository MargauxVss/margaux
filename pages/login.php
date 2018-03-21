<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <title>Inscription / Connection </title>
  <link rel="stylesheet" href="../style/reset.css">
  <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
