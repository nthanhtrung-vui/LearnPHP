<?php 
    // parse_url để truy xuất các thành phần protocol, domain name, path, .. của một url nào đó
    $url = "https://training.zendvn.com/student/khoa-hoc-lap-trinh-php-chuyen-sau.12.html";
    $dataUrl = parse_url($url);
    echo '<pre>';
    print_r($dataUrl);
    echo '</pre>';

    // có thể sử dụng pathinfo($url) để truy xuất nhanh các thành phần của url
    $urlPath = pathinfo($url);
    echo '<pre>';
    print_r($urlPath);
    echo '</pre>';
