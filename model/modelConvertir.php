<?php

require_once 'modelCalculadora.php';

class ConvertirNumeros extends Calculadora {

    public function convertirPalabras($resultado) {
        return $this->convertir_a_palabras($resultado);
    }

    private function convertir_a_palabras($resultado) {
        $unidades = array("", "uno", "dos", "tres", "cuatro", "cinco", "seis", "siete", "ocho", "nueve");
        $decenas = array("", "diez", "veinte", "treinta", "cuarenta", "cincuenta", "sesenta", "setenta", "ochenta", "noventa");
        $decenas_especiales = array("diez", "once", "doce", "trece", "catorce", "quince", "dieciséis", "diecisiete", "dieciocho", "diecinueve");
        $centenas = array("", "ciento", "doscientos", "trescientos", "cuatrocientos", "quinientos", "seiscientos", "setecientos", "ochocientos", "novecientos");

        if ($resultado == 0) return "cero";

        if ($resultado < 10) return $unidades[$resultado];
        if ($resultado < 20) return $decenas_especiales[$resultado - 10];
        if ($resultado < 100) {
            $d = intval($resultado / 10);
            $u = $resultado % 10;
            return $decenas[$d] . ($u ? " y " . $unidades[$u] : "");
        }
        if ($resultado < 1000) {
            if ($resultado == 100) return "cien";
            $c = intval($resultado / 100);
            $r = $resultado % 100;
            return $centenas[$c] . ($r ? " " . $this->convertir_a_palabras($r) : "");
        }
        if ($resultado < 1000000) {
            $m = intval($resultado / 1000);
            $r = $resultado % 1000;
            return $this->convertir_a_palabras($m) . " mil" . ($r ? " " . $this->convertir_a_palabras($r) : "");
        }
        if ($resultado < 1000000000) {
            $m = intval($resultado / 1000000);
            $r = $resultado % 1000000;
            return $this->convertir_a_palabras($m) . " millones" . ($r ? " " . $this->convertir_a_palabras($r) : "");
        }
        if ($resultado < 1000000000000) {
            $b = intval($resultado / 1000000000);
            $r = $resultado % 1000000000;
            return $this->convertir_a_palabras($b) . " mil millones" . ($r ? " " . $this->convertir_a_palabras($r) : "");
        }
        if ($resultado < 1000000000000000) {
            $b = intval($resultado / 1000000000000);
            $r = $resultado % 1000000000000;
            return $this->convertir_a_palabras($b) . " billones" . ($r ? " " . $this->convertir_a_palabras($r) : "");
        }

        return "Número demasiado grande";
    }
}

?>

