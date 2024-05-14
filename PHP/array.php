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
    $aluno = array("josé","jamira","jamélia","josefina","josefa","jabucreia","jaburanga","josozia","jose");
   

    for($a=0; $a<count($aluno); $a++) {
        echo "Na posição $a, o aluno é $aluno[$a]<br>";
        }
        
    for($a=0; $a<count($aluno); $a++) {
        if($a == 4){
            echo "Na posição $a, o aluno é $aluno[$a]<br>";}
            }
     
        ?>
    
</body>
</html>