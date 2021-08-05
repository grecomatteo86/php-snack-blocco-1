<?php
$matches = [
    [
        'home_team' => 'Juventus',
        'guest_team' => 'Inter',
        'home_points' => 3,
        'guest_points' => 2
    ],
    [
        'home_team' => 'Verona',
        'guest_team' => 'Sassuolo',
        'home_points' => 1,
        'guest_points' => 0
    ]
];
foreach($matches as $val){
    echo $val['home_team']." - ".$val['guest_team']." | ".$val['home_points']." - ".$val['guest_points']."<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>