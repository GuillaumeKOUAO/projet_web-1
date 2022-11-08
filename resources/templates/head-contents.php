<?php

?>

<head> 
<meta charset="UTF-8"/>    
<title><?php if (isset($title)) {            
    echo $title;        
} else {            
    echo "Dauphpicerie";        
    }

?></title>
    <?php if (isset($styles)) {
    foreach ($styles as $style) {
    printf("<link rel=\"stylesheet\" href=\"%s\"/>\n", htmlentities($style));
   
    }    
} ?>
</head>