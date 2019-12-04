<?php
    require_once realpath(dirname(__FILE__).'/config/config.php');
    require_once MODEL_PATH.'/usuario.php';

    $conexao = new Database(); //Estancia de classe
    //Database:: getConection(); 

    $usuario = new Usuario(["primeiro_nome" =>"João Pedro","segundo_nome" =>"Barbosa Alves"]);

    var_dump($conexao->getConection());
    var_dump($usuario);
?>    