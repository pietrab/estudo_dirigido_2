<?php
print "Digite a nota 1: ";
$n1= (float) fgets(STDIN);

print "Digite a nota 2: ";
$n2= (float) fgets(STDIN);

print "Digite a média necessária: ";
$median= (float) fgets(STDIN);
$media = ($n1+$n2)/2;
$media= round($media, 2);

if ($media>=$median && $media!=10){
    print "Alunx aprovadx - Média: $media; Média necessária: $median";
}

if ($media<$median){
    print "Alunx reprovadx - Média: $media; Média necessária: $median";
}

if ($media==10){
    print "Alunx aprovadx com distinção - Média: $media; Média necessária: $medianecessaria";
}
