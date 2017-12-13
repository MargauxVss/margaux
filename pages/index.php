<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8"/>
  <title></title>
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/script.js"></script>
</head>
<body>

<?php
try {
    $bdd = new PDO('mysql:host=localhost; dbname=labo_dev; charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur: '.$e->getMessage());
}

if (isset($_POST['envoyer'])) {
    $req = $bdd->prepare('INSERT INTO utilisateur (pseudo, password, mail) VALUES (?,?,?)');
    $result = $req->execute(array($_POST['pseudo'],$_POST['password'],$_POST['mail']));

}

if (isset($_POST['envoyer'])) {
    $req = $bdd->prepare('SELECT count (id) AS "nb", id FROM utilisateur WHERE mail = ? AND password = ?');
    $req->execute(array($_POST['password'],$_POST['mail']));

    $result = $req->fetch();

    if ($result['nb'] == 1) {
        session_start();
        $_SESSION['user_id'] = $result['id'];
    }
}


?>

<form action="" method="post">
    <div>
        <label>pseudo :</label>
        <input type="text" name="pseudo" />
    </div>
    <div>
        <label>mail :</label>
        <input type="email" name="mail" />
    </div>
    <div>
        <label>Password :</label>
        <input type="password" name="password"/>
    </div>
    <div>
        <input type="submit" name="envoyer" value="submit"/>
    </div>
</form>

</body>
</html>
