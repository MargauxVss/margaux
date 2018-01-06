
<!-- formulaire d'inscription -->
<form action="inscription.php" method="post" style="border: 1px solid black; width: 120px; text-align: center;">
    <h2> Inscription </h2>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Pseudo :</label>
        <input type="text" name="pseudo" />
    </div>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Mail :</label>
        <input type="email" name="mail" />
    </div>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Password :</label>
        <input type="password" name="password"/>
    </div>
    <br/>
    <div>
        <input type="submit" name="envoyer" value="S'inscrire"/>
    </div>
</form>

<br/>

<!-- formulaire de connection -->
<form action="connection.php" method="post" style="border: 1px solid black; width: 120px; text-align: center;">
    <h2> Connexion </h2>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Pseudo :</label>
        <input type="text" name="pseudo" />
    </div>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Mail :</label>
        <input type="email" name="mail" />
    </div>
    <div>
        <label style="font-size: small ; font-family: "verdana", sans-serif;">Password :</label>
        <input type="password" name="password"/>
    </div>
    <br/>
    <div>
        <input type="submit" name="envoyer" value="Se connecter"/>
    </div>
</form>
