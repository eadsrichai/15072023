<!-- 
    โปรแกรมตัดเกรด โดยรับข้อมูลคะแนนรวม อยู่ระหว่าง 0 - 100 หลังจากนั้นนำมา
    คำนวณผลการเรียนออกมา ตามเงื่อนไข ต่อไปนี้
    80 - 100 = A
    75 - 79 = B+
    70 - 74 = B
    65 - 69 = C+
    60 - 64 = C
    55 - 59 = D+
    50 - 54 = D
    0 - 49 = F
    แสดงผลลัพธ์  คะแนนรวม และ เกรด ออกมา ทางจอภาพ
 -->

 <?php
    $mark = 69;
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
        echo  "คะแนนรวม = ". $mark . " เกรด ". $grade;

    
    


?>