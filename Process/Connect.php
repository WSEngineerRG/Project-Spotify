<?php
include "../Utils/DB_Connect.php";

if (isset($_POST['logEmail']) && !empty($_POST['logEmail']) && isset($_POST['logPass']) && !empty($_POST['logPass'])){
    $name = $_POST['logEmail'];
    $pdo = $bdd->prepare("SELECT * FROM Spotify.Users where username = ?");
    $reqName = $pdo->execute([$_POST['logEmail']]);
    if ($name == $reqName){
        $Password = $_POST['logPass'];
        $pdo = $bdd->prepare("SELECT * FROM Spotify.Users where password = ?");
        $reqPass = $pdo->execute([$_POST['logPass']]);
        if ($Password == $reqPass){
            header('location: ../index.php?Succes=connecter&en&tant&que&');
        }else{
            header('location: ../Login.php?Error=Mot&de&passe&Incorrect!');
        }
    }else{
        header('location: ../Login.php?Error=Auncun&compte&n\est&enregistré&à&se&nom');
    }
}else{
    header('location: ../Login.php?Error=Formulaire&Incorrect!');
}
