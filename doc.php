<?php


require_once "ContaCorrente.class.php";


$minhaconta = new ContaCorrente('0001', '00001',1000);
$minhaconta->depositar(200)
            ->saque(50)
            ->saque(500)
            ->saque(649)
            ->depositar(5000)
            ->saque(2);


echo '<pre>';

print_r("Saldo:".$minhaconta->getSaldo());