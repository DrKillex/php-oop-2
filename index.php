<?php

class Prodotto
{
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

class Cibo extends Prodotto
{
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

class Gioco extends Prodotto
{
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

class Accessorio  extends Prodotto
{
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
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="row">
                <?php foreach ($listaProdotti as $prodotto) : ?>
                    <div class="col-4">
                        <div class="card">
                            <img src="<?php echo $prodotto->img ?>" class="card-img-top">
                            <div class="card-body">
                                <?php foreach ($prodotto as $key => $value) : ?>
                                    <?php if ($key == 'nome') : ?>
                                        <h5 class="card-title"><?php echo $value ?></h5>

                                    <?php endif; ?>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer>

    </footer>
</body>

</html>