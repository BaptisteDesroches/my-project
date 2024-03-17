<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8" >
        <title>Recherche jeux</title>
    </head>


    <?php
    // fonctionnalité recherche JV
$bdd = newPDO('mysql:host=localhost;dbname=dp;charset=utf8','root', '');
$reponse = $bdd->query('select * from '.$table);
$table ="videogames";
while ($donnees = $reponse->fetch())
    {
?>
        <p><?php echo $donnees['title']; ?></p>
<?php
    }
    $reponse->closeCursor();//important
?>

<body>
    <!-- outil recherche jeux vidéo -->
    <form method="GET">
        <input type="search" name="s" placeholder="rechercher un jeu">
        <input type="submit" name="envoyer" placeholder="Rechercher">
    </form>
</body>
</html>


