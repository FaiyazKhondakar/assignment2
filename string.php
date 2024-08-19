<?php
    function vowelsAndReverseString(string $str){
        $vowelCount = 0;
        $lowercase = strtolower($str);
        for ($i = 0; $i < strlen($str); $i++) {
            if (in_array($lowercase[$i], ["a", "e", "i", "o", "u"])) {
                $vowelCount++;
            }
        }
        
        return 'Original String: ' . $str. ', Vowel Count: '.$vowelCount.', Reversed String: ' .strrev($str);
    }

    $strings = ["Hello", "World", "PHP", "Programming"];



    for($i=0; $i<count($strings); $i++){
        echo vowelsAndReverseString($strings[$i]);
    }

    


    
    