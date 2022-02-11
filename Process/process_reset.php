<?php

session_start();
$userid = $_SESSION['user_id'];
$Mail = $_POST ['logemail'];
$newPass = $_POST ['newPass'];
$confNewPass = $_POST ['confNewPass'];

if (
    isset($_POST['logemail'])
    && isset($_POST['newPass'])
    && isset($_POST['confNewPass'])
    && !empty($_POST['logemail'])
    && !empty($_POST['newPass'])
    && !empty($_POST['confNewPass'])
) {
    include "../Utils/DB_Connect.php";
    $sql = ("SELECT user_id from users WHERE email= ?");
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$Mail]);
    # si l'email existe
    $user = $stmt->fetch();
    if ($newPass === $confNewPass) {
        $pdo = $bdd->prepare("UPDATE users set password= ? WHERE user_id= ?");
        $test = $pdo->execute([$newPass, $user['user_id']]);
        header('Location: ../Login.php');
    } else
        header('Location: ../resetPass.php?Error=Les mot de passe de passe ne corresponde pas !');
}else{
    header('Location: ../resetPass.php?Error=Formulaire incorrecte');
}