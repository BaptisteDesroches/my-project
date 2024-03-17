<!DOCTYPE html>
<html lang='fr'>
    <head>
        <meta charset="utf-8" >
        <title>Création et Connnection utilisateur</title>
    </head>


    <?php

<form method="POST" action="traitement.php">
    <h1>Créer son compte</h1>

    <label for="username">* Pseudo</label>
    <input type="text" id="nom" name="nom" placeholder="Entrez votre username" required="">
<br>
<label for="mail">* Adresse email</label>
<input type="mail" id="email_address" name="email_address" placeholder="Entrez votre adresse email" required="">
<input type="mail" id="email_address" name="email_address" placeholder="Retappez votre adresse email" required="">
<br>
<label for="password">* Mot de passe</label>
<ol>
    <li> 8 à 72 caractères</li>
    <li> 1 chiffre</li>
    <li> 1 miniscule</li>
</ol>
<input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required="">
<input type="password" id="password" name="password" placeholder="Retapez votre mot de passe" required="">
<br>
<label>
<input type="checkbox"> J'ai lu et j'accepte les conditions générales d'utilisation
<br>
<input type="checkbox"> Je souhaite recevoir la newsletter partenaire (bon plans, préventes...)
<br>
<input type="checkbox"> Je ne souhaite pas recevoir la newsletter éditoriale (news, tests, sorties...)>
?>






<?php
include("db_connect.php");
while ($donnees = $reponse->fetch())
    {
    }

//Se connecter
$requete = $bdd->prepare("INSERT INTO users VALUES (0, :username, :password, :email_address)";
$requete-> execute(
array(
    "Pseudo" =>$username,
    "Mot de passe" =>$password,
    "Adresse email" =>$email,
))
);
    echo "Bienvenu(e) !";
?>


<!--LOGIN PART -->
<form action="/login" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required="">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required="">
    <br>
    <button type="submit">Login</button>
</form>
