<?php
require_once './vendor/autoload.php';
use PDO;

$bd = new PDO('mysq:host=localhost;dbname=biblioteca', 'root', '');
$comando = $bd->prepare('select * from generos');
$comando->execute();

$generos = $comando->fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
</head>
<body>
    
</body>
</html>