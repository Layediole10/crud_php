

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>utilisateurs</title>
</head>
<body>

    <!-- nav bar -->
    <nav class="navbar navbar-dark bg-dark">
        <p class="text-light fs-3">Users</p>
        <div >
            <a href="./formulaire.php" class="text-light text-decoration-none " >Add User</a>
            <a href="../../Controllers/search.php" class="text-light m-3 text-decoration-none" >Users</a>
        </div>
    </nav>

    <div class="card text-center w-50 m-5 bg-danger">
        <div class="card-header">
            <h1>USERS</h1>
        </div>
    </div>

     <!-- search bar -->
     <form method="post">
        <div class="input-group w-50 m-5">
            <input type="search" class="form-control" placeholder="Search" name="check" aria-label="Recipient's username" aria-describedby="button-addon2">
            <input type="submit" name="search" value="search">
        </div>
    </form>

    
    <!-- search users on table -->
    <?php
    require_once("../Controllers/search.php");
    require_once("../Controllers/update.php");
        if ($users->rowCount() > 0) {
            

                ?>
                    <table class="table table-success table-striped w-50 m-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMS</th>
                                <th>PRENOMS</th>
                                <th>EMAILS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- show data in the table -->
                            <?php while ($result = $users->fetch()): ?>
                                <tr>
                                    <td><?=$result['id_client'] ?></td>
                                
                                    <td><?=$result['nom'] ?></td>
                                
                                    <td><?=$result['prenom'] ?></td>
                            
                                    <td><?=$result['email'] ?></td>

                                    <td>
                                        <a href="utilisateur.php?id=<?=$result['id_client'] ?>">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>

                                        <a class="mx-3" href="/Views/edit.php?id=<?=$result['id_client'] ?>">
                                            <i class="fa fa-pencil" aria-hidden="true"></i>
                                        </a>
                                
                                    </td>
                                </tr>
                            <?php endwhile ?>
                        </tbody>
                    </table>

                <?php
            
        }else{
            ?>
                <div class="card text-center w-50 m-5 bg-danger">
                    <div class="card-header">
                        <h2>Aucun utilisateur trouv??...!</h2>
                    </div>
                </div>
            <?php
        }
    
    
    
    
    ?>


    <script src="https://use.fontawesome.com/b03bd27677.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>