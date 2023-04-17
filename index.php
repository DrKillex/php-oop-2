<?php 

class Prodotto{
    protected $tipo;
    public $nome;
    public $img;
    public $animale;
    public $prezzo;

    public function __construct($_nome, $_img, $_animale, $_prezzo)
    {
        $this->nome = $_nome;
        $this->img = $_img;
        $this->animale = $_animale;
        $this->prezzo = $_prezzo;
    }
};

class Cibo extends Prodotto{
    public $peso;
    public $ingredienti;
    public function __construct($_nome, $_img, $_animale, $_prezzo, $_peso, array $_ingredienti)
    {
        parent::__construct($_nome, $_img, $_animale, $_prezzo);
        $this->peso = $_peso;
        $this->ingredienti = $_ingredienti;
        $this->tipo = 'cibo';
    }
};

class Gioco extends Prodotto{
    public $caratteristiche;
    public $dimensioni;
    public function __construct($_nome, $_img, $_animale, $_prezzo, $_caratteristiche, $_dimensioni)
    {
        parent::__construct($_nome, $_img, $_animale, $_prezzo);
        $this->caratteristiche = $_caratteristiche;
        $this->dimensioni = $_dimensioni;
        $this->tipo = 'gioco';
    }
};

class Accessorio  extends Prodotto{
    public $materiale;
    public $dimensioni;
    public function __construct($_nome, $_img, $_animale, $_prezzo, $_materiale, $_dimensioni)
    {
        parent::__construct($_nome, $_img, $_animale, $_prezzo);
        $this->materiale = $_materiale;
        $this->dimensioni = $_dimensioni;
        $this->tipo = 'accessorio';
    }
};

$ciboProva1 = new Cibo('cibo prova','#', 'cane', 11, 22 ,['carne','verdura']);
$giocoProva1 = new Gioco('gioco prova','#', 'cane', 11, 'rimbalza come un sasso' ,'10x10');
$accessorioProva1 = new Accessorio('acc prova','#', 'cane', 11, 'legno' ,'10x10');

$listaProdotti = [$ciboProva1, $giocoProva1, $accessorioProva1, new cibo('cibo prova 2','#', 'pesce', 11, 22 ,['carne','verdura'])];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>