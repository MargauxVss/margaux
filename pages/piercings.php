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

  <header>

     <?php include('./include/menu.php'); ?>

    <?php include('./include/formulaires.php'); ?>





  </header>


  <main>
  <div id="tab">
    <h2> Prix </h2>

      <table id="prix">
          <tr id="tabtitle">
              <td> Piercing </td>
              <td> Prix </td>
          </tr>

        <?php include("./include/db.php");

        $req = $bdd->prepare('SELECT * FROM test');
        $req->execute();
        $result = $req->fetchAll();

        foreach ($result as $r) {

            ?>
            <tr>
                <td><?php echo $r['piercing']?> </td>
                <td> prix à partir de <?php echo $r['prix']?> euros</td>
            </tr>
        <?php

        }

        ?>

</table>
      <p id="tarif">Tous nos tarifs sont piercing et bijou compris.</p>
   </div>
  </main>
  
  <?php include('./include/footer.php'); ?>

</body>
</html>
