<?php
function conectar(){
    $servidor = "localhost";
    $usuario = "andersonbhbr";
    $senha = "loverei169";
    $bd = "sistema_escolar";

    $con = new mysqli($servidor, $usuario, $senha, $bd);
    return $con;
}

$conexao = conectar();
?>