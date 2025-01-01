<?php

    function getFile($fileName){
        $pathFile = __DIR__."\\data\\".$fileName;
        
        if(file_exists($pathFile)){
            $content = file($pathFile);
            array_shift($content);
            return $content; 
        }
        return "Đường dẫn : ".$pathFile." không tồn tại.".'<br>';
    }


    function createArrQuestion($fileName){
        $fileQuestion = getFile($fileName);
        $questionData = [];
        foreach($fileQuestion as $keyQuestion => $question){
            $arrQuestion = explode("|", $question);
            $questionData[$arrQuestion[0]] = ["question"=>$arrQuestion[1]];
        }
        return $questionData; 
    }

    function createArrOptions($fileName){
        $arrOptions = getFile($fileName);
        $tmpDataOption = [];
        foreach($arrOptions as $keyOptions => $options){
           $tmpDataOption[$keyOptions]  = explode("|", $options);
        }
        $resultOptionData = [];
        foreach($tmpDataOption as $key => $tmpOption){
            $resultOptionData[$key] = [
                'id'=>$tmpOption[0],
                'char'=>$tmpOption[1],
                'option' => $tmpOption[2],
                'point' => $tmpOption[3]
            ];
        }
        return $resultOptionData;
    }

    function createQuestionData($fileQuestion, $fileOptions){
        $arrQuestion = createArrQuestion($fileQuestion);
        $arrOptions = createArrOptions($fileOptions);
        // xử lý gộp 2 mảng trên lại thành như một cấu trúc như trên hình
        foreach($arrQuestion as $idQuestion => $question){
            $arrQuestion[$idQuestion]['sentences'] = [];
            $arrQuestion[$idQuestion]['sentences'];
            
            foreach($arrOptions as $keyOption => $options){
                if($options['id'] == $idQuestion){
                    if(!isset($arrQuestion[$idQuestion]['sentences'][$options['char']])){
                        $arrQuestion[$idQuestion]['sentences'][$options['char']] = [];
                        $arrQuestion[$idQuestion]['sentences'][$options['char']]['option'] = $options['option'];
                        $arrQuestion[$idQuestion]['sentences'][$options['char']]['point'] = $options['point'];
                    }
                }
            }
        }
        return $arrQuestion;
    }

    function renderQuestion($questionData){
        $questionXhtml = '<div class="questions">';
        
        foreach($questionData as $idQuestion => $question){
           $questionXhtml .= '<div class="question">' ;
           $questionXhtml .= sprintf('<h3 class="title">%s</h3>',$question['question']) ;
           foreach($question['sentences'] as $char => $sentence){
            $questionXhtml.=  sprintf('<label><input type="radio" name="%s" value="%s">%s</label><br>',$idQuestion,$sentence['point'], $sentence['option']);
           }
           $questionXhtml .= '</div>';
        }

        $questionXhtml .= "</div>";
        return $questionXhtml;
    }

    function createResultData($resultFileName){
        $rawDataResult = getFile($resultFileName);
        $dataResult = [];
        foreach($rawDataResult as $keyData => $result){
            array_push($dataResult, explode("|", $result));
        }
        unset($rawDataResult);

        $finalData = [];
        foreach($dataResult as $keyResult => $result){
            array_push($finalData, ['min'=>$result[0], 'max'=>$result[1], 'result'=>$result[2]]);
        }
        return $finalData;
    }

    function renderResult($resultData, $sumPoint){
        $resultXhtml = '<div class="result_content">' ;
        foreach($resultData as $keyResult => $result){
            if($sumPoint >= $result['min'] && $sumPoint <= $result['max']){
                $resultXhtml .= sprintf('<h3>%s</h3>',$result['result']);
                break;
            }
        }
        $resultXhtml .= '</div>';
        echo $sumPoint;
        return $resultXhtml;
    }