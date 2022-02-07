<?php
include "../Utils/DB_Connect.php";

if (isset($_POST['logName']) && !empty($_POST['logName']) && isset($_POST['logemail']) && !empty($_POST['logemail']) && isset($_POST['logpass']) && !empty($_POST['logpass'])){
    function getIp(){
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    $Name = $_POST['logName'];
    $Mail = $_POST['logemail'];
    $Password = $_POST['logpass'];
    $pdo = $bdd->prepare("INSERT INTO Spotify.Users (username, email, password, user_ip) VALUE (?,?,?,?) ");
    $reqPass = $pdo->execute([$Name, $Mail, $Password, getIp()]);
    sleep(02);
    header('location: ../Index.php?Success=Connecter&en&tant&que&'.$Name);
}else{
    header('location: ../Login.php?Error=Formulaire&Incorrect!');
}
