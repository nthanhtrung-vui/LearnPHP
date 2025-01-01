<?php 
    // SORT VALUE
    $numbers1 = [1,2,3,4,5,6,7,8,9,10];
    // sort($array) : sắp xếp các phần tử trong mảng array tăng dần theo giá trị
    sort($numbers1);
    echo '<pre>';
    print_r($numbers1);
    echo '</pre>';
    // rsort($array): săp xếp các phần tử trong mảng array giảm dần theo giá trị
    rsort($numbers1);
    echo '<pre>';
    print_r($numbers1);
    echo '</pre>';

    //SORT KEY
    $numbers2 = [10,9,8,7,6,5,4,3,2,1,0];

    // ksort($array) sắp xếp các phần tử trong mảng $array tăng dần theo khóa
    ksort($numbers2);
    echo '<pre>';
    print_r($numbers2);
    echo '</pre>';

    // krsort($array) sắp xếp các phần tử trong mảng $array giảm dần theo khóa
    krsort($numbers2);
    echo '<pre>';
    print_r($numbers2);
    echo '</pre>';