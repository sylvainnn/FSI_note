<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

</head>
<body>
<?php
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
?>

<div class="sectionLeft">
    <h1>Modification</h1>
    <br><br><br><br><br><br><br><br>
    <span style="position: absolute; top: 110px; left: 90px;">
        <img src="../../public/images/sitting-4.png" height="170px">
    </span>
    <br><br><br><b><h3>Gestion du tutorat</h3></b>
    <br>ORT Etudes Supérieures
    <br><br><br>
    <img src="../../public/images/Slide%20Lines.png" height="4px">
</div>

<div class="sectionRight">
    <style>
        input[type=text], select {
            width: 65%;
            padding: 6px 20px;
            margin: 8px;
            display: inline-block;
            border: 0px solid #ccc;
            border-radius: 30px;
            box-sizing: border-box;
            background-color: #efefef;
            font-size: 16px;
        }
    </style>

    <span style="position: absolute; top: 15%; left: 25%;"
    <form method="post" action="">

        <input type="text" id="nom" placeholder="Nom">
        <input type="text" id="prenom" placeholder="Prénom">
        <input type="text" id="classe" placeholder="Classe">
        <input type="text" id="telephone" placeholder="Télépone">
        <input type="text" id="adresse" placeholder="Adresse">
        <input type="text" id="mail" placeholder="Mail">

        <span style="position: absolute; top: 300px; left: 25%">
            <input type="submit" value="Enregistrer">

    </form>
    </span>
</div>

</body>
</html>