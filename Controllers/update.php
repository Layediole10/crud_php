<?php
    require_once("../Modeles/connexion.php");
    
    if(isset($_GET['id'])){
        $requete = "SELECT * FROM client WHERE id_client = $_GET[id]";

        $exec = $pdo->query($requete);
        $result = $exec->fetch();
        // print_r($result);
    }

    // condition de saisie
   if (isset($_POST['submit'])) {
    
        if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['email'])){
        echo "Please enter all fields!";
            }else {
                if (strlen(trim($_POST['first_name'])) < 3 || strlen(trim($_POST['last_name'])) < 3) {
                        echo "Enter minimum three letters!";
                    }else{          
                        // update
                        $requete = "UPDATE client SET nom ='$_POST[first_name]' , prenom = '$_POST[last_name]', email = '$_POST[email]'  WHERE id_client = $_GET[id]";

                        $result = $pdo->query($requete);
                        $result->fetch();

                        header("location:../Views/utilisateur.php");
                    }
            }
   }

?>

