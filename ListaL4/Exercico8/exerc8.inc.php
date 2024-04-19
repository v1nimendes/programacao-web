<?php
 function calcularMediaAritmeticaSimples($nota1, $nota2, $nota3)
  {
    $media = ($nota1 + $nota2 + $nota3) /3;
    return $media;
  }

  function calcularMediaPonderada($nota1, $nota2, $nota3)
  {
    $media = ($nota1 * 5 + $nota2 * 3 + $nota3 * 2)/10;
    return $media;
  }
?>