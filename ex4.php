
<?php
print "Digite uma letra: ";
$letra= fgetc(STDIN);

if ($letra=="A" or $letra=="a" or $letra=="E" or $letra=="e" or $letrda=="I" or $letra=="i" or $letra=="O" or $letra=="o" or $letra=="U" or $letra=="u"){
    print "Isso é uma vogal";
}

else {
    print "Isso é uma consoante";
}