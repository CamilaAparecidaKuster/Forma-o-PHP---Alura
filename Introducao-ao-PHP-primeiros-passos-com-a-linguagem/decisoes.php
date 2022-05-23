<?php

$idade = 21;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou";
echo "se você tiver mais que 16 anos e estiver acompanhado";

if ($idade >= 18 ){
    echo "Você tem $idade anos. Pode entrar sozinho!";
} else if ($idade >= 16 && $numeroDePessoas > 1){
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar";
    } else{
        echo "Você só tem $idade anos";
        }


// || serve para usar o comando OR
// && serve para usar o comando AND

?>