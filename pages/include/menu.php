

		<head>
			 <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
		</head>
          <header class="menu" style="text-align: center;">

              <?php
              if(isset($_SESSION['user_id'])){
              ?>

                  <a href="./panier.php"><img id="panier" src="../im/panier.png"/></a>

              <?php
                    }

                    ?>

              <img id="logo" src="../im/logo.png" alt="logo de pited skin"/>

              <ul id="menu" style="list-style-type: none;">

                 <li style="display: inline; padding: 0 0.5em; background: #000 ; border: 1px solid #000000; font: 1em "Trebuchet MS",Arial,sans-serif ;">
                  <a href="index.php" style=" text-decoration: none;">Accueil</a>
                 </li>

                  <li style="display: inline; padding: 0 0.5em; background: #000 ; border: 1px solid #000000; font: 1em "Trebuchet MS",Arial,sans-serif ;">
                    <a href="bijoux.php" style=" text-decoration: none;">Bijoux</a>
                  </li>

                  <li style="display: inline; padding: 0 0.5em; background: #000 ; border: 1px solid #000000; font: 1em "Trebuchet MS",Arial,sans-serif ;">
                    <a href="piercings.php" style=" text-decoration: none;">Piercings</a>
                  </li>

                  <li style="display: inline; padding: 0 0.5em; background: #000 ; border: 1px solid #000000; font: 1em "Trebuchet MS",Arial,sans-serif ;">
                    <a href="contacts.php" style=" text-decoration: none;">Contacts</a>
                  </li>
                    <?php
                    if(isset($_SESSION['user_id'])){
                        ?>
                        <li style="display: inline; padding: 0 0.5em; background: #000 ; border: 1px solid #000000; font: 1em "Trebuchet MS",Arial,sans-serif ;">
                          <a href="./include/deconnexion.php" style=" text-decoration: none;"> Déconnexion </a>
                          </li>
                        <?php
                    }
                    else{
                        ?>
                   <li style="display: inline; padding: 0 0.5em; background: #000 ; border: 1px solid #000000; font: 1em "Trebuchet MS",Arial,sans-serif ;">
                  <a href="login.php" style=" text-decoration: none;"> Connexion / Inscription </a>
                  </li>
                  <?php
                    }
                    ?>

              </ul>

          </header>
         
