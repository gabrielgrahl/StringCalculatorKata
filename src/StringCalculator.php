<?php

final class StringCalculator {
    
    
    
    public static function Sum(string $string){
        if($string == "") {
            return 0;
        }
        
        $numbers = explode(",", $string);
        $sum = 0;
        foreach ($numbers as $number){
            $sum = $sum + $number;
        }
        
        return $sum;
    }
}

