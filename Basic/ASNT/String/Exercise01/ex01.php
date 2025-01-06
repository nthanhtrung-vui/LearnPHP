<?php 
    $url = "http://210.245.126.171/Music/NhacTre/TinhYeu_LyMaiTrang/wma32/06_BienTham_TinhYeu_LyMaiTrang.wma";
    /**
     * lấy các giá trị:
     * No: 06
     * Name: Biển Thắm
     * Album: Tinh Yeu
     * Singer: Ly Mai Trang
     * type: wma
     */

    function addSpaceInString($str){
        $arrStr = str_split($str);
        $result = $arrStr[0];
        for($i=1; $i<count($arrStr); $i++){
            if(ctype_upper($arrStr[$i])){
                $result.= " ";
            }
            $result .= $arrStr[$i];
        }
        return $result;
    }

     $parseUrl = parse_url($url);
     $path = $parseUrl['path'];
     $pathArr = explode("/", $path);

     $pathInfo = $pathArr[5];
     $pathInfoArr = explode("_", $pathInfo);

     $arrType = explode(".",$pathInfoArr[3]);
     $single = $arrType[0];
     $type = $arrType[1];

     $name = addSpaceInString($pathInfoArr[1]);
     $album = addSpaceInString($pathInfoArr[2]);
     $single = addSpaceInString($single);
     
     


     echo $name;
     $result = [
        "No"=>$pathInfoArr[0],
        "Name" => $name,
        "album"=>$album,
        "singel"=>$single,
        "type"=>$type
    ];

    echo '<pre>';
    print_r($result);
    echo '</pre>';


    /**PATH INFO */

    $arrPathInfo = pathinfo($url);
    echo '<pre>';
    print_r($arrPathInfo);
    echo '</pre>';