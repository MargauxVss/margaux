<?php
//connection utilisateur
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