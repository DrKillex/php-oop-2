<?php
require_once __DIR__.'/models/Cibo.php';
require_once __DIR__.'/models/Gioco.php';
require_once __DIR__.'/models/Accessorio.php';

$ciboProva1 = new Cibo('cibo prova', 'img/CiboCane.jpg', 'cane', 11, 22, ['carne', 'verdura']);
$giocoProva1 = new Gioco('gioco prova', 'img/GiocoCane.jpg', 'cane', 11, 'rimbalza come un sasso', '10x10');
$accessorioProva1 = new Accessorio('acc prova', 'img/AccessorioCane.jpg', 'cane', 11, 'legno', '10x10');

$listaProdotti = [$ciboProva1, $giocoProva1, $accessorioProva1, new cibo('cibo prova 2', 'img/CiboPesce.jpg', 'pesce', 11, 22, ['carne', 'verdura'])];
// var_dump($listaProdotti);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="pt-3">
        <h1 class="text-center">prodotti</h1>
    </header>
    <?php include_once __DIR__.'/partials/main.php'; ?>
</body>

</html>