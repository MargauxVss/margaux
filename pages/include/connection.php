<?php

//connection utilisateur
if (isset($_POST['envoyer'])) {
    include("./db.php");
    $req = $bdd->prepare('SELECT count(id) AS "nb", id FROM user WHERE pseudo = ? AND password = ?');
    $req->execute(array($_POST['pseudo'],$_POST['password']));

    $result = $req->fetch();
    if ($result['nb'] == 1) {
        session_start();
        $_SESSION['user_id'] = $result['id'];
    }
}
header('Location:../index.php');
exit;
?>

