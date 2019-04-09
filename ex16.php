<?php
print "Digite o 1º número: ";
$n1= (float) fgets(STDIN);

print "Digite o 2º número: ";
$n2= (float) fgets(STDIN);

print "Digite o 3º número: ";
$n3= (float) fgets(STDIN);

print "Digite o 4º número: ";
$n4= (float) fgets(STDIN);

print "Digite o 5º número: ";
$n5= (float) fgets(STDIN);

$soma= ($n1+$n2+$n3+$n4+$n5);
$media= ($soma/5);

print "A soma é $soma\nA média é $media\n";
