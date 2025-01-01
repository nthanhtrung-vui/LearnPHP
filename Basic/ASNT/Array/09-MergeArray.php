<?php 
    $numbers1 = [1,2,3,4];
    $numbers2 = [5,6,7,8];
    // array_merge($array1, $array2, ..., $arrayN) nhập 2 hay nhiều mảng thành một mảng duy nhất và trả về mảng mới
    $allNumbers = array_merge($numbers1, $numbers2);
    echo '<pre>';
    print_r($allNumbers);
    echo '</pre>';