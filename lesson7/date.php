<?php

// echo date('M, d Y');
// echo date('M, d Y', strtotime('1991-02-03 18:30:00'));
// echo (time() - strtotime('1991-02-03 18:30:00'))/(3600*24*365);
// echo date('M, d Y H:i:s A', strtotime("1991-02-03 18:30:00 -2 hours"));

echo (new DateTime("1996-10-07 +2 weeks"))->format('m/d/Y');

?>