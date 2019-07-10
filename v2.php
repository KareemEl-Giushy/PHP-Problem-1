<?php
// not working properly have some logical problem
    $str1 = 'kareem mohammed ibraheem';
    $str2 = 'kareem hamada mayada';
    $len;
    $same = [];
    $diff = [];

    $arr1 = explode(' ', $str1);
    $arr2 = explode(' ', $str2);
    
    
    if(count($arr1) >= count($arr2)){
        $len = count($arr1);
    }else {
        $len = count($arr2);
    }

    for($i = 0;$i < $len;$i++) {
        if(in_array($arr1[$i], $arr2)){
            if(in_array($arr2[$i], $arr1) && !in_array($arr2[$i], $same)) {
                array_push($same, $arr2[$i]);
            }else {
                array_push($diff, $arr2[$i]);
            }
        }else {
            array_push($diff, $arr1[$i]);

        }
    }

    echo implode(' ', $same) . "<br><br>" . implode(' ', $diff);