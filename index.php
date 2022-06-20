<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>formulaire</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <p class="text-light fs-3">Users</p>
        <div >
            <a href="index.php" class="text-light text-decoration-none " >Add User</a>
            <a href="utilisateur.php" class="text-light m-3 text-decoration-none" >Users</a>
        </div>
    </nav>



    <div class="card text-center w-50 m-5 bg-danger">
        <div class="card-header">
            <h1>FORM</h1>
        </div>
    </div>
    <form class="row g-3 w-50 m-5" action="traitement.php" method="post">
        <div class="col-md-6">
            <label for="first_name" class="form-label">First name</label>
            <input type="text" class="form-control" name="first_name">
        </div>
        <div class="col-md-6">
            <label for="last_name" class="form-label">Last name</label>
            <input type="text" class="form-control" name="last_name">
        </div>
        <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" placeholder="@exemple.com">
        </div>
       
        
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
    </form>






    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>