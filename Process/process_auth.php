<?php
session_start();
# vérification si email et mot de passe ont été pris en compte
if (
    isset($_POST['logEmail']) &&
    isset($_POST['logPass'])) {

    # connection bdd
    include '../Utils/DB_Connect.php';

    //RECUPERE DONNEES DE LA REQUETE POST ET LES ENREGISTRE COMME VARIABLE

    $Name = $_POST['logName'];
    $Mail = $_POST['logEmail'];
    $Password = $_POST['logPass'];


    # validation formulaire

    if (empty($Mail)) {

        #message d'erreur
        $em = "Email requis";
        //header("location: ../Login.php?error=$em");

    } else {
        if (empty($Password)) {
            #message erreur
            $em = "Mot de passe requis";
            header("location: ../Login.php?error=$em");
        } else {
            $sql = "SELECT * FROM users WHERE email=?";
            $stmt = $bdd->prepare($sql);
            $stmt->execute([$Mail]);
            # si l'email existe
            $user = $stmt->fetch();

            if ($user) {
                $existingHashFromDb = $user['password'];
                $isPasswordCorrect = password_verify($Password , $existingHashFromDb);
                # aller chercher les données de l'utilisateur
                if ($isPasswordCorrect) {
                    $Success = "Bienvenue!";
                    header("location: ../index.php?success=$Success");

                    $_SESSION["username"]= $user['username'];
                    $_SESSION["user_id"]= $user['user_id'];
                    $_SESSION["email"]= $user['email'];

                } else {
                    $em2 = "Le mot de passe ne correspond pas!";
                    header("location: ../login.php?error=$em2");

                }
            }else {

                    if (isset($Mail))
                        $em3 = "L'email n'existe pas!";
                    header("location: ../login.php?error=$em3");

                }
            }


        }



} else {

    header("location: ../index.php");
    exit;
}