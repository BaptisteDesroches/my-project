<?php
$table ="games";
$bdd = newPDO('mysql:host=localhost;dbname=games;charset=utf8', 'root', '');
$reponse = $bdd->query('select * from '.$table);
?>