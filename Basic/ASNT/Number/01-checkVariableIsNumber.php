<?php


    $number = "02";
    $number2 = "st003";
    $intNumber = 2;
    $floatNumber = 2.3;

    function checkNumber($type, $data){
        if( strtolower($type)=="number"){
            // is_numberic kiểm tra biến có lưu trữ dữ liệu kiểu number 
            if(is_numeric($data)){
                echo "Is Number".'<br>';
            }else{
                echo "Not Number".'<br>';
            }
        }else if(strtolower($type)=="int"){
            // is_int kiểm tra biến có thuộc kiểu số nguyên
            if(is_int($data)){
                echo "Is Int".'<br>';
            }else{
                echo "Not Int".'<br>';
            }
        }else if(strtolower($type)=="float"){
            // is_float kiểm tra biến có thuộc kiểu số thập phân
            if(is_float($data)){
                echo "Is float".'<br>';
            }else{
                echo "Not float".'<br>';
            }
        }else{
            echo "Type is not valid! please choise type Number or Int or Float";
        }
    }

    echo checkNumber("number",$number);
    echo checkNumber("number",$number2);
    echo checkNumber("int",$intNumber);
    echo checkNumber("float",$floatNumber);