<?php

if (isset($_GET['mode'])) {
    $mode = $_GET['mode'];
    setcookie('mode', $mode, time()+ 3600);
    $_COOKIE['mode'] = $mode;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>dark_mode</title>
</head>
<body style="<?= $_COOKIE['mode']=="jour"?"background-color: white; color: black;":"background-color: black; color: white;"?>">

    <div class="float-end">
        <a href="darkMode.php?mode=jour"><i class="fa fa-sun-o" aria-hidden="true"></i></a>

        <a href="darkMode.php?mode=nuit"><i class="fa fa-moon-o" aria-hidden="true"></i></a>
    </div>
        
    

  
    <script src="https://use.fontawesome.com/b03bd27677.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>   
</body>
</html>

