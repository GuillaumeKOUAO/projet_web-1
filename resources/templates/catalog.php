<?php
require_once("../resources/config.php");

isset($label) || $label = '';
isset($text) || $text = '';
isset($unit) || $unit = '';
isset($image) || $image = '';
isset($stock) || $stock = '';
isset($price) || $price = 0.00;
$image = IMAGES_DIR . '/' . $image;
$altImage= 'Photo de ' . strtolower($label);
?>


<div class="catalog">
    <div class="carte"> 
        <h1 class ="product-label"><?= $label ?></h1>
        <p class = "product-text"><?= $text ?></p>
        <img class = "product-image" src="<?= $image ?>" alt="<?= $altImage ?>">
        <p class="product-unit">- <?= $unit ?> -</p>
        <p class="product-price"><?= $price ?> &euro; / <?= $unit ?></p>
        <p class = "product-stock">En stock : <?= $stock ?></p>
        <form class="product-order">
            <label for="<?= 'order' . $label ?>">Qté</label>
            <input class="order-quantity" type="number" min =0 max=20 id="<?= 'order' . $label ?>"/>
            <input type = submit class ="bouton-cde" title="Commander" value="Commander" />
        </form>
    </div>      
</div>

