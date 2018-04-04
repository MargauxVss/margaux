<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8"/>
    <title>Bijoux</title>
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../bijouxtemplate/css/heroix-features.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</head>
<body>
  <?php include('./include/menu.php'); ?>

  <?php include('./include/formulaires.php'); ?>

  <!-- Page Content -->
   <div class="container">

     <!-- Jumbotron Header -->
     <header class="jumbotron my-4">
       <h1 class="display-3">Bienvenue dans notre shop en ligne !</h1>
       <p class="lead"> Les bijoux sont fait mains par vos pierceurs. Ils sont destinés à décorer des piercings déjà cicatrisés et ne peuvent donc pas être utilisés en temps que bijoux de pose.  </p>
       <a href="#" class="btn btn-primary btn-lg"> Voir les prix du perçage > </a>
     </header>

     <!-- Page Features -->
     <div class="row text-center">

         <?php include("./include/db.php");
         $req1 = $bdd->prepare('SELECT * FROM products');
         $req1->execute();
         $result1 = $req1->fetchAll();
         foreach ($result1 as $r1) {
         ?>
         <!-- Page Features -->
         <div class="row text-center">
             <div class="col-lg-3 col-md-6 mb-4">
                 <div class="card">
                     <img class="card-img-top" src="<?php echo $r1['imagesrc']?>" alt="<?php echo $r1['alt']?>"/>
                     <div class="card-body">
                         <h4 class="card-title"> <?php echo $r1['name']?></h4>
                         <p class="card-text"> <?php echo $r1['description']?> </p>
                     </div>
                     <div class="card-footer">
                         <a href="#" class="btn btn-primary">Acheter / <?php echo $r['prix']?> € </a>
                     </div>
                 </div>
             </div>
         </div>
             <?php

         }

         ?>

     </div>
     <!-- /.row -->

   </div>
   <!-- /.container -->
   </div>



       <?php include('./include/footer.php'); ?>
  <script type="text/javascript" src="../script/gulpfile.js"></script>




</body>
</html>
