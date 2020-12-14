<?php

require "bootstrap.php";

$controllerNazev = $_GET["stranka"] ?? "domu";

$controllerSoubor = "controller/" . $controllerNazev . ".php";

if (is_file($controllerSoubor)){
    require $controllerSoubor;
}
else{
    require "controller/404.php";
}


require "page/layout.php";


?>
