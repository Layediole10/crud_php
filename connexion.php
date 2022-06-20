<?php 
// definition des variables (constantes) de connexion de la base
define('BD_SERVER', '127.0.0.1');
define('BD_USERNAME', 'root');
define('BD_PASS', '');
define('BD_NAME', 'mybd');


// data source name (dsn)
$dsn = "mysql:dbname=".BD_NAME.";host=".BD_SERVER;

try{ 
    // les options
    $options = [
     
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAME utf8',
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_EMULATE_PREPARES => false
    ];

    // intanciation....PDO(php data object)   
    $pdo = new PDO($dsn, BD_USERNAME, BD_PASS, $options);

    // echo 'connecté!';
}catch (PDOException $e){
     die ("ERREUR: ".$e->getMessage());
}

    

?>