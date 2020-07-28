<?php
$users = [
    [
        "id" => rand(1, 100),
        "email" => "thienth3@fe.edu.vn",
        "phone_number" => "0987654321"
    ],
    [
        "id" => rand(1, 100),
        "email" => "thienth4@fe.edu.vn",
        "phone_number" => "0987654321"
    ],
    [
        "id" => rand(1, 100),
        "email" => "thienth5@fe.edu.vn",
        "phone_number" => "0987654321"
    ]
];

?>

<table border="1">
    <thead>
        <td>ID</td>
        <td>Email</td>
        <td>Phone Number</td>
    </thead>
    <tbody>
        <?php foreach($users as $u): ?>
            <tr>
                <td><?php echo $u["id"] ?></td>
                <td><?= $u["email"] ?></td>
                <td><?= $u["phone_number"] ?></td>
            </tr>
        <?php endforeach;?>
    </tbody>


</table>