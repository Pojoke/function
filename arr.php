<?php
function sort($book){
    
    uasort($book, function($a, $b) {
        return strlen($b) - strlen($a); // Сравнение строк по длине в обратном порядке
    });
}


$book=['куку',
 'кукарику',
 'кудкудаааа'];
sort($book);
print_r($book);
