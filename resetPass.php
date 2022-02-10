<?php
include "./Utils/Header.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="Style/login.css">
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
<link rel="icon" sizes="16x16" type="image/png" href="https://open.scdn.co/cdn/images/favicon16.c498a969.png"/>
<title>Spotify | Reset Password</title>


<html>
<body>
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span id="connect">Mot de Passe Oublier</span></h6>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <?php
                                        if (isset($_GET['Error'])){
                                            ?>
                                            <h4 class="mb-4 pb-3"><?=$_GET['Error']?></h4>
                                            <?php
                                        }else{
                                            echo '<h4 class="mb-4 pb-3">Entrez vos info !</h4>';
                                        }
                                        ?>
                                        <form method="post" action="./Process/process_reset.php">
                                            <div class="form-group mt-2">
                                                <input type="email" name="logemail" class="form-style"
                                                       placeholder="Entrez votre email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="newPass" class="form-style"
                                                       placeholder="Nouveau mot de passe" id="newPass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="confNewPass" class="form-style"
                                                       placeholder="Confirmation mot de passe" id="confNewPass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <button type="submit" name="submit" class="btn mt-4">Confirmer</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>