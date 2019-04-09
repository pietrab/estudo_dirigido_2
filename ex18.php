<?php

$par=0;
$impar=0;
$contagem=1;

do {print "Digite um número: ";
    $n = (float) fgets(STDIN);
    
    if ($n%2==0)
    {$par++;}
    if ($n%2!=0)
    {$impar++;}  
    $contagem++;}  while($contagem<=10);
print "Quantidade de número(s) impar(es): $impar\nQuantidade de número(s) par(es): $par";