<?php
require_once("conf.php");

require APP_DIR . "Loader.php";
spl_autoload_register('Loader::load');

echo file_get_contents("html/template.html");