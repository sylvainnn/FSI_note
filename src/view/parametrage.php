<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

    <style>
    </style>

</head>
<body>
<?php
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
?>

<div class="sectionLeft"><h1>paramétrage</h1>
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
    <table class="customTable">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Mail</th>
            <th>Spécialité</th>
            <th>Nombre d'étudiants max</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Infos</td>
            <td>Infos</td>
            <td>Infos</td>
            <td>Infos</td>
            <td>Infos</td>
            <td>Infos</td>
            <td>Modifier</td>
            <td>Supprimer</td>
        </tr>
        </tbody>
    </table>

    <span style="position: absolute; top: 90%; left: 58%">
            <input type="submit" value="Affecter tuteur">
    </span>

    <span style="position: absolute; top: 90%; left: 79%">
            <input type="submit" value="Créer étudiant">
    </span>

</div>


</body>
</html>