<?php
//inscription => rentrer utilisateur dans base de données
if (isset($_POST['envoyer'])) {
    $req = $bdd->prepare('INSERT INTO utilisateur (pseudo, password, mail) VALUES (?,?,?)');
    $result = $req->execute(array($_POST['pseudo'],$_POST['password'],$_POST['mail']));
}
?>