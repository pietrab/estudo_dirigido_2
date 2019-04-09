<?php
print "Digite o 1º número: ";
$n1= (float) fgets(STDIN);

print "Digite o 2º número: ";
$n2= (float) fgets(STDIN);

print "Digite o 3º número: ";
$n3= (float) fgets(STDIN);


if ($n1>$n2 && $n1>$n3) {
    print "O 1º número é o maior\n";
}

if ($n2>$n1 && $n2>$n3) {
    print "O 2º número é o maior\n";
}

if ($n3>$n1 && $n3>$n2) {
    print "O 3º número é o maior\n";}
