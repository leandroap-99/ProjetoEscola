<?php 

$host = "localhost";
$port = "5432";
$dbname = "aula04";
$user = "leandro";
$password = "123";

$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password}";

function conecta(){
	global $connection_string;
 	return pg_connect($connection_string);
}

function desconecta($con){
	pg_close($con);
}