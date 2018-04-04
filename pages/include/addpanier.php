<?php
    session_start();
    if(isset($_GET["id_article"])&&isset($_SESSION["user_id"])) {
       include("./db.php");
        $req = $bdd->prepare('INSERT INTO panier (user_id, id_article) VALUES (?,?)');
        $result = $req->execute(array($_SESSION['user_id'],$_GET['id_article']));

    }

header('Location:../bijoux.php');
exit;

?>