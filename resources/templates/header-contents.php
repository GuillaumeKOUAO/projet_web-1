<?php
require_once("../resources/config.php");

defined("MAIN_MENU") || define("MAIN_MENU", array(
    'Boutique' => 'index.php',
    'Compte' => 'compte.php',
    'Planning' => 'planning.php',
    'Panier' => 'panier.php',
    'Gestion' => 'gestion.php'
));
?>

<?php
require_once("../resources/config.php");

// Ce tableau permet de faire la correspondance entre les catégories et leur affichage
defined("CATEGORY_MENU") || define("CATEGORY_MENU", array(
    'Le salé' => 'salé.php',
    'Le sucré' => 'sucré.php',
    'Cuisine du monde' => 'monde.php',
    'Produits frais' => 'frais.php',
    'Boissons' => 'boissons.php'
));
?>

<header class="shop">
    <div id="sous-header1">
        <a href="./index.php"><img src="./icons/logo.png" alt="logo"></a>
        <div id="toolbar1">
            <nav id="main-menu" aria-label="Menu principal">
                <ul>
                    <?php if (isset($selected)) {
                        foreach (MAIN_MENU as $menuLabel => $menuLink) {
                            if ($menuLabel == $selected) {
                                echo "<li class=\"selected\">$menuLabel</li>\n";
                            } else {
                                $link = BASE_DIR . $menuLink;
                                echo "<li><a href=\"$menuLink\">$menuLabel</a></li>\n";
                            }
                        }
                    } ?>
                </ul>
            </nav>
        </div>
        <img id="mon-panier" class="toolbar-icon" src="./icons/monpanier.png" alt="Mon panier"/>
        <p id="user">Benoît Jézéquel</p>
        <img id="login-logout" class="toolbar-icon" src="./icons/connexion.png" alt="Se connecter/S'inscrire"/>
    </div>
    <div id="banniere">
        <h1 id="titre-banniere">DauphPicerie</h1>
        <div>
            <p id="parag-banniere">1ère épicerie solidaire, coopérative en ligne 
                à destination des étudiants
            </p>
        </div>
    </div>
    <form id="recherche" method="get">
        <input 
            id="searchbar" 
            type="text" 
            placeholder="Rechercher un produit..."
            minlength="2"
            autocomplete="off"
            required />
        <input
            id="bouton-recherche"
            type="submit"
            title="Chercher un produit dans la boutique"
            value="Rechercher"/>
    </form>
    <div id="toolbar2">  
        <?php if (isset($selected)) {
            foreach (CATEGORY_MENU as $categoryLabel => $categoryLink) {
                if ($categoryLabel == $selected) {
                    echo "<a class=\"selected\">categoryLabel</a>\n";
                } else {
                    $link = BASE_DIR . $categoryLink;
                    echo "<a class=\"menu-produits\" href=\"$categoryLink\">$categoryLabel</a>\n";
                }
            }
        } ?>
    </div>
</header>