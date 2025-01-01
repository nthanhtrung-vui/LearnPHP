<?php 
    $name = "PHP";
    $price = 10000;
    $time = 200;

    // compact('var1','var2', 'varN'): tạo mảng mới từ 'var'
    $courses = compact("name", "price", "time");
    echo '<pre>';
    print_r($courses);
    echo '</pre>';
