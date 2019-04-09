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


if ($n1>$n2 && $n1>$n3 && $n1>$n4 && $n1>$n5){
    print "O 1º número é o maior\n";
}

if ($n2>$n1 && $n2>$n3 && $n2>$n4 && $n2>$n5) {
    print "O 2º número é o maior\n";
}

if ($n3>$n1 && $n3>$n2 && $n3>$n4 && $n3>$n5) {
    print "O 3º número é o maior\n";
}

if ($n4>$n1 && $n4>$n2 && $n4>$n3 && $n3>$n5) {
    print "O 4º número é o maior\n";
}

if ($n5>$n1 && $n5>$n2 && $n5>$n3 && $n5>$n4) {
    print "O 5º número é o maior\n";
}