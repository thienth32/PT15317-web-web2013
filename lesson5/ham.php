<?php
// định nghĩa hàm
function tinh_tong($soa, $sob = 0){
    return $soa+$sob;
}

// tạo hàm tìm ước chung lớn nhất 
// nhận 2 tham số bao gồm $soA và $soB
// ==> hiển thị ra kết quả ước chung lớn nhất của 
// 2 số bất kỳ truyền vào



$inputSoA = $_GET['soA'];
$inputSoB = $_GET['soB'];


?>

<h2>Tổng của 2 số <?= $inputSoA ?> + <?= $inputSoB ?> = <?= tinh_tong($inputSoA) ?></h2>