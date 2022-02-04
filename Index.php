<?php
include "./Utils/Header.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="Style/Main.css">
<title>Spotify.com</title>
<html>
<body>
<nav class="navbar navbar-expand-lg navbar Nav-bar">
    <div class="container-fluid">
        <a class="navbar-brand Text-nav" href="#">
            <img src="https://img.search.brave.com/bAQcuhLFXbh10wzQWvrRp-9hBNn3j4KWQP68-zfZXBM/rs:fit:1200:1200:1/g:ce/aHR0cDovLzEwMDBs/b2dvcy5uZXQvd3At/Y29udGVudC91cGxv/YWRzLzIwMTcvMDgv/U3BvdGlmeS1Mb2dv/LnBuZw" alt="">
            Spotify
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <button class="Btn_dl" data-ga-category="menu" data-ga-action="premium">Premium</button>
                </li>
                <li class="nav-item">
                <button class="Btn_dl" data-ga-category="menu" data-ga-action="help">Assistance</button>
                </li>
                <li class="nav-item">
                    <button class="Btn_dl" data-ga-category="menu" data-ga-action="download" data-gtm-event-name="download_spotify_button_clicked" data-tracking="{&quot;category&quot;: &quot;download&quot;, &quot;action&quot;: &quot;download start&quot;, &quot;label&quot;: &quot;download-navbar&quot;}">Télécharger</button>
                </li>
                <li class="nav-item">
                    <div class="separator"></div>
                </li>
                <li class="nav-item">
                    <button class="btn_sigin">S'inscrire</button>
                </li>
            </ul>
            <button class="btn_connect" type="button" data-testid="login-button">Se connecter</button>
        </div>
    </div>
</nav>
