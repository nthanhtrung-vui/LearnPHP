<?php 
    $data = ["Key01"=>"val01","Key02"=>"val02", "Key03"=>"val03"];

    // array_flip($array) trả về một mảng có khóa và giá trị được hoán đổi cho nhau so với mảng $array (giá trị thành khóa và khóa thành giá trị)
    $new_data = array_flip($data);
    echo '<pre>';
    print_r($new_data);
    echo '</pre>';
    