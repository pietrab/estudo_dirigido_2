
<?php

print "Digite a: ";
$a= (float) fgets(STDIN);

if ($a==0){
   print "A equação não é d 2º grau\n";
   print "Bye\n";
   exit;
}


print "Digite b: ";
$b= (float) fgets(STDIN);

print "Digite c: ";
$c= (float) fgets(STDIN);
$delta= ($b**2)-(4*$a*$c);
$x1 = (-$b-sqrt($delta))/(2*$a);
$x2 = (-$b+sqrt($delta))/(2*$a);
$semdelta=(-$b)/(2*$a);

if ($delta==0)
  {print "A equação possui apenas uma raíz real, o resultado é: $semdelta\n";}

if ($delta<0)
  {print "A equação não possui raízes reais, pois o delta é negativo\n";}
  
if ($delta>0)
  {print "A equação possuis duas raízes:\nX'=$x1\nX''=$x2\n";}