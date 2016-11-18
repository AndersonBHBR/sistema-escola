<?php
function conectar(){
    $servidor = "localhost";
    $usuario = "andersonbhbr";
    $senha = "12345";
    $bd = "sistema_escolar";

    $con = new mysqli($servidor, $usuario, $senha, $bd);
    return $con;
}

$conexao = conectar();
?>