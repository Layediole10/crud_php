<?php 
    require_once("../Modeles/connexion.php");
    $requete = "SELECT * FROM client";
    $exect = $pdo->query($requete);
    $result = $exect->fetch();

    if(isset($_GET['id'])){

        $req = "DELETE FROM client WHERE id_client = $_GET[id]";
        $delete = $pdo->query($req);
       
    }

    // search part
    // rechercher tous les utilisateurs
    $users = $pdo->query("SELECT * FROM client");
    if (isset($_POST['search']) && !empty($_POST['check'])) {
        $recherche = $_POST['check'];
        // recherche d'un utilisateur
        $req = "SELECT * FROM `client` WHERE `nom` LIKE '%".$recherche."%' ORDER BY id_client DESC";
        $users = $pdo->query($req);
        

    }

    require_once("../Views/utilisateur.php");
    //  header("location:../Views/utilisateur.php");
    ?>