<?php
/**
 * Ici sont regroupées les fonctions permettant d'échanger avec la base de données
 */
require_once ("../resources/config.php");

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

require_once ("../resources/config.php");

defined("ALL_PRODUCTS") || define("ALL_PRODUCTS", array(
    array('label'=>'Barbes à papa (500g)','unit'=>'pièce','stock'=>50,'price'=>15,'image'=>'barbe à papa.png','text'=>'Plus de plaisir avec la barbe à papa de notre enfance !'),
    array('label'=>'Bourguignon (500g)','unit'=>'pièce','stock'=>30,'price'=>8.82,'image'=>'bourguignon.png','text'=>'Fondant et savoureux, découvrez notre bourguignon !'),
    array('label'=>'Brun de noix (250g)','unit'=>'pièce','stock'=>30,'price'=>7.16,'image'=>'brun de noix.png','text'=>'Equilibre parfait de saveurs noisetées et de lait frais !'),
    array('label'=>'Cidre (75cl)','unit'=>'pièce','stock'=>30,'price'=>6.60,'image'=>'cidre.png','text'=>'Découvrez notre cidre acidulé : son pétillant raviera vos papilles !'),
    array('label'=>'Confitures (110g)','unit'=>'pièce','stock'=>30,'price'=>15,'image'=>'confiture poire vanille.png','text'=>'Ajoutez un grain de gousse de vanille à votre vie !'),
    array('label'=>'Emmental de Savoie (250g)','unit'=>'pièce','stock'=>30,'price'=>6.97,'image'=>'emmental de savoie.png','text'=>'Un fromage à la saveur douce et fruitée !'),
    array('label'=>'Fèves','unit'=>'kg','stock'=>30,'price'=>4.30,'image'=>'fève.png','text'=>'En salade, en soupe ou en purée, régalez-vous !'),
    array('label'=>'Hareng fumé (1kg)','unit'=>'kg','stock'=>30,'price'=>17.40,'image'=>'filet de hareng fumé.png','text'=>'Découvrez notre harend fumé : attrapez-le, cuisinez-le !'),
    array('label'=>'Fraises (250g)','unit'=>'pièce','stock'=>30,'price'=>6.29,'image'=>'fraises.png','text'=>'Salivez devant la succulente Mara des Bois !'),
    array('label'=>'Gombos des antilles','unit'=>'kg','stock'=>30,'price'=>9.99,'image'=>'gombos antilles.png','text'=>'Délicieux condiment pour accompagner vos plats "maison"!'),
    array('label'=>'Haricots rouges','unit'=>'kg','stock'=>30,'price'=>3.70,'image'=>'haricots rouges.png','text'=>'Doux et riches, un incontournable !'),
    array('label'=>'Houmous (110g)','unit'=>'pièce','stock'=>30,'price'=>4.85,'image'=>'houmous.png','text'=>'Avec notre houmous, partez en méditarannée sans voyager !'),
    array('label'=>'Jus de Raison bio','unit'=>'L','stock'=>30,'price'=>3.18,'image'=>'jus de raisin bio.png','text'=>'Avec notre houmous, partez en Méditerrannée sans voyager !'),
    array('label'=>'Lentilles','unit'=>'kg','stock'=>30,'price'=>4.90,'image'=>'lentilles.png','text'=>'Découvrez nos lentilles vertes de France !'),
    array('label'=>'Limonade artisanale (75cl)','unit'=>'pièce','stock'=>30,'price'=>3.50,'image'=>'limonade artisanale.png','text'=>'Boisson équilibrée au goût de citron vert. À consommer frais !'),
    array('label'=>'Miel (200g)','unit'=>'pièce','stock'=>30,'price'=>6.50,'image'=>'miel.png','text'=>'Flattez vos papilles et savourez notre gamme de miels artisanaux en promotion jusqu\'\au 31 janvier 2023'),
    array('label'=>'Panier régional','unit'=>'pièce','stock'=>30,'price'=>30,'image'=>'panier.png','text'=>'Les fêtes approchent, pensez à vos proches ! Voyagez dans notre gamme de paniers gourmands régionaux'),
    array('label'=>'Pâte de tandoori (250g)','unit'=>'pièce','stock'=>30,'price'=>8.80,'image'=>'pate de tandoori.png','text'=>'Un mélange d\'\épices, classique de la cuisin indienne'),
    array('label'=>'Pâte à tartiner (240g)','unit'=>'pièce','stock'=>30,'price'=>7.20,'image'=>'pates à tartiner.png','text'=>'Comme un feu d\'\artifice en bouche !'),
    array('label'=>'Pois','unit'=>'kg','stock'=>30,'price'=>3.40,'image'=>'pois.png','text'=>'Notre meilleure vente. Un produit de poids !'),
    array('label'=>'Sauce soja bio (15cl)','unit'=>'pièce','stock'=>30,'price'=>11.75,'image'=>'Sauce soja bio.png','text'=>'Envie de sushis ? Accompagnez-les de notre sauce soja bio !'),
    array('label'=>'Vins du monde (75cl)','unit'=>'pièce','stock'=>30,'price'=>18.50,'image'=>'vins du monde.png','text'=>'Un vin rouge intense et fruité, élevé en fûts de chêne français !'),
    array('label'=>'Cornichons (300g)','unit'=>'pièce','stock'=>30,'price'=>8.50,'image'=>'cornichons.png','text'=>'Découvrez nos cornichons, croquants et d\'\une belle couleur verte. Ils viennent tout droit de l\'\Aveyron!'),

));

function findAllProducts() {
    return ALL_PRODUCTS;
}


    
