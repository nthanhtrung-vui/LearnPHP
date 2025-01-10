<?php 
    /**
     * Một chuỗi chuẩn hóa:
     * - Không có khoản trắng ở đầu và cuối chuỗi
     * - Giữa các từ trong chuỗi chỉ tồn tại khoản trắng duy nhất
     * - Ký tự đầu tiên trong chuỗi phải là ký tự in hoa. Nếu chuỗi là một danh từ riêng yêu cầu các kí tự đầu tiên ở mỗi từ phải được viết hoa
     * các kí tự còn lại ở dạng chữ thường.
     */
    $str = "   Nguyen  VAn    An     ";
    // loại bỏ khoản trắng ở đầu và cuối chuỗi
    $str = trim($str);

    // chuyển tất cả sang chữ thường
    $str = strtolower($str);

    // giữa các từ trong chuỗi chỉ tồn tại khoản trắng duy nhất
    $strArr = explode(" ", $str);
    // loại bỏ các phần tử là khoản trắng
    foreach($strArr as $key => $word){
        if(trim($word) == null) {
            unset($strArr[$key]);
        } 
        $strArr[$key] = ucfirst($word);
    }
    // chuyển mảng thành chuỗi với một kí tự " "  
    $str = implode(" ", $strArr);
    echo $str;