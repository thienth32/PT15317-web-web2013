<?php

$arr1 = [
    "nam_2015" => 37,
    "nam_2016" => 961,
    "nam_2017" => 464,
    "nam_2018" => 494,
    "nam_2019" => 531
];

$arr2 = [
    0 => [
        "id" => 618, 
        "name" => "Nguyen Thi Diu", 
        "email" => "diuntph06069@fpt.edu.vn"
    ],
    1 => [
        "id" => 366, 
        "name" => "Trần Thị Loan", 
        "email" => "loantt7@fe.edu.vn"
    ],
    2 => [
        "id" => 552, 
        "name" => "Lê Trọng Đạt", 
        "email" => "datlt34@fe.edu.vn"
    ]
];

?>
<table border="1">
    <tbody>
        <?php foreach($arr2 as $key => $value): ?>
            <tr>
                <td><?php echo $value['id'] ?></td>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['email'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </thead>
    
</table>