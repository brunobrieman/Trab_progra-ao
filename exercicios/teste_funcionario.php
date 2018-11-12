<?php


include 'funcionario.php';  
$secretario = new Funcionario('Secretaria de Finanças','10/10/2018','100');
$secretario->salario = 3000;

$secretario->recebeAumento();
$secretario->recebeAumento();
$secretario->recebeAumento();
echo $secretario->calculaGanhoAnual();



print_r($secretario);
echo "------------------------------------\n";

$seguranca = new Funcionario('Seguranca Patrimonial', '7/11/2018', '85735873485');
$seguranca->salario = 2500;
echo $seguranca->calculaGanhoAnual();

print_r($seguranca);