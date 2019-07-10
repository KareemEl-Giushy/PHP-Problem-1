<?php
    $str1 = "ahmed hamada mayada heba kareem";
    $str2 = "kareem fathy ahmed hamada";
    $same = [];
    $diff = [];

    $arr1 = explode(' ', $str1);
    $arr2 = explode(' ', $str2);


    $count = (count($arr1) > count($arr1) ) ? count($arr1) : count($arr1);

    for($i = 0;$i < $count;$i++) {
        if($i < count($arr1)){

            if (in_array($arr1[$i], $arr2)){
                array_push($same, $arr1[$i]);
                
            }else {
                array_push($diff, $arr1[$i]);
                
            }
        
        }
        
        if($i < count($arr2)){

            if (!in_array($arr2[$i], $arr1)){
                array_push($diff, $arr2[$i]);
            }
        
        }
    
    }


    echo implode(' ', $same) . "<br><br>" . implode(' ', $diff);