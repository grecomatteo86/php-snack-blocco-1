<?php
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
    var_dump($age);
    if (strlen($name) > 3 && strpos($mail,'.')!==false && strpos($mail,'@')!==false && is_numeric($age)==true){
        $answer = 'Accesso riuscito';
    }else{
        $answer = 'Accesso negato';
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
    <h1><?php echo $answer ?></h1>
</body>
</html>