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
include_once ('../../public/inc/header.php');
?>

<style>
    input[type=text], select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 0px solid #ccc;
        border-radius: 30px;
        box-sizing: border-box;
        background-color: #efefef;
    }

    input[type=password], select {
        width: 50%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 0px solid #ccc;
        border-radius: 30px;
        box-sizing: border-box;
        background-color: #efefef;
    }

    input[type=submit], select {
        width: 50%;
        background-color: #499C54;
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 10px;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

</style>
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