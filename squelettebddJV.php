<!DOCTYPE html>
<html lang="fr">

    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <!-- <link href="style.css" rel="stylesheet" type="text/css" /> -->
    <title>Page jeux vidéo recherche</title>
    </head>

    <body>
        <nav>

        </nav>
        <h1>Notre ensemble de jeux vidéo</h1>
<!-- form recherche -->
        <form method="GET">
            <input type="search" name="s" placeholder="rechercher un jeu">
            <input type="submit" name="envoyer" placeholder="Rechercher">
        </form>
    </body>

</html>

<!-- tableur -->
<?php
$bdd = newPDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '');
$reponse = $bdd->query('select * from games');
while ($donnees = $reponse->fetch())
    {
/php>

<!-- Insérer outil favoris pour utilisateurs -->
<php>
</php>


<footer>
</footer>