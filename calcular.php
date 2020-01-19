<?php

if(isset($_POST["btncalcular"])) {

    require_once 'Secuencia.php';

    $secuencia= new Secuencia();

    $valor = $_POST["txtnumero"];
     
    

     $secuencia->ListarNumeros();

     echo "<br>";

     $secuencia->HacerSecuencia();

}else {

 echo "valor invalido";

}
