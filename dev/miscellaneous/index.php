<?php
include("db_connect.php");
while ($donnees = $reponse->fetch())
    {
?>

        <p>
            <?php echo $donnees['title']; ?>
        </p>
<?php
    }
    $reponse->closeCursor();//important
?>