<?php
include "./Utils/Header.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="Style/login.css">
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'>
<link rel="icon" sizes="16x16" type="image/png" href="https://open.scdn.co/cdn/images/favicon16.c498a969.png"/>
<title>Spotify - Login Page</title>
<html>
<body>
<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">
                    <h6 class="mb-0 pb-3"><span id="connect">Connection</span><span id="creation">Création</span></h6>
                    <input class="checkbox" type="checkbox" id="boxCheck" name="boxCheck"/>
                    <label for="boxCheck"></label>
                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Connection</h4>
                                        <form method="post" action="./Process/Connect.php">
                                            <div class="form-group">
                                                <input type="email" name="logEmail" class="form-style"
                                                       placeholder="Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logPass" class="form-style"
                                                       placeholder="Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <button href="#" type="submit" class="btn mt-4">Se connecter</button>
                                        </form>
                                        <p class="mb-0 mt-4 text-center"><a href="resetPass.php" class="link">help</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-back">
                                <div class="center-wrap">
                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Créer un compte</h4>
                                        <form method="post" action="./Process/New_account.php">
                                            <div class="form-group">
                                                <input type="text" name="logName" class="form-style" placeholder="Nom"
                                                       id="logname" autocomplete="off">
                                                <i class="input-icon uil uil-user"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="email" name="logemail" class="form-style"
                                                       placeholder="Email" id="logemail" autocomplete="off">
                                                <i class="input-icon uil uil-at"></i>
                                            </div>
                                            <div class="form-group mt-2">
                                                <input type="password" name="logpass" class="form-style"
                                                       placeholder="Password" id="logpass" autocomplete="off">
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>
                                            <button type="submit" class="btn mt-4">Envoyer</button>
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
<script src="JS/Main.js"></script>
