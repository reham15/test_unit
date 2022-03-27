<?php
 class factorial{


    public static function calc_factorial($number)
    { if(is_numeric($number)&&$number>=0&&!is_float($number))
       {
        if($number <= 1){  
            return 1;  
        }  
        else{  
            return $number * factorial::calc_factorial($number - 1);  
        }  

    }
    else
    return null;


    }



}


