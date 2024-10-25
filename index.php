<?php


function sum_row($n) {
   $got=0;
    for ($i=1; $i <=$n ; $i++) { 
   $got+=$i*$i;
    }
    return $got;
}
$n=rand(3,20);
echo sum_row(($n));


    
  
  
   