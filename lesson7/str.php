<?php

$str = "FPT Poly" . uniqid();
// strlen($str) => số lượng ký tự trong chuỗi
// echo strlen($str);
// var_dump(rtrim("     something,,,,,,,,,,,,,", ","));

// $str = '<p><strong>trần hữu thiện</strong></p>
// <p><em><strong>something</strong></em></p>
// <p><span style="text-decoration: line-through; color: #e03e2d;"><em><strong>FPT poly</strong></em></span></p>';
// echo htmlentities($str);

// $price = 9000.288;
// echo number_format($price, 2, '+', ','); // => 9.000,28
// echo md5('123456');




// echo password_hash("123456", PASSWORD_DEFAULT);
// var_dump(password_verify("123456", '$2y$10$53HIPlIuIm7E6Jwxcesaoerh8tYunaH6JLHtQjKt4xf3f8jg4wY9n'));


// echo str_replace("world","***","Hello world, your world class!");

// echo substr("Hello world",2);

$a = 5.157;
// echo "\$a";
echo round($a, 2);
?>
