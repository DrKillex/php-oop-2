<footer>
    <div class="container">
        <div class="row">
            <?php if($negozio1_validate===true):?>
            <div class="col-6">
                <h1>negozio</h1>
                <p><?php echo $Negozio1->getVia(),' (',$Negozio1->getCity(),')' ?></p>
                <p>orari di apertura: <?php echo $Negozio1->getOrari()?></p>
                <p>numero di telefono: <?php echo $Negozio1->getNumeroTelefono()?></p>
            </div>
            <?php endif;?>
            <?php if($negozio2_validate===true):?>
            <div class="col-6">
                <h1>negozio</h1>
                <p><?php echo $Negozio2->getVia(),' (',$Negozio2->getCity(),')' ?></p>
                <p>orari di apertura: <?php echo $Negozio2->getOrari()?></p>
                <p>numero di telefono: <?php echo $Negozio2->getNumeroTelefono()?></p>
            </div>
            <?php endif;?>
            <?php if($evento1_validate===true):?>
            <div class="col-6">
                <h1>evento</h1>
                <p><?php echo $Evento1->getVia(),' (',$Evento1->getCity(),')' ?></p>
                <p>data dell evento: <?php echo $Evento1->getData()?></p>
            </div>
            <?php endif;?>
        </div>
    </div>
</footer>