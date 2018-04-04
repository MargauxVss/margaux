<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <title>Piercings</title>
    <link rel="stylesheet" href="../style/reset.css">
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">





</head>
<body>
<?php

    include("./include/db.php");
    $SQL= $bdd->prepare("SELECT * FROM panier WHERE user_id = ?");
    $result = $SQL->execute(array($_SESSION['user_id']));
?>

<header>

    <?php include('./include/menu.php'); ?>







</header>




<main>
    <ul id="cart" class="list-group">

    <?php

        while($donnee=$SQL->fetch()) {
            $req= $bdd->prepare("SELECT * FROM products WHERE id=?");
            $result2=$req->execute(array($donnee['id_article']));
            $article=$req->fetch();
            ?>

            <li class="list-group-item">
                <span><?php echo $article['name'] ?></span>

                <button type="button" id="btn" class="btn btn-dark">
                    Supprimer
                </button>
            </li>



    <?php

        }

    ?>
    </ul>


</main>

<?php include('./include/footer.php'); ?>


</body>
</html>
