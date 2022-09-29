<?php


require_once "ContaCorrente.class.php";
require_once "ContaPoupanca.class.php";


$minhaconta = new ContaPoupanca('0001', '00001',0.5);
$valordepositado = 0;
for ($mes = 1; $mes <= 120; $mes++){
    $minhaconta->depositar(200);
    $minhaconta->calcularRendiemntos();
    $valordepositado += 200;
}



echo '<pre>';

print_r(["Saldo:"=>$minhaconta->getSaldo()
    , 'Valor depositado'=>$valordepositado,
    'Juros'=>$minhaconta->getSaldo()-$valordepositado
]);