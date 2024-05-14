<?php
 $var = array(
    "Maria" => 1,
    "João" => 2,
    "José" => 3,
    "Neusa" => 4
 );
 echo "<p>$var[Maria]</p> <br>";
 echo "<p>$var[João]</p> <br>";


 $var2 = array(
    0 =>5,
    6 =>8,
    9 =>15
 );
 echo "<p> $var2[0] </p>";
  $var2[1] = "20";
  $var2[2] = "3";
  $var2[5] = "4";

  echo "<p> $var2[1] </p>";
  echo "<p> $var2[2] </p>";
  echo "<p> $var2[5] </p>";
  
 ?>