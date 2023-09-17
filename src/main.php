<?php
    include_once __DIR__ . "/../vendor/autoload.php";

    use App\model\Usuario;

    $u = new Usuario("MaykeCalvo",30);
    
    echo "<h1>Hello, World<h1>";

    echo $u->getNome();
    echo "<br>";
    echo $u->getIdade();