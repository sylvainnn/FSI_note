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

<div class="sectionLeft"><h1>Bilan 2</h1>
    <br><br><br><br><br><br><br><br>
    <span class="sitting">
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

    <span class="bilan2">
    <form method="post" action="">

        <input type="text" id="dateBilan2" placeholder="Date du bilan 2">
        <input type="text" id="noteDossier" placeholder="Note du dossier">
        <input type="text" id="noteOral" placeholder="Note d'oral'">
        <input type="text" id="remarque" placeholder="Remarque">

        <span style="position: absolute; top: 220px; left: 25%">
            <input type="submit" value="Enregistrer">

    </form>
    </span>
</div>


</body>
</html>