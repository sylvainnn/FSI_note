<link href="/public/css/style.css" rel="stylesheet">
<table>
    <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Téléphone</th>
        <th>Mail</th>
        <th>Spécialité</th>
        <th>Classe</th>
        <th>Autres</th>
        <th>EDIT</th>
    </tr>
    <tr>
        <td>bonbon1</td>
        <td>bonbon2</td>
        <td>bonbon3</td>
        <td>bonbon4</td>
        <td>bonbon5</td>
        <td>bonbon6</td>
        <td>bonbon7</td>
        <td>EDIT</td>
    </tr>
    <tr>
        <td>bonbon1</td>
        <td>bonbon2</td>
        <td>bonbon3</td>
        <td>bonbon4</td>
        <td>bonbon5</td>
        <td>bonbon6</td>
        <td>bonbon7</td>
        <td>EDIT</td>
    </tr>
</table>

<?php

require "../src/model/DTO/Etudiant.php";

$bonbon = new \DTO\Etudiant(["id_uti"]);

var_dump($bonbon->getNom());

?>