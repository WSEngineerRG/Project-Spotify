<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=Spotify', 'root', 'root');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}