<!-- ชื้่อสินค้าจำนวน 1 รายการ ๆ ละ 16 บาท ถ้าราคาสินค้ารวมน้อยกว่า 100 บาท
ทางร้านลดราคาให้ 10% ถ้าไม่ใช่ลด 15% จงเขียนโปรแกรม 
-->
<?php
    $item = 100;
    $price = 16;
    $sum =  $item * $price;
    $discount = $sum * 0.1;
    $total = $sum - $discount;
    $vat = $total * 0.07;
    $total = $total + $vat;
    if($sum < 100){
        $discount = $sum * 0.1;
    }else { 
        $discount = $sum * 0.15;  
    }
    echo "ราคาทั้งหมด =". $sum . " บาท<br>";
    echo "ลดราคา = ". $discount . " บาท<br>";
    echo "ภาษี = ". $vat . " บาท<br>";
    echo "ราคาที่ต้องจ่าย =" . $total . " บาท";
?>
