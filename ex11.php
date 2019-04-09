<?php
print "Digite um número inteiro menor que 1000: ";
$n= (int) fgets(STDIN);
$centena= (int)($n/100)%100;
$dezena= (int)($n/10)%10;
$unidade= (int)($n%100)%10;  


if ($centena==1){
        if ($centena==1 and $dezena==1){
               if ($centena==1 and $dezena==1 and $unidade==1) {
                    print "$n = $centena centena, $dezena dezena e $unidade unidade";
                        exit;
            }

print "$n = $centena centena, $dezena dezena e $unidade unidades";
                exit;
            }

 if ($centena==1 and $unidade==1){
     print "$n = $centena centena, $dezena dezenas e $unidade unidade";
                exit;
            }    
            
            print "$n = $centena centena, $dezena dezenas e $unidade unidades";
            exit;
            }  

if ($dezena==1){
     if ($dezena==1 and $centena==1) {
        if ($dezena==1 and $centena==1 and $unidade==1){
             print "$n = $centena centena, $dezena dezena e $unidade unidade";
                exit;
             }

 print "$n = $centena centena, $dezena dezena e $unidade unidades";
                            exit;}
            
if ($dezena==1 and $unidade==1){
     print "$n = $centena centenas, $dezena dezena e $unidade unidade";
                            exit;
                        }    
                        
print "$n = $centena centenas, $dezena dezena e $unidade unidade";
                            exit;
                        }  
                            
                            
if ($unidade==1){
     if ($unidade==1 and $dezena==1) {
        if ($centena==1 and $dezena==1 and $unidade==1){
             print "$n= $centena centena, $dezena dezena e $unidade unidade";
                                                exit;
                                            }                
print "$n = $centena centenas, $dezena dezena e $unidade unidade";
                                        exit;
                                    }
                        
         if ($centena==1 and $unidade==1){
                                          print "$n = $centena centena, $dezena dezenas e $unidade unidade";
                                        exit;
                                    }    
                                    
         print "$n= $centena centenas, $dezena dezenas e $unidade unidade";
                                        exit;
                                    } 

else { 
    print "$n = $centena centenas, $dezena dezenas e $unidade unidades";
}