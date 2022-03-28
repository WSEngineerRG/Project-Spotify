<?php


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

    //si le nom ou l'email existe déja renvoyer msg d'erreur , sinon confirmer enregistrement de compte.
    if (isset($_POST['logName']) &&
        isset($_POST['logemail']) &&
        isset($_POST['logpass'])
    ) {
        # bddection bdd
        include "../Utils/DB_Connect.php";

        //RECUPERE DONNEES DE LA REQUETE POST ET LES ENREGISTRE COMME VARIABLE
        $logName = $_POST['logName'];
        $logemail = $_POST['logemail'];
        $logpass = $_POST['logpass'];

        //GENERE FORMAT DONNEES URL
        $data = 'logName =' . $logName . '&logemail=' . $logemail;

        //SIMPLE VERIFICATION DU FORMULAIRE
        if (empty($logName)) {
            $em = "Nom requis";
            //REDIRIGE VERS 'Login.php' ET ENVOIE DU MESSAGE D'ERREUR

            header("location: ../login.php?error=$em");
            exit;

        } else if (empty($logemail)) {
            $em = "Pseudo requis";
            header("location: ../login.php?error=$em&$data");
            exit;
        } else if (empty($logpass)) {
            $em = "Mot de passe requis";
            header("location: ../login.php?error=$em&$data");
            exit;
        } else {
            // verifier si la BDD est bien prise en compte
            $user_id = "SELECT user_id FROM users";
            $sql = "SELECT * FROM users WHERE username=? OR email=?";
            $stmt = $bdd->prepare($sql);
            $stmt->execute([$Name,$Mail]);
            $user = $stmt->fetch();
            if ($user) {
                if ($Name === $user['username']) {
                    $em = "Le pseudo ($Name) est déjà pris";
                    header("location: ../login.php?error=$em&$data");
                    exit;
                    }

                if ($Mail === $user['email']) {
                    $em = "L'email ($Mail) est déjà pris";
                    header("location: ../login.php?error=$em&$data");
                    exit;
                }
            } else {

                #hachage du mot de passe
                $logpass = password_hash($Password, PASSWORD_DEFAULT);
                if (isset($Name, $Mail, $Password)) {
                    #inserion des données dans la base de donnée
                    $sql = "INSERT INTO users (username, email, password, user_ip) Value (?, ?, ?, ?)";
                    $stmt = $bdd->prepare($sql);
                    $stmt->execute([$Name, $Mail, $logpass,  getIp()]);
                } else {
                    $sql = "INSERT INTO users (username, email, password, user_ip) Value (?, ?, ?, ?)";
                    $stmt = $bdd->prepare($sql);
                    $stmt->execute([$Name, $Mail, $logpass, getIp()]);
                }
                #message de succès
                $sm = "Création compte confirmée!";
                # redirige sur la page index et passe message de succès
                header("location: ../Login.php?success=$sm");
                exit;
            }
        }
    }

    $pdo = $bdd->prepare("INSERT INTO users (logemail, email, logpass, user_ip) VALUE (?,?,?,?) ");
    $reqPass = $pdo->execute([$Name, $Mail, $logpass, getIp()]);
    sleep(02);
    header('location: ../Index.php?Success=Connecter&en&tant&que&'.$Name);
}else{
    header('location: ../Login.php?Error=Formulaire&Incorrect!');
}