<html xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="../../public/css/css.css" media="screen" type="text/css"/>

    <style>
        table.customTable {
            width: 100%;
            background-color: #FFFFFF;
            border-collapse: collapse;
            border-width: 2px;
            border-color: #499C54;
            border-style: solid;
            color: #000000;
        }

        table.customTable td, table.customTable th {
            border-width: 2px;
            border-color: #499C54;
            border-style: solid;
            padding: 5px;
        }

        table.customTable thead {
            background-color: #499C54;
        }
    </style>

</head>
<body>
<?php
include_once('../../public/inc/header.php');
include_once  ('../../public/inc/footer.php');
?>

<div class="sectionLeft"><h1>Liste étudiants</h1>
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
    <table class="customTable">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Téléphone</th>
            <th>Mail</th>
            <th>Spécialité</th>
            <th>Classe</th>
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
            <td>Infos</td>
            <td>Infos</td>
        </tr>
        </tbody>
    </table>
</div>

</body>
</html>