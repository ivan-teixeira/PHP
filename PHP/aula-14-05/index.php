<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h1> Array-Laços</h1>
    <h2>exemplo 01</h2>
    
    <pre>
    <?php 
    $a1= array("antônio","luiz","josé","joão");
    echo "<p>$a1[0]</p>";
    ?>
    </pre>


    <br><br><br><br>    
    
    <?php 
        echo "<p>$a1[0]</p>";
        ?>array

<br><br><br><br>    
<h2> com for</h2>
<pre>
    <?php
            for($a=0; $a<count($a1); $a++) {
                echo "<p>posicao $a valor $a1[$a] <br></p>";
            };
        ?>
    </pre>

    <br><br><br><br>    

    <h2> Foreach - quando as posições não são números</h2>
    <pre>
    <?php
            
           $var = array(
                "maria" => 25,
                "joão" => 44,
                "josé" => 12,
                "neusa" => 73
            );
            foreach($var as $nome => $valor) {
                echo "<p>Nome: $nome, Idade: $valor</p>";
            }
        ?>
    </pre>

z
    
    
    <br><br><br><br>    

    <h2>array com foreach</h2>

    <pre>
        <?php
            foreach ($a1 as $dados) {
                echo "<p>$dados</p><br>";}
        ?>
    </pre>
    <h2>foreach - chave e valor - desestruturando o array</h2>
    <pre>
        <?php
            foreach ($a1 as $key => $val) {
                echo "<p>$key: $val</p><br>";}
        ?>
    </pre>
<h2>exemplo com print</h2>
<pre>
    <?php
    print($var);?>
</pre>

<h2>Array multidimensional</h2>
<pre>
    <?php
    $alunos = array(
        "maria" => array(
            "endereço" => "rua-x",
            "cidade" => "criciuma",
            "estado" => "acre",
            "idade" => "20",
            "telefone" => "000-000-000-01"
            
        ),
        "robério" => array(
            "endereço" => "rua-y",
            "cidade" => "andria",
            "estado" => "acre",
            "idade" => "25",
            "telefone" => "000-000-000-02"
            
        ),
        "antônio" => array(
            "endereço" => "rua-z",
            "cidade" => "jurema",
            "estado" => "acre",
            "idade" => "24",
            "telefone" => "000-000-000-03"
        ));
        print_r($alunos["maria"]["cidade"]);
        echo ("<br>");
        print_r($alunos["maria"]["estado"]);
        echo ("<br>");
        print_r($alunos["maria"]["telefone"]);
        echo ("<br>");
        echo ("<br>");
        echo ("<br>");
        echo ("<br>");
        
    ?>
    <h2>Impressão com foreach - array dentro do array</h2>
    <pre>
        <?php
            foreach ($alunos as $key => $val) {
                foreach ($val as $lala => $aaa) {
                    echo "<p>pessoa: $key, $lala: $aaa</p><br>";

            }}
       ?>
    </pre>
    
</pre>
</body>
</html>