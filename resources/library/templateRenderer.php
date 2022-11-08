<?php
require_once("../resources/config.php");
function renderTemplate(string $templateFileName, array $args): void
{    
    $templateFile = TEMPLATES_PATH . "/$templateFileName";    
    extract($args);    
    ob_start();    
    include $templateFile;    
    print ob_get_clean();
}
