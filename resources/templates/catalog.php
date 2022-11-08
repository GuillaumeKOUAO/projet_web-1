<?php
require_once("../resources/config.php");

isset($label) || $label = '';
isset($unit) || $unit = '';
isset($image) || $image = '';
isset($stock) || $stock = '';
isset($price) || $price = 0.00;
$image = IMAGES_DIR . '/' . $image;
$altImage= 'Photo de ' . strtolower($label);
?>
