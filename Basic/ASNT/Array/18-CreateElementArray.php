<?php 
   // range(start, end) : tạo mảng số từ start đến end
    $numbers = range(0, 10);
    echo '<pre>';
    print_r($numbers);
    echo '</pre>';

    // range(start, end, step): tạo mảng số từ start đến end và nhảy step
    $numbers2 = range(1, 11, 2);
    echo '<pre>';
    print_r($numbers2);
    echo '</pre>';
