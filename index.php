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

$pa1 = new Cibo('cibo prova','#', 'cane', 11, 22 ,['ca','sdas']);
var_dump($pa1);
$pa2 = new Gioco('gioco prova','#', 'cane', 11, 'rimbalza come un sasso' ,'10x10');
var_dump($pa2);
$pa3 = new Accessorio('acc prova','#', 'cane', 11, 'legno' ,'10x10');
var_dump($pa3);

?>