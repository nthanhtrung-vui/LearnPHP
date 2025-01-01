<?php 
    $numbers = [1,2,3,4,5,6,7];

    // array_pop($array) loại bỏ phần tử cuối cùng của mảng. Hàm trả về phần tử cuối cùng được loại bỏ
    $popEle = array_pop($numbers);
    echo "Pop Element: ".$popEle.'<br>';

    // array_shift($array) loại bỏ phần tử đầu tiên của mảng. Hàm trả về phần tử đầu tiên được loại bỏ
    $shiftEle = array_shift($numbers);
    echo "Shift Element: ".$shiftEle.'<br>';