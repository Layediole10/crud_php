<?php
    require_once "connexion.php";

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
                        
                            if ($result) {
                                // en tete
                                header("location:utilisateur.php");
                            }
                    }
            }
   }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>modification</title>
</head>
<body>
    <div class="card text-center w-50 m-5 bg-danger">
        <div class="card-header">
            <h1>FORMULAIRE</h1>
        </div>
    </div>"
    <form class="row g-3 w-50 m-5"  method="post">
        <div class="col-md-6">
            <label for="first_name" class="form-label">First name</label>
            <input type="text" class="form-control" name="first_name" value="<?= $result['nom'] ?>">
        </div>
        <div class="col-md-6">
            <label for="last_name" class="form-label">Last name</label>
            <input type="text" class="form-control" name="last_name" value="<?= $result['prenom'] ?>">
        </div>
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="<?= $result['email'] ?>" placeholder="@exemple.com">
        </div>
       
        
        <div class="col-12">
            <input type="submit" name="submit" value="Edit" class="bg-success">
        </div>
    </form>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>