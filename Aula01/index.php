<?php

    include "Celular.php";
    include "Calculadora.php";
    include "Generos.php";
    include "Filmes.php";
    include "Programacao.php";
    
    //Exercício Orientação a Objetos 1
    
    $i6 = new Celular("iPhone 6", "Apple", 4.7, 32, 1, 1530);
    
    $s7 = new Celular("Galaxy S7", "Samsumg", 5.1, 32, 4, 1800);
    
    $motox = new Celular("Moto X", "Motorola", 4.7, 32, 2, 1470);
    
    $i6->Imprimir();
    
    echo "<br>";
    
    $s7->Imprimir();
    
    echo "<br>";
    
    $motox->Imprimir();

    echo "<br><br>";
    
    /// Exercício Orientação a Objetos 3
    
    $calc = new Calculadora(4.5, 2);
    
    echo $calc->Dividir() . "<br>";
    echo $calc->Somar() . "<br>";
    echo $calc->Subtrair() . "<br>";
    echo $calc->Multiplicar() ."<br>";
    
    echo "<br><br>";
    
    /// Exercício Orientação a Objetos 4
    
    $gn = new Generos("Drama", 18);
    $sda = new Filmes("Senhor dos aneis", "retor", "Atr", $gn);
    $ph = new Programacao($sda, 1400);
    
    echo "Seu valor de ingresso eh ".$ph->Valor();
    
    
    /// Exercício Orientação a Objetos 5
    
    
    
    
    
    
    
?>