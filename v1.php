<?php 
  $str1 = 'kareem mohammed ibraheem mayada';
  $str2 = 'kareem hamada mayada mohammed ibraheem';
  $same = [];
  $diff = [];

  $arr1 = explode(' ', $str1);
  $arr2 = explode(' ', $str2);

  foreach($arr1 as $s) {
    if(in_array($s, $arr2)) {
      
      array_push($same, $s);

    }else {
      
      array_push($diff, $s);   
    
    }
  }
  foreach($arr2 as $ss) {

    if (!in_array($ss, $same)){
      array_push($diff, $ss);
    }

  }


  echo implode(' ', $same) . '<br><br>' . implode(' ', $diff);