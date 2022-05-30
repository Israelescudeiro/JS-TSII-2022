<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once 'Calculadora.class.php';

class Main{

    private ?int $num1;
    private ?int $num2;
    private Calculadora $calc;

    public function __construct() // Inicializa assim que a classe é chamada. Nunca retorna nada.
    {
        $this->num1 = isset($_POST['n1']) ? (int) $_POST['n1'] : null;
        $this->num2 = isset($_POST['n2']) ? (int) $_POST['n2'] : null;

        $this->calc = new Calculadora($this->num1, $this->num2);

        $resultado = null;

        try{
            $resultado = $this->operacao();
        }catch(Exception $e){
            
            $e->getMessage();
        }

        $this->front($this->num1, $this->num2, $resultado);
    }

    private function operacao():?float
    {
        switch($_POST['operacao'] ?? ''){
            
            case 'soma':
                return $this->calc->soma();
                break;
            case 'subtracao':
                return $this->calc->subtracao();
                break;
            default:
                throw new Exception('Não é possível executar essa operação');
        }
    }

    private function front(?int $n1, ?int $n2, ?int $resultado = null):void // Void eu estou falando que não vai retornar nada (?int quer dizr inteiro ou nulo)
    {
        include 'front.php';
    }
}

new Main;