<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

</head>
<body>
<?php
include_once ('../../public/inc/sectionLeft.php');
include_once  ('../../public/inc/footer.php');
include_once('../../public/inc/headerConnexion.php');
?>


<div class="sectionRight">
    <span style="position: absolute; top: 20%; left: 40%; color: black;"
    <b><h1>Connexion</h1></b>
    </span>

    <span style="position: absolute; top: 40%; left: 33%"
    <form method="post" action="">

        <input type="text" id="login" placeholder="Login">

        <input type="password" id="password" placeholder="Mot de passe">

        <input type="submit" value="Connexion">
    </form>
    </span>
</div>

</body>
</html>