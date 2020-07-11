<?php
$soa = $_GET['soa'];
$sob = $_GET['sob'];
$soc = $_GET['soc'];

$tong = $soa + $sob + $soc;

$max = $soa;
if($max < $sob) $max = $sob;
if($max < $soc) $max = $soc;

?>

<h2>Tổng 3 số = <?php echo $tong?></h2>
<h2>Số lớn nhất = <?php echo $max?></h2>