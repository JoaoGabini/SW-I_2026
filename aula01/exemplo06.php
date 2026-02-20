<?php
    //OPERADORES LÓGICOS
    $a = true;
    $b = 5;
    $c = null;

    //AND: &&, OR: ||, NOT: !;
    $resultado= $a && $b;
    $resultado1= $a && $c;
    $resultado2= $a || $c;

    echo "Resultado = $resultado";
    echo "<hr>";
    echo "Resultado = $resultado1";
    echo "<hr>";
    echo "Resultado = $resultado2";
?>