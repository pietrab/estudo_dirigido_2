<?php
print "Digite o preço do 1º produto: ";
$n1= (float) fgets(STDIN);

print "Digite o preço do 2º produto: ";
$n2= (float) fgets(STDIN);

print "Digite o preço do 3º segundo: ";
$n3= (float) fgets(STDIN);

if ($n1<$n2 && $n1<$n3) {
    print "O preço do 1º produto é mais barato\n";
}

if ($n2<$n1 && $n2<$n3) {
    print "O preço do 2º produto é mais barato\n";
}

if ($n3<$n1 && $n3<$n2) {
    print "O preço do 3º produto é mais barato\n";
}
