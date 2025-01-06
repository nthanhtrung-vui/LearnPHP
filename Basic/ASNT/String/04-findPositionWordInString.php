<?php 
    $str = "My name is Hang, Hang is good teacher";

    // stripos() tìm kiếm chỉ số xuất hiện đầu tiên của một từ nào đó trong chuỗi
    echo stripos($str, "Hang").'<br>';

    // strripos() tìm kiếm chỉ số xuất hiện cuối cùng của một từ nào đó trong chuỗi
    echo strripos($str, "is");