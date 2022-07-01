<?php 
    require_once("../Modeles/connexion.php");
    
    $first = $_POST['first_name'];
    $last = $_POST['last_name'];
    $email = $_POST['email'];

    // condition de saisie
    if(empty($first) || empty($last) || empty($email)){
        echo "Please enter all fields!";
    }else {
        if (strlen(trim($first)) < 3 || strlen(trim($last)) < 3) {
            echo "Enter minimum three letters!";
        }else{
            
            
            $requete = "INSERT INTO client (nom, prenom, email) VALUES ('$first', '$last', '$email')";

            $res = $pdo->query($requete);
            $res->fetchAll();
        // en tete
        header("location:../Views/utilisateur.php");
        // require_once("./search.php");
        }
    }

?>
  
