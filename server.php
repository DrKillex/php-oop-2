<?php
require_once __DIR__ . '/models/Cibo.php';
require_once __DIR__ . '/models/Gioco.php';
require_once __DIR__ . '/models/Accessorio.php';
require_once __DIR__ . '/models/Negozio.php';
require_once __DIR__ . '/models/Evento.php';


$ciboProva1 = new Cibo('cibo prova', 'img/CiboCane.jpg', 'cane', 11, 22, ['carne', 'verdura']);
$giocoProva1 = new Gioco('gioco prova', 'img/GiocoCane.jpg', 'cane', 11, 'rimbalza come un sasso', '10x10');
$accessorioProva1 = new Accessorio('acc prova', 'img/AccessorioCane.jpg', 'cane', 11, 'legno', '10x10');
$negozio1_validate=true;
$negozio2_validate=true;
$evento1_validate=true;
$listaProdotti = [$ciboProva1, $giocoProva1, $accessorioProva1, new cibo('cibo prova 2', 'img/CiboPesce.jpg', 'pesce', 11, 22, ['carne', 'verdura'])];
try {
    $Negozio1 = new Negozio('via fasulla 123', 'BO', '8.00-20.00', '0511234567');
} catch (Exception $e) {
    $negozio1_validate=false;
    file_put_contents(__DIR__ . '/log.php', PHP_EOL . $e->getMessage() . PHP_EOL . $e->getTraceAsString(), FILE_APPEND);
}
try {
    $Negozio2 = new Negozio('', 'BO', '8.00-20.00', '0511234567');
} catch (Exception $e) {
    $negozio2_validate=false;
    file_put_contents(__DIR__ . '/log.php', PHP_EOL . $e->getMessage() . PHP_EOL . $e->getTraceAsString(), FILE_APPEND);
}
try {
    $Evento1 = new Evento('via tarocca 123', 'RO', '12-12-12');
} catch (Exception $e) {
    $evento1_validate=false;
    file_put_contents(__DIR__ . '/log.php', PHP_EOL . $e->getMessage() . PHP_EOL . $e->getTraceAsString(), FILE_APPEND);
}

// var_dump($listaProdotti);