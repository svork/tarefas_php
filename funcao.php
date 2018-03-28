<?php
  # Esta função lê três valores e retorna a soma deles
  function soma_valores() {
    $n1 = (int)$_POST['n1'];
    $n2 = (int)$_POST['n2'];
    $n3 = (int)$_POST['n3'];

    $soma = $n1 + $n2 + $n3;

    echo "A soma dos valores $n1, $n2 e $n3 é $soma";
  }
  soma_valores();
?>
