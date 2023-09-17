<?php

include_once __DIR__ . "/../../vendor/autoload.php";

use App\model\Usuario;

$u = new Usuario("Luis Fellipe da Silva Araújo",19);


    if ($_GET['atributo'] == "nome"){
        echo $u->getNome();
    }
    
    if ($_GET['user'] == "idade"){
        echo $u->getIdade();
    }

 