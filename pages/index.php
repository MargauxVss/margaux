    <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <title>Accueil</title> 
  <link rel="stylesheet" href="../style/reset.css">
  <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
</head>
<body>

  <?php include('./include/menu.php'); ?>


  <?php include('./include/formulaires.php'); ?>

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
  </div>-->
</div>
  <?php include('./include/footer.php'); ?>
  <script type="text/javascript" src="../js/script.js"></script>
</body>
</html>
