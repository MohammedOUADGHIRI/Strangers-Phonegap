<?php

/**
 * Paramètres (obligatoires) :
 * serv : L'adresse du serveur
 * port : Le port
 * user : Le nom d'utilisateur
 * pass : Le mot de passe
 * Paramètres (facultatifs) :
 * ssl : Sécurité de la connexion : aucune ou SSL/TLS (par défaut : aucune)
 */
if ((isset($_POST['serv'])) && (isset($_POST['port'])) && (isset($_POST['user'])) && (isset($_POST['pass']))) {
    if (($_POST['serv'] != "") && ($_POST['port'] != "") && ($_POST['user'] != "") && ($_POST['pass'] != "")) {
        $serveur = htmlspecialchars($_POST['serv']);
        $port = htmlspecialchars($_POST['port']);
        $username = htmlspecialchars($_POST['user']);
        $password = htmlspecialchars($_POST['pass']);
        $ssl = "";
        if (isset($_POST['ssl'])) {
            $ssl = "/ssl";
        }

        require_once("fonctions.php");
        $hostname = get_hostname($serveur, $port, $ssl);
        $liste_dossiers = get_dossiers($hostname, $username, $password);
    }
}
?>
