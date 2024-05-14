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
    $aluno = array(
        "nome" => 1,
        "idade" => 2,
        "end" => 3,
        "cidade" => 4,
        "estado" => 1,
        "cpf" => 2,
    );
    $aluno['nome'] = "Fabio";
    $aluno['idade'] = "20";
    $aluno['end'] = "rua-x";
    $aluno['cidade'] = "guanambi";
    $aluno['estado'] = "bahia";
    $aluno['cpf'] = "000-000-000-00";
    $aluno2['nome'] = "Guimesma";

    $aluno2 = array(
        "nome" => 1,
        "idade" => 2,
        "end" => 3,
        "cidade" => 4,
        "estado" => 1,
        "cpf" => 2,
    );
    $aluno2['idade'] = "12";
    $aluno2['end'] = "rua-y";
    $aluno2['estado'] = "criciuma";
    $aluno2['cidade'] = "acre";
    $aluno2['cpf'] = "000-000-000-11";
    
    $aluno3 = array(
        "nome" => 1,
        "idade" => 2,
        "end" => 3,
        "cidade" => 4,
        "estado" => 1,
        "cpf" => 2,
    );
    $aluno3['nome'] = "Claudio";
    $aluno3['idade'] = "20";
    $aluno3['end'] = "rua-z";
    $aluno3['cidade'] = "jacobina";
    $aluno3['estado'] = "bahia";
    $aluno3['cpf'] = "000-000-000-22";

    echo "<p> $aluno[nome] </p>";
    echo "<p> $aluno[idade] </p>";
    echo "<p> $aluno[end] </p>";
    echo "<p> $aluno[cidade] </p>";
    echo "<p> $aluno[estado] </p>";
    echo "<p> $aluno[cpf] </p> <br>";

    echo "<p> $aluno2[nome] </p>";
    echo "<p> $aluno2[idade] </p>";
    echo "<p> $aluno2[end] </p>";
    echo "<p> $aluno2[estado] </p>";
    echo "<p> $aluno2[cidade]</p>";
    echo "<p> $aluno2[cpf] </p> <br>";

    echo "<p> $aluno3[nome] </p>";
    echo "<p> $aluno3[idade] </p>";
    echo "<p> $aluno3[end] </p>";
    echo "<p> $aluno3[estado] </p>";
    echo "<p> $aluno3[cidade] </p>";
    echo "<p> $aluno3[cpf] </p> <br>";



 $professor = array(
    "nome" => 1,
    "idade" => 2,
    "end" => 3,
    "cidade" => 4,
    "estado" => 1,
    "cpf" => 2,
 );
 $professor['nome'] = "Fabio";
 $professor['idade'] = "20";
 $professor['end'] = "rua-x";
 $professor['cidade'] = "guanambi";
 $professor['estado'] = "bahia";
 $professor['cpf'] = "000-000-000-12";
 echo "<p> $professor[nome] </p>";
 echo "<p> $professor[idade] </p>";
 echo "<p> $professor[end] </p>";
 echo "<p> $professor[cidade] </p>";
 echo "<p> $professor[estado] </p>";
 echo "<p> $professor[cpf] </p>";
 ?>
 
    
</body>
</html>