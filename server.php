<?php
require_once __DIR__.'/models/Cibo.php';
require_once __DIR__.'/models/Gioco.php';
require_once __DIR__.'/models/Accessorio.php';

$ciboProva1 = new Cibo('cibo prova', 'img/CiboCane.jpg', 'cane', 11, 22, ['carne', 'verdura']);
$giocoProva1 = new Gioco('gioco prova', 'img/GiocoCane.jpg', 'cane', 11, 'rimbalza come un sasso', '10x10');
$accessorioProva1 = new Accessorio('acc prova', 'img/AccessorioCane.jpg', 'cane', 11, 'legno', '10x10');

$listaProdotti = [$ciboProva1, $giocoProva1, $accessorioProva1, new cibo('cibo prova 2', 'img/CiboPesce.jpg', 'pesce', 11, 22, ['carne', 'verdura'])];
// var_dump($listaProdotti);