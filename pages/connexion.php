<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../public/css/css.css" media="screen" type="text/css"/>

</head>
<body>

<div id="header_0">
    <!-- header connexion et inscription -->

    <a href="creeCompte.php"> <input type="button" id="inscr" value="INSCRIPTION"> </a>


</div>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="#">
            <h1>Crée un compte</h1>
        </form>
    </div>
    <div class="form-container sign-in-container">
        <form action="../controler/control_connexion.php" method="POST">
            <h1>Connexion</h1>
            <input type="text" name="username"  placeholder="Login" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <a href="ForgotPassword.php">Mot de passe oublié?</a>
            <button>Connexion</button>
            <?php
            if (isset($_GET['Error'])) {
                if ($_GET['Error'] == "WrongPassword") {
                    echo "<p style='color:red ; text-align: center;'>Utilisateur ou mot de passe incorrect</p>";
                }
            }
            ?>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Bonjour de nouveau!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Connexion</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Connexion</h1>
                <p>Vous êtes nouveau, entrer vos informations personnelles</p>
                <a href="creeCompte.php"><input type="button" id="inscr"><button class="ghost" id="signUp">Inscription</button></a>
            </div>
        </div>
    </div>
</div>
</body>
</html>