<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $db = "blog";

    $mysql = new mysqli($servidor, $usuario, $senha, $db);
    $mysql->set_charset('utf8');

    if ($mysql == FALSE){
        echo "Erro na conexão.";
    }
