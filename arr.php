<?php
function sort($book){
    
    uasort($book, function($a, $b) {
        return strlen($b) - strlen($a);
    });
}


$book=['куку',
 'кукарику',
 'кудкудаааа'];
sort($book);
print_r($book);
