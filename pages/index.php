<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <title>Accueil</title>
  <link rel="stylesheet" href="../style/reset.css">
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <style>
    #textindex
    {
      width: 800px; text-align: center; margin-top: 50px;
    }
    #textindex h2
    {
      text-decoration: underline overline #FF3028;
    }
    #textindex p
    {
      font-size: medium;
    }
  </style>
</head>
<body>

<<<<<<< HEAD
			<ul>
				<li><a href="Page/bijoux.php">Bijoux</a></li>
				<li><a href="Page/piercing.php">Piercing</a></li>
				<li><a href="tattoos.php">Tatouages</a></li>
				<li><a href="Page/tarifs.php">Tarifs</a></li>
			</ul>
	</header>
=======
  <?php include('./include/menu.php'); ?>
>>>>>>> 5bb6d1710306e03093236f2dd17f166a25fe3954

  <?php include('./include/formulaires.php'); ?>

  <div id="page">
  			<img id="imageprin" src="../im/peircing.png" alt=" image principale" />
  </div>

  <div id="textindex">
      <h2>
        Welcome
      </h2>

      <p>
        L' équipe de Pited Skin, c'est à dire Kévin, Clélia et Margaux sont installés depuis Septembre 2005 dans l'hyper centre de Bordeaux après avoir acquis deux ans d'expériences auprès de tatoueurs et pierceurs reconnus à Barcelone,
        l'équipe a préférée revenir dans sa ville natale pour ouvrir à l' année leur studio de tatouage et de piercing.
      </p>
  </div>

  <?php include('./include/footer.php'); ?>

  <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
