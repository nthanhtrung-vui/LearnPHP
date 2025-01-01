<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Kết quả trắc nghiệm</title>
</head>
<body>
    <?php 
        require_once('libs.php');
        if(file_exists('libs.php')){
            if(isset($_POST)){
                echo '<pre>';
                print_r($_POST);
                echo '</pre>';
                $sumPoint = array_sum($_POST);
                $resultData = createResultData('result.txt');
                $resultXhmlt = renderResult($resultData, $sumPoint);
            }else{
                echo "Không lấy được tổng điểm từ hoặt động submit";
            }

        }
     ?>
    <div class="content">
        <?php echo $resultXhmlt ?>
    </div>
</body>
</html>