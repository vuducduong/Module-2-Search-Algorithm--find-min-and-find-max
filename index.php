<?php

function findMin($arr)
{
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($min > $value) {
            $min = $value;
        }
    }
    return "Min = " . $min;
}

function findMax($arr)
{
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($max < $value) {
            $max = $value;
        }
    }
    return "max = " . $max;
}

$nums = [];
for($i= 0;$i<100;$i++){
    $nums[$i]= rand(1,101);
}
foreach($nums as $num){
    echo $num. " ";
}
echo "<br>";
echo findMin($nums);
echo "<br>";
echo findMax($nums);