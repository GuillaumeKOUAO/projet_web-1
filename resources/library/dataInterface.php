<?php
/**
 * Ici sont regroupées les fonctions permettant d'échanger avec la base de données
 */
require_once("../resources/config.php");

// Structures temporaires en attendant la mise en place de la connexion à la base de données
defined("ALL_CATEGORIES") || define("ALL_CATEGORIES", array(
    array('id' => 0, 'name' => 'salé'),
    array('id' => 1, 'name' => 'sucré'),
    array('id' => 2, 'name' => 'monde'),
    array('id' => 3, 'name' => 'frais'),
    array('id' => 4, 'name' => 'boissons'),
));

function findAllCategories(): array {
    return ALL_CATEGORIES;
}

<?php

require_once("../resources/config.php");

defined("ALL_PRODUCTS") || define("ALL_PRODUCTS", array(
    array('label'=>'Barbes à papa','unit'=>'kg','stock'=>50,'price'=>15,'image'=>'barbe à papa.png'),
    array('label'=>'Bourguignon','unit'=>'g','stock'=>30,'price'=>8.82,'image'=>'bourguignon.png'),
    array('label'=>'Brun de noix','unit'=>'g','stock'=>30,'price'=>7.16,'image'=>'brun de noix.png'),
    array('label'=>'Cidre','unit'=>'cl','stock'=>30,'price'=>6.60,'image'=>'cidre.png'),
    array('label'=>'Confitures','unit'=>'g','stock'=>30,'price'=>15,'image'=>'confiture poire vanille.png'),
    array('label'=>'Emmental de Savoie','unit'=>'g','stock'=>30,'price'=>6.97,'image'=>'emmental de savoie.png'),
    array('label'=>'Fèves','unit'=>'g','stock'=>30,'price'=>4.30,'image'=>'fève.png'),
    array('label'=>'Hareng fumé','unit'=>'kg','stock'=>30,'price'=>17.40,'image'=>'filet de hareng fumé.png'),
    array('label'=>'Fraises','unit'=>'g','stock'=>30,'price'=>6.29,'image'=>'fraises.png'),
    array('label'=>'Gombos des antilles','unit'=>'kg','stock'=>30,'price'=>9.99,'image'=>'gombos antilles.png'),
    array('label'=>'Haricots rouges','unit'=>'g','stock'=>30,'price'=>3.70,'image'=>'haricots rouges.png'),
    array('label'=>'Houmous','unit'=>'g','stock'=>30,'price'=>4.85,'image'=>'houmous.png'),
    array('label'=>'Jus de Raison bio','unit'=>'l','stock'=>30,'price'=>3.18,'image'=>'jus de raisin bio.png'),
    array('label'=>'Lentilles','unit'=>'g','stock'=>30,'price'=>4.90,'image'=>'lentilles.png'),
    array('label'=>'Limonade artisanale','unit'=>'cl','stock'=>30,'price'=>3.50,'image'=>'limonade artisanale.png'),
    array('label'=>'Miel','unit'=>'cl','stock'=>30,'price'=>6.50,'image'=>'miel.png'),
    array('label'=>'Panier régional','unit'=>'kg','stock'=>30,'price'=>30,'image'=>'panier.png'),
    array('label'=>'Pâte de tandoori','unit'=>'g','stock'=>30,'price'=>8.80,'image'=>'pate de tandoori.png'),
    array('label'=>'Pâte à tartiner','unit'=>'g','stock'=>30,'price'=>7.20,'image'=>'pates à tartiner.png'),
    array('label'=>'Pois','unit'=>'g','stock'=>30,'price'=>3.40,'image'=>'pois.png'),
    array('label'=>'Sauce soja bio','unit'=>'cl','stock'=>30,'price'=>11.75,'image'=>'Sauce soja bio.png'),
    array('label'=>'Vins du monde','unit'=>'cl','stock'=>30,'price'=>18.50,'image'=>'vins du monde.png'),
    array('label'=>'Cornichons','unit'=>'g','stock'=>30,'price'=>8.50,'image'=>'cornichons.png'),

));

function findAllProducts() {
    return ALL_PRODUCTS;
}
    
