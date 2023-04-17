<main>
    <div class="container py-5">
        <div class="row">
            <?php foreach ($listaProdotti as $prodotto) : ?>
                <div class="col-4 mb-3">
                    <div class="card">
                        <div class="img-box">
                            <img src="<?php echo $prodotto->img ?>">
                        </div>                           
                        <div class="card-body">
                            <?php foreach ($prodotto as $key => $value) : ?>
                                <?php if ($key == 'nome') : ?>
                                    <h5 class="card-title"><?php echo $value ?></h5>
                                    <?php elseif ($key == 'animale') : ?>
                                        <p><?php echo $value ?></p>
                                    <?php elseif ($key == 'ingredienti') : ?>
                                        <p>
                                            <?php echo $key, ' : ' ?>
                                            <?php foreach ($value as $ingrediente ) : ?>
                                                <?php echo $ingrediente, ' '; ?>
                                            <?php endforeach; ?>
                                        </p>
                                    <?php elseif ($key == 'img') : ?>
                                        <?php continue; ?>
                                    <?php else: ?>
                                        <p><?php echo $key, ' : ', $value; ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>                        
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</main>