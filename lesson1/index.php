<?php
    // 
    #
    /* */
    $a = "something";

    // b1: lam gì đấy
    // b2: làm tiếp cái gì

    echo $a;


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Hello <?php echo "Thienth dep trai";  ?></h2>
    <?php for($i = 0; $i < 100; $i++): ?>
        <?php if($i%2==1):?>
        <li><?php echo $i?></li>
        <?php endif?>        
    <?php endfor?>
</body>
</html>