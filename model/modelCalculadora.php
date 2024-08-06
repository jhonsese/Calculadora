<?php





require_once '../controller/controllerCalculadora.php';
require_once 'modelConvertir.php';


class Calculadora {



public $num1;
public $num2;


public function __construct(){



$this->num1 =  isset($_POST['num1']) ? $_POST['num1'] : null;
$this ->num2 = isset($_POST['num2']) ? $_POST['num2'] : null;



}


public function Suma(){


$num1 = is_numeric($this->num1) ? floatval($this->num1): 0;
$num2 = is_numeric($this->num2) ? floatval($this->num2): 0;

$suma = $num1 + $num2;

$separadorNumero = number_format($suma, 0 ,',' , '.');

return array(
    'resultado' => $suma,
    'separadorNumero' => $separadorNumero
);

}




public function Resta(){


    $num1 = is_numeric($this->num1) ? floatval($this->num1): 0;
    $num2 = is_numeric($this->num2) ? floatval($this->num2): 0;
    
    $resta = $num1 - $num2;
    $separadorNumero = number_format($resta, 0 ,',' , '.');

return array(
    'resultado' => $resta,
    'separadorNumero' => $separadorNumero
);
    
    
    }

    
public function Multiplicar(){


    $num1 = is_numeric($this->num1) ? floatval($this->num1): 0;
    $num2 = is_numeric($this->num2) ? floatval($this->num2): 0;
    
    $multiplicar = $num1 * $num2;

    $separadorNumero = number_format($multiplicar, 0 ,',' , '.');

    return array(
        'resultado' => $multiplicar,
        'separadorNumero' => $separadorNumero
    );
       
    
    
    }


    
public function Dividir(){


    $num1 = is_numeric($this->num1) ? floatval($this->num1): 0;
    $num2 = is_numeric($this->num2) ? floatval($this->num2): 0;
    
    $dividir = $num1 / $num2;

    $separadorNumero = number_format($dividir, 0 ,',' , '.');

return array(
    'resultado' => $dividir,
    'separadorNumero' => $separadorNumero
);
   

    
    
    }

    public function Exponenciación(){


        $num1 = is_numeric($this->num1) ? floatval($this->num1): 0;
        $num2 = is_numeric($this->num2) ? floatval($this->num2): 0;
        
        $exponenciacion = $num1 ** $num2;
        return $numero_formateado = number_format($exponenciacion, 2, '.', ',');
        
        //  echo "Resultado Resta: " . htmlspecialchars($resta);
        
        
        }




  


}





?>