<?php 
    $numbers = [1,2,3,4,5,6];
    $name = "chuong";
    // unset($varialbe) dùng để xóa biến ra khỏi bộ nhớ
    unset($name);

    // unset($array[index],...$array[indexN]) loại bỏ phần tử tại vị trí $array[index] khoải $array
    unset($numbers[1], $numbers[3]);
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';
