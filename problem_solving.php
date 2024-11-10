<?php 
 


//  returning the reverse of the array
$arr = [1,2,3,4,5,6,7,8];

$arr_reverse =[];

for( $i= 0 ; $i < count($arr) ; $i++ ){
    $val = count($arr) - $i - 1;
    $arr_reverse[$i] = $arr[$val];
}

print_r($arr_reverse);


// function to return the max value of the array 

function max_value($arr){
    $max = $arr[0];
    foreach($arr as $val){
      
        if($val > $max){
            $max = $val;
        }
    }
   return $max;
}
echo "<br>". max_value($arr);

// function to return the min value of the array

function min_value($arr){
  
    $min = $arr[0];
foreach($arr as $val){
    if ($val < $min){
        $min = $val;
    }
}
return $min;
}

echo "<br>". min_value($arr);

// Write a function in PHP to find the first non-repeating character in a given string. If all characters are repeated, return null.
$arr_repeated = [3,4,4,5,6,7,8,9,6,11,12,13,6];
function non_repeating_char($arr){
    for ($i = 0; $i < count($arr); $i++){
        $char_to_test = $arr[$i];
        for ($j = $i+1 ; $j < count($arr); $j++){
            if($char_to_test !== $arr[$j]){
                continue;
            } else {
                return $char_to_test;
                break;
            }
        }
    }
    return null; // Add this line to handle the case when all characters are repeated
}


echo "<br>".non_repeating_char($arr_repeated);


?>