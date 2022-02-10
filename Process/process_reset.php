<?php

session_start();
$user = $_SESSION['user_id'];
$Mail = $_POST ['logemail'];
$Password = $_POST ['logpass'];
$newPass = $_POST ['newPass'];
$confNewPass = $_POST ['confNewPass'];
include "../Utils/DB_Connect.php";

if (count($_POST) > 0) {
    $sql = ("SELECT * from users WHERE user_id='" . $_SESSION["user_id"] . "'");
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$Mail]);
    # si l'email existe
    $user = $stmt->fetch();
    if ($_POST['newPass'] == $_POST ['confNewPass']) {
        $pdo = $bdd->prepare("UPDATE users set password='" . $_POST["newPass"] . "' WHERE user_id='" . $_SESSION["user_id"] . "'");
        $message = "mot de passe changé avec succès";
    } else
        $message = "try again!";
}
