<?php

/*
Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60
*/

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