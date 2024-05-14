<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Document</title>
</head>
<body>

    <?php
    $aluno = array(1,2,3,4,5,6);
    $aluno['0'] = "Fabio<br>";
    $aluno['1'] = "20<br>";
    $aluno['2'] = "rua-x<br>";
    $aluno['3'] = "guanambi<br>";
    $aluno['4'] = "bahia<br>";
    $aluno['5'] = "000-000-000-00<br><br>";

    foreach ($aluno as $key => $val) {
        echo "$key: $val<br>";
    }
    
    $aluno2 = array(1,2,3,4,5,6);
    $aluno2['0'] = "Guimesma<br>";
    $aluno2['1'] = "12<br>";
    $aluno2['2'] = "rua-y<br>";
    $aluno2['3'] = "criciuma<br>";
    $aluno2['4'] = "acre<br>";
    $aluno2['5'] = "000-000-000-11<br><br>";

    foreach ($aluno2 as $key => $val) {
        echo "$key: $val<br>";
    }
    
    $aluno3 = array(1,2,3,4,5,6);
    $aluno3['0'] = "Claudio<br>";
    $aluno3['1'] = "20<br>";
    $aluno3['2'] = "rua-z<br>";
    $aluno3['3'] = "jacobina<br>";
    $aluno3['4'] = "bahia<br>";
    $aluno3['5'] = "000-000-000-22<br><br>";

    foreach ($aluno3 as $key => $val) {
        echo "$key: $val<br>";
    }        ?>
    
</body>
</html>