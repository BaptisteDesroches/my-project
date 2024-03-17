<?php
    echo "Welcome World";
?>

<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8" >
        <title>Recherche jeux</title>
    </head>

<body>
    <form method="GET">
        <input type="search" name="s" placeholder="rechercher un jeu">
        <input type="submit" name="envoyer" placeholder="Rechercher">
    </form>
</body>
</html>


<?php
$bdd = newPDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '');
$reponse = $bdd->query('select * from games');
while ($donnees = $reponse->fetch())
    {
?>

        <p><?php echo $donnees['title']; ?></p>
<?php
    }
    $reponse->closeCursor();//important
?>