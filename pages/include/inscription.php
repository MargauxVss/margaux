<?php
if($_POST['confirmPassword'] == $_POST['password']){
    include("./db.php");
//inscription => rentrer utilisateur dans base de données
    if (isset($_POST['envoyer'])) {
        $req = $bdd->prepare('INSERT INTO user (pseudo, mail, password) VALUES (?,?,?)');
        $result = $req->execute(array($_POST['pseudo'],$_POST['mail'],md5($_POST['password'])));
    }
}

header('Location:../index.php');
exit;

?>