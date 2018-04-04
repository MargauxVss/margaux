<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8"/>
    <title>Mentions légales</title>
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
<?php include('./include/menu.php'); ?>


<!-- Page Content -->
<div class="container">
    <?php include("./include/db.php");
         $req1 = $bdd->prepare('SELECT * FROM products WHERE id = ?');
    $req1->execute(array($_GET["id"]));
    $result1 = $req1->fetchAll();
    foreach ($result1 as $r1) {
    ?>
    <div id="uniqueimg">
        <img src="<?php echo $r1['imagesrc']?>" alt="<?php echo $r1['alt']?>"/>
    </div>
    <div id="uniqueproduct">
        <h2> <?php echo $r1['name']?></h2>
        <p> <?php echo $r1['description']?> </p>
    </div>
    <div id="acheter">
        <a  href="./include/addpanier.php?id_article=<?php echo $r1["id"] ?>" class="btn btn-primary">Acheter / <?php echo $r1['prix']?> € </a>
    </div>

    <?php

    }

    ?>




    <!-- /.container -->
</div>



<?php include('./include/footer.php'); ?>
<script type="text/javascript" src="../script/gulpfile.js"></script>

</body>
</html>