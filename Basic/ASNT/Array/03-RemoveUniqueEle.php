<?php 
    $numbers = [1,1,2,2,3,3,4,4];
    // array_unique($array) loại bỏ phần tử trùng nhau trong mảng và trả về mảng mới
    $newNumbers = array_unique($numbers);
    echo '<pre>';
    print_r($newNumbers);
    echo '</pre>';
