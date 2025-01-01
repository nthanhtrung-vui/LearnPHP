<?php 
    $numbers = [1,1,2,3,3,4,4,4,5,6,7,7,9];
    //array_count_values: Thống kê sự xuất hiện của các phần tử trong mảng
    $countNumbers = array_count_values($numbers);
    echo '<pre>';
    print_r($countNumbers);
    echo '</pre>';