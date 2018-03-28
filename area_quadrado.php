<?php
  # Esta função calcula a área de um quadrado
  function area() {
    $n1 = (int)$_POST['n1'];

    $quadrado = $n1 * $n1;

    echo "A área do quadrado é: $quadrado cm²";
  }
  area();
?>
