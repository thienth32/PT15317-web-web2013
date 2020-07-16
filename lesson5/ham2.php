<?php

// trong hàm, được phép sử dụng câu lệnh return
// return = trả về 1 kết quả. các câu lệnh trong
// hàm đứng sau return thì sẽ không thực thi nữa
// trong 1 hàm thì có thể sử dụng hoặc không sử dụng
// từ khóa return


// tạo ra 1 mảng gồm 10 phần tử có giá trị 
// random nhưng phải là số chẵn
function taoSoChan(){
    $number = -1;

    do {
        $number = rand(1, 1000);
    } while($number%2 !== 0);

    return $number;
}

$arr = [];

for ($i=0; $i < 10; $i++) { 
    $arr[] = taoSoChan();
}
echo "<pre>";
var_dump($arr);


function tinhtong($a, $b){
    // ktra a va b
    if($a*$b == 0){
        return "Kiểm tra lại giá trị của tham số";
    }

    return $a+$b;
}

echo tinhtong(0, 6);



?>