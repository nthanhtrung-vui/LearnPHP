<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .content{
            width: 500px;
            height: auto;
            padding: 10px;
            border: 2px solid #ddd;
            margin: 0 auto;
        }

    </style>
</head>
<body>
    <?php 
        function createGroup($data, $default = null){
            $xhtml= '<select name="group" id="group">';
            if(isset($data) && count($data) > 0){
                foreach($data as $keyData => $valueData){
                    if($valueData == $default){
                        $xhtml .=sprintf('<option value="%s" selected>%s</option>', $keyData, $valueData);
                    }else{
                        $xhtml .=sprintf('<option value="%s">%s</option>', $keyData, $valueData);
                    }

                }
            }
            $xhtml .= "</select>";
            return $xhtml;
        }
        $data = [1=>"Admin", 2=>"Manager", 3=>"Guest"];
     ?>
    
    <div class="content">
       <?php 
            $groupHtml = createGroup($data, "Manager");
            echo $groupHtml;
            
        ?> 
            
    </div>
</body>
</html>