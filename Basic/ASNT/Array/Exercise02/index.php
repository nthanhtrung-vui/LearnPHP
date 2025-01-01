<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trắc nghiệm tính cách</title>
    <style>
        
    </style>
</head>
<body>
    <?php 
        require_once('libs.php');
        if(file_exists('libs.php')){
            $questionData = createQuestionData('question.txt', 'options.txt');
            if(isset($questionData) && count($questionData) > 0){
                $questionsXhtml = renderQuestion($questionData);
            }else{
                echo "Dữ liệu trống hoặc bị lỗi không lấy được!";
            }
        }else{
            echo "file thư viện không tìm được trên hệ thống!";
        }
     ?>
    <div class="content">
        <form action="result.php" method="POST">
            <?php echo $questionsXhtml ?>
            <button type="submit">Xem kết quả</button>
        </form>
    </div>
</body>
</html>