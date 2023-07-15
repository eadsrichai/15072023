<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมตัดเกรด</title>
    <link rel="stylesheet" href="../bootstrap-5.3.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <div>
            <p class="fs-1 bg bg-primary text-white mt-3  p-3">โปรแกรมคำนวณผลการเรียน</p>
        </div>
    <form action="Ex5.php" method="GET">
       <div class="row mt-3">
            <div class="col-3">
                <input type="text"  class="form-control fs-4" placeholder="กรุณากรอกคะแนน" value="" name="mark" />
            </div>
            <div class="col-3">
                <input type="submit" class="btn btn-primary" value="คำนวณผลการเรียน" name="cal" />
            </div>
       </div>
    </form>
 



<?php
$mark = $_GET['mark'];
    $grade = "";
    if($mark < 50){
        $grade = "F";
    }else if($mark < 55){
        $grade = "D";
    }else if($mark < 60){
        $grade = "D+";
    }else if($mark < 65){
        $grade = "C";
    }else if($mark < 70){
        $grade = "C+";
    }else if($mark < 75){
        $grade = "B";
    }else if($mark < 80){
        $grade = "B+";
    }else if($mark <= 100){
        $grade = "A";
    }else if($mark < 0 || $mark > 100){
        echo "คะแนนอยู่นอกขอบเขตที่กำหนดไว้ [0-100]";
    }
        echo  "<label class='fs-2'>คะแนนรวม = ". $mark . " เกรด ". $grade . "</label>";

?>

</div>
</body>
</html>