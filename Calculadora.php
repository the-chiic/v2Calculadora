<?php

    require_once "Funciones.php";

    $resultado=new Funciones();

    $resultado->number1=$_POST["number1"];
    $resultado->number2=$_POST["number2"];
    $operation=$_POST["operation"];

    switch($operation){
        case "+":
            echo "Resultado: ".$resultado->sumar();
            break;
        case "-":
            echo "Resultado: ".$resultado->restar();
            break;
        case "*":
            echo "Resultado: ".$resultado->multiplicar();
            break;
        case "/":
            echo "Resultado: ".$resultado->dividir();
            break;
        default:
            echo "Operador No Válido";
    }
?>