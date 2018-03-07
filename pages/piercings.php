<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <title>Piercings</title>
  <link rel="stylesheet" href="../style/reset.css">
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  <script type="text/javascript" src="../js/script.js"></script>
<<<<<<< HEAD

=======
 

   

    
>>>>>>> 45271012ea9e8ec0cdc08fb9756dbf444baa0f00
</head>
<body>

  <header>

     <?php include('./include/menu.php'); ?>

    <?php include('./include/formulaires.php'); ?>


<<<<<<< HEAD
<?php
echo('ok');
  $reponse = $bdd->query('SELECT * FROM `prix');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
 var_dump($donnees);
} ?>
=======

  </header>


  <main>

  
>>>>>>> 45271012ea9e8ec0cdc08fb9756dbf444baa0f00
  <div id="tab">
    <h2> Prix </h2>
    <div>
        <table id="prix">
          <tr id="tabtitle">
              <td> Piercing</td>
              <td> Prix </td>
          </tr>
          <tr>
              <td>Arcade </td>
              <td>à partir de 30 euros </td>
          </tr>
          <tr>
              <td> Arcade horizontale</td>
              <td>à partir de 40 euros </td>
          </tr>
          <tr>
              <td>Bridge </td>
              <td> à partir de 55 euros</td>
          </tr>
          <tr>
              <td> Conch (fond d'oreille)</td>
              <td> à partir de 45 euros</td>
          </tr>
          <tr>
              <td> Death( repli cartiliage) </td>
              <td>à partir de 45 euros </td>
          </tr>
          <tr>
              <td>Filet (langue ou lèvre) </td>
              <td> à partir de 50 euros</td>
          </tr>
          <tr>
              <td> Hélix (cartilage) </td>
              <td>à partir de 25 euros </td>
          </tr>
          <tr>
              <td>Langue </td>
              <td>à partir de 40 euros </td>
          </tr>
          <tr>
              <td> Lèvre (tour de bouche)</td>
              <td> à partir de 35 euros </td>
          </tr>
          <tr>
              <td> Lobe (oreille) </td>
              <td> à partir de 10 euros</td>
          </tr>
          <tr>
              <td> Microdermal (+ de 18 ans) </td>
              <td>à partir de 60 euros </td>
          </tr>
          <tr>
              <td> Nez</td>
              <td>à partir de 25 euros </td>
          </tr>
          <tr>
              <td> Nombril</td>
              <td> à partir de 40 euros</td>
          </tr>
          <tr>
              <td> Septum </td>
              <td> à partir de 50 euros</td>
          </tr>
          <tr>
              <td>Surface </td>
              <td>à partir de 45 euros </td>
          </tr>
          <tr>
              <td> Téton</td>
              <td>à partir de 45 euros </td>
          </tr>
          <tr>
              <td> Tragus/ repli cartilage</td>
              <td> à partir de 30 euros</td>
          </tr>
          <tr>
              <td> Traversée</td>
              <td>à partir de 50 euros </td>
          </tr>
          <tr>
              <td> Génitaux</td>
              <td> nous consulter </td>
          </tr>
        </table>

      <p id="tarif">Tous nos tarifs sont piercing et bijou compris.</p>
     </div>
   </div>
  </main>
  
  <?php include('./include/footer.php'); ?>

</body>
</html>
