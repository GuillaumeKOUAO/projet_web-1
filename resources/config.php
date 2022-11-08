<?php
defined("BASE_DIR") || define("BASE_DIR", $_SERVER['DOCUMENT_ROOT'] . "/projet_web");
defined("STYLE_DIR") || define("STYLE_DIR", './styles');
defined("IMAGES_DIR") || define("IMAGES_DIR", './images');
defined("ICONS_DIR") || define("ICONS_DIR", './icons');
defined("LIBRARY_PATH") || define("LIBRARY_PATH", realpath(BASE_DIR . '/resources/library'));
defined("TEMPLATES_PATH") || define("TEMPLATES_PATH", realpath(BASE_DIR . '/resources/templates'));