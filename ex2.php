<?php

print "Escreva um número";
$n = fgets (STDIN);

if ($n>0) {
    print "O número é positivo";
}

if ($n<0) {
    print "O número é negativo";
}