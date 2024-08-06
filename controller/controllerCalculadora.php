<?php



require_once '../model/modelCalculadora.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {



    $operacion = $_POST['operacion'];

    // Crea una instancia de tu clase
    $clase = new Calculadora();
    $claseConvertir = new ConvertirNumeros();

    if ($operacion === 'suma') {
        $resultado = $clase->Suma();
        
    } elseif ($operacion === 'resta') {
        $resultado = $clase->Resta();
        
    }

    elseif ($operacion === 'multiplicar') {
        $resultado = $clase->Multiplicar();
    }

    elseif ($operacion === 'dividir') {
        $resultado = $clase->Dividir();
    }

    elseif ($operacion === 'exponenciacion') {
        $resultado = $clase->Exponenciación();
    }

    elseif ($operacion === 'porcentaje') {
        $resultado = $clase->Porcentajes();
    }


    if($operacion === 'suma' || $operacion === 'resta ' || $operacion === 'division' || $operacion === 'multiplicacion'){

        $conversion = $claseConvertir->convertirPalabras($resultado['resultado']);

    } else{
        
        $conversion = $claseConvertir->convertirPalabras($resultado['resultado']);

    }



 


}






require_once '../view/viewCaculadora.php';



// session_start();
// $_SESSION['resultado'] = $resultado;

// // Redirige a una página que mostrará el resultado
// header('Location: ../view/viewResultado.php');
// exit();



?>