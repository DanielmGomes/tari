<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "administrativo";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

$query_usuario = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
mysqli_query($conn, $query_usuario);

if(mysqli_insert_id($conn)){
	echo true;
}else{
	echo false;
}