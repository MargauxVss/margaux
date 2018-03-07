<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <title>Tatouages</title>
  <link rel="stylesheet" href="../style/reset.css">
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/script.js"></script>
</head>

<body>

  <?php include('./include/menu.php'); ?>

  <?php include('./include/formulaires.php'); ?>


	<header class="jumbotron my-4">
       <h1 class="display-3">Bienvenue dans mon univers !</h1>
       <p class="lead"> Les bijoux sont fait mains par vos pierceurs. Ils sont destinés à décorer des piercings déjà cicatrisés et ne peuvent donc pas être utilisés en temps que bijoux de pose.  </p>
       <a href="#" class="btn btn-primary btn-lg"> Voir les prix > </a>
    </header>

     <div class="row text-center">

       <div class="col-lg-3 col-md-6 mb-4">
       	<div class="card">
           <img class="card-img-top" src="../im/im1.JPEG" alt="Septum - anneau en laiton">
           <div class="card-body">
             <h4 class="card-title"> Septum - anneau en laiton</h4>
             <p class="card-text">Cette cloison unique est fait de laiton et orné de petites boules en laiton. <br/>pour le nez percé.<br/> peut être porté sur l'oreille <br/>La barre est de 1 mm. 18 Gauge.<br/>Bague intérieure: 8mm<br/>sans nickel. </p>
           </div>
           <div class="card-footer">
             <a href="#" class="btn btn-primary">Acheter / 8.90 €</a>
           </div>
       </div>
    

		<p>Vous pouvez dès à présent voir nos dessins. Nous proposons différents choix, allants du plus sombre au plus coloré, autant pour les hommes que pour les femmes. Nos tatoueurs sont disponibles du Mardi au Vendredi de 9h à 17h</p>
	</div>

	<div id="top">
		
	</div>

	<div id="neb">
		<p>Un tatouage en noir et blanc ? ........</p>
	</div>

	<div id="couleur">
		<p>Comme vous pouvez le remarquer, les tatouages en couleurs sont appréciés à la même valeur que ceux en noir et blanc. .......</p>
	</div>

	<div id="rdv">
		<p>Vous souhaitez prendre un rendez-vous ? N'attendez pas et venez en parler avec nous</p>
	</div>




  <?php include('./include/footer.php'); ?>

</body>

</html>
